<?php
/**
 * Plugin Name: WooSlider Filter Slides
 * Plugin URI: http://www.itthinx.com/plugins/groups-restrict-categories
 * Description: Enables filters for slides from WooSlider.
 * Author: itthinx
 * Author URI: http://www.itthinx.com
 * Version: 1.0.0
 */

/**
 * Plugin main class.
 */
class Woo_Slider_Filter_Slides {
	
	/**
	 * Setup.
	 */
	public static function init() {
		add_filter( 'pre_get_posts', array( __CLASS__, 'pre_get_posts' ) );
	}
	
	/**
	 * Disables filter suppression for slides.
	 */
	public static function pre_get_posts( WP_Query &$query ) {
		unset( $query->query_vars['suppress_filters'] );
	}
}
add_action( 'init', array( 'Woo_Slider_Filter_Slides', 'init' ) );
