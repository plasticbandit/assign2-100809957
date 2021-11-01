<?php

function owlpediachild_enqueue_scripts() {
    wp_enqueue_style(
        'owlpediachild-style',
        get_stylesheet_uri(),
        array( 'twentytwentyone-style' ), 
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
}

add_action( 'wp_enqueue_scripts', 'owlpediachild_enqueue_scripts' );