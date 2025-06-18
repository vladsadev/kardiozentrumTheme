<?php
function register_installations_category_cpt() {
    $labels = array(
        'name'                  => 'Categorías de Instalaciones',
        'singular_name'         => 'Categoría de Instalación',
        'menu_name'            => 'Instalaciones',
        'name_admin_bar'       => 'Categoría',
        'archives'             => 'Archivo de Instalaciones',
        'attributes'           => 'Atributos de Categoría',
        'parent_item_colon'    => 'Categoría Padre:',
        'all_items'            => 'Todas las Categorías',
        'add_new_item'         => 'Agregar Nueva Categoría',
        'add_new'              => 'Agregar Nueva',
        'new_item'             => 'Nueva Categoría',
        'edit_item'            => 'Editar Categoría',
        'update_item'          => 'Actualizar Categoría',
        'view_item'            => 'Ver Categoría',
        'view_items'           => 'Ver Categorías',
        'search_items'         => 'Buscar Categorías',
    );

    $args = array(
        'label'                => 'Categoría de Instalación',
        'description'          => 'Categorías para organizar las imágenes de instalaciones',
        'labels'               => $labels,
        'supports'             => array('title', 'editor', 'thumbnail', 'page-attributes'),
        'public'               => false,
        'show_ui'              => true,
        'show_in_menu'         => true,
        'menu_position'        => 25,
        'menu_icon'            => 'dashicons-building',
        'show_in_admin_bar'    => true,
        'show_in_nav_menus'    => false,
        'can_export'           => true,
        'has_archive'          => false,
        'exclude_from_search'  => true,
        'publicly_queryable'   => false,
        'capability_type'      => 'post',
        'show_in_rest'         => false,
    );

    register_post_type('installation_cat', $args);
}
add_action('init', 'register_installations_category_cpt', 0);

/**
 * PASO 2: CAMPOS ACF PARA CADA CATEGORÍA
 * Solo usa campos básicos de ACF gratuito
 */
function register_installation_category_fields() {
    if(function_exists('acf_add_local_field_group')):
        
        acf_add_local_field_group(array(
            'key' => 'group_installation_category',
            'title' => 'Configuración de Categoría de Instalación',
            'fields' => array(
                array(
                    'key' => 'field_category_icon',
                    'label' => 'Icono de la Categoría',
                    'name' => 'category_icon',
                    'type' => 'select',
                    'instructions' => 'Selecciona el icono que mejor represente esta categoría',
                    'required' => 1,
                    'choices' => array(
                        'stethoscope' => '🩺 Estetoscopio (Consultorios)',
                        'microscope' => '🔬 Microscopio (Laboratorio)',
                        'users' => '👥 Usuarios (Recepción/Atención)',
                        'coffee' => '☕ Café (Salas de Espera)',
                        'shield' => '🛡️ Escudo (Seguridad/Bioseguridad)',
                        'heart' => '❤️ Corazón (Cardiología)',
                        'baby' => '👶 Bebé (Pediatría)',
                        'eye' => '👁️ Ojo (Oftalmología)',
                        'tooth' => '🦷 Diente (Odontología)',
                        'brain' => '🧠 Cerebro (Neurología)',
                    ),
                    'default_value' => 'stethoscope',
                ),
                array(
                    'key' => 'field_category_description',
                    'label' => 'Descripción Corta',
                    'name' => 'category_description',
                    'type' => 'textarea',
                    'instructions' => 'Descripción breve que aparecerá bajo el título (máximo 150 caracteres)',
                    'rows' => 3,
                    'maxlength' => 150,
                ),
                array(
                    'key' => 'field_category_images',
                    'label' => 'IDs de Imágenes',
                    'name' => 'category_images',
                    'type' => 'text',
                    'instructions' => 'IDs de imágenes separadas por comas. Ejemplo: 123,456,789<br><strong>Tip:</strong> Ve a Media Library, selecciona una imagen y copia el ID desde la URL',
                    'placeholder' => '123,456,789',
                ),
                array(
                    'key' => 'field_category_order',
                    'label' => 'Orden de Visualización',
                    'name' => 'category_order',
                    'type' => 'number',
                    'instructions' => 'Número para ordenar las categorías (menor número = aparece primero)',
                    'default_value' => 1,
                    'min' => 1,
                    'max' => 100,
                ),
                array(
                    'key' => 'field_category_slug',
                    'label' => 'Slug CSS',
                    'name' => 'category_slug',
                    'type' => 'text',
                    'instructions' => 'Identificador único para CSS/JS (sin espacios, solo letras y guiones)',
                    'placeholder' => 'consultorios-generales',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'installation_cat',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
        ));
        
    endif;
}
add_action('acf/init', 'register_installation_category_fields');