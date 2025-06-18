<?php
function searchOverlay()
{ ?>
    <div id="searchOverlay"
         class="search-overlay fixed inset-0 bg-base-blue/50 bg-opacity-10 backdrop-blur-sm z-50 flex items-center
     justify-center p-4">
        <div class="w-full max-w-2xl bg-white rounded-xl shadow-2xl">
            <!-- Encabezado del overlay -->
            <div class="p-4 border-b border-gray-200 flex justify-between items-center">
                <h2 class="text-xl font-semibold text-gray-800">Buscar en Kardiozentrum</h2>
                <button id="closeSearchBtn" class="text-gray-500 hover:text-gray-70 cursor-pointer p-2
                focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Formulario de búsqueda -->
            <form id="searchForm" class="p-4">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <input
                            id="searchInput"
                            type="text"
                            class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none
                            focus:ring-2 focus:ring-red-light focus:border-transparent"
                            placeholder="Buscar servicios médicos, doctores, artículos..."
                            autocomplete="off"
                    >
                </div>
            </form>

            <!-- Pie del overlay -->
            <div class="p-4 border-t border-gray-200 bg-gray-200 rounded-b-xl">
                <div class="flex justify-between items-center text-sm text-gray-500">
                    <span>Pulsa ESC para cerrar</span>
                    <span>Pulsa ENTER para buscar</span>
                </div>
            </div>

            <!-- Resultados de la búsqueda-->
            <div id="search-overlay__results" class="container py-5 px-2">
            </div>

        </div>
    </div>

<?php }

; ?>