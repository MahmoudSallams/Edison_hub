<?php
/**
 * WARNING: This file is part of the theme. DO NOT edit
 * this file under any circumstances.
 */
defined( 'ABSPATH' ) or exit;

// Ignore this file if option plus is loaded before
if ( function_exists( 'op_option' ) ) return;



if ( ! function_exists( 'cosine_options_plus_uri' ) ) {
	add_filter( 'op/directory_uri', 'cosine_options_plus_uri' );

	/**
	 * Return the URI that pointed to options-plus library
	 * 
	 * @return  string
	 */
	function cosine_options_plus_uri( $uri ) {
		return get_template_directory_uri() . '/includes/vendor/options-plus';
	}
}



if ( ! function_exists( 'cosine_options_plus_path' ) ) {
	add_filter( 'op/directory_path', 'cosine_options_plus_path' );

	/**
	 * Return the path that contains options-plus library
	 * 
	 * @return  string
	 */
	function cosine_options_plus_path( $path ) {
		return get_template_directory() . '/includes/vendor/options-plus';
	}
}



require_once trailingslashit( get_template_directory() ) . 'includes/vendor/options-plus/loader.php';
