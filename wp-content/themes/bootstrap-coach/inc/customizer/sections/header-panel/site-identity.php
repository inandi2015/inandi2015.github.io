<?php
/**
 * Site Identity Settings
 * 
 * @package bootstrap_coach
 */

add_action( 'customize_register', 'bootstrap_coach_change_site_identity_panel' );

function bootstrap_coach_change_site_identity_panel( $wp_customize)  {

    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_control( 'blogname' )->priority = 5;
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_control( 'blogdescription' )->priority = 7;

    $wp_customize->get_section( 'static_front_page' )->priority = 20;

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'bootstrap_coach_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'bootstrap_coach_customize_partial_blogdescription',
			)
		);
	}

    $wp_customize->add_setting('sitetitle_showhide',
        array(
            'default'           => true,
            'sanitize_callback' => 'bootstrap_coach_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
		'sitetitle_showhide',
		array(
			'section'	  => 'title_tagline',
			'label'		  => __( 'Site Title Show/hide', 'bootstrap-coach' ),
			'description' => __( 'Enable to show Site Title in header.', 'bootstrap-coach' ),
            'type'        => 'checkbox',
            'priority'    => 4
		)		
	);

    $wp_customize->add_setting('tagline_showhide',
        array(
            'default'           => true,
            'sanitize_callback' => 'bootstrap_coach_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
		'tagline_showhide',
		array(
			'section'	  => 'title_tagline',
			'label'		  => __( 'Tagline Show/hide', 'bootstrap-coach' ),
			'description' => __( 'Enable to show Tagline in header.', 'bootstrap-coach' ),
            'type'        => 'checkbox',
            'priority'    => '6'
		)		
	);

    $wp_customize->get_section( 'title_tagline' )->panel = 'bootstrap_coach_header_panel';
    
    $wp_customize->add_setting( 'bs_site_title_color_option', array(
        'capability'  => 'edit_theme_options',
        'default'     => '#000',
        'transport' => 'postMessage',
        'sanitize_callback' => 'bootstrap_coach_sanitize_hex_color'
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bs_site_title_color_option', array(
        'label'      => esc_html__( 'Site Title Color', 'bootstrap-coach' ),
        'section'    => 'title_tagline',
        'settings'   => 'bs_site_title_color_option',
    ) ) );

    $wp_customize->add_setting( 'bs_site_title_size', array(
        'default'           => 30,
        'sanitize_callback' => 'absint',
        'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( new Bootstrap_Coach_Slider_Control( $wp_customize, 'bs_site_title_size', array(
        'section' => 'title_tagline',
        'settings' => 'bs_site_title_size',
        'label'   => esc_html__( 'Logo Size', 'bootstrap-coach' ),
        'choices'     => array(
            'min'   => 15,
            'max'   => 60,
            'step'  => 1,
        )
    ) ) );

    $wp_customize->add_setting( 'bs_site_identity_font_family', array(
        'transport' => 'postMessage',
        'sanitize_callback' => 'bootstrap_coach_sanitize_google_fonts',
        'default'     => 'Merriweather',
    ) );

    $wp_customize->add_control( 'bs_site_identity_font_family', array(
        'label'       =>  esc_html__( 'Site Identity Font Family', 'bootstrap-coach' ),
        'section'     => 'title_tagline',
        'type'        => 'select',
        'choices'     => bootstrap_coach_google_fonts(),
    ) );

}


/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function bootstrap_coach_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function bootstrap_coach_customize_partial_blogdescription() {
	bloginfo( 'description' );
}