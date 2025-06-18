<?php
get_header();
getPageBanner([
    'title' => 'Doctores',
]);
?>
    <main>
        <!--~~~~~~~~~~~~~~~ POSTS ARCHIVE ~~~~~~~~~~~~~~~-->
        <!-- Medical Directory Section -->
        <section class="container mx-auto px-4 sm:px-6 lg:px-8 py-6 md:py-8 lg:py-14">
            <!-- Header -->
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-4xl md:text-5xl font-bold text-blue-dark mb-4">
                    Directorio Médico
                </h2>
                <div class="w-20 h-1 bg-red-light mx-auto mb-6"></div>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Cada miembro de nuestro equipo aporta años de experiencia y dedicación excepcional
                </p>
            </div>

            <!-- Doctors Grid -->
            <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 lg:gap-6">
                <?php while (have_posts()): the_post(); ?>
                    <!-- Dr. X -->
                    <li class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover">
                        <div class="aspect-w-16 aspect-h-12 overflow-hidden">
                            <a href="<?= get_the_permalink() ?>">
                                <img src="<?= get_the_post_thumbnail_url(size: 'doctorProfile') ?>"
                                     alt="Dr Ferguron"
                                     class="w-full h-64 object-cover transition-transform duration-500 hover:scale-110">
                            </a>
                        </div>
                        <div class="py-6 px-4">
                            <h3 class="text-xl font-bold text-blue-dark mb-2"><?php the_title() ?></h3>
                            <p class="text-red-light font-semibold mb-3"><?= get_field('especialidad') ?></p>
                            <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                <?= get_field('resumen_de_la_especialidad') ?>
                            </p>
                            <a href="<?= get_the_permalink() ?>" class="text-red-lighter cursor-pointer hover:font-semibold
                            md:text-lg
                            hover:text-red-light
                            transition-colors
                            duration-200">
                                Ver perfil
                            </a>
                        </div>
                    </li>

                <?php endwhile; ?>

            </ul>

        </section>
        <!-- CTA Section -->
        <section class="py-20 bg-yellow-light">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="bg-blue-dark rounded-3xl p-12 text-white relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/10"></div>
                    <div class="relative">
                        <h3 class="text-3xl md:text-4xl font-bold mb-6">¿Listo para cuidar tu salud?</h3>
                        <p class="text-xl mb-8 opacity-90">
                            Agenda una consulta con nuestros especialistas y recibe atención médica de primera clase
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <button class="bg-white text-red-light px-8 py-4 rounded-xl font-semibold
                            hover:bg-red-light cursor-pointer hover:text-slate-50 transition duration-300 shadow-lg">
                                <i class="fas fa-calendar-check mr-2"></i>Agendar Cita
                            </button>
                            <button class="border-2 border-white text-white px-8 py-4 rounded-xl font-semibold hover:bg-white/10 transition duration-300">
                                <i class="fas fa-phone mr-2"></i>Llamar Ahora
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer() ?>