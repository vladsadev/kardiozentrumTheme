<?php
function heroSlider(): void
{
    ?>
    <section class="slider fixed z-0 font-sans w-full  h-[100vh]">
        <!-- Slides -->
        <?php $frontPageSlider = new WP_Query([
            'posts_per_page' => -1,
            'post_type' => 'slider-hp',
        ]);

        while ($frontPageSlider->have_posts()) : $frontPageSlider->the_post();
            $sliderImageURL = get_field('slider-image');
//            var_dump($sliderImageURL['url']);
            $sliderImage = $sliderImageURL['sizes']['homePageSlider'] ?? get_theme_file_uri('/src/assets/entrada.jpg');
            ?>
            <!-- SLIDERS IMAGES -->
            <div class="slide active"
                 style="background-image: url(<?= $sliderImage ?>);">
                <div class="overlay"></div>
            </div>
        <?php endwhile; ?>

        <!-- Contenido superpuesto -->
        <div class="absolute inset-0 z-50 flex items-center">
            <div class="container text-center md:text-left mx-auto px-4">
                <div class="max-w-2xl px-2 lg:px-6 text-white mt-20 md:mt-24 lg:mt-28 text-shadow-xl">
                    <h2 class="text-5xl xl:text-6xl font-bold mb-4">20 Años Cuidando de Cada Latido</h2>
                    <p class="text-xl lg:text-2xl mb-8">Desde hace más de 20 años, nos dedicamos con pasión a cuidar la
                        salud de
                        tu corazón.
                        En Kardiozentrum, combinamos experiencia, tecnología y calidez humana para acompañarte en cada
                        paso.</p>
                    <a href="#"
                       class="inline-block bg-red-light text-stale-100 font-semibold py-3 px-8 rounded-full
                       hover:bg-red-dark hover:text-slate-100
                        transition">
                        AGENDAR CITA?
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php
}

?>