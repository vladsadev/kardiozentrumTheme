<?php

add_action('rest_api_init', 'kzRegisterSearch');
function kzRegisterSearch()
{
    register_rest_route('kz/v1', 'search', [
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'kzSearchResults'
    ]);
}

function kzSearchResults($data)
{
    $generalQuery = new WP_Query([
        'post_type' => ['post', 'page', 'doctor', 'evento', 'tratamiento'],
        's' => sanitize_text_field($data['term'])
    ]);

    $results = [
        'generalInfo' => [],
        'doctor' => [],
        'evento' => [],
        'tratamiento' => []
    ];

    while ($generalQuery->have_posts()) {
        $generalQuery->the_post();

        if (get_post_type() == 'post' or get_post_type() == 'page') {
            $results['generalInfo'][] = [
                'title' => get_the_title(),
                'permalink' => get_the_permalink()
            ];
        }

        if (get_post_type() == 'doctor') {
            $results['doctor'][] = [
                'title' => get_the_title(),
                'permalink' => get_the_permalink()
            ];
        }

        if (get_post_type() == 'evento') {
            $results['evento'][] = [
                'title' => get_the_title(),
                'permalink' => get_the_permalink()
            ];
        }
        if (get_post_type() == 'tratamiento') {
            $results['tratamiento'][] = [
                'title' => get_the_title(),
                'permalink' => get_the_permalink()
            ];
        }
        wp_reset_postdata();

    }

    return $results;
}