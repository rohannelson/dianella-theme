<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package FSE
 * @since 0.0.1
 */

if ( ! function_exists( 'dianella_theme_support' ) ) : 
	function dianella_theme_support() {
            add_theme_support( 'wp-block-styles' );
			add_theme_support( 'editor-styles' );
			add_theme_support( 'post-thumbnails' );
			add_editor_style( 'style.css' );
        }

add_action( 'after_setup_theme', 'dianella_theme_support' );
endif;

function dianella_theme_styles() {
	
	wp_enqueue_style( 'dianella-theme-style', get_stylesheet_uri() );

		wp_enqueue_style( 'dianella-theme-style' );
}
add_action( 'wp_enqueue_scripts', 'dianella_theme_styles' );

function rkn_google_fonts() {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@400;700&family=Source+Sans+Pro&display=swap', false );
}
add_action ( 'wp_enqueue_scripts', 'rkn_google_fonts' );

function rkn_add_google_fonts_for_editor() {
	add_editor_style(
		array(
		'https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@400;700&family=Source+Sans+Pro&display=swap'
		)
	);
}
add_action ( 'after_setup_theme', 'rkn_add_google_fonts_for_editor' );