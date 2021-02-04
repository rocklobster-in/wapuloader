<?php
/*
Plugin Name: Wapuloader for Contact Form 7
Plugin URI: https://contactform7.com/donate/
Description: Wapuloader replaces Contact Form 7's spinner icon with a rolling Wapuu.
Author: Takayuki Miyoshi
Author URI: https://ideasilo.wordpress.com/
Version: 0.71-gold
*/

define( 'WAPULOADER_VERSION', '0.71-gold' );

define( 'WAPULOADER_PLUGIN', __FILE__ );

add_action( 'wp_enqueue_scripts', 'wapuloader_enqueue_scripts', 11 );

function wapuloader_enqueue_scripts() {
	if ( ! defined( 'WPCF7_VERSION' ) ) {
		return;
	}

	if ( version_compare( WPCF7_VERSION, '5.4-dev', '<' ) ) {
		wp_enqueue_style(
			'wapuloader',
			plugins_url( 'style-old.css', WAPULOADER_PLUGIN ),
			array(),
			WAPULOADER_VERSION,
			'screen'
		);

		if ( is_rtl() ) {
			wp_enqueue_style(
				'wapuloader-rtl',
				plugins_url( 'style-rtl-old.css', WAPULOADER_PLUGIN ),
				array( 'wapuloader' ),
				WAPULOADER_VERSION,
				'screen'
			);
		}
	} else {
		wp_enqueue_style(
			'wapuloader',
			plugins_url( 'style.css', WAPULOADER_PLUGIN ),
			array(),
			WAPULOADER_VERSION,
			'screen'
		);

		if ( is_rtl() ) {
			wp_enqueue_style(
				'wapuloader-rtl',
				plugins_url( 'style-rtl.css', WAPULOADER_PLUGIN ),
				array( 'wapuloader' ),
				WAPULOADER_VERSION,
				'screen'
			);
		}
	}
}
