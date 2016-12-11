<?php
/*
Plugin Name: Wapuloader for Contact Form 7
Plugin URI: http://contactform7.com/donate/
Description: Wapuloader replaces Contact Form 7's Ajax-loader with a rolling Wapuu.
Author: Takayuki Miyoshi
Author URI: http://ideasilo.wordpress.com/
Version: 0.71-gold
*/

define( 'WAPULOADER_VERSION', '0.71-gold' );

define( 'WAPULOADER_PLUGIN', __FILE__ );

add_action( 'wp_enqueue_scripts', 'wapuloader_enqueue_scripts', 11 );

function wapuloader_enqueue_scripts() {
	wp_enqueue_style( 'wapuloader',
		plugins_url( 'style.css', WAPULOADER_PLUGIN ),
		array(), WAPULOADER_VERSION, 'screen' );

	if ( is_rtl() ) {
		wp_enqueue_style( 'wapuloader-rtl',
			plugins_url( 'style-rtl.css', WAPULOADER_PLUGIN ),
			array( 'wapuloader' ), WAPULOADER_VERSION, 'screen' );
	}
}
