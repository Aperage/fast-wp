<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles');
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles_last', 999);
function theme_enqueue_styles() {
    //wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/../custom-memorable-child/css/bootstrap.min.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
function theme_enqueue_styles_last() {
    wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/../legomania/custom.css' );
}