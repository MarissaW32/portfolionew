<?php

/* Theme Info Class */
if ( ! function_exists( 'ober_theme_info' ) ) {
  function ober_theme_info() {
    $data = array();

    $theme = wp_get_theme();
    $theme_parent = $theme->parent();
    if ( !empty( $theme_parent ) ) {
      $theme = $theme_parent;
    }
    $data['slug'] = $theme->get_stylesheet();
    $data['name'] = $theme[ 'Name' ];
    $data['version'] = $theme[ 'Version' ];
    $data['author'] = $theme[ 'Author' ];
    $data['is_child'] = ! empty( $theme_parent );

    return $data;
  }
}
if ( ! class_exists( 'OberThemeInfo' ) ) {
  class OberThemeInfo {

    private static $_instance = null;

    public $slug;

    public $name;

    public $version;

    public $author;

    public $is_child;

    public static function instance() {
			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
				self::$_instance->init();
			}
			return self::$_instance;
		}

    public function __construct() {

		}

    public function init() {
      $theme = wp_get_theme();
      $theme_parent = $theme->parent();
      if ( !empty( $theme_parent ) ) {
        $theme = $theme_parent;
      }

      $this->slug = $theme->get_stylesheet();
      $this->name = $theme[ 'Name' ];
      $this->version = $theme[ 'Version' ];
      $this->author = $theme[ 'Author' ];
      $this->is_child = ! empty( $theme_parent );
    }
  }
}

function ober_theme_info() {
  return OberThemeInfo::instance();
}
add_action( 'plugins_loaded', 'ober_theme_info' );

/* Plugin Info Class */
if ( ! class_exists( 'OberPluginInfo' ) ) {
  class OberPluginInfo {

    private static $_instance = null;

    public $name;

    public $version;

    public $author;

    public $slug;

    public $capability;

    public $dashboard_uri;

    public static function instance() {
			if ( is_null( self::$_instance ) ) {
				self::$_instance = new self();
				self::$_instance->init();
			}
			return self::$_instance;
		}

    public function __construct() {

		}

    public function init() {
      $plugin = OberPlugin::get_plugin_info();
      $status = get_option( 'Ober_lic_Status' );

      $this->name = $plugin['Name'];
      $this->version = $plugin['Version'];
      $this->author = $plugin[ 'Author' ];
      $this->slug = 'ober-plugin';
      $this->capability = ( $status == 'active' ) ? 'extended' : 'normal';
      $this->dashboard_uri = plugin_dir_url( __FILE__ );
    }
  }
}

function ober_plugin_info() {
  return OberPluginInfo::instance();
}
add_action( 'plugins_loaded', 'ober_plugin_info' );

/*Activation Notice*/
if ( ! function_exists( 'ober_theme_activation_notice' ) ) {
	function ober_theme_activation_notice() {
	?>
		<div class="notice notice-warning">
			<p><?php echo wp_kses_post( 'Please activate Ober theme to unlock all features, premium plugins, demo content and receive theme updates automatically!', 'ober-plugin' ); ?></p>
			<p><?php echo sprintf( __( '<a href="%s" class="button button-primary">Activate Now</a>', 'ober-plugin' ), admin_url( 'admin.php?page=ober-theme-activation' ) ); ?></p>
		</div>
	<?php
	}
}

/* Activation Filter */
if ( ! function_exists( 'ober_is_theme_activated' ) ) {
	function ober_is_theme_activated() {
		return apply_filters( 'ober/is_theme_activated', false );
	}
}
