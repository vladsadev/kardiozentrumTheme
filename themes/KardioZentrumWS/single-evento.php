<?php get_header();
getPageBanner(
    ['title' => 'Evento',
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
                    <h3 class="text-2xl font-bold mt-8 mb-4">Ponentes</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="flex">
                            <img src="/api/placeholder/100/100" alt="Dr. Alejandro Ramírez"
                                 class="w-24 h-24 rounded-full object-cover">
                            <div class="ml-4">
                                <h4 class="font-bold text-lg">Dr. Alejandro Ramírez</h4>
                                <p class="text-gray-700">Cardiólogo, Especialista en Hipertensión</p>
                                <p class="text-sm text-gray-600">Hospital Universitario La Paz</p>
                            </div>
                        </div>
                        <div class="flex">
                            <img src="/api/placeholder/100/100" alt="Dra. María González"
                                 class="w-24 h-24 rounded-full object-cover">
                            <div class="ml-4">
                                <h4 class="font-bold text-lg">Dra. María González</h4>
                                <p class="text-gray-700">Cardióloga, Especialista en Trombosis</p>
                                <p class="text-sm text-gray-600">Instituto Cardiovascular de Bolivia</p>
                            </div>
                        </div>
                        <div class="flex">
                            <img src="/api/placeholder/100/100" alt="Dr. Carlos Méndez"
                                 class="w-24 h-24 rounded-full object-cover">
                            <div class="ml-4">
                                <h4 class="font-bold text-lg">Dr. Carlos Méndez</h4>
                                <p class="text-gray-700">Cardiólogo Intervencionista</p>
                                <p class="text-sm text-gray-600">Kardiozentrum</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tratamientos y estudios Relacionados -->
                <?php
                $relatedTreatments = get_field('tratamientos_relacionados');
                if ($relatedTreatments): ?>
                    <div class="mt-4 md:mt-6 xl:mt-8 border-t pt-2 md:pt-4 xl:pt-5">
                        <h4 class="font-semibold mb-3">Tratamientos y Estudios relacionados:</h4>
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
                <?php endif; ?>

                <!-- Botones compartir -->
                <div class="hidden mt-8 pt-2 md:pt-4">
                    <h4 class="font-semibold mb-3">Compartir evento:</h4>
                    <div class="flex space-x-3">
                        <a href="#"
                           class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                           class="w-10 h-10 rounded-full bg-blue-400 flex items-center justify-center text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#"
                           class="w-10 h-10 rounded-full bg-red-600 flex items-center justify-center text-white">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#"
                           class="w-10 h-10 rounded-full bg-pink-600 flex items-center justify-center text-white">
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
                                    <?php
                                    $eventDateTime = new DateTime(get_field('fecha_del_evento'));
                                    $eventTS = $eventDateTime->getTimestamp();
                                    $eventDate = $eventDateTime->format('d/m/Y');
                                    $eventTime = $eventDateTime->format('H:iA ');
                                    $today = (new DateTime());
                                    $todayTS = $today->getTimestamp();
                                    ?>
                                    <p class="<?= ($todayTS > $eventTS) ? 'bg-red-light px-2 text-white font-semibold text-sm xl:text-base tracking-wide' : 'text-red-lighter lg:text-base xl:text-lg tracking-wider font-bold' ?>">
                                        <?= ($todayTS > $eventTS) ? $eventDate . ' - EVENTO FINALIZADO' : $eventDate ?>
                                    </p>
                                </div>
                            </li>
                            <li class="flex">
                                <div class="text-red-500 mr-3">
                                    <i class="far fa-clock text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Hora de Inicio</h4>
                                    <p><?= $eventTime ?></p>
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
                            <img src="/api/placeholder/80/80" alt="Logo Kardiozentrum"
                                 class="w-16 h-16 object-contain mr-4">
                            <div>
                                <h4 class="font-bold">Kardiozentrum</h4>
                                <p class="text-sm text-gray-600">Centro Especializado en Cardiología</p>
                            </div>
                        </div>
                        <p class="text-sm mb-4">Centro médico especializado en el diagnóstico y tratamiento de
                            enfermedades
                            cardiovasculares con más de 15 años de experiencia.</p>
                        <a href="#" class="text-red-500 hover:underline text-sm font-medium">Ver perfil del
                            organizador</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<?php get_footer(); ?>
