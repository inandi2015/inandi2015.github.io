<?php

/**
 * Register widget area.
 *
 * @package bootstrap_coach
 */


function bootstrap_coach_widgets_init() {
    
    for($i = 1; $i<5; $i++){
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer Widget', 'bootstrap-coach' ) . " " . $i,
				'id'            => 'footer-'.$i.'',
				'description'   => esc_html__( 'Add widgets here.', 'bootstrap-coach' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h4 class="widget-title">',
				'after_title'   => '</h4>',
			)
		);
	}
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'bootstrap-coach' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Left Sidebar', 'bootstrap-coach' ),
		'id'            => 'left-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'bootstrap_coach_widgets_init' );