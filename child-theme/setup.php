<?php
/**
 * Child theme setup.
 *
 * @copyright  WebMan Design, Oliver Juhas
 */

namespace WebManDesign\Child_Theme;

use WP_Query;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Setup {

	/**
	 * Stylesheet modification time cache.
	 *
	 * @access  public
	 * @var     string
	 */
	public static $stylesheet_filemtime = '';

	/**
	 * Initialization.
	 *
	 * @return  void
	 */
	public static function init() {

		// Processing

			self::$stylesheet_filemtime = filemtime( get_theme_file_path( 'style.css' ) );

			add_action( 'wp_enqueue_scripts', __CLASS__ . '::assets' );

			add_action( 'after_switch_theme', __CLASS__ . '::parent_options' );

			add_filter( 'pre_render_block', __CLASS__ . '::block', 0, 2 );
			add_filter( 'render_block',     __CLASS__ . '::block', 0, 2 );

	} // /init

	/**
	 * Enqueue parent theme stylesheet.
	 *
	 * This runs only if parent theme does not claim support for
	 * `child-theme-stylesheet`, and so we need to enqueue this
	 * child theme's `style.css` file ourselves.
	 *
	 * If parent theme supports `child-theme-stylesheet`, it enqueues
	 * this child theme's `style.css` file automatically.
	 *
	 * @return  void
	 */
	public static function assets() {

		// Requirements check

			if ( current_theme_supports( 'child-theme-stylesheet' ) ) {
				return;
			}


		// Processing

			// Enqueue parent theme stylesheet.
			wp_enqueue_style(
				'parent-theme-style',
				get_template_directory_uri() . '/style.css',
				array(),
				wp_get_theme( get_template() )->get( 'Version' )
			);

			// Then enqueue the child theme stylesheet.
			wp_enqueue_style(
				'child-theme-style',
				get_stylesheet_uri(),
				array(),
				filemtime( get_theme_file_path( 'style.css' ) )
			);

	} // /assets

	/**
	 * Copy parent theme options.
	 *
	 * @return  void
	 */
	public static function parent_options() {

		// Variables

			$child_theme  = get_stylesheet();
			$parent_theme = get_template();


		// Processing

			/**
			 * Copy theme mods.
			 *
			 * WordPress sets default theme mods when a theme is switched.
			 * It looks like it creates max 4 mod keys during the action.
			 * So, anything above, we presume child theme mods already
			 * exist and we don't proceed with copying.
			 *
			 * @link  https://developer.wordpress.org/reference/functions/switch_theme/
			 */
			if (
				// Check for existing child theme mods:
				4 >= count( (array) get_theme_mods() )
				// Check for WebMan Design child theme mods:
				&& ! get_theme_mod( '__customize_timestamp' )
				// Check for this child theme mods (see below):
				&& ! get_theme_mod( '__switch_theme_timestamp' )
			) {

				// Get parent theme mods.
				$parent_theme_mods = get_option( 'theme_mods_' . $parent_theme );

				// Copy parent theme options to our child theme ones.
				update_option( 'theme_mods_' . $child_theme, $parent_theme_mods );

				// Mark as done for the future.
				set_theme_mod( '__switch_theme_timestamp', esc_attr( gmdate( 'ymdHis' ) ) );
			}

			/**
			 * Copy Site Editor user mods.
			 *
			 * Relevant for block or hybrid themes.
			 */
			if ( false === get_theme_mod( '__site_editor_mods_copy_timestamp' ) ) {

				$query = new WP_Query( array(
					'post_status'    => array( 'publish' ),
					'post_type'      => array( 'wp_template', 'wp_template_part', 'wp_global_styles' ),
					'posts_per_page' => -1,
					'no_found_rows'  => true,
					'tax_query'      => array(
						array(
							'taxonomy' => 'wp_theme',
							'field'    => 'name',
							'terms'    => $parent_theme,
						),
					),
				) );

				foreach ( $query->posts as $post ) {

					$wp_theme = wp_get_object_terms( $post->ID, 'wp_theme', array( 'fields' => 'slugs' ) );

					if (
						! empty( $wp_theme )
						&& ! is_wp_error( $wp_theme )
						&& in_array( $parent_theme, (array) $wp_theme )
					) {

						// Add the child theme to `wp_theme` taxonomy terms.
						$wp_theme   = (array) $wp_theme;
						$wp_theme[] = $child_theme;

						wp_set_object_terms(
							$post->ID,
							$wp_theme,
							'wp_theme'
						);
					}
				}

				// Mark as done for the future.
				set_theme_mod( '__site_editor_mods_copy_timestamp', esc_attr( gmdate( 'ymdHis' ) ) );
			}

	} // /parent_options

	/**
	 * Make a (Template Part) block work if it has `theme` attribute set.
	 *
	 * @param  mixed $render
	 * @param  array $block
	 *
	 * @return  mixed
	 */
	public static function block( $render, array $block ) {

		// Requirements check

			if (
				! isset( $block['attrs']['theme'] )
				|| get_stylesheet() === $block['attrs']['theme']
			) {
				return $render;
			}


		// Processing

			if ( doing_filter( 'pre_render_block' ) ) {
				add_filter( 'stylesheet', __CLASS__ . '::set_stylesheet_parent' );
			} else {
				remove_filter( 'stylesheet', __CLASS__ . '::set_stylesheet_parent' );
			}


		// Output

			return $render;

	} // /block

	/**
	 * Change stylesheet to template.
	 *
	 * @param  string $stylesheet
	 *
	 * @return  string
	 */
	public static function set_stylesheet_parent( string $stylesheet ): string {

		// Requirements check

			// Make sure we don't screw up the assets enqueuing.
			if ( doing_action( 'wp_enqueue_scripts' ) ) {
				return $stylesheet;
			}


		// Output

			return (string) get_template();

	} // /set_stylesheet_parent

}

Setup::init();
