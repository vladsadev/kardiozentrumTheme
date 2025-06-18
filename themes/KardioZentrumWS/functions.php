<?php
require get_template_directory() . '/inc/functions/index.php';

// Limpiar output buffer antes de respuestas REST API
add_action('rest_api_init', function () {
    if (ob_get_level()) {
        ob_clean();
    }
});


add_action('rest_api_init', 'kz_custom_rest');
function kz_custom_rest()
{
    register_rest_field('post', 'author_name', [
        'get_callback' => function ($post) {
            return get_the_author_meta('display_name', $post['author']);
        }
    ]);

    // También para páginas si las necesitas
    register_rest_field('page', 'author_name', [
        'get_callback' => function ($post) {
            return get_the_author_meta('display_name', $post['author']);
        }
    ]);
}

// Enqueue de scripts y estilos con soporte para Vite
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');
function theme_enqueue_assets()
{
    $theme_version = wp_get_theme()->get('Version');
    $manifest_path = get_theme_file_path('/dist/.vite/manifest.json');

    if (file_exists($manifest_path)) {
        $manifest = json_decode(file_get_contents($manifest_path), true);
        if (isset($manifest['src/js/main.js'])) {
            $main_js = $manifest['src/js/main.js']['file'];
            $css_files = $manifest['src/js/main.js']['css'] ?? array();

            // Encolar JS principal
            wp_enqueue_script('theme-scripts', get_theme_file_uri('/dist/' . $main_js), array('jquery'),
                $theme_version, true);

            // MOVER wp_localize_script AQUÍ, después de enqueue
            wp_localize_script('theme-scripts', 'kzData', [
                'root_url' => get_site_url(),
                'ajax_url' => admin_url('admin-ajax.php'),
                'nonce' => wp_create_nonce('search_nonce')
            ]);

            // Encolar CSS
            foreach ($css_files as $css_file) {
                wp_enqueue_style('theme-styles', get_theme_file_uri('/dist/' . $css_file), array(), $theme_version);
            }
        }
    } else {
        // Fallback para desarrollo (si no existe manifest)
        wp_enqueue_script('theme-scripts', get_theme_file_uri('/src/js/main.js'), array('jquery'),
            $theme_version, true);

        wp_localize_script('theme-scripts', 'kzData', [
            'root_url' => get_site_url(),
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('search_nonce')
        ]);
    }

    // Resto de dependencias...
    wp_enqueue_style('remix-icon', '//cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css');
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
}


// Personalizamos el login
add_filter('login_headerurl', 'ourHeaderUrl');
function ourHeaderUrl()
{
    return esc_url(site_url('/'));
}

add_action('login_enqueue_scripts', 'ourLoginCSS');
function ourLoginCSS()
{
    wp_enqueue_style('os', get_theme_file_uri('/dist/css/main.css'));
}

add_filter('login_headertitle', 'ourHeaderTitle');
function ourHeaderTitle()
{
    return get_bloginfo('name');
}

//Redirect subscriber accounts
add_action('admin_init', 'redirectSubsToFrontend');
function redirectSubsToFrontend()
{
    $ourCurrentUser = wp_get_current_user();
//    echo '<pre>';
    if (count($ourCurrentUser->roles) == 1 and $ourCurrentUser->roles[0] == 'subscriber') {
        wp_redirect(site_url('/'));
        exit;
    }

}

add_action('wp_loaded', 'noSubsAdminBar');
function noSubsAdminBar()
{
    $ourCurrentUser = wp_get_current_user();
//    var_dump($ourCurrentUser);
    if (count($ourCurrentUser->roles) == 1 and $ourCurrentUser->roles[0] == 'subscriber') {
        show_admin_bar(false);
    }

}