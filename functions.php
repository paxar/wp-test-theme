<?php

function addstyles() {

wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'addstyles');


// Add NAV locations

register_nav_menus([
    'header' => __('Header Menu'),
    'footer' => __('Footer Menu'),
]);





