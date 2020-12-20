<?php
/**
 * Theme functions and definitions.
 */
function bifrostbifrost_child_enqueue_styles() {

wp_enqueue_style( 'bifrost/bifrost-style' , get_template_directory_uri() . '/assets/styles/bifrost.css' );

    wp_enqueue_style( 'bifrost/bifrost-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'bifrost/bifrost-style' ),
        wp_get_theme()->get('Version')
    );
}

add_action(  'wp_enqueue_scripts', 'bifrostbifrost_child_enqueue_styles' );