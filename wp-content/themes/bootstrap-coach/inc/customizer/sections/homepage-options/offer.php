<?php

/**
* Offer Settings
*
* @package bootstrap_coach
*/
add_action( 'customize_register', 'bootstrap_coach_customize_offer_option' );
function bootstrap_coach_customize_offer_option( $wp_customize )
{
    $wp_customize->add_section( 'bootstrap_coach_offer_section', array(
        'title' => esc_html__( 'Offer Section', 'bootstrap-coach' ),
        'panel' => 'bootstrap_coach_homepage_panel',
    ) );
}
