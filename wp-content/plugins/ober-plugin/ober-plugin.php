<?php
/**
 * Plugin Name: Ober Plugin
 * Plugin URI: https://bslthemes.com/
 * Description: This plugin it's designed for Ober Theme
 * Version: 1.1.2
 * Author: bslthemes
 * Author URI: https://bslthemes.com/
 * Text Domain: ober-plugin
 * Domain Path: /languages/
 * License: http://www.gnu.org/licenses/gpl.html
 */

// Block direct access to the main plugin file.
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Init all plugins constants
if ( ! defined( 'OBER_PLUGIN_PATH' ) ) {
	define( 'OBER_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
}
if ( ! defined( 'OBER_PLUGIN_URI' ) ) {
	define( 'OBER_PLUGIN_URI', plugin_dir_url( __FILE__ ) );
}

// Main Class
if ( ! class_exists( 'OberPlugin' ) ) {

	class OberPlugin {

		public function __construct() {

		}

		public function init() {

			/*init*/
			$this->init_hooks();
			$this->init_cpt();
			$this->init_theme_helpers();
			$this->init_acf_ext();
			$this->init_elementor_addons();
			$this->init_dashboard();
		}

		public function plugin_load_textdomain() {
			/* load plugin text-domain */
			load_plugin_textdomain( 'ober-plugin', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
		}

		public function init_hooks() {
			/* hooks */

			/* load languages */
			add_action( 'plugins_loaded', [$this, 'plugin_load_textdomain'] );

			/* fixed theme update */
			function ober_fix_trans_after_update() {
				$transient = get_option( '_site_transient_update_themes' );
				$theme_slug = 'ober';

				if ( isset( $transient->response[$theme_slug] ) && !empty( $transient ) ) {
					if ( $transient->response[$theme_slug]['new_version'] == wp_get_theme()->Version ) {
						unset( $transient->response[$theme_slug] );
					}
					update_option( '_site_transient_update_themes', $transient );
				}
			}
			add_action( 'admin_init', 'ober_fix_trans_after_update' );

		}

		public function init_cpt() {
			/* include custom post types */
			require_once OBER_PLUGIN_PATH . 'inc/custom-post-types.php';
		}

		public function init_acf_ext() {
			/* include acf fields extention */
			require_once OBER_PLUGIN_PATH . 'acf-ext/acf-ui-google-font/acf-ui-google-font.php';
			require_once OBER_PLUGIN_PATH . 'acf-ext/acf-cf7/acf-cf7.php';
			require_once OBER_PLUGIN_PATH . 'acf-ext/acf-fa/acf-font-awesome-font.php';
		}

		public function init_theme_helpers() {
			/* includes */
		}

		public function init_elementor_addons() {
			/* include elementor addons */
			require_once OBER_PLUGIN_PATH . 'elementor/functions.php';
		}

		public function init_dashboard() {
			/* include theme dashboard */
			require OBER_PLUGIN_PATH . 'admin/dashboard-theme-helper.php';
			require OBER_PLUGIN_PATH . 'admin/dashboard-theme-init.php';
			require OBER_PLUGIN_PATH . 'admin/dashboard-theme-activation.php';
		}

		static function get_plugin_info() {
			if ( !function_exists( 'get_plugin_data' ) ) {
				require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
			}
			return get_plugin_data( __FILE__ );
		}

		static function clear_rewrite_rules() {
			update_option( 'rewrite_rules', '' );
		}

		static function elementor_init_cpt_support() {
			$cpt_support = get_option( 'elementor_cpt_support' );

			if( ! $cpt_support ) {
			    $cpt_support = [ 'page', 'post', 'portfolio' ];
			    update_option( 'elementor_cpt_support', $cpt_support );
			} else if( ! in_array( 'portfolio', $cpt_support ) ) {
			    $cpt_support[] = 'portfolio';
			    update_option( 'elementor_cpt_support', $cpt_support );
			}
		}

		static function elementor_disable_default_schemes() {
			$color_schemes = get_option( 'elementor_disable_color_schemes' );
			$typography_schemes = get_option( 'elementor_disable_typography_schemes' );

			if( ! $color_schemes ) {
			    update_option( 'elementor_disable_color_schemes', 'yes' );
			}
			if( ! $typography_schemes ) {
			    update_option( 'elementor_disable_typography_schemes', 'yes' );
			}
		}

		static function activation() {
			self::clear_rewrite_rules();
			self::elementor_init_cpt_support();
			self::elementor_disable_default_schemes();
		}

		static function deactivation() {
			self::clear_rewrite_rules();
		}
	}

}

$oberPlugin = new OberPlugin();
$oberPlugin->init();

register_activation_hook( __FILE__, array( $oberPlugin, 'activation' ) );
register_deactivation_hook( __FILE__, array( $oberPlugin, 'deactivation' ) );
