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
		add_filter( '', '' );
	}
}
add_action( 'init', array( 'Woo_Slider_Filter_Slides', 'init' ) );
