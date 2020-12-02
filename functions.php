<?php

function dark_portfolio_setup() {

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );
    // Add theme support for post thumbnails (featured images).
    add_theme_support( 'post-thumbnails' );

    // Enable support for HTML5 markup.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ) );

}

add_action( 'after_setup_theme', 'dark_portfolio_setup' );
/**
 * Enqueue scripts and styles
 */
function dark_portfolio_setup_scripts() {

    wp_enqueue_style( 'outlet_style', get_template_directory_uri() . '/dist/css/app.css', [], '20201201', 'all' );
    wp_enqueue_script( 'outlet_javascript', get_template_directory_uri() . '/dist/js/app.js', [], '20201201', 'all' );

}

add_action( 'wp_enqueue_scripts', 'dark_portfolio_setup_scripts' );

