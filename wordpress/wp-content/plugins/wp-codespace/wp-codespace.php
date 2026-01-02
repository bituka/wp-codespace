<?php
/**
 * This plugin is just for demonstrating.
 *
 * @package WP_Codespace
 * @version 1.0.0
 */

/*
Plugin Name: WP Codespace
Description: This plugin is just for demonstrating.
Author: Tom Rose
*/


/**
 * Adds a Hello Codespace to the admin area.
 */
function wp_codespace_notices() {
	echo '<p class="wp-codespace">Hello codespace!</p>';
}
add_action( 'admin_notices', 'wp_codespace_notices' );

/**
 * Register and enqueue a stylesheet in admin.
 */
function wp_codespace_enqueue_admin_style() {
		wp_register_style( 'wp_codespace_admin_style', plugin_dir_url( __FILE__ ) . 'styles.css', false, '1.0.0' );
		wp_enqueue_style( 'wp_codespace_admin_style' );
}
add_action( 'admin_enqueue_scripts', 'wp_codespace_enqueue_admin_style' );

function wp_codespace_fix_redirects() {
  if (!isset($_SERVER['HTTP_HOST']) && isset($_SERVER['HTTP_X_FORWARDED_HOST'])) {
    $_SERVER['HTTP_HOST'] = $_SERVER['HTTP_X_FORWARDED_HOST'];
  }
  if (!isset($_SERVER['HTTPS']) && isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
  }
  if (!isset($_SERVER['SERVER_NAME']) && isset($_SERVER['HTTP_X_FORWARDED_HOST'])) {
    $_SERVER['SERVER_NAME'] = $_SERVER['HTTP_X_FORWARDED_HOST'];
  }
  if (!isset($_SERVER['SERVER_PORT']) && isset($_SERVER['HTTP_X_FORWARDED_PROTO'])) {
    $_SERVER['SERVER_PORT'] = $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ? '443' : '80';
  }
}
add_action('init', 'wp_codespace_fix_redirects', -1);
