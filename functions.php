<?php
/**
 * Shatur Theme Functions
 */

if ( ! function_exists( 'shatur_setup' ) ) {
    function shatur_setup() {
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'dark-editor-style' );
        add_theme_support( 'block-templates' );
        add_theme_support( 'post-thumbnails' );
        
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'shatur-theme' ),
            'footer' => __( 'Footer Menu', 'shatur-theme' ),
        ) );
    }
}
add_action( 'after_setup_theme', 'shatur_setup' );

function shatur_enqueue_assets() {
    wp_enqueue_style( 'shatur-style', get_stylesheet_uri(), array(), '1.0.0' );
    wp_enqueue_script( 'shatur-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'shatur_enqueue_assets' );

// Register custom post types if needed
function shatur_register_post_types() {
    // Can add custom post types here
}
add_action( 'init', 'shatur_register_post_types' );

// Add custom image sizes
add_image_size( 'shatur-gallery', 400, 400, true );
add_image_size( 'shatur-featured', 1200, 600, true );
