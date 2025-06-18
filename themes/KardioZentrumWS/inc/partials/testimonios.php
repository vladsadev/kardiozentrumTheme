<div class="flex items-center w-full">
    <div class="swiper">
        <?php $frontPageTestimonios = new WP_Query([
            'posts_per_page' => -1,
            'post_type' => 'testimonio',
        ]); ?>
        <ul class="swiper-wrapper h-full">
            <?php while ($frontPageTestimonios->have_posts()) :
                $frontPageTestimonios->the_post(); ?>
                <!-- Slides -->
                <li class="swiper-slide">
                    <div
                            class="flex bg-yellow-light flex-col overflow-hidden rounded-lg min-h-60"
                    >
                        <!-- reseña del paciente-->
                        <div class="flex-1">
                            <p class="flex justify-center items-center p-2 md:p-3 2xl:p-4">
                                <?= get_field('resena'); ?>
                            </p>
                        </div>
                        <!-- Nombre y valoración a la atención -->
                        <div class="w-full m-0 bg-red-light px-2 text-slate-50">
                            <div
                                    class="flex flex-row items-center justify-start gap-4 p-2"
                            >
                                <div class="size-8 rounded-full bg-slate-300"></div>
                                <div class="flex flex-col">
                                    <p class="font-semibold text-sm md:text-base"><?= get_field('nombre_del_paciente')
                                            ?? ' ' ?></p>
                                    <span class="text-xs md:text-sm">Paciente: <?= get_field('doctor_del_paciente')
                                        ?></span>
                                </div>
                                <div class="ml-auto"><?php $valoracion = get_field('valoracion');
                                    $contador = 1;
                                    $total = 5;
                                    while ($contador <= $valoracion) : ?>
                                        <i class="ri-star-fill text-yellow-400"></i>
                                        <?php
                                        $contador++;
                                        $total--;
                                    endwhile; ?>
                                    <?php for ($i = 0; $i < $total; $i++) : ?>
                                        <i class="ri-star-fill font-extralight text-white"></i>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </ul>
        <!-- <div class="swiper-pagination"></div> -->
    </div>
</div>
