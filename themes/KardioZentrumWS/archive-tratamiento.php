<?php
get_header();
getPageBanner([
    'title' => 'Tratamientos y estudios',
]);
?>
<main>
    <!--~~~~~~~~~~~~~~~ POSTS ARCHIVE ~~~~~~~~~~~~~~~-->
    <section class="container py-4 md:py-10 2xl:py-16">
        <div class="w-full">
            <ul
                    class="grid grid-cols-1 gap-6 px-6">
                <?php while (have_posts()): the_post(); ?>
                    <!-- Tratamiento-->
                    <div class="flex flex-col mb-8">
                        <h3 class="text-xl md:text-2xl lg:text-3xl font-medium text-blue-900 mb-2">
                            <a href="<?php the_permalink(); ?>" class="hover:underline"><?php the_title() ?></a>
                        </h3>
                        <p class="text-gray-700 mb-2">
                            <?= wp_trim_words(get_the_content(), 24) ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="pb-2 md:pb-4 inline-block text-blue-dark font-bold
                            hover:text-red-light">Leer
                            más</a>
                        <hr class="text-blue-dark">
                    </div>
                <?php endwhile; ?>
            </ul>
        </div>
        <!-- paginación-->
        <div class="mt-4 text-yellow-dark hover:text-red-light font-semibold text-lg">
            <?= paginate_links() ?>
        </div>
    </section>
</main>


<?php get_footer(); ?>
