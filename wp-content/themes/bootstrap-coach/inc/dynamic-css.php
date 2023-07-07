<?php

function bootstrap_coach_dynamic_css()
{
    wp_enqueue_style(
        'bootstrap-coach-style',
        get_stylesheet_uri(),
        array(),
        BOOTSTRAP_COACH_VERSION
    );
    $site_title_color = get_theme_mod( 'bs_site_title_color_option', '#222' );
    $site_title_size = get_theme_mod( 'bs_site_title_size', '30' );
    $logo_size = absint( $site_title_size * 2 );
    $site_identity_font_family = get_theme_mod( 'bs_site_identity_font_family', 'Merriweather' );
    $bc_image_for_testimonial = get_theme_mod( 'bc_image_for_testimonial', '' );
    $primary_color = bootstrap_coach_hex_to_rgba( '#FF6C2E' );
    $secondary_color = bootstrap_coach_hex_to_rgba( '#000000' );
    $light_color = bootstrap_coach_hex_to_rgba( '#ffffff' );
    $dark_color = bootstrap_coach_hex_to_rgba( '#000000' );
    $text_color = bootstrap_coach_hex_to_rgba( '#757575' );
    $body_font_family = esc_attr( get_theme_mod( 'body_font_family', 'Nunito' ) );
    $font_size = esc_attr( get_theme_mod( 'font_size', '16px' ) );
    $body_font_weight = esc_attr( get_theme_mod( 'body_font_weight', 600 ) );
    $body_line_height = get_theme_mod( 'body_line_height', '1.5' );
    $heading_font_family = esc_attr( get_theme_mod( 'heading_font_family', 'Merriweather' ) );
    $dynamic_css = "\r\n        :root {\r\n                --primary-color: {$primary_color};\r\n                --secondary-color: {$secondary_color};\r\n                --dark-color: {$dark_color};\r\n                --light-color: {$light_color};\r\n                --text-color: {$text_color};\r\n\r\n                --body-font: {$body_font_family};\r\n                --heading-font: {$heading_font_family};\r\n                \r\n               \r\n        }\r\n                /* site title size */\r\n                .site-title a{ font-size: {$site_title_size}" . "px; font-family: {$site_identity_font_family}; color: {$site_title_color}; }\r\n                \r\n                header .custom-logo-link img{ height: {$logo_size}" . "px; }\r\n\r\n                /* font family */\r\n                html,:root{ font-size: {$font_size};}\r\n\r\n                body{line-height: {$body_line_height};  font-weight:{$body_font_weight}; }\r\n\r\n                .testimonial:before{\r\n                background-image: url({$bc_image_for_testimonial});\r\n                }\r\n        ";
    wp_add_inline_style( 'bootstrap-coach-style', $dynamic_css );
}

add_action( 'wp_enqueue_scripts', 'bootstrap_coach_dynamic_css' );