<?php
get_header();
getPageBanner([
    'title' => 'Nuestro Equipo'
]);
?>
<main>
    <!-- Sección Nuestro Equipo -->
    <section class="container mx-auto px-4 py-12">

        <!-- Organigrama Jerárquico -->
        <div class="mb-16">
            <h3 class="text-2xl font-bold text-center text-gray-800 mb-8">Organigrama Médico</h3>

            <div class="max-w-4xl mx-auto">
                <!-- Nivel 1: Director -->
                <div class="flex justify-center mb-8">
                    <div class="w-64 bg-blue-dark text-white rounded-lg shadow-md p-4 text-center">
                        <p class="font-bold">Director Médico</p>
                        <p class="text-sm">Dra. Alexandra Heath-Freudenthal</p>
                    </div>
                </div>

                <!-- Conectores verticales -->
                <div class="flex justify-center">
                    <div class="w-0.5 h-8 bg-blue-400"></div>
                </div>

                <!-- Nivel 2: Subdirectores -->
                <div class="flex justify-center mb-2">
                    <div class="w-full max-w-3xl flex justify-around">
                        <div class="w-48 bg-red-light text-white rounded-lg shadow-md p-3 text-center">
                            <p class="font-bold">Subdirección Médica</p>
                            <p class="text-xs">Dra. Laura Méndez</p>
                        </div>
                        <div class="w-48 bg-red-light text-white rounded-lg shadow-md p-3 text-center">
                            <p class="font-bold">Dirección Investigación</p>
                            <p class="text-xs">Dr. Carlos Vega</p>
                        </div>
                        <div class="w-48 bg-red-light text-white rounded-lg shadow-md p-3 text-center">
                            <p class="font-bold">Dirección Calidad</p>
                            <p class="text-xs">Dra. Elena Torres</p>
                        </div>
                    </div>
                </div>

                <!-- Conectores verticales -->
                <div class="flex justify-center mb-2 hidden">
                    <div class="w-full max-w-3xl flex justify-around">
                        <div class="w-0.5 h-8 bg-blue-300"></div>
                        <div class="w-0.5 h-8 bg-blue-300"></div>
                        <div class="w-0.5 h-8 bg-blue-300"></div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="mb-10">
        <!-- Encabezado -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Liderazgo Médico</h2>
        </div>

        <!-- Director Médico liderazgo - Fundador -->
        <div class=" max-w-5xl mx-auto bg-white rounded-xl shadow-md overflow-hidden mb-16">
            <div class="md:flex">
                <div class="md:flex-shrink-0 p-6 flex items-center justify-center bg-yellow-light/30">
                    <div class="relative">
                        <div class="w-40 h-40 rounded-full overflow-hidden border-4 border-red-light shadow-lg">
                            <img src="/api/placeholder/250/250" alt="Director Médico"
                                 class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-2 -right-2 bg-blue-dark text-white text-xs rounded-full px-3 py-1
                        font-semibold">
                            Fundador
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex items-baseline">
                        <h3 class="text-2xl font-bold text-gray-800">Dra. Alexandra Heath-Freudenthal</h3>
                        <div class="ml-4 px-2 py-1 text-xs font-semibold text-white bg-blue-dark rounded-full">25+ años
                            exp.
                        </div>
                    </div>
                    <p class="text-blue-dark font-semibold text-lg mb-3">Director Médico - Kardiozenttrum</p>
                    <p class="text-gray-600 mb-4">
                        El Dr. Rodríguez fundó nuestra institución con la visión de crear un centro médico de
                        excelencia.
                        Certificado por las principales sociedades médicas internacionales y profesor universitario,
                        lidera nuestro equipo con un enfoque en la medicina basada en evidencia y la atención
                        personalizada.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm">Investigación</span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm">Docencia</span>
                        <span class="bg-gray-100 text-gray-800 px-3 py-1 rounded-full text-sm">Gestión Clínica</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comité Directivo -->
    <section class="container pb-4 md:pb-8">
        <div class="mb-16">
            <h3 class="text-2xl font-bold text-center text-gray-800 mb-8">Comité Directivo</h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Subdirectora Médica -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-red-light h-2"></div>
                    <div class="p-6 text-center">
                        <div class="inline-block rounded-full overflow-hidden border-4 border-white shadow-md -mt-8 mb-4">
                            <img src="/api/placeholder/150/150" alt="Subdirectora Médica"
                                 class="w-24 h-24 object-cover">
                        </div>
                        <h4 class="text-xl font-bold text-gray-800">Dra. Inge Von Alvensleben</h4>
                        <p class="text-blue-dark font-semibold mb-3">Subdirectora Médica</p>
                        <p class="text-sm text-gray-600 mb-4">
                            Lidera los equipos asistenciales y desarrolla protocolos clínicos de excelencia.
                        </p>
                        <div class="inline-block bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs font-semibold">
                            Cardiología
                        </div>
                    </div>
                </div>

                <!-- Director de Investigación -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-red-light h-2"></div>
                    <div class="p-6 text-center">
                        <div class="inline-block rounded-full overflow-hidden border-4 border-white shadow-md -mt-8 mb-4">
                            <img src="/api/placeholder/150/150" alt="Director de Investigación"
                                 class="w-24 h-24 object-cover">
                        </div>
                        <h4 class="text-xl font-bold text-gray-800">Dr. Franz Peter Freudenthal</h4>
                        <p class="text-blue-dark font-semibold mb-3">Director de Investigación</p>
                        <p class="text-sm text-gray-600 mb-4">
                            Lidera nuestros proyectos de investigación clínica y colaboraciones.
                        </p>
                        <div class="inline-block bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs font-semibold">
                            Cardiología
                        </div>
                    </div>
                </div>

                <!-- Directora de Calidad -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-red-light h-2"></div>
                    <div class="p-6 text-center">
                        <div class="inline-block rounded-full overflow-hidden border-4 border-white shadow-md -mt-8 mb-4">
                            <img src="/api/placeholder/150/150" alt="Directora de Calidad"
                                 class="w-24 h-24 object-cover">
                        </div>
                        <h4 class="text-xl font-bold text-gray-800">Dra. Elena Torres</h4>
                        <p class="text-blue-dark font-semibold mb-3">Directora de Calidad</p>
                        <p class="text-sm text-gray-600 mb-4">
                            Responsable de los procesos de acreditación y mejora continua.
                        </p>
                        <div class="inline-block bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs font-semibold">
                            Medicina Familiar
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Botón para ver equipo completo -->
        <div class="text-center">
            <a href="<?= site_url('doctores') ?>"
               class="inline-block bg-blue-dark hover:bg-blue-darkest text-white font-semibold py-3 px-8 rounded-lg
               transition-colors">
                Conoce a todos nuestros especialistas
            </a>
        </div>
    </section>

    <!-- Personal de Apoyo  -->
    <section class="pt-20 pb-10 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header de la sección -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-red-light px-4 py-2 rounded-full mb-6">
                    <i class="fas fa-users text-white mr-2"></i>
                    <span class="text-white font-medium">Equipo Multidisciplinario</span>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Personal de Apoyo</h3>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Nuestro equipo de profesionales de la salud que complementan la atención médica, garantizando una
                    experiencia integral y de calidad para todos nuestros pacientes
                </p>
            </div>

            <!-- Departamentos de Apoyo -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Enfermería -->
                <div class="bg-gradient-to-br from-yellow-50 to-white p-8 rounded-2xl shadow-lg border border-blue-dark/10">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-red-light rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-user-nurse text-white text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="text-2xl font-bold text-gray-900">Enfermería</h4>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Nuestro equipo de enfermería está altamente capacitado para brindar cuidados especializados,
                        administración de medicamentos, y apoyo emocional a los pacientes y sus familias.
                    </p>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-teal-500 mr-3"></i>
                            <span>Enfermería crítica y de emergencias</span>
                        </div>
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-teal-500 mr-3"></i>
                            <span>Cuidados post-operatorios</span>
                        </div>
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-teal-500 mr-3"></i>
                            <span>Educación al paciente y familia</span>
                        </div>
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-teal-500 mr-3"></i>
                            <span>Atención domiciliaria</span>
                        </div>
                    </div>
                    <div class="bg-red-light/10 p-4 rounded-lg">
                        <div class="flex items-center justify-between">
                            <div class="text-blue-dark">
                                <div class="font-semibold">Líder del Departamento</div>
                                <div class="">Lic. María Fernández</div>
                                <div class="text-sm">15 años de experiencia</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Trabajo Social-->
                <div class="bg-gradient-to-r from-blue-50 to-white p-8 rounded-2xl shadow-lg border
                border-blue-dark/10">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-red-light rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-walking text-white text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="text-2xl font-bold text-gray-900">Trabajo Social</h4>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Especialistas en rehabilitación física y terapia, dedicados a restaurar la función y movilidad
                        de nuestros pacientes mediante técnicas modernas y personalizadas.
                    </p>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-cyan-500 mr-3"></i>
                            <span>Rehabilitación post-quirúrgica</span>
                        </div>
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-cyan-500 mr-3"></i>
                            <span>Fisioterapia deportiva</span>
                        </div>
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-cyan-500 mr-3"></i>
                            <span>Terapia neurológica</span>
                        </div>
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-cyan-500 mr-3"></i>
                            <span>Electroterapia avanzada</span>
                        </div>
                    </div>
                    <div class="bg-red-light/10 p-4 rounded-lg">
                        <div class="flex flex-col items-start text-blue-dark">
                            <div class="font-semibold">Líder del Departamento</div>
                            <div class="">Lic. Carlos Morales</div>
                            <div class="text-sm">12 años de experiencia</div>
                        </div>
                    </div>
                </div>

                <!-- Administración -->
                <div class="bg-gradient-to-br from-yellow-50 to-white p-8 rounded-2xl shadow-lg border border-blue-dark/10">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-red-light rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-clipboard-list text-white text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="text-2xl font-bold text-gray-900">Administración</h4>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Nuestro equipo administrativo está dedicado a brindar una experiencia excepcional, gestionando
                        citas, seguros y todos los procesos para su comodidad.
                    </p>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-yellow-500 mr-3"></i>
                            <span>Gestión de citas y horarios</span>
                        </div>
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-yellow-500 mr-3"></i>
                            <span>Trámites de seguros médicos</span>
                        </div>
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-yellow-500 mr-3"></i>
                            <span>Atención al cliente 24/7</span>
                        </div>
                        <div class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-yellow-500 mr-3"></i>
                            <span>Facturación y pagos</span>
                        </div>
                    </div>
                    <div class="bg-red-light/10 p-4 rounded-lg">
                        <div class="flex items-center justify-between">
                            <div class="text-blue-dark">
                                <div class="font-semibold">Gerente Administrativo</div>
                                <div class="">Lic. Roberto Silva</div>
                                <div class="text-sm">10 años de experiencia</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certificaciones y Reconocimientos -->
    <section class="bg-yellow-light/50 py-4 md:py-12">
        <div class="bg-gradient-to-r container from-blue-dark/5 to-blue-darkest/5 p-8 rounded-2xl">
            <div class="text-center mb-8">
                <h4 class="text-2xl font-bold text-gray-900 mb-4">Certificaciones y Reconocimientos</h4>
                <p class="text-gray-600">Nuestro personal de apoyo cuenta con las más altas certificaciones
                    profesionales</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-certificate text-white text-xl"></i>
                    </div>
                    <h5 class="font-semibold text-gray-900 mb-2">Certificación ISO 9001</h5>
                    <p class="text-gray-600 text-sm">Gestión de calidad en todos nuestros procesos</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-award text-white text-xl"></i>
                    </div>
                    <h5 class="font-semibold text-gray-900 mb-2">Reconocimiento Nacional</h5>
                    <p class="text-gray-600 text-sm">Mejor equipo de enfermería 2024</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-medal text-white text-xl"></i>
                    </div>
                    <h5 class="font-semibold text-gray-900 mb-2">Acreditación JCI</h5>
                    <p class="text-gray-600 text-sm">Estándares internacionales de calidad</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>
