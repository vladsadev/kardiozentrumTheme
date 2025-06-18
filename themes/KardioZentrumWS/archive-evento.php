<?php
get_header();
getPageBanner([
    'title' => 'Nuestros Eventos',
]);
?>
<main>
    <!--~~~~~~~~~~~~~~~ POSTS ARCHIVE ~~~~~~~~~~~~~~~-->
    <section class="container">
        <div class="relative mb-8 mt-8 md:mb-16 md:mt-12">
            <!-- CABECERA -->
            <div
                    class="relative flex flex-col items-center justify-between py-6 lg:flex-row"
            >
                <h2 class="text-3xl font-bold">Reuniones, capacitaciones y convocatorias</h2>
                <p
                        class="absolute -top-2 mx-auto ml-0 mr-0 max-w-max bg-yellow-dark px-1 text-center
                        font-semibold
                        uppercase text-white lg:left-0"
                >
                    Próximos Eventos
                </p>
            </div>
            <div class="">
                <ul
                        class="grid grid-cols-1 gap-8 px-6">
                    <?php while (have_posts()):
                        the_post(); ?>
                        <!-- Evento -->
                        <div class="flex mb-8">
                            <div class="flex-shrink-0 mr-6">
                                <div class="w-20 h-20 rounded-full bg-blue-dark text-white flex flex-col items-center justify-center">
                                        <span class="text-sm font-semibold uppercase">
                                            <?php
                                            $eventDate = new DateTime(get_field('fecha_del_evento'));;
                                            $month = $eventDate->format('M');
                                            echo $month == 'Jan' ? $month = 'Ene' : $month;
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
                                    <a href="<?php the_permalink(); ?>" class="hover:underline"><?php the_title() ?></a>
                                </h3>
                                <p class="text-gray-700 mb-2">
                                    <?= (has_excerpt()) ? wp_trim_words(get_the_excerpt(), 16) : wp_trim_words(get_the_content(), 12) ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="text-gray-500 font-semibold hover:text-blue-900">Leer más</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </ul>
            </div>
            <!-- paginación-->
            <div class="mt-6 text-yellow-dark hover:text-red-light font-semibold text-lg">
                <?= paginate_links() ?>
            </div>
        </div>
    </section>


    <!--    Enlace a eventos pasados-->
    <div class="container pb-4 md:pb-14">
        <hr class="pb-4">
        <p class="md:text-lg lg:text-xl">Buscas revisar alguno de nuestros eventos pasados, encuéntralos <a class="font-bold text-red-light"
                                                                                                            href="<?= site_url('eventos-pasados')
                                                                                                            ?>">aquí</a></p>


    </div>
</main>


<?php get_footer(); ?>
