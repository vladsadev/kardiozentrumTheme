<nav id="main-nav" class="w-full text-white bg-linear-to-b/decreasing from-blue-dark/10 to-blue-dark/5 relative z-20">
    <div class="container mx-auto px-4 relative flex items-center <?php echo is_front_page() ? 'lg:h-14 bgyellow-light/20' :
        'md:h-20 bg-blue-dark/50' ?> justify-between">
        <!-- Botón del menú móvil -->
        <button class="mobile-menu-toggle bg-red-light lg:hidden text-2xl" aria-expanded="false"
                aria-label="<?php esc_attr_e('Menú', 'Kardiozentrum.net'); ?>">
            <i class="ri-menu-3-fill"></i>
        </button>
        <!-- Contenedor del menú principal -->
        <div class="primary-menu-container w-full">
            <ul class="flex flex-wrap justify-between items-center">
                <li class="<?= (is_front_page()) ? 'text-white bg-red-light font-bold' : '' ?> py-3 px-3 hover:bg-red-light
                transition-colors">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="p-2">INICIO</a>
                </li>
                <!-- PAGES dropdown with mega menu -->
                <li class="py-3 px-3 hover:bg-red-light transition-colors has-mega-menu relative">
                        <span class="font-medium flex items-center">
                            NOSOTROS
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 9l-7 7-7-7"/>
                            </svg>
                        </span>
                    <?php get_template_part('inc/partials/mega-menu'); ?>
                </li>

                <li class="<?= (get_post_type() == 'tratamiento') ? 'border-b-3 border-b-red-light font-bold text-red-lighter ' : ''
                ?>py-3
                px-3 hover:bg-red-light
                transition-colors hover:text-white
                group relative">
                    <a href="<?php echo esc_url(home_url('/tratamientos')); ?>" class="font-medium">TRATAMIENTOS</a>
                </li>
                <!--                   menu-desplegable: actividades-->
                <li class="<?= (get_post_type() == 'evento' || is_page('eventos-pasados')) ? 'border-b-3 border-b-red-light font-bold text-red-lighter ' : ''
                ?>py-3
                px-3 hover:bg-red-light
                transition-colors hover:text-white
                group relative">
                        <span
                                class="font-medium flex items-center">
                            ACTIVIDADES
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 9l-7 7-7-7"/>
                            </svg>
                        </span>
                    <div class="absolute left-0 top-full bg-yellow-light shadow-md hidden group-hover:block min-w-40 z-10">
                        <!--                        <a href="-->
                        <a href="<?php echo esc_url(site_url('eventos/')); ?>"
                           class="block px-4 py-2 text-red-light hover:font-medium
                               hover:bg-red-light/10">Eventos</a>
                        <a href="<?php echo esc_url(site_url('eventos-pasados')); ?>"
                           class="block px-4 py-2 text-red-light hover:font-medium
                               hover:bg-red-light/10">Eventos Pasados</a>
                    </div>
                </li>

                <li class="<?= (get_post_type() == 'post') ? 'border-b-3 border-b-red-light font-bold text-red-lighter' : '' ?>
                hover:text-white py-3
                px-3
                 hover:bg-red-light transition-colors group relative">
                        <span class="font-medium flex items-center">
                            PUBLICACIONES
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 9l-7 7-7-7"/>
                            </svg>
                        </span>
                    <div class="absolute left-0 top-full bg-yellow-light shadow-md hidden group-hover:block min-w-40 z-10">
                        <a href="<?php echo esc_url(home_url('/publicaciones')); ?>"
                           class="block px-4 py-2 text-red-light hover:font-medium
                               hover:bg-red-light/10">Nuestras Publicaciones</a>
                        <a href="<?php echo esc_url(home_url('/blog')); ?>"
                           class="block px-4 py-2 text-red-light hover:font-medium
                               hover:bg-red-light/10">Nuestro Blog</a>
                    </div>
                </li>

                <li class="py-3 px-3 hover:bg-red-light transition-colors">
                    <a href="<?php echo esc_url(home_url('/contacto')); ?>" class="font-medium">CONTACTO</a>
                </li>

                <!-- sign up - login buttons-->
                <li class="flex gap-3 items-center">
                    <div class="flex gap-0 uppercase">
                        <?php if (is_user_logged_in()): ?>
                            <a href="<?php echo wp_logout_url(); ?>" class="bg-yellow-500 py-3 px-4
                            hover:bg-red-light
                        hover:text-white text-blue-dark
                        transition-colors font-medium">Salir</a>
                        <?php else: ?>
                            <a href="<?php echo wp_login_url(); ?>"
                               class="py-3 px-3 bg-red-light/60 hover:bg-red-light text-white transition-colors
                               font-medium">Ingresar</a>
                        <?php endif; ?>
                    </div>

                    <!-- ## SEARCH ICON  ## -->
                    <div id="openSearchBtn"
                         class="py-3  px-2 cursor-pointer bg-red-light/60 hover:bg-red-light text-white
                         transition-colors
                    md:flex
                    flex-col
                    items-center
                        justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <p class="hidden md:block text-xs">Ctrl + k</p>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>