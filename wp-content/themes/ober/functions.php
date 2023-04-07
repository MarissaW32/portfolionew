<?php
/**
 * ober functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ober
 */

define( 'OBER_EXTRA_PLUGINS_DIRECTORY', 'https://beshley.com/plugins-latest/ober/' );
define( 'OBER_EXTRA_PLUGINS_PREFIX', 'Ober' );

if ( ! function_exists( 'ober_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ober_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ober, use a find and replace
		 * to change 'ober' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ober', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'ober' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Image Sizes
		add_image_size( 'ober_155x155', 310, 310, true );
		add_image_size( 'ober_216x216', 432, 432, true );
		add_image_size( 'ober_600xAuto', 900, 9999, false );
		add_image_size( 'ober_749x919', 749, 919, false );
		add_image_size( 'ober_1200xAuto', 1200, 9999, false );
		add_image_size( 'ober_1920xAuto', 1920, 9999, false );
	}
endif;
add_action( 'after_setup_theme', 'ober_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ober_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ober_content_width', 900 );
}
add_action( 'after_setup_theme', 'ober_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ober_widgets_init() {
	register_sidebar( array(
		'name'		  => esc_html__( 'Sidebar', 'ober' ),
		'id'			=> 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ober' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ober_widgets_init' );

/**
 * Register Default Fonts
 */
function ober_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	 * supported by Lora, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$roboto = _x( 'on', 'Roboto: on or off', 'ober' );

	if ( 'off' !== $roboto ) {
		$font_families = array();

		$font_families[] = 'Rubik:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
		$font_families[] = 'Sorts Mill Goudy';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'display' => urlencode( 'swap' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}

/**
 * Enqueue scripts and styles.
 */
function ober_stylesheets() {
	// Web fonts
	wp_enqueue_style( 'ober-fonts', ober_fonts_url(), array(), null );

	$primaryFont =  get_field( 'primary_font_family', 'options' );
	$paragraphsFont =  get_field( 'text_font_family', 'options' );

	// Custom fonts
	if ( $primaryFont ) {
		wp_enqueue_style( 'ober-primary-font', $primaryFont['url'] , array(), null );
	}
	if ( $paragraphsFont ) {
		wp_enqueue_style( 'ober-paragraphs-font', $paragraphsFont['url'] , array(), null );
	}

	/*Styles*/
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/styles/vendors/bootstrap.css', '1.0' );
	wp_enqueue_style( 'ober-font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.css', '1.0' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/styles/vendors/magnific-popup.css', '1.0' );
	wp_enqueue_style( 'splitting', get_template_directory_uri() . '/assets/styles/vendors/splitting.css', '1.0' );
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/styles/vendors/swiper.css', '1.0' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/styles/vendors/animate.css', '1.0' );
	wp_enqueue_style( 'ober-main', get_stylesheet_uri(), array( 'bootstrap', 'magnific-popup', 'splitting', 'swiper', 'animate', 'ober-font-awesome' ) );
}
add_action( 'wp_enqueue_scripts', 'ober_stylesheets' );

function ober_scripts() {
	/*Default Scripts*/
	wp_enqueue_script( 'ober-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/*Theme Scripts*/

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'splitting', get_template_directory_uri() . '/assets/js/splitting.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'jarallax', get_template_directory_uri() . '/assets/js/jarallax.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'imagesloaded' );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'scrolla', get_template_directory_uri() . '/assets/js/jquery.scrolla.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'skrollr', get_template_directory_uri() . '/assets/js/skrollr.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'jquery-cookie', get_template_directory_uri() . '/assets/js/jquery.cookie.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'ober-common', get_template_directory_uri() . '/assets/js/common.js', array('jquery'), '1.0.0', true );

	if ( is_singular() ) {
		$ober_rrssb_init = 'jQuery(document).ready(function ($) { $(".social-share").rrssb({ title: "' . esc_attr( get_the_title() ) . '", url: "' . esc_url( get_the_permalink() ) . '" }); });';

		wp_enqueue_script( 'ober-rrssb', get_template_directory_uri() . '/assets/js/rrssb.js', array('jquery'), '1.0.0', true );
		wp_add_inline_script('ober-rrssb', $ober_rrssb_init );
	}
}
add_action( 'wp_enqueue_scripts', 'ober_scripts' );

/**
 * Extra Prefix
 */
function ober_extra_dir() {
	$extra_dir = get_option( OBER_EXTRA_PLUGINS_PREFIX . '_lic_Ren' );
	if ( empty( $extra_dir ) ) {
			$extra_dir = 'normal';
	}
	return $extra_dir;
}
add_action( 'init', 'ober_extra_dir' );

/**
 * TGM
 */
require get_template_directory() . '/inc/plugins/plugins.php';

/**
 * ACF Options
 */
function ober_acf_fa_version( $version ) {
 $version = 5;
 return $version;
}
add_filter( 'ACFFA_override_major_version', 'ober_acf_fa_version' );

function ober_acf_json_load_point( $paths ) {
	$paths = array( get_template_directory() . '/inc/acf-json' );
	if( is_child_theme() ) {
		$paths[] = get_stylesheet_directory() . '/inc/acf-json';
	}

	return $paths;
}

add_filter('acf/settings/load_json', 'ober_acf_json_load_point');

if ( function_exists( 'acf_add_options_page' ) ) {
	// Hide ACF field group menu item
	add_filter( 'acf/settings/show_admin', '__return_false' );

	// Add ACF Options Page
	$parent = acf_add_options_page( array(
		'page_title' 	=> esc_html__( 'Theme Options', 'ober' ),
		'menu_title'	=> esc_html__( 'Theme Options', 'ober' ),
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_theme_options',
		'redirect'    => false,
		'icon_url'		=> 'dashicons-bslthemes',
		'position' 		=> 3,
	) );
}

function ober_acf_json_save_point( $path ) {
	// update path
	$path = get_stylesheet_directory() . '/inc/acf-json';

	// return
	return $path;
}
add_filter( 'acf/settings/save_json', 'ober_acf_json_save_point' );

function ober_acf_fallback() {
	// ACF Plugin fallback
	if ( ! is_admin() && ! function_exists( 'get_field' ) ) {
		function get_field( $field = '', $id = false ) {
			return false;
		}
		function the_field( $field = '', $id = false ) {
			return false;
		}
		function have_rows( $field = '', $id = false ) {
			return false;
		}
		function has_sub_field( $field = '', $id = false ) {
			return false;
		}
		function get_sub_field( $field = '', $id = false ) {
			return false;
		}
		function the_sub_field( $field = '', $id = false ) {
			return false;
		}
	}
}
add_action( 'init', 'ober_acf_fallback' );

/**
 * OCDI
 */
require get_template_directory() . '/inc/ocdi-setup.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Include Skin Options
 */
require get_template_directory() . '/inc/skin-options.php';

/**
 * Include Infinite Scroll
 */
require get_template_directory() . '/inc/infinite-scroll.php';

/**
 * Get Archive Title
 */

function ober_archive_title( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_post_type_archive( 'portfolio' ) ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( esc_html__( 'Tag: ', 'ober' ), false );
	} elseif ( is_author() ) {
		$title = esc_html__( 'Author: ', 'ober' ) . get_the_author();
	}

	return $title;
}
add_filter( 'get_the_archive_title', 'ober_archive_title' );

/**
 * Excerpt
 */
function ober_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'ober_custom_excerpt_length' );

function ober_new_excerpt_more( $more ) {
	return esc_html__( '... ', 'ober' ) . '<div class="readmore"><a href="' . esc_url( get_permalink() ) . '" class="lnk">' . esc_html__( 'Read more', 'ober' ) . '</a></div>';
}
add_filter( 'excerpt_more', 'ober_new_excerpt_more' );

/**
 * Disable CF7 Auto Paragraph
 */
add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Add class to sub-menu
 */
function ober_change_wp_nav_menu( $classes, $args, $depth ) {
	if( $args->theme_location == 'primary' && get_field( 'menu_type', 'option' ) == 2 ) {
		$classes[] = '';
	} else if( $args->theme_location == 'primary' && get_field( 'menu_type', 'option' ) == 1 ) {
		$classes[] = '';
	}
	return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'ober_change_wp_nav_menu', 10, 3 );

/**
 * Top Menu
 */
class Ober_Topmenu_Walker extends Walker_Nav_menu {

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		global $wp_query;

		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$class_names = '';
		if ( isset( $args->link_after ) ) {
			$args->link_after = '';
		}

		if ( is_array($item->classes) ) {
			if ( in_array('menu-item-has-children', $item->classes ) ) {
				array_push( $item->classes, 'has-children' );
			}
		}

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = '';
		$class_names = join(' ', $classes);

	   	$class_names = ' class="'. esc_attr( $class_names ) . '"';
		$attributes = ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';

		$link_classes = '';
		$link_attrs = ' data-splitting="chars"';

		if ( $depth == 0 ) {
			$link_classes = ' splitting-text-anim-2';
		} else {
			$link_classes = ' splitting-text-anim-1';
		}

		if ( $link_classes ) {
			$attributes .= ' class="' . esc_attr( $link_classes ) . '"';
		}

		$attributes .= $link_attrs;

		if ( has_nav_menu( 'primary' ) ) {

			$output .= $indent . '<li id="menu-item-'. esc_attr( $item->ID ) . '"' . $class_names . '>';

			$attributes .= ! empty( $item->url ) ? ' href="' . esc_url( $item->url ) . '"' : '';

			$item_output = $args->before;
			$item_output .= '<a' . $attributes . '>';
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID );
			$item_output .= $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
	}
}

/**
 * Add class to body
 */
function ober_custom_body_classes( $classes ) {
	$theme_ui = 'light-skin';
	$theme_ui_option = get_field( 'theme_ui', 'option' );

	if ( $theme_ui_option == 1 ) {
	  $theme_ui = '';
	}
	if ( $theme_ui  != '' ) {
		$classes[] = $theme_ui;
	}

  return $classes;
}
add_filter( 'body_class','ober_custom_body_classes' );
