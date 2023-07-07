<?php

/**
 * Colors and Fonts Settings
 *
 * @package bootstrap_coach
 */
add_action( 'customize_register', 'bootstrap_coach_customize_colors' );
function bootstrap_coach_customize_colors( $wp_customize )
{
    $wp_customize->get_section( 'colors' )->priority = 12;
    $wp_customize->remove_control( 'header_textcolor' );
    $wp_customize->get_section( 'colors' )->title = esc_html__( 'Colors and Fonts', 'bootstrap-coach' );
    $wp_customize->add_setting( 'more_color_options', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '',
    ) );
    $wp_customize->add_control( new Bootstrap_Coach_Custom_Text( $wp_customize, 'more_color_options', array(
        'label'    => esc_html__( 'More color options available in Pro Version.', 'bootstrap-coach' ),
        'section'  => 'colors',
        'settings' => 'more_color_options',
        'type'     => 'customtext',
    ) ) );
}

add_action( 'customize_register', 'bootstrap_coach_customize_font_family' );
function bootstrap_coach_customize_font_family( $wp_customize )
{
    $wp_customize->add_setting( 'body_font_family', array(
        'capability'        => 'edit_theme_options',
        'default'           => 'Nunito',
        'sanitize_callback' => 'bootstrap_coach_sanitize_google_fonts',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'body_font_family', array(
        'label'    => esc_html__( 'Choose Font Family For Your Site', 'bootstrap-coach' ),
        'section'  => 'colors',
        'type'     => 'select',
        'choices'  => bootstrap_coach_google_fonts(),
        'priority' => 100,
    ) );
}

add_action( 'customize_register', 'bootstrap_coach_customize_font_size' );
function bootstrap_coach_customize_font_size( $wp_customize )
{
    $wp_customize->add_setting( 'font_size', array(
        'capability'        => 'edit_theme_options',
        'default'           => '16px',
        'sanitize_callback' => 'bootstrap_coach_sanitize_select',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'font_size', array(
        'label'    => esc_html__( 'Choose Font Size', 'bootstrap-coach' ),
        'section'  => 'colors',
        'type'     => 'select',
        'default'  => '16px',
        'choices'  => array(
        '13px' => '13px',
        '14px' => '14px',
        '15px' => '15px',
        '16px' => '16px',
        '17px' => '17px',
        '18px' => '18px',
    ),
        'priority' => 101,
    ) );
}

add_action( 'customize_register', 'bootstrap_coach_font_weight' );
function bootstrap_coach_font_weight( $wp_customize )
{
    $wp_customize->add_setting( 'body_font_weight', array(
        'default'           => 400,
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( new Bootstrap_Coach_Slider_Control( $wp_customize, 'body_font_weight', array(
        'section'  => 'colors',
        'label'    => esc_html__( 'Font Weight', 'bootstrap-coach' ),
        'priority' => 102,
        'choices'  => array(
        'min'  => 100,
        'max'  => 900,
        'step' => 100,
    ),
    ) ) );
}

add_action( 'customize_register', 'bootstrap_coach_line_height' );
function bootstrap_coach_line_height( $wp_customize )
{
    $wp_customize->add_setting( 'body_line_height', array(
        'default'           => 1.5,
        'sanitize_callback' => 'bootstrap_coach_sanitize_float',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( new Bootstrap_Coach_Slider_Control( $wp_customize, 'body_line_height', array(
        'section'  => 'colors',
        'label'    => esc_html__( 'Line Height', 'bootstrap-coach' ),
        'priority' => 102,
        'choices'  => array(
        'min'  => 0.1,
        'max'  => 3,
        'step' => 0.1,
    ),
    ) ) );
}

add_action( 'customize_register', 'bootstrap_coach_heading_options' );
function bootstrap_coach_heading_options( $wp_customize )
{
    $wp_customize->add_setting( 'heading_options_text', array(
        'default'           => '',
        'type'              => 'customtext',
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( new Bootstrap_Coach_Custom_Text( $wp_customize, 'heading_options_text', array(
        'label'    => esc_html__( 'Heading Options :', 'bootstrap-coach' ),
        'section'  => 'colors',
        'priority' => 103,
    ) ) );
}

add_action( 'customize_register', 'bootstrap_coach_heading_font_family' );
function bootstrap_coach_heading_font_family( $wp_customize )
{
    $wp_customize->add_setting( 'heading_font_family', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bootstrap_coach_sanitize_google_fonts',
        'default'           => 'Merriweather',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'heading_font_family', array(
        'label'    => esc_html__( 'Heading Font Family', 'bootstrap-coach' ),
        'section'  => 'colors',
        'type'     => 'select',
        'choices'  => bootstrap_coach_google_fonts(),
        'priority' => 103,
    ) );
}
