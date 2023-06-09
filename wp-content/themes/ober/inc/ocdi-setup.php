<?php

if ( class_exists( 'OberPlugin' ) && class_exists( 'OCDI_Plugin' ) ) {

function ober_ocdi_import_files() {
    $extra_dir = ober_extra_dir();
    if ( $extra_dir == 'normal' ) : return array(); endif;

    return array(
        array(
            'import_file_name'             => esc_attr__( 'Default Demo', 'ober' ),
            'categories'                   => array( esc_attr__( 'Main', 'ober' ) ),
            'import_file_url'              => OBER_EXTRA_PLUGINS_DIRECTORY . $extra_dir . '/ocdi-import/demo/01/content.xml',
            'preview_url'                  => 'https://1.envato.market/c/1790164/275988/4415?u=https://themeforest.net/item/ober-one-page-resume-wordpress-theme/full_screen_preview/35382382',
            'import_preview_image_url'     => OBER_EXTRA_PLUGINS_DIRECTORY . $extra_dir . '/ocdi-import/demo/01/preview.jpg',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'ober_ocdi_import_files' );

function ober_ocdi_after_import_setup( $selected_import ) {
    if ( ober_extra_dir() == 'normal' ) : return; endif;

    $front_page_id = get_page_by_title( 'Home' );
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
        'primary' => $main_menu->term_id,
    ) );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'posts_per_page', 6 );

    $ocdi_fields_static = array(
        'options_theme_ui' => 0,
        '_options_theme_ui' => 'field_607dcd3956c17',
        'options_theme_color' => '',
        '_options_theme_color' => 'field_60672bee61163',
        'options_text_font_family' => 0,
        '_options_text_font_family' => 'field_5b68d188906fd',
        'options_primary_font_family' => 0,
        '_options_primary_font_family' => 'field_5b68cfc4906fc',
        'options_header_layout' => 1,
        '_options_header_layout' => 'field_6047f336daec0',
        'options_header_template' => 91,
        '_options_header_template' => 'field_6047f4160611f',
        'options_footer_layout' => 1,
        '_options_footer_layout' => 'field_6047f44e06120',
        'options_footer_template' => 148,
        '_options_footer_template' => 'field_6047f46706121',
        'options_social_links_type' => 'icons',
        '_options_social_links_type' => 'field_5eadb9ddcf56e',
        'options_social_links' => 3,
        '_options_social_links' => 'field_5b68ccabc1b63',
        'options_blog_categories' => 1,
        '_options_blog_categories' => 'field_5b81b6d930cb9',
        'options_blog_excerpt' => 0,
        '_options_blog_excerpt' => 'field_5b81b7ca30cba',
        'options_social_share' => 'a:5:{i:0;s:8:"facebook";i:1;s:7:"twitter";i:2;s:8:"linkedin";i:3;s:6:"reddit";i:4;s:9:"pinterest";}',
        '_options_social_share' => 'field_5c610c399cf20',
        'options_p404_content' => 'The page you are looking for doesnt exist or has been moved.',
        '_options_p404_content' => 'field_5d180feb59b80',
        'options_disable_preloader' => 0,
        '_options_disable_preloader' => 'field_5e7d27a0e322a',
        'options_preload_logo_img' => 484,
        '_options_preload_logo_img' => 'field_612149b43f54f',
        'options_social_links_0_icon' => 'fab fa-dribbble',
        '_options_social_links_0_icon' => 'field_5eadbff631a92',
        'options_social_links_0_name' => 'dribbble',
        '_options_social_links_0_name' => 'field_5ef614b63614e',
        'options_social_links_0_url' => 'dribbble.com',
        '_options_social_links_0_url' => 'field_5b68ccd7c1b65',
        'options_social_links_1_icon' => 'fab fa-twitter',
        '_options_social_links_1_icon' => 'field_5eadbff631a92',
        'options_social_links_1_name' => 'twitter',
        '_options_social_links_1_name' => 'field_5ef614b63614e',
        'options_social_links_1_url' => 'twitter.com',
        '_options_social_links_1_url' => 'field_5b68ccd7c1b65',
        'options_social_links_2_icon' => 'fab fa-behance',
        '_options_social_links_2_icon' => 'field_5eadbff631a92',
        'options_social_links_2_name' => 'behance',
        '_options_social_links_2_name' => 'field_5ef614b63614e',
        'options_social_links_2_url' => 'behance.com',
        '_options_social_links_2_url' => 'field_5b68ccd7c1b65',
    );
    $ocdi_fields_to_change = array();

    global $wpdb;
    foreach ( array_merge( $ocdi_fields_static, $ocdi_fields_to_change ) as $field => $value ) {
        if ( $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM $wpdb->options WHERE option_name = %s", $field ) ) == 0 ) {
            $wpdb->query( $wpdb->prepare( "INSERT INTO $wpdb->options ( option_name, option_value, autoload ) VALUES (%s, %s, 'no')", $field, $value ) );
        } else {
            $wpdb->query( $wpdb->prepare( "UPDATE $wpdb->options SET option_value = %s WHERE option_name = %s", $value, $field ) );
        }
    }

}
add_action( 'pt-ocdi/after_import', 'ober_ocdi_after_import_setup' );

}
