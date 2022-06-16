<?php
/**
 * Plugin Name:       Assets Management
 * Plugin URI:        https://example.com/plugins/tinyslider/
 * Description:       This is practise plugin.
 * Version:           1.0
 * Author:            Sohan
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       assetsninja
 * Domain Path:       /languages
 */

class AssetsNinja{
    function __construct() {
        add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'load_front_assets' ) );
    }

    function load_textdomain() {
        load_plugin_textdomain( 'assetsninja', false, plugin_dir_url(__FILE__)."/languages" );
    }
}

New AssetsNinja;





