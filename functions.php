<?php
function my_custom_theme_setup() {
    add_theme_support('title-tag');
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'my-custom-theme'),
        'footer-menu' => __('Footer Menu', 'my-custom-theme'),
    ));
}
add_action('after_setup_theme', 'my_custom_theme_setup');

function my_custom_theme_scripts() {
    wp_enqueue_style('maincss', get_template_directory_uri() . '/main.css');
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');