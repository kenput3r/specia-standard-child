<?php
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');
function child_theme_enqueue_styles() {
    $parent_style = 'specia-standard';
    $child_style = 'specia-standard-child';
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style($child_style, get_stylesheet_directory_uri() . '/style.css', array($parent_style), wp_get_theme()->get('Version'));
    wp_enqueue_style('new-font-awesome', '//use.fontawesome.com/releases/v5.6.3/css/all.css');
}
add_action('wp_enqueue_scripts', 'child_theme_enqueue_scripts');
function child_theme_enqueue_scripts() {
    wp_enqueue_script('functions_js', get_stylesheet_directory_uri() . '/js/functions.js', array('jquery'), '1.0', true);
}
?>