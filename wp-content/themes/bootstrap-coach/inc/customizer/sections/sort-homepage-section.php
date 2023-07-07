<?php

/**
 * Rearrange Sections
 *
 * @package bootstrap_coach
 */
add_action( 'customize_register', 'bootstrap_coach_sort_homepage_sections' );
function bootstrap_coach_sort_homepage_sections( $wp_customize )
{
    $wp_customize->add_section( 'bootstrap_coach_sort_homepage_sections', array(
        'title'    => esc_html__( 'Rearrange Home Sections', 'bootstrap-coach' ),
        'panel'    => '',
        'priority' => 13,
    ) );
    
    if ( class_exists( 'The_Bootstrap_Themes_Companion' ) ) {
        $default = array(
            'info',
            'about',
            'counter',
            'teams',
            'testimonial',
            'price',
            'newsletter',
            'blogs'
        );
        $choices = array(
            'info'        => esc_html__( 'CTA Section', 'bootstrap-coach' ),
            'about'       => esc_html__( 'About Section', 'bootstrap-coach' ),
            'counter'     => esc_html__( 'Counter Section', 'bootstrap-coach' ),
            'teams'       => esc_html__( 'Teams Section', 'bootstrap-coach' ),
            'testimonial' => esc_html__( 'Testimonial Section', 'bootstrap-coach' ),
            'price'       => esc_html__( 'Price Section', 'bootstrap-coach' ),
            'newsletter'  => esc_html__( 'Newsletter Section', 'bootstrap-coach' ),
            'blogs'       => esc_html__( 'Blog Section', 'bootstrap-coach' ),
        );
    } else {
        $default = array(
            'info',
            'about',
            'counter',
            'newsletter',
            'blogs'
        );
        $choices = array(
            'info'       => esc_html__( 'CTA Section', 'bootstrap-coach' ),
            'about'      => esc_html__( 'About Section', 'bootstrap-coach' ),
            'counter'    => esc_html__( 'Counter Section', 'bootstrap-coach' ),
            'newsletter' => esc_html__( 'Newsletter Section', 'bootstrap-coach' ),
            'blogs'      => esc_html__( 'Blog Section', 'bootstrap-coach' ),
        );
    }
    
    $wp_customize->add_setting( 'bootstrap_coach_sort_homepage', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'bootstrap_coach_sanitize_array',
        'default'           => $default,
    ) );
    $wp_customize->add_control( new Bootstrap_Coach_Control_Sortable( $wp_customize, 'bootstrap_coach_sort_homepage', array(
        'label'   => esc_html__( 'Drag and Drop Sections to rearrange.', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_sort_homepage_sections',
        'type'    => 'sortable',
        'choices' => $choices,
    ) ) );
}
