<?php
get_header();
getPageBanner([
    'title' => 'Nuestro blog',
    'leyenda' => 'Reseñas y consejos de nuestros especialistas para mantener tu corazón saludable por más tiempo.',
]);
?>


<main>
    <!--~~~~~~~~~~~~~~~ POSTS ARCHIVE ~~~~~~~~~~~~~~~-->
    <section id="publicaciones" class="container">
        <div class="relative mb-8 mt-8 md:mb-16 md:mt-12">
            <!-- CABECERA -->
            <div
                    class="relative flex flex-col items-center justify-between py-6 lg:flex-row"
            >
                <h2 class="text-3xl font-bold">Últimas entradas en nuestro blog</h2>
                <p
                        class="absolute -top-2 mx-auto ml-0 mr-0 max-w-max bg-yellow-dark px-1 text-center
                        font-semibold
                        uppercase text-white lg:left-0"
                >
                    Blog
                </p>
            </div>
            <div class="">
                <ul
                        class="grid grid-cols-1 gap-8 px-6 sm:grid-cols-2 md:grid-cols-2 md:px-0 lg:grid-cols-3 xl:gap-4 2xl:grid-cols-4
                        xl:gap-y-6 2xl:gap-y-8">
                    <?php while (have_posts()):
                        the_post(); ?>
                        <!-- SINGLE POST -->
                        <li
                                class="mb-2 bg-white flex max-h-[405px] min-h-48 flex-col gap-1 overflow-hidden
                                shadow-lg
                                shadow-slate-200/95 brightness-95 hover:brightness-100 transition-all duration-300"
                        >
                            <div class="h-1/2 overflow-hidden relative">
                                <a href="<?= get_the_permalink() ?>">
                                    <img
                                            class="h-full w-full object-cover object-center"
                                            src="<?= get_the_post_thumbnail() ?>"
                                            alt="Imagen del post"
                                    />
                                </a>
                                <p class="bg-red-light p-1 px-2 text-xs md:text-[13px] absolute bottom-0 right-0 text-white">
                                    <span class="font-bold hover:text-yellow-medium">
                                        <?php echo get_the_category_list(', ') ?></span>
                                </p>
                                <p class="bg-yellow-dark absolute top-0 right-0 text-white px-1">
                                    <?php the_time('d/m/Y') ?>
                                </p>
                            </div>
                            <!--Cuerpo-->
                            <div class="flex h-1/2 px-2 flex-col items-start">
                                <a class="pt-2" href="<?= get_the_permalink() ?>">
                                    <h3 class="text-lg lg:text-xl hover:text-red-light font-semibold 2x:text-2xl">
                                        <?= the_title() ?>
                                    </h3>
                                </a>
                                <p
                                        class="h-24 text-ellipsis grow overflow-hidden pb-3 pt-1 text-justify text-sm
                                        box-border"
                                >
                                    <?= (has_excerpt()) ? get_the_excerpt() : wp_trim_words(get_the_content(), 18) ?>
                                </p>
                                <a class="my-2 text-red-dark hover:text-red-light font-bold" href="<?= get_the_permalink
                                () ?>">Leer Más </a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="mt-6 text-yellow-dark hover:text-red-light font-semibold text-lg">
                <?= paginate_links() ?>
            </div>
        </div>
        <!-- paginacion-->

    </section>
</main>


<?php get_footer(); ?>
