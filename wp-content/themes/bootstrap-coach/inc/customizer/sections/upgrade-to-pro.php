<?php
/**
 * Bootstrap Coach Pro Theme Info
 *
 * @package Bootstrap Coach
 */

function bootstrap_coach_customizer_upgrade_to_pro( $wp_customize ) {

	$wp_customize->add_section( new Bootstrap_Coach_Customize_Section_Pro_Control( $wp_customize, 'upgrade-to-pro',	array(
			'title'    => esc_html__( 'Bootstrap Coach Pro', 'bootstrap-coach' ),
			'type'	=> 'upgrade-to-pro',
			'pro_text' => esc_html__( 'Upgrade to Pro', 'bootstrap-coach' ),
			'pro_url'  => esc_url( 'https://thebootstrapthemes.com/coach/' ),
			'priority' => 1
		) )	);

	
}
add_action( 'customize_register', 'bootstrap_coach_customizer_upgrade_to_pro' );