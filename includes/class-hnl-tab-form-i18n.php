<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://mauriciorivera.co
 * @since      1.0.0
 *
 * @package    Hnl_Tab_Form
 * @subpackage Hnl_Tab_Form/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Hnl_Tab_Form
 * @subpackage Hnl_Tab_Form/includes
 * @author     Mauricio Rivera <me@mauriciorivera.co>
 */
class Hnl_Tab_Form_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'hnl-tab-form',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
