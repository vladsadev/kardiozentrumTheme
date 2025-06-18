<?php

add_action('after_setup_theme', 'themeAddFeaturesSupport');

function themeAddFeaturesSupport(): void
{
    add_theme_support('title-tag');
//    add_theme_support( 'custom-logo' );


    add_theme_support('post-thumbnails');
    add_image_size('pageBanner', 1800, 400, true);
    add_image_size('doctorProfile', 460, 380, true);
    add_image_size('homePageSlider', 1850, 1700, true);
}

add_action('pre_get_posts', 'themeFilterPostsQueries');

function themeFilterPostsQueries($query): void
{

    if (is_admin() || !$query->is_main_query()) {
        if (is_post_type_archive('evento')) {

            $today = date('Y-m-d', strtotime('-1 day'));
            $query->set('posts_per_page', -1);
            $query->set('meta_key', 'fecha_del_evento');
            $query->set('orderby', 'meta_value');
            $query->set('order', 'ASC');

            $query->set('meta_query', [
                [
                    'key' => 'fecha_del_evento',
                    'compare' => '>=',
                    'value' => $today
                ]
            ]);
        }

        return;
    }
    if (is_post_type_archive('evento') and $query->is_main_query()) {

        $today = date('Y-m-d', strtotime('-1 day'));

        $query->set('meta_key', 'fecha_del_evento');
        $query->set('orderby', 'meta_value');
        $query->set('order', 'ASC');

        $query->set('meta_query', [
            [
                'key' => 'fecha_del_evento',
                'compare' => '>=',
                'value' => $today
            ]
        ]);
    }

    if (is_post_type_archive('tratamiento') and $query->is_main_query()) {

        $query->set('posts_per_page', -1);
//        $query->set('orderby', 'title');
        $query->set('order', 'DES');
    }

}