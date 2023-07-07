<?php
/**
 * General Settings
    *
    * @package bootstrap_coach
 */


add_action( 'customize_register', 'bootstrap_coach_customize_general_option' );

function bootstrap_coach_customize_general_option( $wp_customize ) {

    $wp_customize->add_section( 'bootstrap_coach_general_section', array(
        'title'         => esc_html__( 'General Options', 'bootstrap-coach' ),
        'description'   => esc_html__( 'General Options', 'bootstrap-coach' ),
        'panel'         => 'bootstrap_coach_header_panel',
        'priority'      => 10,
    ) );

    $wp_customize->add_setting( 'bootstrap_coach_contact_number', array(   
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '',
    ) );

    $wp_customize->add_control( 'bootstrap_coach_contact_number', array(
        'label' => esc_html__( 'Contact Number', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_general_section',
        'settings' => 'bootstrap_coach_contact_number',
        'type'=> 'text',
    ) );

    $wp_customize->selective_refresh->add_partial( 'bootstrap_coach_contact_number', array(
	    'selector' => '.top-header .phone',
        
	) );

    $wp_customize->add_setting( 'bootstrap_coach_email_address', array( 
        'transport' => 'postMessage',  
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'bootstrap_coach_email_address', array(
        'label' => esc_html__( 'Email Address', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_general_section',
        'settings' => 'bootstrap_coach_email_address',
        'type'=> 'text',
    ) );

    $wp_customize->selective_refresh->add_partial( 'bootstrap_coach_email_address', array(
	    'selector' => '.top-header .email',
        
	) );

    $wp_customize->add_setting('bc_header_cta_label', array(
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
        'default' => ''
    ));

    $wp_customize->add_control('bc_header_cta_label', array(
        'label' => esc_html__('Cta Button Label', 'bootstrap-coach'),
        'section' => 'bootstrap_coach_general_section',
        'type' => 'text',
    ));

    $wp_customize->selective_refresh->add_partial( 'bc_header_cta_label', array(
	    'selector' => '.top-header .book-btn',
        
	) );

    $wp_customize->add_setting('bc_header_cta_link', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => ''
    ));

    $wp_customize->add_control('bc_header_cta_link', array(
        'label' => esc_html__('Cta Button Link', 'bootstrap-coach'),
        'section' => 'bootstrap_coach_general_section',
        'type' => 'url',
    ));
}