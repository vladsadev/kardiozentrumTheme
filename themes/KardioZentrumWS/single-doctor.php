<?php
get_header();
getPageBanner([
        'title' => get_the_title(),
        'leyenda' => get_field('leyenda_doctor')
    ]
);
?>
    <main>
        <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
            <!-- Tarjeta principal -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <!-- Encabezado -->
                <div class="bg-gradient-to-r from-blue-darkest to-blue-darkest2 px-6 py-4">
                    <h1 class="text-white text-2xl font-bold">Perfil Médico</h1>
                </div>
                <!-- Contenido principal - 2 columnas en diseño amplio -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 p-6">

                    <!-- Columna izquierda: Foto y detalles del doctor -->
                    <div class="bg-gray-50 rounded-lg p-6 flex flex-col items-center">
                        <!-- Foto del doctor -->
                        <div class="relative">
                            <div class="w-48 h-48 rounded-full overflow-hidden border-4 border-white shadow-md">
                                <img src="<?= get_the_post_thumbnail_url('', 'doctorProfile') ?>" alt="Foto del
                                Doctor"
                                     class="w-full h-full object-cover">
                            </div>
                            <div class="absolute -bottom-2 -right-2 bg-blue-600 text-white rounded-full p-2">
                                <i class="fas fa-certificate"></i>
                            </div>
                        </div>

                        <!-- Nombre y especialidad -->
                        <h2 class="mt-4 text-xl font-bold text-gray-800"><?= get_the_title() ?></h2>
                        <p class="text-red-lighter font-medium">Cardiólogo</p>

                        <!-- Calificación -->
                        <div class="flex items-center mt-3 bg-blue-50 px-3 py-1 rounded-full">
                            <i class="fas fa-star text-yellow-500"></i>
                            <span class="ml-1 text-gray-700 font-medium">4.9</span>
                            <span class="ml-1 text-gray-500 text-sm">(154 opiniones)</span>
                        </div>

                        <!--                        <button class="mt-6 w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg -->
                        <!--                        transition duration-300 flex items-center justify-center">-->
                        <!--                            <i class="fas fa-calendar-plus mr-2"></i>-->
                        <!--                            Agendar Cita-->
                        <!--                        </button>-->
                    </div>

                    <!-- Columna derecha: Biografía, experiencia y credenciales -->
                    <div class="bg-white rounded-lg">
                        <!-- Contenido -->
                        <!-- Detalles de contacto en lista vertical -->
                        <div class="w-full mt-8 space-y-4">
                            <div class="flex items-center p-3 bg-gray-100 rounded-lg hover:bg-gray-200 transition">
                                <div class="w-10 h-10 flex items-center justify-center bg-blue-100 text-blue-600 rounded-full">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-gray-500">Números de contacto</p>
                                    <p class="text-gray-800 font-medium tracking-wide">
                                        +591 <?= get_field('numero_de_contacto') ?></p>
                                </div>
                            </div>

                            <div class="flex items-center p-3 bg-gray-100 rounded-lg hover:bg-gray-200 transition">
                                <div class="w-10 h-10 flex items-center justify-center bg-blue-100 text-blue-600 rounded-full">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-gray-500">Email</p>
                                    <p class="text-gray-800 font-medium"><?= get_field('email') ?></p>
                                </div>
                            </div>

                            <div class="flex items-center p-3 bg-gray-100 rounded-lg hover:bg-gray-200 transition">
                                <div class="w-10 h-10 flex items-center justify-center bg-blue-100 text-blue-600 rounded-full">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-gray-500">Ubicación</p>
                                    <p class="text-gray-800 font-medium">Kardiozentum</p>
                                </div>
                            </div>

                            <div class="flex items-center p-3 bg-gray-100 rounded-lg hover:bg-gray-200 transition">
                                <div class="w-10 h-10 flex items-center justify-center bg-blue-100 text-blue-600 rounded-full">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-gray-500">Horario de Consulta</p>
                                    <p class="text-gray-800 font-medium">Lunes a Viernes: 8:00 - 13:00</p>
                                </div>
                            </div>
                        </div>

                        <!-- Botón de agendar cita -->
                        <!--                        <button class="mt-6 w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition duration-300 flex items-center justify-center">-->
                        <!--                            <i class="fas fa-calendar-plus mr-2"></i>-->
                        <!--                            Agendar Cita-->
                        <!--                        </button>-->
                    </div>

                </div>

                <!-- Sección inferior - Biografía, certificaciones, idiomas y tratamientos -->
                <div class="rounded-lg">
                    <!-- Contenido -->
                    <div class="p-6">
                        <!-- Biografía -->
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                                <i class="fas fa-user-md text-blue-600 mr-2"></i>
                                Biografía
                            </h3>
                            <p class="mt-3 text-gray-600 leading-relaxed">
                                El Dr. Carlos Mendoza es un reconocido neurólogo con más de 12 años de experiencia
                                en el diagnóstico y
                                tratamiento de trastornos neurológicos. Especializado en neurología clínica, con
                                particular interés en
                                enfermedades neurodegenerativas y trastornos del movimiento. Su enfoque se centra en
                                proporcionar
                                atención integral y personalizada a cada paciente, utilizando las técnicas
                                diagnósticas más avanzadas.
                            </p>
                        </div>

                        <!-- Formación Académica -->
                        <div class="mt-8">
                            <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                                <i class="fas fa-graduation-cap text-blue-600 mr-2"></i>
                                Formación Académica
                            </h3>
                            <ul class="mt-3 space-y-3">
                                <li class="flex">
                                    <div class="flex-shrink-0 h-5 w-5 flex items-center justify-center rounded-full bg-blue-100 text-blue-600">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="ml-3 text-gray-600">Universidad Mayor de San Andrés, Facultad de Medicina</span>
                                </li>
                                <li class="flex">
                                    <div class="flex-shrink-0 h-5 w-5 flex items-center justify-center rounded-full bg-blue-100 text-blue-600">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="ml-3 text-gray-600">Especialización en Neurología, Hospital Juan XXIII</span>
                                </li>
                                <li class="flex">
                                    <div class="flex-shrink-0 h-5 w-5 flex items-center justify-center rounded-full bg-blue-100 text-blue-600">
                                        <i class="fas fa-check text-xs"></i>
                                    </div>
                                    <span class="ml-3 text-gray-600">Fellowship en Trastornos del Movimiento, Universidad de Barcelona</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Certificaciones -->
                        <div class="mt-8">
                            <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                                <i class="fas fa-award text-blue-600 mr-2"></i>
                                Certificaciones
                            </h3>
                            <div class="mt-3 flex flex-wrap gap-2">

                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                                      <i class="fas fa-certificate mr-1 text-xs"></i>
                                                      American Academy of Neurology
                                                    </span>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                                      <i class="fas fa-certificate mr-1 text-xs"></i>
                                                      European Academy of Neurology
                                                    </span>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                                      <i class="fas fa-certificate mr-1 text-xs"></i>
                                                      Sociedad Boliviana de Neurología
                                                    </span>
                            </div>

                            <!-- Idiomas -->
                            <div class="mt-8">
                                <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                                    <i class="fas fa-language text-blue-600 mr-2"></i>
                                    Idiomas
                                </h3>
                                <div class="mt-3 grid grid-cols-2 gap-3">
                                    <div class="flex items-center">
                                        <div class="h-2 flex-1 bg-gray-200 rounded-full overflow-hidden">
                                            <div class="bg-blue-600 h-full rounded-full" style="width: 100%"></div>
                                        </div>
                                        <span class="ml-3 text-gray-600 min-w-[80px]">Español</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="h-2 flex-1 bg-gray-200 rounded-full overflow-hidden">
                                            <div class="bg-blue-600 h-full rounded-full" style="width: 90%"></div>
                                        </div>
                                        <span class="ml-3 text-gray-600 min-w-[80px]">Inglés</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="h-2 flex-1 bg-gray-200 rounded-full overflow-hidden">
                                            <div class="bg-blue-600 h-full rounded-full" style="width: 75%"></div>
                                        </div>
                                        <span class="ml-3 text-gray-600 min-w-[80px]">Francés</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="h-2 flex-1 bg-gray-200 rounded-full overflow-hidden">
                                            <div class="bg-blue-600 h-full rounded-full" style="width: 60%"></div>
                                        </div>
                                        <span class="ml-3 text-gray-600 min-w-[80px]">Aymara</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- CTA - Tratamientos -->
                        <?php
                        $relatedTreatments = get_field('tratamientos_relacionados');
                        if ($relatedTreatments): ?>
                            <div class="mt-8 bg-gradient-to-r from-blue-50 to-indigo-50 p-4 rounded-lg border border-blue-100">
                                <div class="mt-2 grid grid-cols-1 gap-2">
                                    <div>
                                        <h3 class="font-semibold mb-3">Tratamientos en lo que el Dr(a) asiste y
                                            colabora </h3>
                                        <ul class="space-y-4">
                                            <?php foreach ($relatedTreatments as $relatedTreatment): ?>
                                                <li class="text-red-lighter hover:text-red-light underline md:text-lg xl:text-xl">
                                                    <a href="<?= get_the_permalink($relatedTreatment) ?>">
                                                        <?= get_the_title($relatedTreatment) ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                                <a href="<?= site_url('tratamientos') ?>" class="mt-5 inline-block text-blue-600
                                hover:text-blue-800
                                font-medium">
                                    Ver todos los tratamientos de KardioZentrum
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
    </main>

<?php
get_footer();
?>