<?php get_header();
getPageBanner();
?>
<main>
    <?php while (have_posts()):
        the_post(); ?>
        <!--~~~~~~~~~~~~~~~ VISITANOS ~~~~~~~~~~~~~~~-->
        <section id="#" class="h-96 container flex h-full flex-col items-center justify-center gap-5
        md:flex-row-reverse md:py-6 lg:py-12">
            <div
                    class="flex flex-col items-start gap-2 overflow-hidden text-blue-dark md:w-1/2"
            >
                <p
                        class="bg-red-light px-1 text-sm font-bold uppercase text-slate-100"
                >
                    nuestra dirección
                </p>
                <h2 class="text-3xl font-bold">Visítanos</h2>
                <p class="text-sm">
                    Lorem ipsum dolor Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Soluta, accusantium provident? Necessitatibus
                    ipsum impedit! sit ok pax amet consectetur adipisicing.
                </p>
                <p class="text-lg font-semibold">
                    Más Infromación<span class="text-primary_yellow">:(591) </span>
                </p>
            </div>
            <!-- imagen -->
            <div
                    class="max-h-86 w-full overflow-hidden md:w-1/2"
            >
                <img
                        class="w-full object-fit object-center"
                        src="<?= get_theme_file_uri('src/assets/entrada.jpg') ?>"
                        alt=""
                />
            </div>
        </section>

        <!-- CONTACTANOS -->
        <section class="bg-slate-50">
            <div class="md:py-6 lg:py-12 container">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div class="space-y-2">
                        <h2 class="text-2xl lg:text-4xl font-bold">Contáctanos</h2>
                        <p class="text-sm">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                            quae blanditiis dolore, omnis nesciunt.
                        </p>
                        <h3 class="text-lg lg:text-2xl font-semibold">Infromación de contacto</h3>
                        <p>Calle 14 de Obrajes N. 669
                            La Paz, Bolivia</p>
                        <p>info@kariozentrum.org

                        </p>
                        <p>+(591) 77599257</p>
                    </div>
                    <!-- form -->
                    <div>
                        <div class="min-h-min w-full bg-white p-3">
                            <h4 class="text-3xl font-semibold mb-3">Escríbenos</h4>
                            <?php echo do_shortcode('[fluentform id="1"]') ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MAPA-->
        <section id="mapa">
            <div class="container py-6 lg:py-12">
                <div class="h-32 w-11/12 mx-auto bg-gray-400 md:h-72">
                    <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3824
                    .985247935909!2d-68
                    .10566422386617!3d-16.526842384220977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f20e420688507%3A0x9ee3fb6015ee41a2!2sKardiozentrum!5e0!3m2!1ses!2sbo!4v1748570051886!5m2!1ses!2sbo"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </section>


    <?php endwhile; ?>
</main>

<?php get_footer() ?>
