<?php

// Template Name: Home
get_header();
get_template_part( 'template-parts/home-sections/banner' );

if ( class_exists( 'The_Bootstrap_Themes_Companion' ) ) {
    $default = array(
        'info',
        'about',
        'offer',
        'counter',
        'teams',
        'testimonial',
        'price',
        'newsletter',
        'blogs'
    );
} else {
    $default = array(
        'info',
        'about',
        'offer',
        'counter',
        'newsletter',
        'blogs'
    );
}

$sections = get_theme_mod( 'bootstrap_coach_sort_homepage', $default );
if ( !empty($sections) && is_array( $sections ) ) {
    foreach ( $sections as $section ) {
        get_template_part( 'template-parts/home-sections/' . $section, $section );
    }
}
get_footer();