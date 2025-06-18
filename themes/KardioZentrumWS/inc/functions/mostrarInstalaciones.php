<?php
/**
 * PASO 3: FUNCIONES HELPER PARA OBTENER DATOS
 */
function get_installations_categories() {
    $categories = get_posts(array(
        'post_type' => 'installation_cat',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'meta_key' => 'category_order',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
    ));

    $formatted_categories = array();

    foreach($categories as $category) {
        $image_ids = get_field('category_images', $category->ID);
        $images = array();

        if($image_ids) {
            $ids = array_map('trim', explode(',', $image_ids));
            foreach($ids as $id) {
                if(wp_attachment_is_image($id)) {
                    $images[] = array(
                        'id' => $id,
                        'url' => wp_get_attachment_url($id),
                        'large' => wp_get_attachment_image_url($id, 'large'),
                        'medium' => wp_get_attachment_image_url($id, 'medium'),
                        'title' => get_the_title($id),
                        'alt' => get_post_meta($id, '_wp_attachment_image_alt', true),
                        'caption' => wp_get_attachment_caption($id),
                    );
                }
            }
        }

        $formatted_categories[] = array(
            'id' => $category->ID,
            'title' => $category->post_title,
            'description' => get_field('category_description', $category->ID),
            'content' => $category->post_content,
            'icon' => get_field('category_icon', $category->ID),
            'slug' => get_field('category_slug', $category->ID) ?: sanitize_title($category->post_title),
            'order' => get_field('category_order', $category->ID) ?: 1,
            'images' => $images,
        );
    }

    return $formatted_categories;
}

/**
 * PASO 4: FUNCIÓN PRINCIPAL PARA MOSTRAR LA GALERÍA
 */
