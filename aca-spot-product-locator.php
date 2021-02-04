<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.allebach.com
 * @since             1.0.0
 * @package           Aca_Spot_Product_Locator
 *
 * @wordpress-plugin
 * Plugin Name:       Spot Product Locator
 * Plugin URI:        https://www.allebach.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            mg
 * Author URI:        https://www.allebach.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       aca-spot-product-locator
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ACA_SPOT_PRODUCT_LOCATOR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-aca-spot-product-locator-activator.php
 */
function activate_aca_spot_product_locator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-aca-spot-product-locator-activator.php';
	Aca_Spot_Product_Locator_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-aca-spot-product-locator-deactivator.php
 */
function deactivate_aca_spot_product_locator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-aca-spot-product-locator-deactivator.php';
	Aca_Spot_Product_Locator_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_aca_spot_product_locator' );
register_deactivation_hook( __FILE__, 'deactivate_aca_spot_product_locator' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-aca-spot-product-locator.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_aca_spot_product_locator() {

	$plugin = new Aca_Spot_Product_Locator();
	$plugin->run();

}
run_aca_spot_product_locator();
