<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.allebach.com
 * @since      1.0.0
 *
 * @package    Aca_Spot_Product_Locator
 * @subpackage Aca_Spot_Product_Locator/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Aca_Spot_Product_Locator
 * @subpackage Aca_Spot_Product_Locator/includes
 * @author     mg <mgentzel@allebach.com>
 */
class Aca_Spot_Product_Locator_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'aca-spot-product-locator',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
