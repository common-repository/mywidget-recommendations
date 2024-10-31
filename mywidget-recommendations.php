<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://widget.my.com
 * @since             1.0.0
 * @package           MyWidgetRecommendations
 *
 * @wordpress-plugin
 * Plugin Name:       myWidget Recommendations
 * Plugin URI:        https://widget.my.com
 * Description:       Widget with personalized recommendations for increasing user metrics
 * Version:           1.0.4
 * Author:            widget.my.com
 * Text Domain:       mywidget-recommendations-domain
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mywidget-recommendations-activator.php
 */
function activate_mwr_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mywidget-recommendations-activator.php';
	MyWidgetRecommendationsActivator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-mywidget-recommendations-deactivator.php
 */
function deactivate_mwr_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mywidget-recommendations-deactivator.php';
	MyWidgetRecommendationsDeactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mwr_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_mwr_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-mywidget-recommendations.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mwr_plugin() {

	$plugin = new MyWidgetRecommendations();
	$plugin->run();

}

run_mwr_plugin();