function display_installations_gallery($args = array()) {
    $defaults = array(
        'title' => 'Nuestras Instalaciones',
        'subtitle' => 'Conoce nuestros espacios diseñados pensando en tu comodidad y bienestar. Cada área está equipada con tecnología moderna y un ambiente acogedor.',
        'show_cta' => true,
        'cta_text' => '¿Te gustaría conocer nuestras instalaciones?',
        'cta_description' => 'Agenda una visita personalizada y descubre por qué somos la mejor opción para tu cuidado médico.',
        'cta_button_text' => 'Agendar Visita',
        'cta_button_link' => '/contacto',
        'container_class' => 'installations-gallery-container',
    );

    $args = wp_parse_args($args, $defaults);
    $categories = get_installations_categories();

    if(empty($categories)) {
        echo '<p>No hay categorías de instalaciones configuradas.</p>';
        return;
    }

    ob_start();
    ?>

    <div class="<?php echo esc_attr($args['container_class']); ?>" id="installations-gallery">
        <!-- Header -->
        <div class="gallery-header text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">
                <?php echo esc_html($args['title']); ?>
            </h2>
            <?php if($args['subtitle']): ?>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    <?php echo esc_html($args['subtitle']); ?>
                </p>
            <?php endif; ?>
        </div>

        <!-- Category Navigation -->
        <div class="category-navigation flex flex-wrap justify-center gap-2 mb-8">
            <?php foreach($categories as $index => $category): ?>
                <button
                        class="category-btn flex items-center gap-2 px-6 py-3 rounded-full transition-all duration-300 <?php echo $index === 0 ? 'active bg-blue-600 text-white shadow-lg transform scale-105' : 'bg-gray-100 text-gray-700 hover:bg-gray-200 hover:scale-102'; ?>"
                        data-category="<?php echo $index; ?>"
                        data-slug="<?php echo esc_attr($category['slug']); ?>"
                >
                    <i class="icon-<?php echo esc_attr($category['icon']); ?> w-5 h-5"></i>
                    <span class="font-medium"><?php echo esc_html($category['title']); ?></span>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Categories Content -->
        <div class="categories-content space-y-8">
            <?php foreach($categories as $index => $category): ?>
                <div
                        class="category-content transition-all duration-500 <?php echo $index === 0 ? 'opacity-100 block' : 'opacity-0 hidden'; ?>"
                        data-category="<?php echo $index; ?>"
                >
                    <!-- Category Header -->
                    <div class="category-header text-center mb-8">
                        <div class="flex items-center justify-center gap-3 mb-3">
                            <div class="category-icon p-3 bg-blue-100 rounded-full text-blue-600">
                                <i class="icon-<?php echo esc_attr($category['icon']); ?> w-5 h-5"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900"><?php echo esc_html($category['title']); ?></h3>
                        </div>
                        <?php if($category['description']): ?>
                            <p class="text-gray-600 text-lg"><?php echo esc_html($category['description']); ?></p>
                        <?php endif; ?>
                        <?php if($category['content']): ?>
                            <div class="text-gray-600 mt-2"><?php echo wp_kses_post($category['content']); ?></div>
                        <?php endif; ?>
                    </div>

                    <!-- Images Carousel -->
                    <?php if(!empty($category['images'])): ?>
                        <div class="images-carousel relative" data-category="<?php echo $index; ?>">
                            <!-- Navigation Buttons -->
                            <button
                                    class="carousel-btn prev absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white shadow-lg rounded-full p-3 transition-all duration-200 hover:scale-110"
                                    data-direction="prev"
                            >
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </button>

                            <button
                                    class="carousel-btn next absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white shadow-lg rounded-full p-3 transition-all duration-200 hover:scale-110"
                                    data-direction="next"
                            >
                                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>

                            <!-- Images Container -->
                            <div class="images-container flex gap-6 overflow-x-auto scroll-smooth pb-4 px-12" style="scrollbar-width: none; -ms-overflow-style: none;">
                                <?php foreach($category['images'] as $image): ?>
                                    <div class="image-item flex-shrink-0 group cursor-pointer">
                                        <div class="relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 group-hover:scale-105">
                                            <img
                                                    src="<?php echo esc_url($image['large']); ?>"
                                                    alt="<?php echo esc_attr($image['alt'] ?: $image['title']); ?>"
                                                    class="w-80 h-60 object-cover transition-transform duration-300 group-hover:scale-110"
                                                    loading="lazy"
                                                    data-full="<?php echo esc_url($image['url']); ?>"
                                            >
                                            <!-- Overlay -->
                                            <div class="image-overlay absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                <div class="absolute bottom-0 left-0 right-0 p-6">
                                                    <?php if($image['title']): ?>
                                                        <h4 class="text-white font-semibold text-lg mb-1">
                                                            <?php echo esc_html($image['title']); ?>
                                                        </h4>
                                                    <?php endif; ?>
                                                    <?php if($image['caption']): ?>
                                                        <p class="text-white/90 text-sm">
                                                            <?php echo esc_html($image['caption']); ?>
                                                        </p>
                                                    <?php endif; ?>
                                                    <div class="flex items-center text-white/80 text-sm mt-2">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        </svg>
                                                        <span>Ver ampliado</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php else: ?>
                        <p class="text-center text-gray-500 italic">No hay imágenes configuradas para esta categoría.</p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- CTA Section -->
        <?php if($args['show_cta']): ?>
            <div class="gallery-cta text-center mt-16 p-8 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                    <?php echo esc_html($args['cta_text']); ?>
                </h3>
                <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                    <?php echo esc_html($args['cta_description']); ?>
                </p>
                <a
                        href="<?php echo esc_url($args['cta_button_link']); ?>"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full font-semibold transition-colors duration-200 shadow-lg hover:shadow-xl inline-block"
                >
                    <?php echo esc_html($args['cta_button_text']); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>

    <!-- Modal para vista ampliada -->
    <div id="image-modal" class="fixed inset-0 bg-black/80 z-50 flex items-center justify-center hidden">
        <div class="max-w-4xl max-h-[90vh] relative">
            <button id="close-modal" class="absolute -top-10 right-0 text-white text-2xl hover:text-gray-300">×</button>
            <img id="modal-image" src="" alt="" class="max-w-full max-h-full object-contain">
        </div>
    </div>

    <?php
    return ob_get_clean();
}

