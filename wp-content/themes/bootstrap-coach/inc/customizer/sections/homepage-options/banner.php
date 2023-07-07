<?php
/**
 * Banner Settings
 *
 * @package bootstrap_coach
 */
add_action( 'customize_register', 'bootstrap_coach_customize_banner_section' );

function bootstrap_coach_customize_banner_section( $wp_customize ) {

    $wp_customize->get_section( 'header_image' )->panel = "bootstrap_coach_homepage_panel";
    $wp_customize->get_section( 'header_image' )->title = esc_html__( "Banner Section", 'bootstrap-coach' );

    $wp_customize->add_setting( 'banner_section_display_option', array(
        'sanitize_callback'     =>  'bootstrap_coach_sanitize_checkbox',
        'default'               =>  true
    ) );

    $wp_customize->add_control( new Bootstrap_Coach_Toggle_Control( $wp_customize, 'banner_section_display_option', array(
        'label' => esc_html__( 'Hide / Show','bootstrap-coach' ),
        'section' => 'header_image',
        'settings' => 'banner_section_display_option',
        'type'=> 'toggle',
        'priority'  =>  1
    ) ) );

    $wp_customize->add_setting( 'banner_section_title', array(
        'transport' => 'postMessage',
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  ''
    ) );
    
    $wp_customize->add_control( 'banner_section_title', array(
        'label' => esc_html__( 'Banner Title','bootstrap-coach' ),
        'section' => 'header_image',
        'type'=> 'text',
        'priority'  =>  3
    ) );

    $wp_customize->selective_refresh->add_partial( 'banner_section_title', array(
	    'selector' => '.banner .caption .banner-title',
        'render_callback' => 'bootstrap_coach_get_banner_sec_title',
	) );

    $wp_customize->add_setting( 'banner_section_description', array(
        'transport' => 'postMessage',
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'banner_section_description', array(
        'label' => esc_html__( 'Description','bootstrap-coach' ),
        'section' => 'header_image',
        'settings' => 'banner_section_description',
        'type'=> 'textarea',
        'priority'  =>  4
    ) );

    $wp_customize->selective_refresh->add_partial( 'banner_section_description', array(
	    'selector' => '.banner .caption p',
        'render_callback' => 'bootstrap_coach_get_banner_desc'
	) );

    $wp_customize->add_setting( 'banner_section_cta_label', array(
        'transport' => 'postMessage',
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'banner_section_cta_label', array(
        'label' => esc_html__( 'CTA Label','bootstrap-coach' ),
        'section' => 'header_image',
        'settings' => 'banner_section_cta_label',
        'type'=> 'text',
        'priority'  =>  5
    ) );

    $wp_customize->selective_refresh->add_partial( 'banner_section_cta_label', array(
	    'selector' => '.banner .caption .btn',
        'render_callback' => 'bootstrap_coach_get_banner_cta'
	) );

    $wp_customize->add_setting( 'banner_section_cta_link', array(
        'sanitize_callback'     =>  'esc_url_raw',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'banner_section_cta_link', array(
        'label' => esc_html__( 'CTA Link','bootstrap-coach' ),
        'section' => 'header_image',
        'settings' => 'banner_section_cta_link',
        'type'=> 'url',
        'priority'  =>  6
    ) );

}