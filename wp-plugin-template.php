<?php
/**
 * Plugin Name: WP Plugin Template
 * Plugin URI: https://www.factmaven.com/#plugins
 * Description: Quick-start plugin template utilizing PHP namespaces.
 * Version: 2.0.0
 * Author: Fact Maven
 * Author URI: https://www.factmaven.com
 * Text Domain: wp-plugin-template
 * Domain Path: /languages
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 */

# If accessed directly, exit
if ( ! defined( 'ABSPATH' ) ) exit;

# Define the plugin's latest version
define( 'WPPT_VERSION', '2.0.0' );
# Define the minimum WordPress version required
define( 'WPPT_MIN_WP', '3.7' );
# Define the minimum PHP version required
define( 'WPPT_MIN_PHP', '5.3' );
# Define the plugin base
define( 'WPPT_BASE', plugin_basename( __FILE__ ) );
# Define the plugin slug
define( 'WPPT_SLUG', 'wp-plugin-template' );
# Define the plugins directory
define( 'WPPT_DIR', ABSPATH . 'wp-content/plugins' );

# Call the autoloader
require_once( 'admin/autoload.php' );
new Fact_Maven_Autoloader;

use WpPluginTemplate\admin\Plugin_Meta;
new Plugin_Meta;