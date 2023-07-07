<?php
/**
 * Counter Settings
 *
 * @package bootstrap_coach
 */
add_action( 'customize_register', 'bootstrap_coach_customize_price_section' );

function bootstrap_coach_customize_price_section( $wp_customize ) {

    $wp_customize->add_section( 'bootstrap_coach_pricing_table', array(
        'title' => esc_html__( 'Pricing Section', 'bootstrap-coach'),
        'panel' => 'bootstrap_coach_homepage_panel'
    ) );

    $wp_customize->add_setting( 'bc_tickets_display_option', array(
        'sanitize_callback' => 'bootstrap_coach_sanitize_checkbox',
        'default' => true
    ) );

    $wp_customize->add_control( new Bootstrap_Coach_Toggle_Control( $wp_customize, 'bc_tickets_display_option', array(
        'label' => esc_html__('Hide / Show', 'bootstrap-coach'),
        'section' => 'bootstrap_coach_pricing_table',
        'type' => 'toggle',
    ) ) );

    $wp_customize->add_setting('bc_tickets_heading', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('bc_tickets_heading', array(
        'label' => esc_html__('Enter  Heading for Price Table', 'bootstrap-coach'),
        'section' => 'bootstrap_coach_pricing_table',
        'type' => 'text',
    ));

    $wp_customize->selective_refresh->add_partial('bc_tickets_display_option', array(
        'selector' => '.pricing > .container', // You can also select a css class
    ));
    
}