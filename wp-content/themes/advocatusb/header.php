<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AdvocatusB
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">


    <link rel="stylesheet" href="flexslider/flexslider.css" type="text/css">
    <script src="flexslider/jquery.flexslider.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <header id="masthead" class="site-header">
        <div class="container">
            <div class="menu_container">
                <nav class="clearfix">
                    <div class="logo">
                        <a href="#"><?php the_custom_logo(); ?></a>
                    </div>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'menu_class' => 'menu',
                        'menu_id' => '',

                    ));

                    add_filter('nav_menu_css_class', 'add_my_class_to_nav_menu', 10, 2);
                    function add_my_class_to_nav_menu($classes, $item)
                    {
                        /* $classes contain
                        Array(
                            [1] => menu-item
                            [2] => menu-item-type-post_type
                            [3] => menu-item-object-page
                            [4] => menu-item-284
                        )
                        */
                        $classes[1] = 'my__class';
                        return $classes;
                    }

                    ?>
                </nav>
            </div>
        </div>
        <div class="main_img">
            <img src="<?php header_image(); ?>" alt="Adam Suaere Lawyer"/>
            <div class="headline_position">
                <div class="headline clearfix">
                    <h1 class="main_text"><?php bloginfo('name'); ?><span
                                class="lawyer"><?php bloginfo('description'); ?></span></h1>
                    <?php if (get_theme_mod('button_display', 'show') == 'show') : ?>
                        <a class="contact_button"
                           href="<?php echo get_theme_mod('url_button'); ?>"
                           style="background: <?php echo get_theme_mod('header_button_color', '#e8bf5d'); ?>">
                            <?php echo get_theme_mod('text_button'); ?>
                        </a>
                    <?php endif ?>
                </div>
            </div>
        </div>

    </header><!-- #masthead -->

    <div id="content" class="site-content">
