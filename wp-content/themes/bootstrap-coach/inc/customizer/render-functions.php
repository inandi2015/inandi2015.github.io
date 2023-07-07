<?php
/**
 * render callback function
 *
 * @package bootstrap_coach
 */
//banner
function bootstrap_coach_get_banner_sec_title(){
    return get_theme_mod( 'banner_section_title', __( 'Struggling In Life? I Can Help', 'bootstrap-coach' ) );
}

function bootstrap_coach_get_banner_desc(){
    return get_theme_mod( 'banner_section_description', __( 'Proin ornare venenatis vehicula. Duis posuere tellus a risus tincidunt, aliquet laoreet metus iaculis. Nunc sed lectus purus. Integer nulla ante, scelerisque eleifend sem eget, posuere fermentum lorem.', 'bootstrap-coach' ) );
}

function bootstrap_coach_get_banner_cta(){
    return get_theme_mod( 'banner_section_cta_label', __( 'Book Session', 'bootstrap-coach' ) );
}

//who we are
function bootstrap_coach_get_whoweare_heading(){
    return get_theme_mod( 'bs_heading_for_who_we_are', __( 'Who we are', 'bootstrap-coach' ) );
}

//counter
function bs_counter_show_hide_option(){
    return get_theme_mod( 'bs_heading_for_who_we_are', __( 'Who we are', 'bootstrap-coach' ) );
}

//testimonial
function bootstrap_coach_get_testimonials(){
    return get_theme_mod( 'bs_heading_for_offer', __( 'Discount up to 35% for first member!', 'bootstrap-coach' ) );
}
//offer
function bootstrap_coach_get_offers(){
    return get_theme_mod( 'bs_heading_for_offer', __( 'Discount up to 35% for first member!', 'bootstrap-coach' ) );
}
//price
function bootstrap_coach_get_tickets_heading(){
    return get_theme_mod( 'bs_tickets_heading', __( 'Services Pricing', 'bootstrap-coach' ) );
}

//copyright
function bootstrap_coach_get_copyright(){
    return get_theme_mod( 'bs_copyright_text', __( 'Proudly powered by WordPress | Theme: bootstrap-coach by Underscores.me', 'bootstrap-coach' ) );
}
