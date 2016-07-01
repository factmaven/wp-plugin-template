<?php
/**
    Plugin Name: PLUGIN_NAME
    Plugin URI: https://wordpress.org/plugins/PLUGIN_SLUG/
    Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Version: 1.0.0
    Author: <a href="https://www.factmaven.com/">Fact Maven Corp.</a>
    License: GPLv3
*/

if ( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( !class_exists( 'FMC_PluginName' ) ) {
    
    class FMC_PluginName {

        public function __construct() {
            // DEFNE CONSTANTS
            define( 'PLGN_ABBR_FACTMAVEN', 'https://www.factmaven.com/' );         
            define( 'PLGN_ABBR_WORDPRESS', 'https://wordpress.org/' );
            define( 'PLGN_ABBR_GITHUB', 'https://github.com/factmaven/PLUGIN_SLUG' );
            define( 'PLGN_ABBR_PLUGIN', plugin_dir_path( __FILE__ ) );
            
            // PLUGIN INFO
            include( PLGN_ABBR_PLUGIN . 'includes/plugin-meta.php' );

            add_action( 'tag', array( $this, 'plgn_abbr_function' ), 10, 1 );
        }

        public function plgn_abbr_function() {
            # Code here...
        }
    }
}

if ( class_exists( 'FMC_PluginName' ) ) { // Instantiate the plugin class
    global $plgn_abbr;
    $plgn_abbr = new FMC_PluginName();
}