<?php
/**
 * shatur-theme functions and definitions
 */

if ( ! function_exists( 'shatur_setup' ) ) :
    function shatur_setup() {
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'dark-editor-style' );
        add_theme_support( 'block-templates' );
        
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'shatur-theme' ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'shatur_setup' );

function shatur_enqueue_assets() {
    wp_enqueue_style( 'shatur-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'shatur_enqueue_assets' );
