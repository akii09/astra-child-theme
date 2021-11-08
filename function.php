<?php

add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles' );
function astra_child_enqueue_styles() {
    wp_enqueue_style( 'astra-child-style', get_stylesheet_uri(),
        array( 'astra-theme-css' ), 
        wp_get_theme()->get('1.0.0') // this only works if you have Version in the style header
    );
}