<?php
if( ! function_exists( 'bootstrap_coach_register_custom_controls' ) ) :
/**
 * Register Custom Controls
*/
function bootstrap_coach_register_custom_controls( $wp_customize ) {
    
    // Load our custom control.
    require_once get_template_directory() . '/inc/custom-controls/sortable/class-sortable-control.php';
    require_once get_template_directory() . '/inc/custom-controls/toggle/class-toggle-control.php';
    require_once get_template_directory() . '/inc/custom-controls/dropdown-taxonomies/class-dropdown-taxonomies-control.php';
    require_once get_template_directory() . '/inc/custom-controls/slider/class-slider-control.php';
    require_once get_template_directory() . '/inc/custom-controls/select/class-select-control.php';

    require_once get_template_directory() . '/inc/custom-controls/notes.php';

    require get_template_directory() . '/inc/custom-controls/upgrade-to-pro/class-section-pro-control.php';
    
    // Register the control type.
    $wp_customize->register_control_type( 'Bootstrap_Coach_Control_Sortable' );
    $wp_customize->register_control_type( 'Bootstrap_Coach_Toggle_Control' );
    $wp_customize->register_control_type( 'Bootstrap_Coach_Slider_Control' );
    $wp_customize->register_control_type( 'Bootstrap_Coach_Select_Control' );

    $wp_customize->register_section_type( 'Bootstrap_Coach_Customize_Section_Pro_Control' );
 
}
endif;
add_action( 'customize_register', 'bootstrap_coach_register_custom_controls' );


function bootstrap_coach_enqueue_custom_admin_style() {
        wp_register_style( 'bootstrap-coach-upgrade-to-pro', get_template_directory_uri() . '/inc/custom-controls/upgrade-to-pro/upgrade-to-pro.css', false );
        wp_enqueue_style( 'bootstrap-coach-upgrade-to-pro' );

        wp_enqueue_script( 'bootstrap-coach-upgrade-to-pro', get_template_directory_uri() . '/inc/custom-controls/upgrade-to-pro/upgrade-to-pro.js', array( 'jquery' ), false, true );
}
add_action( 'admin_enqueue_scripts', 'bootstrap_coach_enqueue_custom_admin_style' );