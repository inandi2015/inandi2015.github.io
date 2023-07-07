<?php
/**
 * Counter Settings
 *
 * @package bootstrap_coach
 */
add_action( 'customize_register', 'bootstrap_coach_customize_counter_section' );

function bootstrap_coach_customize_counter_section( $wp_customize ) {

    $wp_customize->add_section( 'bootstrap_coach_counter_sections', array(
        'title'          => esc_html__( 'Counter Section', 'bootstrap-coach' ),
        'panel'          => 'bootstrap_coach_homepage_panel',
    ) );

    $wp_customize->add_setting( 'bc_counter_show_hide_option', array(
        'sanitize_callback'     =>  'bootstrap_coach_sanitize_checkbox',
        'default'               =>  true
    ) );

    $wp_customize->add_control( new Bootstrap_Coach_Toggle_Control( $wp_customize, 'bc_counter_show_hide_option', array(
        'label' => esc_html__( 'Hide / Show','bootstrap-coach' ),
        'section' => 'bootstrap_coach_counter_sections',
        'settings' => 'bc_counter_show_hide_option',
        'type'=> 'toggle',
    ) ) );

    $wp_customize->add_setting( 'bc_counter_video_link', array(
        'sanitize_callback'     =>  'esc_url_raw',
    ) );

    $wp_customize->add_control( 'bc_counter_video_link', array(
        'label' => esc_html__( 'Video Link', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_counter_sections',
        'type'=> 'url',
    ) );

    $wp_customize->add_setting('bc_heading_for_counter', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('bc_heading_for_counter', array(
        'label' => esc_html__('Enter Heading', 'bootstrap-coach'),
        'section' => 'bootstrap_coach_counter_sections',
        'settings' => 'bc_heading_for_counter',
        'type' => 'text',
    ));

    $wp_customize->add_setting('bc_content_for_counter', array(
        'sanitize_callback' => 'sanitize_textarea_field',
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('bc_content_for_counter', array(
        'label' => esc_html__('Enter Description', 'bootstrap-coach'),
        'section' => 'bootstrap_coach_counter_sections',
        'settings' => 'bc_content_for_counter',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting( 'bc_image_for_counter', array(
        'sanitize_callback'     =>  'bootstrap_coach_sanitize_image',
        'default-image'      => get_template_directory_uri() . '/images/banner.jpg',
        
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bc_image_for_counter', array(
        'label'      => esc_html__( 'Image', 'bootstrap-coach' ),
        'section'    => 'bootstrap_coach_counter_sections',
        'settings'   => 'bc_image_for_counter',
    ) ) );


    $wp_customize->add_setting( 'bootstrap_coach_counter_1_label', array(
        'sanitize_callback'     =>  'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'bootstrap_coach_counter_1_label', array(
        'label' => esc_html__( 'Counter 1 Title', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_counter_sections',
        'settings'    => 'bootstrap_coach_counter_1_label',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bootstrap_coach_counter_1_number', array(
        'sanitize_callback'     =>  'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'bootstrap_coach_counter_1_number', array(
        'label' => esc_html__( 'Counter 1 Value', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_counter_sections',
        'settings'    => 'bootstrap_coach_counter_1_number',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bootstrap_coach_counter_2_label', array(
        'sanitize_callback'     =>  'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'bootstrap_coach_counter_2_label', array(
        'label' => esc_html__( 'Counter 2 Title', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_counter_sections',
        'settings'    => 'bootstrap_coach_counter_2_label',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bootstrap_coach_counter_2_number', array(
        'sanitize_callback'     =>  'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'bootstrap_coach_counter_2_number', array(
        'label' => esc_html__( 'Counter 2 Value', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_counter_sections',
        'settings'    => 'bootstrap_coach_counter_2_number',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bootstrap_coach_counter_3_label', array(
        'sanitize_callback'     =>  'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'bootstrap_coach_counter_3_label', array(
        'label' => esc_html__( 'Counter 3 Title', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_counter_sections',
        'settings'    => 'bootstrap_coach_counter_3_label',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bootstrap_coach_counter_3_number', array(
        'sanitize_callback'     =>  'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'bootstrap_coach_counter_3_number', array(
        'label' => esc_html__( 'Counter 3 Value', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_counter_sections',
        'settings'    => 'bootstrap_coach_counter_3_number',
        'type'=> 'text',
    ) );


    $wp_customize->add_setting( 'bootstrap_coach_counter_4_label', array(
        'sanitize_callback'     =>  'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'bootstrap_coach_counter_4_label', array(
        'label' => esc_html__( 'Counter 4 Title', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_counter_sections',
        'settings'    => 'bootstrap_coach_counter_4_label',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bootstrap_coach_counter_4_number', array(
        'sanitize_callback'     =>  'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'bootstrap_coach_counter_4_number', array(
        'label' => esc_html__( 'Counter 4 Value', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_counter_sections',
        'settings'    => 'bootstrap_coach_counter_4_number',
        'type'=> 'text',
    ) );


    
    $wp_customize->selective_refresh->add_partial( 'bc_counter_show_hide_option', array(
        'selector' => '.session-counter > .container', // You can also select a css class
    ) );
}