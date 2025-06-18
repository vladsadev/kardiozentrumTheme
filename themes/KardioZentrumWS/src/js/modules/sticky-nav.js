/**
 * Script para la funcionalidad sticky del menú de navegación
 * Guarda este archivo como: /assets/js/sticky-nav.js
 */
// Esperamos a que el DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', function () {
    // Obtener la ruta actual

    // Seleccionar el elemento del menú de navegación
    const nav = document.getElementById('main-nav');
    // const topHeaderMenu = document.getElementById('top-header-menu');

    // Si no existe el elemento, salimos
    if (!nav) return;

    // Obtener la posición inicial del menú
    const navOffset = nav.offsetTop;

    /**
     * Función para manejar el comportamiento sticky
     * Se activa al hacer scroll
     */
    function handleSticky() {
        if (window.pageYOffset >= navOffset) {
            // Si el scroll es mayor que la posición del menú, lo hacemos sticky
            nav.classList.add('sticky-nav');

            // Añadimos padding al cuerpo del documento para evitar saltos
            // document.body.style.paddingTop = nav.offsetHeight + 'px';
        } else {
            // Si no, restauramos el comportamiento normal
            nav.classList.remove('sticky-nav');
            // document.body.style.paddingTop = '0';
        }
    }

    // Adjuntar el evento de scroll a la ventana
    window.addEventListener('scroll', handleSticky);

    // También manejamos el comportamiento en dispositivos móviles

    /**
     * Manejador para el botón de menú móvil (toggle)
     */
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', function () {
            document.querySelector('.primary-menu-container').classList.toggle('active');

            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', isExpanded ? 'false' : 'true');
        });
    }

    /**
     * Controlador para abrir/cerrar submenús en móvil
     */
    const menuItemsWithChildren = document.querySelectorAll('.menu-item-has-children > a');
    menuItemsWithChildren.forEach(function (menuItem) {
        menuItem.addEventListener('click', function (e) {
            // Solo interceptamos el clic en dispositivos móviles
            if (window.innerWidth < 390) {
                e.preventDefault();
                const parent = this.parentNode;
                parent.classList.toggle('submenu-open');

                const subMenus = parent.querySelectorAll('.sub-menu, .mega-menu');
                subMenus.forEach(function (subMenu) {
                    // Emulando slideToggle de jQuery
                    if (subMenu.style.display === 'none' || !subMenu.style.display) {
                        subMenu.style.display = 'block';

                        // Animación simple para emular slideToggle
                        let height = 0;
                        const targetHeight = subMenu.scrollHeight;
                        const duration = 200;
                        const startTime = performance.now();

                        function animate(currentTime) {
                            const elapsedTime = currentTime - startTime;
                            const progress = Math.min(elapsedTime / duration, 1);

                            height = progress * targetHeight;
                            subMenu.style.height = height + 'px';
                            subMenu.style.overflow = 'hidden';

                            if (progress < 1) {
                                requestAnimationFrame(animate);
                            } else {
                                subMenu.style.height = '';
                                subMenu.style.overflow = '';
                            }
                        }

                        requestAnimationFrame(animate);
                    } else {
                        // Guardar altura actual para la animación
                        const startHeight = subMenu.scrollHeight;
                        subMenu.style.height = startHeight + 'px';
                        subMenu.style.overflow = 'hidden';

                        const startTime = performance.now();
                        const duration = 200;

                        function animate(currentTime) {
                            const elapsedTime = currentTime - startTime;
                            const progress = Math.min(elapsedTime / duration, 1);

                            const height = startHeight - (progress * startHeight);
                            subMenu.style.height = height + 'px';

                            if (progress < 1) {
                                requestAnimationFrame(animate);
                            } else {
                                subMenu.style.display = 'none';
                                subMenu.style.height = '';
                                subMenu.style.overflow = '';
                            }
                        }

                        requestAnimationFrame(animate);
                    }
                });
            }
        });
    });

    /**
     * Ajustes responsivos para el menú
     */
    function handleResponsiveMenu() {
        const subMenus = document.querySelectorAll('.sub-menu, .mega-menu');

        if (window.innerWidth < 390) {
            // En móvil, ocultamos inicialmente los submenús
            subMenus.forEach(function (menu) {
                menu.style.display = 'none';
            });

            // Excepto los que deben estar abiertos
            const openSubmenus = document.querySelectorAll('.submenu-open > .sub-menu, .submenu-open > .mega-menu');
            openSubmenus.forEach(function (menu) {
                menu.style.display = 'block';
            });
        } else {
            // En escritorio, eliminamos los estilos inline
            subMenus.forEach(function (menu) {
                menu.removeAttribute('style');
            });
        }
    }

    // Ejecutar la función al cargar y al cambiar tamaño
    handleResponsiveMenu();
    window.addEventListener('resize', handleResponsiveMenu);

});