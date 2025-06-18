<?php get_header(); ?>
<main>
    <?php while (have_posts()): the_post() ?>
        <!--    POST TOP IMAGE-->
        <section class="bg-white py-2">
            <div class="container mt-12 md:mt-20">
                <!-- se cambiara por una image con formato -->
                <div class="container md:w-2/5 lg:w-1/2">
                    <div class="max-h-[600px] w-full">
                        <img class="object-fit object-center" src="<?php the_post_thumbnail_url('postBanner')
                        ?>" alt="Imagen destacada del post">
                    </div>
                </div>
            </div>
        </section>
        <!--    POST CONTENT-->
        <section class="container pb-4 md:pb-8">
            <div class="w-11/12 md:w-3/4 mx-auto pt-2 md:pt-6">
                <!-- FEATURES POST -->
                <h2 class="text-lg md:text-2xl lg:text-3xl font-semibold"><?= the_title() ?></h2>
                <div class="flex justify-between items-center py-4">
                    <p class="text-sm md:text-base text-red-light">Publicado el <?php the_time('d/m/y') ?> en <span
                                class="font-bold"><?= get_the_category_list(', ') ?></span> por <span
                                class="font-bold"> <?php the_author_posts_link();
                            ?></span</p>
                    <p class="bg-red-light hover:bg-red-dark text-white py-1 px-2 text-sm text-center md:text-left"><a
                                class="font-semibold"
                                href="<?=
                                site_url
                                ('/blog')
                                ?>">Volver a
                            todos</a></p>
                </div>
                <hr class="mb-3 md:mb-6"/>

                <!--POST CONTENT-->
                <div class="prose prose-xl mx-auto text-justify max-w-[92%]">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
</main>


<?php get_footer(); ?>
