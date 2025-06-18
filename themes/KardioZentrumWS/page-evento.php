<?php get_header();
getPageBanner(
    ['title' => 'PLANTILLA de EJEMPLO para eventos',
        'leyenda' => get_the_title()
    ]
);
?>
<main>
    <!-- Contenido principal -->
    <div class="container mx-auto px-4 py-12">
        <div class="flex flex-wrap -mx-4">
            <?php ?>
            <!-- Columna principal -->
            <div class="w-full lg:w-2/3 px-4 mb-8">

                <h2 class="text-3xl font-bold mb-6">Descripción del evento</h2>
                <div class="prose max-w-none">
                    <p>
                        <?php the_content(); ?>
                    </p>
                    <h3 class="text-2xl font-bold mt-8 mb-4">Objetivos del evento</h3>
                    <ul class="list-disc pl-6 mb-6">
                        <li class="mb-2">Actualizar a los profesionales de la salud sobre las nuevas directrices en farmacología
                            cardiovascular
                        </li>
                        <li class="mb-2">Discutir los últimos avances en tratamientos farmacológicos para enfermedades cardíacas</li>
                        <li class="mb-2">Analizar casos clínicos relevantes y estrategias de tratamiento</li>
                        <li class="mb-2">Proporcionar un espacio de networking entre especialistas del área</li>
                    </ul>

                    <h3 class="text-2xl font-bold mt-8 mb-4">Dirigido a</h3>
                    <p class="mb-4">Cardiólogos, internistas, médicos generales, residentes, enfermeras especializadas y estudiantes de
                        medicina interesados en la actualización de tratamientos cardiovasculares.</p>

                    <h3 class="text-2xl font-bold mt-8 mb-4">Programa</h3>
                    <div class="border rounded overflow-hidden mb-8">
                        <div class="bg-gray-50 px-4 py-3 border-b">
                            <div class="flex items-center">
                                <span class="text-gray-700 font-medium">09:00 - 09:30</span>
                                <span class="ml-8">Registro y bienvenida</span>
                            </div>
                        </div>
                        <div class="px-4 py-3 border-b">
                            <div class="flex items-center">
                                <span class="text-gray-700 font-medium">09:30 - 10:30</span>
                                <div class="ml-8">
                                    <p class="font-medium">Nuevas directrices en el manejo farmacológico de la hipertensión arterial</p>
                                    <p class="text-sm text-gray-600">Dr. Alejandro Ramírez</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 border-b">
                            <div class="flex items-center">
                                <span class="text-gray-700 font-medium">10:30 - 11:30</span>
                                <div class="ml-8">
                                    <p class="font-medium">Avances en anticoagulación oral: evidencia actual y recomendaciones</p>
                                    <p class="text-sm text-gray-600">Dra. María González</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 border-b">
                            <div class="flex items-center">
                                <span class="text-gray-700 font-medium">11:30 - 12:00</span>
                                <span class="ml-8">Coffee break</span>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3">
                            <div class="flex items-center">
                                <span class="text-gray-700 font-medium">12:00 - 13:00</span>
                                <div class="ml-8">
                                    <p class="font-medium">Mesa redonda: Casos clínicos y discusión</p>
                                    <p class="text-sm text-gray-600">Moderador: Dr. Carlos Méndez</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold mt-8 mb-4">Ponentes</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="flex">
                            <img src="/api/placeholder/100/100" alt="Dr. Alejandro Ramírez" class="w-24 h-24 rounded-full object-cover">
                            <div class="ml-4">
                                <h4 class="font-bold text-lg">Dr. Alejandro Ramírez</h4>
                                <p class="text-gray-700">Cardiólogo, Especialista en Hipertensión</p>
                                <p class="text-sm text-gray-600">Hospital Universitario La Paz</p>
                            </div>
                        </div>
                        <div class="flex">
                            <img src="/api/placeholder/100/100" alt="Dra. María González" class="w-24 h-24 rounded-full object-cover">
                            <div class="ml-4">
                                <h4 class="font-bold text-lg">Dra. María González</h4>
                                <p class="text-gray-700">Cardióloga, Especialista en Trombosis</p>
                                <p class="text-sm text-gray-600">Instituto Cardiovascular de Bolivia</p>
                            </div>
                        </div>
                        <div class="flex">
                            <img src="/api/placeholder/100/100" alt="Dr. Carlos Méndez" class="w-24 h-24 rounded-full object-cover">
                            <div class="ml-4">
                                <h4 class="font-bold text-lg">Dr. Carlos Méndez</h4>
                                <p class="text-gray-700">Cardiólogo Intervencionista</p>
                                <p class="text-sm text-gray-600">Kardiozentrum</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Botones compartir -->
                <div class="mt-8 pt-6 border-t">
                    <h4 class="font-semibold mb-3">Compartir evento:</h4>
                    <div class="flex space-x-3">
                        <a href="#" class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-blue-400 flex items-center justify-center text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-red-600 flex items-center justify-center text-white">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-pink-600 flex items-center justify-center text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Barra lateral -->
            <div class="w-full lg:w-1/3 px-4">
                <!-- Fechas del evento -->
                <div class="bg-white border rounded-lg shadow-sm mb-8">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-4">Detalles del Evento</h3>
                        <ul class="space-y-4">
                            <li class="flex">
                                <div class="text-red-500 mr-3">
                                    <i class="far fa-calendar-alt text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Fecha</h4>
                                    <p><?php
                                        $dateTime = new DateTime(get_field('fecha_del_evento'));
                                        $date = $dateTime->format('d/m/Y');
                                        $time = $dateTime->format('H:iA ');
                                        echo $date ?></p>
                                </div>
                            </li>
                            <li class="flex">
                                <div class="text-red-500 mr-3">
                                    <i class="far fa-clock text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Hora de Inicio</h4>
                                    <p><?= $time ?></p>
                                </div>
                            </li>
                            <li class="flex">
                                <div class="text-red-500 mr-3">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Ubicación</h4>
                                    <p>Auditorio Kardiozentrum</p>
                                    <p>Av. 14 de Septiembre #222, La Paz</p>
                                </div>
                            </li>
                            <li class="flex">
                                <div class="text-red-500 mr-3">
                                    <i class="fas fa-ticket-alt text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Precio</h4>
                                    <p>Entrada gratuita (cupo limitado)</p>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="block text-center primary-btn text-white py-3 px-6 rounded mt-6 font-medium">
                            Inscribirse al evento
                        </a>
                    </div>
                </div>

                <!-- Organizador -->
                <div class="bg-white border rounded-lg shadow-sm mb-8">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-4">Organizador</h3>
                        <div class="flex items-center mb-4">
                            <img src="/api/placeholder/80/80" alt="Logo Kardiozentrum" class="w-16 h-16 object-contain mr-4">
                            <div>
                                <h4 class="font-bold">Kardiozentrum</h4>
                                <p class="text-sm text-gray-600">Centro Especializado en Cardiología</p>
                            </div>
                        </div>
                        <p class="text-sm mb-4">Centro médico especializado en el diagnóstico y tratamiento de enfermedades
                            cardiovasculares con más de 15 años de experiencia.</p>
                        <a href="#" class="text-red-500 hover:underline text-sm font-medium">Ver perfil del organizador</a>
                    </div>
                </div>

                <!-- Mapa -->
                <div class="bg-white border rounded-lg shadow-sm mb-8">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-4">Ubicación</h3>
                        <div class="aspect-w-16 aspect-h-9 mb-3">
                            <img src="/api/placeholder/400/300" alt="Mapa ubicación" class="w-full h-auto">
                        </div>
                        <p class="text-sm">Av. 14 de Septiembre #222, La Paz, Bolivia</p>
                        <a href="#" class="text-red-500 hover:underline text-sm font-medium">Ver en Google Maps</a>
                    </div>
                </div>

                <!-- Contacto -->
                <div class="bg-white border rounded-lg shadow-sm">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-4">Contacto</h3>
                        <ul class="space-y-3">
                            <li class="flex items-center">
                                <i class="fas fa-envelope text-red-500 mr-3"></i>
                                <a href="mailto:eventos@kardiozentrum.net" class="hover:text-red-500">eventos@kardiozentrum.net</a>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-phone-alt text-red-500 mr-3"></i>
                                <a href="tel:+59122451234" class="hover:text-red-500">+591 2 245 1234</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<?php get_footer(); ?>
