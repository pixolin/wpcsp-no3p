<?php
/**
 * Plugin Name:     WP Content Security Policy Plugin No Third Party
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     Dequeues Third Party Style Sheet in Plugin WP Content Security Policy
 * Author:          Bego Mario Garde
 * Author URI:      YOUR SITE HERE
 * Text Domain:     wpcsp-n3p
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Wpcsp_Nothirdparty
 */

/*
 * Check, if Plugin WP Content Security Policy
 * is activated or return
 */

if ( ! class_exists( 'WP_CSP' ) ) {
	return;
}


add_action( 'wp_enqueue_scripts', 'n3p_enqueue_own', PHP_INT_MAX );
function n3p_enqueue_own() {
	wp_dequeue_style( 'jquery-ui' );
	wp_enqueue_style( 'jquery-ui-here', plugin_dir_url( __FILE__ ) . '/css/jquery-ui.min.css' );
}
