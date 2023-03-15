<?php

// Load in our CSS
function billease_enqueue_styles() {

    wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/script.js',array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'billease_enqueue_styles' );


?>