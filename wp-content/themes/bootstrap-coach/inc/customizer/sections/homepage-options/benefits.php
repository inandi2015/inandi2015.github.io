<?php

/**
* benefit Settings
*
* @package bootstrap_coach
*/
add_action( 'customize_register', 'bootstrap_coach_customize_benefit_option' );
function bootstrap_coach_customize_benefit_option( $wp_customize )
{
    $wp_customize->add_section( 'bootstrap_coach_benefit_section', array(
        'title' => esc_html__( 'Benefit Section', 'bootstrap-coach' ),
        'panel' => 'bootstrap_coach_homepage_panel',
    ) );
}
