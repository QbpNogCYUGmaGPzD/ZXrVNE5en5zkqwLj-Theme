<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package ZXrVNE5en5zkqwLj
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function zxrvne5en5zkqwlj_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'zxrvne5en5zkqwlj_jetpack_setup' );
