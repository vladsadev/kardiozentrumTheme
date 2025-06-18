class SearchOverlay {
    constructor() {
        // Elementos del DOM
        this.overlay = document.getElementById('searchOverlay');
        this.openBtn = document.getElementById('openSearchBtn');
        this.closeBtn = document.getElementById('closeSearchBtn');
        this.searchForm = document.getElementById('searchForm');
        this.searchInput = document.getElementById('searchInput');
        this.resultsDiv = document.getElementById('search-overlay__results');
        this.typingTimer;
        this.isSpinnerVisible = false;
        this.previousValue = '';
        this.currentController = null; // Para cancelar peticiones anteriores
        this.minSearchLength = 2; // Longitud mínima para buscar

        // Bindear métodos para mantener el contexto correcto
        this.open = this.open.bind(this);
        this.close = this.close.bind(this);
        this.handleKeyPress = this.handleKeyPress.bind(this);
        this.handleFormSubmit = this.handleFormSubmit.bind(this);
        this.handleOutsideClick = this.handleOutsideClick.bind(this);
        this.searchInputLogic = this.searchInputLogic.bind(this);
        this.getResults = this.getResults.bind(this);

        // Inicializar event listeners
        this.initEvents();
    }

    // Inicializar todos los event listeners
    initEvents() {
        // Eventos para abrir/cerrar overlay
        this.openBtn.addEventListener('click', this.open);
        this.closeBtn.addEventListener('click', this.close);

        // Evento para teclas (ESC y Ctrl+K/Cmd+K)
        document.addEventListener('keydown', this.handleKeyPress);

        // Evento para envío del formulario
        this.searchForm.addEventListener('submit', this.handleFormSubmit);

        // Evento para cerrar al hacer clic fuera del formulario
        this.overlay.addEventListener('click', this.handleOutsideClick);

        this.searchInput.addEventListener('input', this.searchInputLogic);
    }

    // Métodos para abrir y cerrar el overlay
    open() {
        this.overlay.classList.add('active');
        this.searchInput.value = '';
        this.resultsDiv.innerHTML = ''; // Limpiar resultados anteriores
        setTimeout(() => this.searchInput.focus(), 100);
        document.body.classList.add('body-no-scroll');
    }

    close() {
        this.overlay.classList.remove('active');
        document.body.classList.remove('body-no-scroll');
        this.cancelCurrentRequest(); // Cancelar petición en curso
        this.resultsDiv.innerHTML = ''; // Limpiar resultados
    }

    // Método para manejar las teclas
    handleKeyPress(e) {
        // Cerrar con ESC
        if (e.key === 'Escape' && this.overlay.classList.contains('active')) {
            this.close();
        }

        // Abrir con Ctrl+K o Cmd+K
        if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
            e.preventDefault();
            this.open();
        }
    }

    // Método para manejar envío del formulario
    handleFormSubmit(e) {
        e.preventDefault();
        const query = this.searchInput.value.trim();

        console.log('enviado');
        if (query && query.length >= this.minSearchLength) {
            // En producción, descomentar la siguiente línea:
            // window.location.href = `/busqueda?q=${encodeURIComponent(query)}`;

            // Solo para demo:
            console.log(`Búsqueda de: ${query}`);
        }
    }

    // Método para cerrar al hacer clic fuera del formulario
    handleOutsideClick(e) {
        if (e.target === this.overlay && !this.searchForm.contains(e.target)) {
            this.close();
        }
    }

    // Cancelar petición HTTP anterior
    cancelCurrentRequest() {
        if (this.currentController) {
            this.currentController.abort();
            this.currentController = null;
        }
    }

    // Método para recibir los datos para la búsqueda
    searchInputLogic(e) {
        const inputValue = this.searchInput.value.trim();

        // Cancelar timer anterior
        clearTimeout(this.typingTimer);

        // Limpiar resultados si el input está vacío
        if (inputValue.length === 0) {
            this.resultsDiv.innerHTML = '';
            this.isSpinnerVisible = false;
            this.cancelCurrentRequest();
            return;
        }

        // Solo buscar si tiene al menos la longitud mínima
        if (inputValue.length >= this.minSearchLength) {
            // Cancelar petición anterior si existe
            this.cancelCurrentRequest();

            // Mostrar spinner solo si no está visible y el valor cambió
            if (!this.isSpinnerVisible && inputValue !== this.previousValue) {
                this.resultsDiv.innerHTML = `<div class="spinner-loader"></div>`;
                this.isSpinnerVisible = true;
            }

            // Programar nueva búsqueda
            this.typingTimer = setTimeout(() => this.getResults(inputValue), 500);
        } else {
            // Si es muy corto, mostrar mensaje
            this.resultsDiv.innerHTML = `
                <div class="text-center py-4">
                    <p class="text-gray-500">Escribe al menos ${this.minSearchLength} caracteres para buscar</p>
                </div>
            `;
            this.isSpinnerVisible = false;
        }

        this.previousValue = inputValue;
    }

    // Validar que kzData esté disponible
    validateKzData() {
        if (typeof kzData === 'undefined' || !kzData.root_url) {
            throw new Error('kzData.root_url no está definido');
        }
    }

    // Método que muestra los resultados - ACTUALIZADO para usar la nueva API
    async getResults(searchValue = null) {
        try {
            // Usar el valor pasado o el actual del input
            const currentSearchValue = searchValue || this.searchInput.value.trim();

            // Validar longitud mínima
            if (currentSearchValue.length < this.minSearchLength) {
                return;
            }

            // Validar configuración
            this.validateKzData();

            // Crear nuevo AbortController para esta petición
            this.currentController = new AbortController();
            const { signal } = this.currentController;

            const encodedSearchValue = encodeURIComponent(currentSearchValue);
            console.log('Buscando:', encodedSearchValue);

            // URL para la nueva API personalizada
            const apiUrl = `${kzData.root_url}/wp-json/kz/v1/search?term=${encodedSearchValue}`;

            console.log('URL de búsqueda:', apiUrl);

            // Configuración de fetch con timeout
            const fetchConfig = {
                signal,
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            };

            // Realizar la petición a la nueva API
            const response = await fetch(apiUrl, fetchConfig);

            // Verificar si la respuesta es exitosa
            if (!response.ok) {
                throw new Error(`Error en la búsqueda: ${response.status} - ${response.statusText}`);
            }

            // Obtener los datos JSON
            const data = await response.json();

            // Verificar que la petición no fue cancelada
            if (signal.aborted) {
                return;
            }

            this.isSpinnerVisible = false;
            this.currentController = null;

            console.log('Datos recibidos:', data);

            // Procesar y mostrar resultados
            this.processResults(data);

        } catch (error) {
            console.error('Error al realizar la búsqueda:', error);

            // No mostrar error si fue cancelada la petición
            if (error.name === 'AbortError') {
                return;
            }

            this.isSpinnerVisible = false;
            this.currentController = null;
            this.renderError(error);
        }
    }

    // Procesar resultados de la nueva API
    processResults(data) {
        // Contar total de resultados
        const totalResults = (data.generalInfo?.length || 0) +
            (data.doctor?.length || 0) +
            (data.evento?.length || 0) +
            (data.tratamiento?.length || 0);

        if (totalResults > 0) {
            this.renderCategorizedResults(data, totalResults);
        } else {
            this.renderNoResults();
        }
    }

    // Renderizar resultados categorizados
    renderCategorizedResults(data, totalResults) {
        let resultsHTML = `
            <div class="search-results">
                <h2 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    Resultados Encontrados (${totalResults})
                </h2>
        `;

        // Información General (páginas y posts)
        if (data.generalInfo && data.generalInfo.length > 0) {
            resultsHTML += this.renderCategorySection(
                'Información General',
                data.generalInfo,
                'blue',
                `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6-4h6m2 5.291A7.962 7.962 0 0112 15c-2.34 0-4.29.82-5.17 2.09C8.83 17.09 10.78 18 12 18s3.17-.91 4.17-2.09"></path>`
            );
        }

        // Doctores
        if (data.doctor && data.doctor.length > 0) {
            resultsHTML += this.renderCategorySection(
                'Doctores',
                data.doctor,
                'green',
                `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>`
            );
        }

        // Eventos
        if (data.evento && data.evento.length > 0) {
            resultsHTML += this.renderCategorySection(
                'Eventos',
                data.evento,
                'purple',
                `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>`
            );
        }

        // Tratamientos
        if (data.tratamiento && data.tratamiento.length > 0) {
            resultsHTML += this.renderCategorySection(
                'Tratamientos',
                data.tratamiento,
                'red',
                `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>`
            );
        }

        resultsHTML += `</div>`;
        this.resultsDiv.innerHTML = resultsHTML;
    }

    // Renderizar sección de categoría
    renderCategorySection(title, items, color, iconPath) {
        return `
            <div class="mb-6">
                <h3 class="text-lg font-medium text-gray-700 mb-3 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-${color}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        ${iconPath}
                    </svg>
                    ${title} (${items.length})
                </h3>
                <ul class="space-y-2 ml-4">
                    ${items.map(item => `
                        <li class="flex items-start">
                            <span class="inline-block w-2 h-2 bg-${color}-500 rounded-full mt-2 mr-3 flex-shrink-0"></span>
                            <a href="${item.permalink || '#'}" class="text-blue-600 hover:text-blue-800 hover:underline transition-colors duration-200 leading-relaxed">
                                ${item.title || 'Sin título'}
                            </a>
                        </li>
                    `).join('')}
                </ul>
            </div>
        `;
    }

    // Renderizar cuando no hay resultados
    renderNoResults() {
        this.resultsDiv.innerHTML = `
            <div class="text-center py-8">
                <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <p class="text-gray-500 text-lg">No se encontraron resultados</p>
                <p class="text-gray-400 text-sm mt-2">No hay contenido que coincida con tu búsqueda</p>
            </div>
        `;
    }

    // Renderizar errores
    renderError(error) {
        this.resultsDiv.innerHTML = `
            <div class="text-center py-8">
                <svg class="mx-auto h-12 w-12 text-red-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <p class="text-red-500 text-lg">Error al buscar</p>
                <p class="text-gray-400 text-sm mt-2">${error.message}</p>
                <button onclick="location.reload()" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors">
                    Reintentar
                </button>
            </div>
        `;
    }
}

export default SearchOverlay;