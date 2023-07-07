<?php
/**
 * Bootstrap Blog Typography Related Functions
 *
 * @package bootstrap_coach
 */



include_once wp_normalize_path( dirname( __FILE__ ) . '/inc/customizer-dropdown-google-fonts.php' );



include_once wp_normalize_path( dirname( __FILE__ ) . '/inc/class-webfonts-local.php' );
include_once wp_normalize_path( dirname( __FILE__ ) . '/inc/class-fonts-google-local.php' );

include_once wp_normalize_path( dirname( __FILE__ ) . '/site-fonts.php' );
include_once wp_normalize_path( dirname( __FILE__ ) . '/inc/helper-functions.php' );


add_action( 'wp_enqueue_scripts', 'scripts' );
function scripts() {
    $args = bootstrap_coach_used_google_fonts();
    wp_enqueue_style( 'google-fonts', bootstrap_coach_fonts_url( $args ), array(), null );
}