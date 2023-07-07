<?php
/**
* Why choose us Settings
*
* @package bootstrap_coach
*/

add_action( 'customize_register', 'bootstrap_coach_customize_about_option' );

function bootstrap_coach_customize_about_option( $wp_customize ) {

    $wp_customize->add_section( 'bootstrap_coach_about_section', array(
        'title'         => esc_html__( 'About Section', 'bootstrap-coach' ),
        'panel'         => 'bootstrap_coach_homepage_panel'
    ) );

    $wp_customize->add_setting('bc_about_display_option', array(
        'sanitize_callback' => 'bootstrap_coach_sanitize_checkbox',
        'default' => true
    ));

    $wp_customize->add_control(new Bootstrap_Coach_Toggle_Control($wp_customize, 'bc_about_display_option', array(
        'label' => esc_html__('Hide / Show', 'bootstrap-coach'),
        'section' => 'bootstrap_coach_about_section',
        'type' => 'toggle',
    )));

    $wp_customize->add_setting('bc_heading_for_about', array(
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
        'default' => ''
    ));

    $wp_customize->add_control('bc_heading_for_about', array(
        'label' => esc_html__('Enter Main Heading', 'bootstrap-coach'),
        'section' => 'bootstrap_coach_about_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('bc_content_for_about', array(
        'sanitize_callback' => 'sanitize_textarea_field',
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('bc_content_for_about', array(
        'label' => esc_html__('Enter Description', 'bootstrap-coach'),
        'section' => 'bootstrap_coach_about_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('bc_short_desc_for_about', array(
        'sanitize_callback' => 'sanitize_textarea_field',
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('bc_short_desc_for_about', array(
        'label' => esc_html__('Enter Quote', 'bootstrap-coach'),
        'section' => 'bootstrap_coach_about_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting( 'bc_image_for_about', array(
        'sanitize_callback'     =>  'bootstrap_coach_sanitize_image',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bc_image_for_about', array(
        'label'      => esc_html__( 'Image', 'bootstrap-coach' ),
        'section'    => 'bootstrap_coach_about_section',
        'settings'   => 'bc_image_for_about',
    ) ) );

    $wp_customize->add_setting( 'bootstrap_coach_about_button_1_label', array(
        'sanitize_callback'     =>  'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'bootstrap_coach_about_button_1_label', array(
        'label' => esc_html__( 'Button 1 Label', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_about_section',
        'settings'    => 'bootstrap_coach_about_button_1_label',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bootstrap_coach_about_button_1_link', array(
        'sanitize_callback'     =>  'esc_url_raw',
    ) );

    $wp_customize->add_control( 'bootstrap_coach_about_button_1_link', array(
        'label' => esc_html__( 'Button 1 Link', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_about_section',
        'settings'    => 'bootstrap_coach_about_button_1_link',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bootstrap_coach_about_button_2_label', array(
        'sanitize_callback'     =>  'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'bootstrap_coach_about_button_2_label', array(
        'label' => esc_html__( 'Button 2 Label', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_about_section',
        'settings'    => 'bootstrap_coach_about_button_2_label',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bootstrap_coach_about_button_2_link', array(
        'sanitize_callback'     =>  'esc_url_raw',
    ) );

    $wp_customize->add_control( 'bootstrap_coach_about_button_2_link', array(
        'label' => esc_html__( 'Button 2 Link', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_about_section',
        'settings'    => 'bootstrap_coach_about_button_2_link',
        'type'=> 'text',
    ) );

    $wp_customize->selective_refresh->add_partial('bc_about_display_option', array(
        'selector' => '.about > .container', // You can also select a css class
    ));

}