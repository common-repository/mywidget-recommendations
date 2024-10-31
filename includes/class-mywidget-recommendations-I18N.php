<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://widget.my.com
 * @since      1.0.0
 *
 * @package    MyWidgetRecommendations
 * @subpackage MyWidgetRecommendations/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    MyWidgetRecommendations
 * @subpackage MyWidgetRecommendations/includes
 * @author     https://widget.my.com <support@widget.my.com>
 */
class MyWidgetRecommendations_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'mywidget-recommendations-domain',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
