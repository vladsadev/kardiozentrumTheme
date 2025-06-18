<header id="top-information-bar" class="relative w-full z-0 text-white bg-linear-to-b/decreasing from-blue-dark/50
 to-blue-dark/10
py-3">
    <div class="container mx-auto px-4 flex flex-col min-h-fit md:flex-row justify-between
        items-center">
        <!-- Logo -->
        <div class="flex mb-4 md:mb-0 w-[16rem]">
            <img class="w-[9.5rem] lg:w-[10rem] mx-auto"
                 src="<?= get_theme_file_uri('/src/assets/logo-kardiozentrum.jpg') ?>"
                 alt="">
        </div>

        <!-- Contact Info -->
        <div class="flex md:ml-auto w-full sm:w-2/3 lg:w-2/5  gap-2 md:gap-4 lg:gap-8">
            <!-- Phone Numbers -->
            <div class="flex flex-col md:justify-end items-start space-y-1 w-1/2">
                <div class="md:space-x-1 text-xs sm:text-base lg:text-[17px] text-slate-100">
                    <i class="ri-cellphone-fill"></i>
                    <span class="text-red-500 text-shadow-md text-shadow-blue-950/90 lg:tracking-wider
                        font-bold">
                            715 62862 - EMERGENCIAS
                        </span>
                </div>
                <div class="md:space-x-1 text-xs sm:text-base text-white lg:text-[17px] text-slate-100">
                    <i class="ri-whatsapp-line"></i>
                    <a class="hover:text-yellow-light hover:font-bold animate-heartbeat inline-flex transition-colors duration-300 focus:ring-2 focus:ring-offset-2 focus:outline-none"
                       href="https://wa.me/<?php echo '71562862' ?>?text=Hola%2C%20me%20gustaría%20más%20información."
                       target="_blank">
                        775 99257
                    </a>
                </div>
            </div>

            <!-- Address -->
            <div class="flex w-1/2 items-center text-xs sm:text-base text-white lg:text-[17px] justify-start gap-2">
                <i class="ri-map-pin-line"></i>
                <a class="hover:text-yellow-light hover:font-bold"
                   href="https://maps.app.goo.gl/fGz1cJoJWJt29Zsw9"
                   target="_blank">
                    Calle 14 de Obrajes N. 669<br>
                    La Paz, Bolivia
                </a>
            </div>
        </div>
    </div>
</header>

