<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package ccs
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function ccs_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'ccs_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function ccs_jetpack_setup
add_action( 'after_setup_theme', 'ccs_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function ccs_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function ccs_infinite_scroll_render
