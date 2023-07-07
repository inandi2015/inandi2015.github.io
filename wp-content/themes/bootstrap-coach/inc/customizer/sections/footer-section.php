<?php

/**
 * Footer Settings
 *
 * @package bootstrap_coach
 */
add_action( 'customize_register', 'bootstrap_coach_customize_register_footer_section' );
function bootstrap_coach_customize_register_footer_section( $wp_customize )
{
    $wp_customize->add_section( 'bootstrap_coach_footer_section', array(
        'title'    => esc_html__( 'Footer Section', 'bootstrap-coach' ),
        'priority' => 14,
    ) );
}
