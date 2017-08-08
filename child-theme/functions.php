<?php
/**
 * Child theme functions
 *
 * @package  CHILD_THEME_NAME
 *
 * @since    1.0.0
 * @version  1.0.0
 */





/**
 * Enqueue parent theme stylesheet the right way
 *
 * @since    1.0.0
 * @version  1.0.0
 */
function CHILD_THEME_SLUG_enqueue_parent_theme_style() {

	// Requirements check

		if ( current_theme_supports( 'child-theme-stylesheet' ) ) {
			return;
		}


	// Processing

		wp_enqueue_style( 'CHILD_THEME_SLUG-parent-style', get_template_directory_uri() . '/style.css' );

		wp_enqueue_style( 'CHILD_THEME_SLUG-child-style', get_stylesheet_uri() );

} // /CHILD_THEME_SLUG_enqueue_parent_theme_style

add_action( 'wp_enqueue_scripts', 'CHILD_THEME_SLUG_enqueue_parent_theme_style', 1000 );





/**
 * Put your custom PHP code below...
 */
