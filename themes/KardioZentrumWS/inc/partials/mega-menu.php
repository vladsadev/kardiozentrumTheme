<!--<div class="mega-menu bg-yellow-light/95 w-80 md:w-[30rem] lg:w-[34rem] xl:w-[35rem] 2xl:w-[38rem]">-->
<div class="mega-menu bg-yellow-light/95 w-40 lg:w-[14rem]">
    <div class="container mx-auto py-6 px-4">
        <div class="grid grid-cols-1 w-full md:grid-cols-2 gap-8">
            <!-- PAGES 1 Column -->
            <div>
                <h3 class="text-lg 2xl:text-xl font-bold mb-4 border-b border-gray-100 pb-2">SOBRE
                    NOSOTROS</h3>
                <ul class="space-y-2">
                    <li><a href="<?php echo esc_url(home_url('/quienes-somos')); ?>"
                           class="">Quienes Somos</a></li>
                    <li><a href="<?php echo esc_url(home_url('nuestro-equipo')); ?>"
                           class="">Nuestro Equipo</a></li>
                    <li><a href="<?php echo esc_url(home_url('instalaciones')); ?>"
                           class="">Nuestras Instalaciones</a></li>
                </ul>
            </div>

            <!-- PAGES 2 Column -->
            <div hidden="">
                <h3 class="text-sky-800 font-bold text-lg 2xl:text-xl mb-4 border-b border-gray-100 pb-2">NUESTRA
                    TRAYECTORIA</h3>
                <ul class="space-y-2">
                    <li><a href="<?php echo esc_url(home_url('/nuestro-impacto')); ?>">Nuestro Impacto</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
