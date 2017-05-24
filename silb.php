<?php
/**
 * Plugin Name: Image Lightbox
 * Plugin URI: http://millawynn.com
 * Description: This plugin adds lightbox features to the  single images in the Posts.
 * Version: 1.0.0
 * Author: Milla Wynn
 * Author URI: http://millawynn.com
 * License: GPL2
 */

function silb_enqueued_assets() {
	wp_enqueue_script( 'silbscript', plugin_dir_url( __FILE__ ) . 'js/silbscript.js', array( 'jquery' ), false, true );
	wp_enqueue_style( 'silbstyle', plugin_dir_url( __FILE__ ) . 'css/silbstyle.css', array(), false, 'all' );
}
add_action( 'wp_enqueue_scripts', 'silb_enqueued_assets' );
?>