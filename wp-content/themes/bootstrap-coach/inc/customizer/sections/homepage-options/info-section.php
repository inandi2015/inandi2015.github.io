<?php

/**
 * info Settings
 *
 * @package bootstrap_coach
 */

add_action( 'customize_register', 'bootstrap_coach_customize_info_options_section' );
function bootstrap_coach_customize_info_options_section( $wp_customize ) {

    $wp_customize->add_section( 'bootstrap_coach_info_section', array(
        'title'          => esc_html__( 'Info Section', 'bootstrap-coach' ),
        'panel'         => 'bootstrap_coach_homepage_panel'       
    ) );
            
    $wp_customize->add_setting( 'bc_cta_blocks_show_hide', array(
        'sanitize_callback'     =>  'bootstrap_coach_sanitize_checkbox',
        'default'               =>  true
    ) );

    $wp_customize->add_control( new Bootstrap_Coach_Toggle_Control( $wp_customize, 'bc_cta_blocks_show_hide', array(
        'label' => esc_html__( 'Hide / Show Cta Blocks','bootstrap-coach' ),
        'section' => 'bootstrap_coach_info_section',
        'settings' => 'bc_cta_blocks_show_hide',
        'type'=> 'toggle',
    ) ) );

    $wp_customize->selective_refresh->add_partial('bc_cta_blocks_show_hide', array(
        'selector' => '.info-block> .container', // You can also select a css class
    ));

    $wp_customize->add_setting( 'heading_cta_block_1', array(
        'default' => '',
        'type' => 'customtext',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( new Bootstrap_Coach_Custom_Text( $wp_customize, 'heading_cta_block_1', array(
        'label' => esc_html__( 'Cta block 1 :', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_info_section',
        'settings' => 'heading_cta_block_1'
    ) ) );

    $wp_customize->add_setting( 'bc_title_for_cta_block_1', array(
        'sanitize_callback'     =>  'sanitize_text_field',
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( 'bc_title_for_cta_block_1', array(
        'label' => esc_html__( 'Title', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_info_section',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bc_content_for_cta_block_1', array(
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( 'bc_content_for_cta_block_1', array(
        'label' => esc_html__( 'Description', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_info_section',
        'type'=> 'textarea',
    ) );

    $wp_customize->add_setting( 'bc_cta_block_contact1_text', array(
        'sanitize_callback'     =>  'sanitize_text_field',
        'transport' => 'postMessage',
        'default'   => esc_html__( "Dial Now", 'bootstrap-coach' )
    ) );

    $wp_customize->add_control( 'bc_cta_block_contact1_text', array(
        'label' => esc_html__( 'Contact Text', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_info_section',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bc_cta_block_contact1', array(
        'sanitize_callback'     =>  'sanitize_text_field',
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( 'bc_cta_block_contact1', array(
        'label' => esc_html__( 'Contact Number', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_info_section',
        'type'=> 'text',
    ) );
 
    $wp_customize->add_setting( 'heading_cta_block_2', array(
        'default' => '',
        'type' => 'customtext',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( new bootstrap_coach_Custom_Text( $wp_customize, 'heading_cta_block_2', array(
        'label' => esc_html__( 'Cta block 2 :', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_info_section',
        'settings' => 'heading_cta_block_2'
    ) ) );   

    $wp_customize->add_setting( 'bc_title_for_cta_block_2', array(
        'sanitize_callback'     =>  'sanitize_text_field',
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( 'bc_title_for_cta_block_2', array(
        'label' => esc_html__( 'Title', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_info_section',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bc_content_for_cta_block_2', array(
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( 'bc_content_for_cta_block_2', array(
        'label' => esc_html__( 'Description', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_info_section',
        'type'=> 'textarea',
    ) );

    $wp_customize->add_setting( 'bc_cta_block_2_link_label', array(
        'sanitize_callback'     =>  'sanitize_text_field',
        'transport' => 'postMessage',''
    ) );

    $wp_customize->add_control( 'bc_cta_block_2_link_label', array(
        'label' => esc_html__( 'CTA Label', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_info_section',
        'type'=> 'text',
    ) );
 
    $wp_customize->add_setting( 'bc_cta_block_2_link', array(
        'sanitize_callback'     =>  'esc_url_raw',
    ) );

    $wp_customize->add_control( 'bc_cta_block_2_link', array(
        'label' => esc_html__( 'CTA Link', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_info_section',
        'type'=> 'url',
    ) );

}
