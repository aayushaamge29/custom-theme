<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container header-container">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>\images\novel logo.jpg" alt="Logo">
        </div>
        
        <nav class="main-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main_menu',
                'menu_class' => 'nav-menu',
                'container' => false
            ));
            ?>
        </nav>
    </div>
</header>
