<?php
/**
 * ZXrVNE5en5zkqwLj Theme Customizer
 *
 * @package ZXrVNE5en5zkqwLj
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function zxrvne5en5zkqwlj_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'zxrvne5en5zkqwlj_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function zxrvne5en5zkqwlj_customize_preview_js() {
	wp_enqueue_script( 'zxrvne5en5zkqwlj_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'zxrvne5en5zkqwlj_customize_preview_js' );
