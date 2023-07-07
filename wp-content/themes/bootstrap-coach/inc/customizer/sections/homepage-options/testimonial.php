<?php
/**
 * Testimonial Settings
 *
 * @package bootstrap_coach
 */
add_action( 'customize_register', 'bootstrap_coach_customize_testimonials_section' );

function bootstrap_coach_customize_testimonials_section( $wp_customize )
{
    $wp_customize->add_section('bootstrap_coach_testimonial_sections', array(
        'title' => esc_html__('Testimonial Section', 'bootstrap-coach'),
        'description' => esc_html__('Testimonial Section :', 'bootstrap-coach'),
        'panel' => 'bootstrap_coach_homepage_panel'
    ));

    $wp_customize->add_setting('bc_testimonial_display_option', array(
        'sanitize_callback' => 'bootstrap_coach_sanitize_checkbox',
        'default' => true
    ));

    $wp_customize->add_control(new Bootstrap_Coach_Toggle_Control($wp_customize, 'bc_testimonial_display_option', array(
        'label' => esc_html__('Hide / Show', 'bootstrap-coach'),
        'section' => 'bootstrap_coach_testimonial_sections',
        'type' => 'toggle',
    )));

    $wp_customize->add_setting('bc_heading_for_testimonial', array(
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
        'default' => ''
    ));

    $wp_customize->add_control('bc_heading_for_testimonial', array(
        'label' => esc_html__('Enter Heading for Testimonial', 'bootstrap-coach'),
        'section' => 'bootstrap_coach_testimonial_sections',
        'type' => 'text',
    ));

    $wp_customize->add_setting( 'bc_image_for_testimonial', array(
        'sanitize_callback'     =>  'bootstrap_coach_sanitize_image',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bc_image_for_testimonial', array(
        'label'      => esc_html__( 'Image', 'bootstrap-coach' ),
        'section'    => 'bootstrap_coach_testimonial_sections',
        'settings'   => 'bc_image_for_testimonial',
    ) ) );

    $wp_customize->selective_refresh->add_partial( 'bc_testimonial_display_option', array(
        'selector' => '.testimonial > .container',
      ) ); 

}