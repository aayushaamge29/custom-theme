<?php

// Enqueue Styles and Scripts
function custom_theme_assets() {
    // Main Stylesheet
    wp_enqueue_style('custom-style', get_stylesheet_uri());
    
    // Additional CSS
    wp_enqueue_style('theme-css', get_template_directory_uri() . '/css/style.css');

    // JS file
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'custom_theme_assets');

// Theme Setup
function custom_theme_setup() {
    // Add featured image support
    add_theme_support('post-thumbnails');
    
    // Register Menus
    register_nav_menus(array(
        'main_menu' => 'Main Menu'
    ));
}
add_action('after_setup_theme', 'custom_theme_setup');

// Register Custom Post Type - Testimonials
function custom_post_types() {
    register_post_type('testimonials', array(
        'public' => true,
        'label' => 'Testimonials',
        'menu_icon' => 'dashicons-testimonial',
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true
    ));
}
add_action('init', 'custom_post_types');

?>
