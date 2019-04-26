<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.dz-4.de
 * @since             1.0.0
 * @package           RotatingTerms
 *
 * @wordpress-plugin
 * Plugin Name:       RotatingTerms
 * Plugin URI:        www.dz-4.de
 * Description:       RotatingTerms
 * Version:           1.0.0
 * Author:            Benjamin Spinola
 * Author URI:        www.dz-4.de
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rotatingterms
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'wp_enqueue_scripts', 'register_plugin_scripts' );
function register_plugin_scripts() {
	wp_enqueue_script('dz4_rotatingterms', plugins_url('/rotatingterms/js/rotatingterms.js'), array('jquery') );
}
