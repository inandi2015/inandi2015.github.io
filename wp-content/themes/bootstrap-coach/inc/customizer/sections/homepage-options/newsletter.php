<?php

/**
 * newsletter Settings
 *
 * @package bootstrap_coach
 */

add_action( 'customize_register', 'bootstrap_coach_customize_newsletter_section' );
function bootstrap_coach_customize_newsletter_section( $wp_customize ) {

    $wp_customize->add_section( 'bootstrap_coach_newsletter_section', array(
        'title'          => esc_html__( 'Newsletter Section', 'bootstrap-coach' ),
        'panel'         => 'bootstrap_coach_homepage_panel'       
    ) );
            
    $wp_customize->add_setting( 'bc_newsletter_show_hide', array(
        'sanitize_callback'     =>  'bootstrap_coach_sanitize_checkbox',
        'default'               =>  true
    ) );

    $wp_customize->add_control( new Bootstrap_Coach_Toggle_Control( $wp_customize, 'bc_newsletter_show_hide', array(
        'label' => esc_html__( 'Hide / Show Newsletter Section','bootstrap-coach' ),
        'section' => 'bootstrap_coach_newsletter_section',
        'type'=> 'toggle',
    ) ) );

    $wp_customize->add_setting('bc_newsletter_shortcode', array(
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
        'default' => ''
    ));

    $wp_customize->add_control('bc_newsletter_shortcode', array(
        'label' => esc_html__('Enter Shortcode for newsletter', 'bootstrap-coach'),
        'section' => 'bootstrap_coach_newsletter_section',
        'type' => 'text',
    ));

    $wp_customize->selective_refresh->add_partial('bc_newsletter_show_hide', array(
        'selector' => '.newsletter > .container', // You can also select a css class
    ));

    

}
