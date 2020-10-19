<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://mauriciorivera.co
 * @since             1.0.0
 * @package           Hnl_Tab_Form
 *
 * @wordpress-plugin
 * Plugin Name:       HnL Tab Form
 * Plugin URI:        https://github.com/riveramauro/hnl-tab-plugin
 * Description:       HubSpot contact form
 * Version:           1.2.3
 * Author:            Mauricio Rivera
 * Author URI:        https://mauriciorivera.co
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hnl-tab-form
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/riveramauro/hnl-tab-plugin
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
define( 'HNL_TAB_FORM_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hnl-tab-form-activator.php
 */
function activate_hnl_tab_form() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hnl-tab-form-activator.php';
	Hnl_Tab_Form_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hnl-tab-form-deactivator.php
 */
function deactivate_hnl_tab_form() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hnl-tab-form-deactivator.php';
	Hnl_Tab_Form_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hnl_tab_form' );
register_deactivation_hook( __FILE__, 'deactivate_hnl_tab_form' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hnl-tab-form.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_hnl_tab_form() {

	$plugin = new Hnl_Tab_Form();
	$plugin->run();

}
run_hnl_tab_form();
