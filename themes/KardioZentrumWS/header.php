<?php
/**
 * Header para el tema
 *
 * Este es el template que muestra la sección <head> y el inicio del <body>
 * incluyendo el encabezado con el mega menu
 *
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body class="" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--<div id="page" class="site">-->
<header class="fixed bg-transparent inset-0 z-20 max-h-min">
    <!-- Top header with contact info-->
    <?php get_template_part('inc/partials/top-header'); ?>

    <!-- Main Navigation Menu -->
    <?php get_template_part('inc/partials/navigation-menu'); ?>
</header>