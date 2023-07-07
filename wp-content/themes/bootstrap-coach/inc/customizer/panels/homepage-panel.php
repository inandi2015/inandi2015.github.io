<?php
/**
 * Homepage Settings
 *
 * @package bootstrap_coach
 */

add_action( 'customize_register', 'bootstrap_coach_customize_register_homepage_panel' );

function bootstrap_coach_customize_register_homepage_panel( $wp_customize ) {
	$wp_customize->add_panel( 'bootstrap_coach_homepage_panel', array(
	    'title'       => esc_html__( 'Home page Options', 'bootstrap-coach' ),
        'capability' => 'edit_theme_options',
        'priority'    => 11,
	) );
}