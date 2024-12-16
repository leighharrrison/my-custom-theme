<?php

function musician_theme_setup() {
    add_theme_support('title-tag'); 
    add_theme_support('post-thumbnails'); 
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'musician-theme'),
    ));
}
add_action('after_setup_theme', 'musician_theme_setup');

function musician_theme_assets() {
    wp_enqueue_style('musician-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'musician_theme_assets');
?>
<?php
function add_home_link_to_menu($items, $args) {
    if ($args->theme_location == 'primary') {
        $home_link = '<li class="menu-item"><a href="' . home_url() . '">Home</a></li>';
        $items = $home_link . $items;
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_home_link_to_menu', 10, 2);
function load_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'load_font_awesome');

