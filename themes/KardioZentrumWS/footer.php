<footer class="bg-blue-dark text-white">
    <!-- Contenedor principal con padding adaptativo -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <!-- Primera fila: Logo y descripción, Email, Teléfono -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-6 lg:gap-8 mb-8 lg:mb-12">
            <!-- Logo y descripción -->
            <div class="sm:col-span-2 lg:col-span-6">
                <img src="<?= get_theme_file_uri('src/assets/logo-kardiozentrum.jpg') ?>" alt="KardioZentrum"
                     class="mb-4">
                <p class="text-gray-300 mt-4 max-w-lg text-sm sm:text-base">
                    20 Años Cuidando de Cada Latido.
                </p>
            </div>

            <!-- Email y Teléfono en móvil (una columna) y tablet (dos columnas) -->
            <div class="sm:col-span-1 lg:col-span-3 mt-6 sm:mt-0">
                <div class="flex items-start">
                    <div class="mr-4 text-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg mb-2">Email:</h3>
                        <p class="text-gray-300 text-sm sm:text-base">support@kardiozentrum.net</p>
                    </div>
                </div>
            </div>

            <!-- Teléfono -->
            <div class="sm:col-span-1 lg:col-span-3 mt-6 sm:mt-0">
                <div class="flex items-start">
                    <div class="mr-4 text-lg md:text-2xl text-blue-400">
                        <i class="ri-whatsapp-line"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg mb-2">Whatsapp:</h3>
                        <p class="text-gray-300 text-sm sm:text-base tracking-wider">(+591)  775 99 257</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Segunda fila: Columnas con enlaces y ubicaciones -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-8">
            <!-- Departamentos - en móvil 1 columna, en tablet 2 columnas, en desktop 3 columnas -->
            <div class="sm:col-span-1 lg:col-span-4">
                <h3 class="font-bold text-xl mb-4 sm:mb-6">Páginas de Interés</h3>
                <ul class="grid grid-cols-1 gap-y-4">
                    <li class="flex items-center">
                        <span class="text-white mr-2 text-lg">•</span>
                        <a href="<?= site_url('quienes-somos') ?>" class="text-gray-300 hover:text-white transition-colors text-sm
                        sm:text-base">Quienes
                            Somos</a>
                    </li>
                    <li class="flex items-center">
                        <span class="text-white mr-2 text-lg">•</span>
                        <a href="<?= site_url('nuestro-impacto') ?>" class="text-gray-300 hover:text-white
                        transition-colors
                        text-sm
                        sm:text-base">Nuestro
                            Impacto</a>
                    </li>
                    <li class="flex items-center">
                        <span class="text-white mr-2 text-lg">•</span>
                        <a href="<?= site_url('instalaciones') ?>" class="text-gray-300 hover:text-white
                        transition-colors text-sm
                        sm:text-base">Instalaciones</a>
                    </li>
                    <li class="flex items-center">
                        <span class="text-white mr-2 text-lg">•</span>
                        <a href="<?= site_url('blog') ?>" class="text-gray-300 hover:text-white transition-colors text-sm
                        sm:text-base">Blog</a>
                    </li>
                    <li class="flex items-center">
                        <span class="text-white mr-2 text-lg">•</span>
                        <a href="<?= site_url('contacto') ?>" class="text-gray-300 hover:text-white transition-colors text-sm
                        sm:text-base">Contacto</a>
                    </li>
                </ul>
            </div>

            <!-- Enlaces útiles -->
            <div class="sm:col-span-1 lg:col-span-4 mt-8 sm:mt-0">
                <h3 class="font-bold text-xl mb-4 sm:mb-6">Enlaces Útiles</h3>
                <ul class="grid grid-cols-1 gap-y-4">
                    <li class="flex items-center">
                        <span class="text-white mr-2 text-lg">•</span>
                        <a href="<?= site_url('eventos') ?>" class="text-gray-300 hover:text-white transition-colors
                        text-sm
                        sm:text-base">Nuestros
                            Eventos</a>
                    </li>
                    <li class="flex items-center">
                        <span class="text-white mr-2 text-lg">•</span>
                        <a href="<?= site_url('publicaciones') ?>" class="text-gray-300 hover:text-white
                        transition-colors text-sm
                        sm:text-base">Nuestras Publicaciones</a>
                    </li>
                    <li class="flex items-center">
                        <span class="text-white mr-2 text-lg">•</span>
                        <a href="<?= site_url('#') ?>"
                           class="text-gray-300 hover:text-white transition-colors text-sm sm:text-base">Agendar Una
                            Cita</a>
                    </li>
                    <!--                    <li class="flex items-center">-->
                    <!--                        <span class="text-white mr-2 text-lg">•</span>-->
                    <!--                        <a href="#" class="text-gray-300 hover:text-white transition-colors text-sm sm:text-base">Agendar Cita</a>-->
                    <!--                    </li>-->
                </ul>
            </div>

            <!-- Sucursales - panel de información -->
            <div class="sm:col-span-2 lg:col-span-4 bg-blue-darkest p-4 sm:p-6 rounded mt-8 lg:mt-0">
                <!-- Diseño responsive para la información de sucursales -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-6">

                    <!-- Sucursal Central -->
                    <div>
                        <h3 class="font-bold text-xl mb-3">Dirección:</h3>
                        <p class="text-gray-300 mb-1 text-sm sm:text-base">
                            <a class="hover:text-yellow-light hover:font-bold"
                               href="https://maps.app.goo.gl/fGz1cJoJWJt29Zsw9"
                               target="_blank">
                                Calle 14 de Obrajes N. 669<br>
                                La Paz, Bolivia
                            </a>
                        </p>
                        <p class="text-gray-300 text-sm sm:text-base">Teléfono: 77599257 </p>
                    </div>
                </div>

                <div class="border-t border-slate-100 mt-6 pt-4"></div>
            </div>
        </div>

        <!-- Copyright y redes sociales -->
        <div class="border-t border-slate-100 mt-10 pt-6 grid grid-cols-1 sm:grid-cols-2 items-center">
            <div class="mb-4 sm:mb-0 text-center sm:text-left order-2 sm:order-1">
                <p class="text-gray-400 text-sm">Copyright © 2025 - Diseño, construcción y mantenimiento web por
                    <span class='text-white'> WHATSWEY</span></p>
            </div>

            <div class="flex justify-center sm:justify-end space-x-6 mb-4 sm:mb-0 order-1 sm:order-2">
                <a href="#" class="text-gray-300 hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                    </svg>
                </a>
                <a href="#" class="text-gray-300 hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723 10.054 10.054 0 01-3.127 1.195 4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z"/>
                    </svg>
                </a>
                <a href="#" class="text-gray-300 hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Overlay de búsqueda -->
<?php searchOverlay(); ?>
</body>
</html>
<?php wp_footer(); ?>