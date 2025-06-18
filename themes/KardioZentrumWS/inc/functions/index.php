<?php

require get_template_directory() . '/inc/functions/hero-slider.php';
require get_template_directory() . '/inc/functions/search-overlay.php';
require get_template_directory() . '/inc/functions/page-banner.php';
require get_theme_file_path('/inc/functions/customSetupTheme.php');
require get_theme_file_path('/inc/functions/search-route.php');
require get_theme_file_path('/inc/functions/mostrarInstalaciones.php');


/**
 * PASO 5: SHORTCODE PARA USAR EN PÁGINAS
 */
function installations_gallery_shortcode($atts) {
    $atts = shortcode_atts(array(
        'title' => '',
        'subtitle' => '',
        'show_cta' => 'true',
        'cta_link' => '/contacto',
    ), $atts);

    $args = array();
    if($atts['title']) $args['title'] = $atts['title'];
    if($atts['subtitle']) $args['subtitle'] = $atts['subtitle'];
    if($atts['cta_link']) $args['cta_button_link'] = $atts['cta_link'];
    $args['show_cta'] = $atts['show_cta'] === 'true';

    return display_installations_gallery($args);
}
add_shortcode('installations_gallery', 'installations_gallery_shortcode');


/**
 * PASO 7: MENSAJES DE AYUDA EN EL ADMIN
 */
function installation_category_admin_notices() {
    $screen = get_current_screen();
    if($screen->post_type === 'installation_cat') {
        echo '<div class="notice notice-info"><p><strong>💡 Tip:</strong> Para obtener el ID de una imagen, ve a Media Library, selecciona la imagen y copia el número de la URL. Por ejemplo: si la URL es "post.php?post=123&action=edit", el ID es 123.</p></div>';
    }
}
add_action('admin_notices', 'installation_category_admin_notices');

/**
 * PASO 8: CUSTOMIZAR COLUMNAS EN EL ADMIN
 */
function installation_category_admin_columns($columns) {
    $new_columns = array();
    $new_columns['cb'] = $columns['cb'];
    $new_columns['title'] = 'Categoría';
    $new_columns['icon'] = 'Icono';
    $new_columns['images_count'] = 'N° Imágenes';
    $new_columns['order'] = 'Orden';
    $new_columns['date'] = $columns['date'];

    return $new_columns;
}
add_filter('manage_installation_cat_posts_columns', 'installation_category_admin_columns');

function installation_category_admin_column_content($column, $post_id) {
    switch($column) {
        case 'icon':
            $icon = get_field('category_icon', $post_id);
            echo $icon ? "icon-$icon" : '-';
            break;
        case 'images_count':
            $images = get_field('category_images', $post_id);
            $count = $images ? count(explode(',', $images)) : 0;
            echo $count;
            break;
        case 'order':
            echo get_field('category_order', $post_id) ?: '1';
            break;
    }
}
add_action('manage_installation_cat_posts_custom_column', 'installation_category_admin_column_content', 10, 2);