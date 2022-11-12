<?php
/*
Plugin Name: Wapuloader for Contact Form 7
Plugin URI: https://contactform7.com/donate/
Description: Wapuloader replaces Contact Form 7's spinner icon with a rolling Wapuu.
Author: Takayuki Miyoshi
Author URI: https://ideasilo.wordpress.com/
Version: 1.0-dev
*/

define( 'WAPULOADER_VERSION', '1.0-dev' );

define( 'WAPULOADER_PLUGIN', __FILE__ );


add_action( 'wp_enqueue_scripts', 'wapuloader_enqueue_scripts', 11, 0 );

function wapuloader_enqueue_scripts() {

	wp_register_style(
		'wapuloader',
		plugins_url( 'style.css', WAPULOADER_PLUGIN ),
		array( 'contact-form-7' ),
		WAPULOADER_VERSION,
		'screen'
	);

	wp_register_style(
		'wapuloader-rtl',
		plugins_url( 'style-rtl.css', WAPULOADER_PLUGIN ),
		array( 'wapuloader' ),
		WAPULOADER_VERSION,
		'screen'
	);

	wp_enqueue_style( 'wapuloader' );
	
	if ( is_rtl() ) {
		wp_enqueue_style( 'wapuloader-rtl' );
	}

}
