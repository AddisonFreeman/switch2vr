<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              dev.addisonfreeman.com
 * @since             1.0.0
 * @package           Switch2vr
 *
 * @wordpress-plugin
 * Plugin Name:       Switch2VR
 * Plugin URI:        switch2vr.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Addison Freeman
 * Author URI:        dev.addisonfreeman.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       switch2vr
 * Domain Path:       /languages
 */

add_action('admin_menu', 'switch2VR_admin');

function switch2VR_admin(){
        add_menu_page( 'Switch 2 VR', 'Switch 2 VR', 'manage_options', 'switch2vr-admin-page', 'switch2vr_admin_page_init' );
}
 
function switch2vr_admin_page_init(){
	echo "<h1> Switch2VR Admin Page </h1>";
	// echo '<div id="wrapper"><input id="fileUpload" type="file" /><br /><div id="image-holder"></div></div>';
	include 'upload-pano.php';
	//read server project files and display projects with create new option

	// echo php_ini_loaded_file();
	// echo phpinfo();
	// exec("./krpano/krpanotools makepano -config=./krpano/templates/vtour-normal.config ./krpano-demos/cube.jpg");
}


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-switch2vr-activator.php
 */
function activate_switch2vr() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-switch2vr-activator.php';
	Switch2vr_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-switch2vr-deactivator.php
 */
function deactivate_switch2vr() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-switch2vr-deactivator.php';
	Switch2vr_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_switch2vr' );
register_deactivation_hook( __FILE__, 'deactivate_switch2vr' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-switch2vr.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_switch2vr() {

	$plugin = new Switch2vr();
	$plugin->run();

}
run_switch2vr();
