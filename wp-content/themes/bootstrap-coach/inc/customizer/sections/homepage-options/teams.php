<?php
/**
 * Teams Settings
 *
 * @package bootstrap_coach
 */
add_action( 'customize_register', 'bootstrap_coach_customize_teams_section' );

function bootstrap_coach_customize_teams_section( $wp_customize ) {

    $wp_customize->add_section('bootstrap_coach_teams_sections', array(
        'title' => esc_html__('Teams Section', 'bootstrap-coach'),
        'description' => esc_html__('Teams Section :', 'bootstrap-coach'),
        'panel' => 'bootstrap_coach_homepage_panel'
    ));

    $wp_customize->add_setting('bc_teams_display_option', array(
        'sanitize_callback' => 'bootstrap_coach_sanitize_checkbox',
        'default' => true
    ));

    $wp_customize->add_control(new Bootstrap_Coach_Toggle_Control($wp_customize, 'bc_teams_display_option', array(
        'label' => esc_html__('Hide / Show', 'bootstrap-coach'),
        'section' => 'bootstrap_coach_teams_sections',
        'settings' => 'bc_teams_display_option',
        'type' => 'toggle',
    )));

    $wp_customize->add_setting('bc_heading_for_teams', array(
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
        'default' => ''
    ));

    $wp_customize->add_control('bc_heading_for_teams', array(
        'label' => esc_html__('Enter Heading for Teams', 'bootstrap-coach'),
        'section' => 'bootstrap_coach_teams_sections',
        'type' => 'text',
    ));

    $wp_customize->selective_refresh->add_partial( 'bc_teams_display_option', array(
        'selector' => '.team > .container',
      ) ); 

}