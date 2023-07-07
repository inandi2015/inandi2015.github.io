<?php
/**
 * Header Settings
 *
 * @package bootstrap_coach
 */

add_action( 'customize_register', 'bootstrap_coach_customize_register_header_panel' );

function bootstrap_coach_customize_register_header_panel( $wp_customize ) {
	$wp_customize->add_panel( 'bootstrap_coach_header_panel', array(
	    'title'       => esc_html__( 'Header Settings', 'bootstrap-coach' ),
        'capability' => 'edit_theme_options',
        'priority'    => 10,
	) );
}