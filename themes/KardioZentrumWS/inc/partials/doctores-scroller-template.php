<?php $doctores = new WP_Query([
    'posts_per_page' => -1,
    'post_type' => 'doctor',
]); ?>

<section class="medical-section bg-fixed">
    <div class="container max-w-7xl">
        <!-- Header -->
        <div class="section-header fade-in-up">
            <h3 class="section-title">Nuestros Especialistas</h3>
            <div class="section-divider"></div>
            <p class="section-description">
                Cada miembro de nuestro equipo aporta años de experiencia y dedicación excepcional
            </p>
        </div>

        <!-- Scroller Principal -->
        <div class="medical-scroller fade-in-up">
            <div class="scroller" data-speed="normal" data-direction="left" data-pause-on-hover="true">
                <div class="scroller__inner">
                    <?php while ($doctores->have_posts()):
                        $doctores->the_post(); ?>
                        <!-- Doctor 1 -->
                        <div class="doctor-card">
                            <div class="doctor-image">
                                <?php the_post_thumbnail('doctorProfile') ?>
                            </div>
                            <div class="doctor-content">
                                <h4 class="doctor-name"><?= the_title() ?></h4>
                                <p class="doctor-specialty text-red-light"><?= get_field('especialidad') ?></p>
                                <p class="doctor-description">
                                    <?= get_field('resumen_de_la_especialidad') ?>
                                </p>
                                <div class="doctor-footer">
                                    <a href="<?= get_the_permalink() ?>" class="profile-btn">
                                        Ver perfil <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Botón para ver equipo completo -->
    <div class="text-center pt-4 md:pt-8 lg:pt-10 relative">
        <a href="<?= site_url('doctores') ?>"
           class="inline-block bg-blue-dark hover:bg-blue-darkest text-white font-semibold py-3 px-8 rounded-lg
               transition-colors">
            Revisa nuestro directorio médico
        </a>
    </div>
</section>