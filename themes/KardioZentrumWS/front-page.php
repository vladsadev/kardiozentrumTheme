<?php get_header() ?>
    <main class="">
        <!-- Sección Hero con Slider -->
        <?php heroSlider(); ?>

        <!-- Bloques de información - Horarios, Doctores, Citas -->
        <section class="bg-yellow-light bg-fixed pt-24 md:pt-28 relative">
            <div class="container mx-auto px-4">
                <!-- Bloques de información - Horarios, Doctores, Citas, Emergencias -->
                <div class="max-w-6xl xl:max-w-7xl lg:h-74 mx-auto">
                    <div class="grid grid-cols-1 h-full sm:grid-cols-2 lg:grid-cols-4 gap-1 -mt-[14%] xl:-mt-[18%] 3xl:-mt-[22%]">
                        <!-- Horario de atención -->
                        <div class="bg-blue-dark text-white shadow-lg">
                            <div class="p-6 py-8">
                                <div class="flex items-center mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <h3 class="text-lg font-bold uppercase">Horario de atención</h3>
                                </div>
                                <div class="space-y-2 mt-4">
                                    <div class="flex flex-col items-start">
                                        <p class="font-semibold">Lunes - viernes</p>
                                        <span>9:00am - 12:00pm</span>
                                        <span>14:00pm - 17:00pm</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="font-semibold">sábado</span>
                                        <span>9:00am - 12:00pm</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Horario de doctores -->
                        <div class="bg-blue-dark text-white border-l border-white/20 shadow-lg">
                            <div class="p-6 py-8 h-full flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                        <h3 class="text-lg font-bold uppercase">Horario médicos</h3>
                                    </div>
                                    <p class="text-sm mt-4">
                                        Esta guía le ayudará a conocer los horarios habituales de su médico de
                                        preferencia.
                                        La disponibilidad puede variar, pero nos contactaremos con usted.
                                    </p>
                                </div>
                                <a href="doctores"
                                   class="mt-4 inline-block bg-white text-red-light font-bold py-2 px-4 rounded
                                   uppercase text-sm hover:bg-gray-100 w-full text-center">
                                    Ver médicos disponibles
                                </a>
                            </div>
                        </div>

                        <!-- Citas -->
                        <div class="bg-blue-dark text-white border-l border-white/20 shadow-lg">
                            <div class="p-6 py-8 h-full flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                        <h3 class="text-lg font-bold uppercase animate-heartbeat">Citas</h3>
                                    </div>
                                    <p class="text-sm mt-4">
                                        Agende su cita médica de forma rápida y sencilla. Puede hacerlo en línea,
                                        llamándonos de manera directa o con un mensaje al WhatsApp de
                                        contacto.
                                    </p>
                                </div>
                                <a href="#"
                                   class="mt-4 inline-block bg-white text-red-light font-bold py-2 px-4 rounded
                                   uppercase text-sm hover:bg-gray-100 w-full text-center">
                                    Hacer una cita
                                </a>
                            </div>
                        </div>

                        <!-- Casos de emergencia -->
                        <div class="bg-blue-dark text-white border-l border-white/20 shadow-lg">
                            <div class="p-6 py-8 h-full flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/>
                                        </svg>
                                        <h3 class="text-lg font-bold uppercase">Casos de emergencia</h3>
                                    </div>
                                    <p class="text-xl font-bold mt-4 mb-2">(591) 752 04 140 </p>
                                    <p class="text-sm">¡Llámenos!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Eventos y Blogs -->
        <section class="pt-16 pb-8 px-2 bg-yellow-light bg-fixed">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                    <!-- Columna de Eventos Próximos -->
                    <div class="bg-slate-50 p-4 md:p-8 rounded-lg">
                        <h2 class="text-3xl font-semibold text-center text-gray-800 mb-8">Próximos Eventos</h2>
                        <?php
                        $today = date('Y-m-d', strtotime('-1 day'));
                        $eventos = new WP_Query([
                            'post_type' => 'evento',
                            'posts_per_page' => 2,
                            'meta_key' => 'fecha_del_evento',
                            'orderby' => 'meta_value',
                            'order' => 'ASC',
                            'meta_query' => [
                                'key' => 'fecha_del_evento',
                                'compare' => '>=',
                                'value' => $today,
                            ]
                        ]);
                        while ($eventos->have_posts()) : $eventos->the_post(); ?>
                            <!-- Evento -->
                            <div class="flex mb-8">
                                <div class="flex-shrink-0 mr-6">
                                    <div class="w-20 h-20 rounded-full bg-blue-dark text-white flex flex-col items-center justify-center">
                                        <span class="text-sm font-semibold uppercase">
                                            <?php
                                            try {
                                                $eventDate = new DateTime(get_field('fecha_del_evento'));
                                                $month = $eventDate->format('M');
                                                echo $month == 'Jan' ? $month = 'Ene' : $month;
                                            } catch (Exception $e) {

                                            };
                                            ?>
                                        </span>
                                        <span class="text-2xl font-bold"><?php
                                            $eventDate = new DateTime(get_field('fecha_del_evento'));;
                                            $day = $eventDate->format('d');
                                            echo $day;

                                            ?></span>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-xl font-medium text-blue-900 mb-2">
                                        <a href="<?php the_permalink(); ?>"
                                           class="hover:underline"><?php the_title() ?></a>
                                    </h3>
                                    <p class="text-gray-700 mb-2">
                                        <?= (has_excerpt()) ? wp_trim_words(get_the_excerpt(), 16) : wp_trim_words(get_the_content(), 12) ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>"
                                       class="text-gray-500 font-semibold hover:text-blue-900">Leer más</a>
                                </div>
                            </div>
                        <?php endwhile; ?>

                        <!-- Botón Ver todos los eventos -->
                        <div class="text-center mt-8">
                            <a href="<?= get_post_type_archive_link('evento'); ?>"
                               class="inline-block px-6 py-3 bg-blue-dark text-white font-medium rounded hover:bg-blue-darkest
                               transition-colors">
                                Ver Todos los Eventos
                            </a>
                        </div>
                    </div>

                    <!-- Columna de Blogs -->
                    <div class="bg-slate-50 p-4 md:p-8 rounded-lg">
                        <h2 class="text-3xl font-semibold text-gray-800 text-center mb-8">Lo último en nuestro Blog</h2>
                        <?php
                        $blogPosts = new WP_Query([
                            'post_type' => 'post',
                            'posts_per_page' => 2,
                        ]);

                        while ($blogPosts->have_posts()) : $blogPosts->the_post(); ?>
                            <!-- Post  -->
                            <div class="flex mb-8">
                                <div class="flex-shrink-0 mr-6">
                                    <div class="w-20 h-20 rounded-full bg-red-light text-white flex flex-col items-center justify-center">
                                        <span class="text-sm font-semibold uppercase"><?php the_time('M'); ?></span>
                                        <span class="text-2xl font-bold"><?php the_time('d'); ?></span>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-xl font-medium text-blue-900 mb-2">
                                        <a href="<?php the_permalink() ?>"
                                           class="hover:underline"><?= the_title() ?></a>
                                    </h3>
                                    <p>
                                        <?= (has_excerpt()) ? wp_trim_words(get_the_excerpt(), 16) : wp_trim_words(get_the_content(), 12); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>" class="text-gray-500 font-semibold hover:text-red-light
                                    hover:font-semibold pt-1 inline-block">Leer
                                        más</a>
                                </div>
                            </div>

                        <?php endwhile; ?>
                        <!-- Botón Ver todos los blogs -->
                        <div class="text-center mt-8">
                            <a href="<?= site_url('blog'); ?>"
                               class="inline-block px-6 py-3 bg-red-light text-white font-medium rounded hover:bg-red-dark
                               transition-colors">
                                Ver Todo el blog
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Sección de Doctores -->
        <?php get_template_part('inc/partials/doctores-scroller-template') ?>


        <!--        Sectión de Testimonios-->
        <section class="">
            <div class="w-full">
                <div class="flex flex-col lg:flex-row">
                    <!-- Sección izquierda - Textos -->
                    <div class="w-full lg:w-2/5 bg-yellow-light bg-fixed text-blue-dark p-8 lg:text-left text-center
                    lg:p-16
                    flex
                    flex-col justify-center lg:min-h-[500px]">
                        <div class="quote-mark font-serif text-blue-dark">&ldquo;&rdquo;</div>
                        <h3 class="uppercase text-lg font-medium tracking-wide mb-4">Testimonios</h3>
                        <h2 class="text-4xl font-bold mb-8">Lo que dicen nuestros pacientes<span></span></h2>
                    </div>
                    <!-- Sección derecha - Carrusel de testimonios -->
                    <div class="w-full lg:w-3/5 bg-blue-darkest p-3 sm:p-6 md:p-8 2xl:p-16 3xl:p-18 flex">
                        <!-- SLIDER DINÁMICO-->
                        <?php get_template_part('inc/partials/testimonios'); ?>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php get_footer() ?>