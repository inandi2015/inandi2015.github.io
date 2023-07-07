<?php

function bootstrap_coach_used_google_fonts() {

	$font_family = get_theme_mod( 'font_family', 'Montserrat' );
	$heading_font_family = get_theme_mod( 'heading_font_family', 'Poppins' );
	$site_identity_font_family = esc_attr( get_theme_mod( 'site_identity_font_family', 'Poppins' ) );

	$args['font_family'] = $font_family;
	$args['heading_font_family'] = $heading_font_family;
	$args['site_identity_font_family'] = $site_identity_font_family;

	return $args;

}