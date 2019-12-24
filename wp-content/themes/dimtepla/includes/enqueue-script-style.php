<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; //Exit if accessed directly
}

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'dimtepla_style' );
function dimtepla_style() {
    wp_enqueue_style( 'dimtepla-style', get_stylesheet_uri() );
    wp_enqueue_style('bootstrap-styles', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), null, 'all');

}

add_action( 'wp_enqueue_scripts', 'dimtepla_scripts' );
function dimtepla_scripts() {
    wp_enqueue_script( 'dimtepla-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
    wp_enqueue_script( 'dimtepla-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_script( 'dimtepla-filter', get_template_directory_uri() . '/assets/js/filter.js', array(), null, true );
    wp_enqueue_script( 'dimtepla-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), null, false );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}