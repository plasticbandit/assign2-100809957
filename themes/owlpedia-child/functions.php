<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

function owlpediachild_enqueue_scripts() {
    wp_enqueue_style(
        'owlpedia-child-style',
        get_stylesheet_uri(),
        array( 'twenty-twenty-one-style' ), 
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
}

add_action( 'wp_enqueue_scripts', 'owlpediachild_enqueue_scripts' );


// function owlpediachild_add_stylesheet() {
//     wp_enqueue_style( 'owlpedia-style', get_stylesheet_directory_uri() . '/style.css', false, '1.0', 'all' );
// }

// add_action( 'wp_enqueue_scripts', 'owlpediachild_add_stylesheet' );