<?php
get_header();
getPageBanner([
        'title' => 'Tratamientos y estudios',
        'leyenda' => ''
    ]
);
?>
    <main>
        <!--Tratamiento -->
        <section class="container pb-4 md:pb-8 mx-auto">
            <div class="w-11/12 md:w-10/12 xl:w-3/4 mx-auto pt-2 md:pt-6">
                <!-- Cabecera-->
                <div class="flex justify-between items-center py-4">
                    <h2><?= get_the_title() ?></h2>
                    <p class="bg-red-light hover:bg-red-dark text-white py-2 px-3 text-sm text-center">
                        <a class="font-semibold" href="<?= site_url('/tratamientos') ?>">Volver a todos los
                            tratamientos</a>
                    </p>
                </div>
                <hr class="mb-3 md:mb-6"/>
                <!--POST CONTENT-->
                <div class="prose prose-xl mx-auto text-justify max-w-[100%]">
                    <?php the_content(); ?>
                </div>
            </div>

            <!--  Doctores Relacionados-->
            <div>
                <?php
                $doctoresRelacionados = new WP_Query([
                    'post_type' => 'doctor',
                    'posts_per_page' => -1,
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'meta_query' => [
                        [
                            'key' => 'tratamientos_relacionados',
                            'compare' => 'LIKE',
                            'value' => '"' . get_the_ID() . '"'
                        ]
                    ]
                ]);
                ?>
                <?php if ($doctoresRelacionados->have_posts()) : ?>
                    <div class="m-4 md:mt-8 md:mb-6 lg:mt-8 w-11/12 md:w-10/12 xl:w-3/4 mx-auto border-t pt-2 md:pt-4">
                        <h3 class="pb-4">Doctor(s) del tratamiento</h3>
                        <ul class="flex gap-6 md:gap-8 lg:gap-10 flex-wrap justify-evenly lg:justify-start">
                            <?php while ($doctoresRelacionados->have_posts()) : $doctoresRelacionados->the_post(); ?>
                                <!-- doctores -->
                                <li class="space-y-2">
                                    <div class="size-20 rounded-full mx-auto overflow-hidden border-4 border-white
                                    shadow-md">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?= get_the_post_thumbnail_url('', 'doctorProfile') ?>" alt="Foto
                                            del Doctor"
                                                 class="w-full h-full object-cover">
                                        </a>
                                    </div>
                                    <a href="<?php the_permalink() ?>" class="hover:underline hover:text-blue-darkest2">
                                        <?php the_title() ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                <?php endif;
                wp_reset_query();
                ?>
            </div>

            <!--    Eventos Relacionados        -->
            <div>

                <?php
                $today = date('Y-m-d', strtotime('-1 day'));
                $eventos = new WP_Query([
                    'post_type' => 'evento',
                    'posts_per_page' => -1,
                    'meta_key' => 'fecha_del_evento',
                    'orderby' => 'meta_value',
                    'order' => 'ASC',
                    'meta_query' => [
                        [
                            'key' => 'fecha_del_evento',
                            'compare' => '>=',
                            'value' => $today,
                        ], [
                            'key' => 'tratamientos_relacionados',
                            'compare' => 'LIKE',
                            'value' => '"' . get_the_ID() . '"'
                        ]
                    ]
                ]);
                ?>
                <?php if ($eventos->have_posts()) : ?>
                    <div class="m-4 md:mt-8 md:mb-6 lg:mt-8 w-11/12 md:w-10/12 xl:w-3/4 mx-auto border-t pt-2 md:pt-4">
                        <h3 class="pb-4">Eventos relacionados</h3>
                        <?php while ($eventos->have_posts()) : $eventos->the_post(); ?>
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
                                <div class="">
                                    <h4 class="text-xl font-medium text-blue-900 mb-2">
                                        <a href="<?php the_permalink(); ?>"
                                           class="hover:underline"><?php the_title() ?></a>
                                    </h4>
                                    <p class="text-gray-700 mb-2">
                                        <?= (has_excerpt()) ? wp_trim_words(get_the_excerpt(), 16) : wp_trim_words(get_the_content(), 12) ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>"
                                       class="text-gray-500 font-semibold hover:text-blue-900">Leer más</a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif;
                wp_reset_postdata();
                ?>
            </div>
        </section>
    </main>


<?php get_footer(); ?>