<?php
/**
 * Social media Settings
 *
 * @package bootstrap_coach
 */


add_action( 'customize_register', 'bootstrap_coach_customize_social_media' );

function bootstrap_coach_customize_social_media( $wp_customize ) {

    $wp_customize->add_section( 'bootstrap_coach_social_media', array(
        'title'         => esc_html__( 'Social Media', 'bootstrap-coach' ),
        'panel'         => 'bootstrap_coach_header_panel',
        'priority'      => 9,
    ) );


    $wp_customize->add_setting( 'bootstrap_coach_facebook_link', array(
        'sanitize_callback'     =>  'esc_url_raw',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'bootstrap_coach_facebook_link', array(
        'label' => esc_html__( 'Facebook Link', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_social_media',
        'settings'    => 'bootstrap_coach_facebook_link',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bootstrap_coach_twitter_link', array(
        'sanitize_callback'     =>  'esc_url_raw',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'bootstrap_coach_twitter_link', array(
        'label' => esc_html__( 'Twitter Link', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_social_media',
        'settings'    => 'bootstrap_coach_twitter_link',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bootstrap_coach_pinterest_link', array(
        'sanitize_callback'     =>  'esc_url_raw',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'bootstrap_coach_pinterest_link', array(
        'label' => esc_html__( 'Pinterest Link', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_social_media',
        'settings'    => 'bootstrap_coach_pinterest_link',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bootstrap_coach_instagram_link', array(
        'sanitize_callback'     =>  'esc_url_raw',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'bootstrap_coach_instagram_link', array(
        'label' => esc_html__( 'Instagram Link', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_social_media',
        'settings'    => 'bootstrap_coach_instagram_link',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bootstrap_coach_linkedin_link', array(
        'sanitize_callback'     =>  'esc_url_raw',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'bootstrap_coach_linkedin_link', array(
        'label' => esc_html__( 'Linkedin Link', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_social_media',
        'settings'    => 'bootstrap_coach_linkedin_link',
        'type'=> 'text',
    ) );

    $wp_customize->add_setting( 'bootstrap_coach_youtube_link', array(
        'sanitize_callback'     =>  'esc_url_raw',
        'default'               =>  ''
    ) );

    $wp_customize->add_control( 'bootstrap_coach_youtube_link', array(
        'label' => esc_html__( 'Youtube Link', 'bootstrap-coach' ),
        'section' => 'bootstrap_coach_social_media',
        'settings'    => 'bootstrap_coach_youtube_link',
        'type'=> 'text',
    ) );


}