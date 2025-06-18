<?php get_header();
getPageBanner();

?>
    <!-- Sección Quienes Somos-->
    <section class="py-16 px-6 bg-white">
        <div class="container mx-auto max-w-7xl">
            <div class="flex flex-col md:flex-row items-center md:gap-6 xl:gap-10">
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Nuestra Historia</h2>
                    <div class="prose prose-lg mx-auto text-justify max-w-[100%]">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <div class="rounded-xl overflow-hidden shadow-xl">
                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="Historia del centro
                                                médico" class="w-full h-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección  NUESTRA FILOSOFÍA -->
    <section class="py-16 px-8 bg-yellow-light">
        <div class="container mx-auto max-w-6xl">
            <h2 class="text-3xl font-bold text-gray-800 mb-12 text-center">Nuestra Filosofía</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Misión -->
                <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 rounded-full bg-red-light flex items-center justify-center mb-6 mx-auto">
                        <i class="ri-focus-3-line text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Misión</h3>
                    <p class="text-gray-600 text-center">Proporcionar atención médica de la más alta calidad, centrada
                        en el paciente, accesible y compasiva, utilizando las últimas innovaciones médicas para mejorar
                        la salud y bienestar de nuestra comunidad.</p>
                </div>

                <!-- Visión -->
                <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 rounded-full bg-red-light flex items-center justify-center mb-6 mx-auto">
                        <i class="ri-eye-fill text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Visión</h3>
                    <p class="text-gray-600 text-center">Ser reconocidos como el centro médico líder en excelencia
                        clínica, innovación y satisfacción del paciente, estableciendo nuevos estándares en la atención
                        médica integral.</p>
                </div>

                <!-- Valores -->
                <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 rounded-full bg-red-light flex items-center justify-center mb-6 mx-auto">
                        <i class="ri-shake-hands-fill text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4 text-center">Valores</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li class="flex items-center"><span class="w-2 h-2 bg-red-light rounded-full
                        mr-2"></span>Excelencia
                            clínica
                        </li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-red-light rounded-full
                        mr-2"></span>Integridad
                        </li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-red-light rounded-full
                        mr-2"></span>Compasión
                        </li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-red-light rounded-full
                        mr-2"></span>Respeto
                        </li>
                        <li class="flex items-center"><span class="w-2 h-2 bg-red-light rounded-full
                        mr-2"></span>Innovación
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección fundadores -->
    <section class="mx-auto px-4 pt-16 pb-12 bg-slate-50">

<!--        <hr class="mb-10 container">-->
        <!-- Fundadores y Historia -->

        <div class="container bg-yellow-light/30 rounded-xl p-8 mb-16">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/3 mb-6 md:mb-0">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Nuestros Fundadores</h3>
                    <p class="text-gray-600 mb-4">
                        Establecido en 2005 por un grupo de especialistas visionarios, nuestro centro médico
                        fue creado con la misión de proporcionar atención médica de excelencia combinando
                        la última tecnología con un enfoque humano.
                    </p>
                    <div class="border-l-4 border-blue-dark pl-4 italic text-gray-700">
                        "Nuestra visión siempre ha sido unir la excelencia profesional con la calidez humana"
                    </div>
                </div>
                <div class="md:w-2/3 md:pl-8 grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="text-center">
                        <div class="w-20 h-20 mx-auto rounded-full overflow-hidden border-2 border-blue-300 mb-2">
                            <img src="/api/placeholder/100/100" alt="Fundador" class="w-full h-full object-cover">
                        </div>
                        <p class="font-semibold text-sm">Dr. Miguel Rodríguez</p>
                        <p class="text-xs text-gray-500">Fundador Principal</p>
                    </div>
                    <div class="text-center">
                        <div class="w-20 h-20 mx-auto rounded-full overflow-hidden border-2 border-blue-300 mb-2">
                            <img src="/api/placeholder/100/100" alt="Cofundador" class="w-full h-full object-cover">
                        </div>
                        <p class="font-semibold text-sm">Dra. Sofía García</p>
                        <p class="text-xs text-gray-500">Cofundadora</p>
                    </div>
                    <div class="text-center">
                        <div class="w-20 h-20 mx-auto rounded-full overflow-hidden border-2 border-blue-300 mb-2">
                            <img src="/api/placeholder/100/100" alt="Cofundador" class="w-full h-full object-cover">
                        </div>
                        <p class="font-semibold text-sm">Dr. Javier Morales</p>
                        <p class="text-xs text-gray-500">Cofundador</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botón para ver equipo completo -->
        <div class="text-center">
            <a href="<?php echo site_url('doctores'); ?>"
               class="inline-block bg-blue-dark hover:bg-blue-darkest text-white font-semibold py-3 px-8 rounded-lg
               transition-colors">
                Conoce a todos nuestros especialistas
            </a>
        </div>
    </section>

    <!--        Sectión de Testimonios-->
    <section>
        <div class="w-full">
            <div class="flex flex-col lg:flex-row">
                <!-- Sección izquierda - Textos -->
                <div class="w-full lg:w-2/5 bg-yellow-light text-blue-dark p-8 lg:text-left text-center lg:p-16 flex
                    flex-col
                    justify-center lg:min-h-[500px]">
                    <div class="quote-mark font-serif text-blue-dark">&ldquo;&rdquo;</div>
                    <h3 class="uppercase text-lg font-medium tracking-wide mb-4">Testimonios</h3>
                    <h2 class="text-4xl font-bold mb-8">Lo que dicen nuestros pacientes<span></span></h2>
                </div>
                <!-- Sección derecha - Carrusel de testimonios -->
                <div class="w-full lg:w-3/5 bg-blue-darkest p-3 sm:p-6 md:p-8 2xl:p-16 3xl:p-18 flex">
                    <?php get_template_part('inc/partials/testimonios'); ?>
                </div>
            </div>
        </div>
    </section>


<?php get_footer() ?>