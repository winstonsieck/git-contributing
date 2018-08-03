<?php
/**
 * Asset Handler.
 *
 * @package     KnowTheCode\GitContributing\Asset
 * @since       1.0.0
 * @author      Git Contributing Team
 * @link        https://knowthecode.io
 * @license     GPL3+
 */

namespace KnowTheCode\GitContributing\Asset;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_plugin_script' );
/**
 * Enqueues the plugin's script(s).
 *
 * @since 1.0.0
 *
 * @return void
 */
function enqueue_plugin_script() {
	$file = _is_in_development_mode()
		? '/assets/dist/project.min.js'
		: '/assets/scripts/project.js';

	wp_enqueue_script(
		'git_contributing_script',
		_get_plugin_url() . $file,
		array( 'jquery' ),
		_get_asset_version( $file ),
		true
	);
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_plugin_css' );
/**
 * Enqueues the plugin's stylesheet.
 *
 * @since 1.0.0
 *
 * @return void
 */
function enqueue_plugin_css() {
	$file = _is_in_development_mode()
		? '/assets/dist/project.min.css'
		: '/assets/css/project.css';

	wp_enqueue_style(
		'git_contributing_styles',
		_get_plugin_url() . $file,
		array(),
		_get_asset_version( $file )
	);
}

/**
 * Get's the asset file's version number by using it's modification timestamp.
 *
 * @since 1.0.0
 *
 * @param string $relative_path Relative path to the asset file.
 *
 * @return bool|int
 */
function _get_asset_version( $relative_path ) {
	return filemtime( _get_plugin_directory() . $relative_path );
}
