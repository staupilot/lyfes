<?php
/**
 * lyfes Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lyfes
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'LYFES_THEME_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'lyfes-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), LYFES_THEME_VERSION, 'all' );

}
