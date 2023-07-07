<?php
/**
 * Blog Settings
 *
 * @package bootstrap_coach
 */

add_action( 'customize_register', 'bootstrap_coach_customize_register_blog_post' );

function bootstrap_coach_customize_register_blog_post( $wp_customize ) {
	$wp_customize->add_section( 'bootstrap_coach_blog_post_section', array(
	    'title'          => esc_html__( 'Blog Posts', 'bootstrap-coach' ),
	    'description'    => esc_html__( 'Blog Posts :', 'bootstrap-coach' ),
	    'panel'          => 'bootstrap_coach_homepage_panel',
	    'priority'       => 160,
	) );

    $wp_customize->add_setting( 'blog_post_display_option', array(
      'sanitize_callback'     =>  'bootstrap_coach_sanitize_checkbox',
      'default'               =>  true
    ) );

    $wp_customize->add_control( new bootstrap_coach_Toggle_Control( $wp_customize, 'blog_post_display_option', array(
      'label' => esc_html__( 'Hide / Show','bootstrap-coach' ),
      'section' => 'bootstrap_coach_blog_post_section',
      'settings' => 'blog_post_display_option',
      'type'=> 'toggle',
    ) ) );

    $wp_customize->add_setting( 'blog_post_category', array(
        'capability'  => 'edit_theme_options',        
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '',
    ) );

    $wp_customize->add_control( new Bootstrap_Coach_Customize_Dropdown_Taxonomies_Control( $wp_customize, 'blog_post_category', array(
        'label' => esc_html__( 'Choose Category', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_blog_post_section',
        'settings' => 'blog_post_category',
        'type'=> 'dropdown-taxonomies',
        'taxonomy'  =>  'category'
    ) ) );

    $wp_customize->add_setting( 'blog_post_section_title', array(
        'transport' => 'postMessage',
        'sanitize_callback'     =>  'sanitize_text_field',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'blog_post_section_title', array(
        'label' => esc_html__( 'Title', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_blog_post_section',
        'settings' => 'blog_post_section_title',
        'type'=> 'text',
    ) );

    $wp_customize->selective_refresh->add_partial( 'blog_post_display_option', array(
	    'selector' => '.blogs > .container',
	) );

}