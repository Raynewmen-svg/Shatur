<?php
/**
 * shatur-theme functions and definitions
 */

if ( ! function_exists( 'shatur_setup' ) ) :
    function shatur_setup() {
        // Add support for block styles and wide alignment
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'dark-editor-style' );

        // Enable support for core block templates (FSE theme)
        add_theme_support( 'block-templates' );

        // Register navigation
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'shatur-theme' ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'shatur_setup' );

// Enqueue front-end styles
function shatur_enqueue_assets() {
    wp_enqueue_style( 'shatur-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'shatur_enqueue_assets' );

// Load block editor styles
function shatur_editor_styles() {
    add_editor_style( 'assets/css/editor.css' );
}
add_action( 'admin_init', 'shatur_editor_styles' );
