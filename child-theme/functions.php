<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Load child theme setup first.
require_once trailingslashit( get_stylesheet_directory() ) . 'setup.php';

/**
 * IMPORTANT:
 * Do not remove the code above!
 * Put your custom PHP code below.
 *
 * Child theme functionality:
 */

/**
 * Enqueuing stylesheet file to editor.
 *
 * Remove this when not needed.
 */
add_action( 'init', function() {

	// Add `style.css` file to editor.
	add_editor_style(
		esc_url_raw(
			add_query_arg(
				'ver',
				'v' . WebManDesign\Child_Theme\Setup::$stylesheet_filemtime,
				get_stylesheet_uri()
			)
		)
	);
}, 99 );
