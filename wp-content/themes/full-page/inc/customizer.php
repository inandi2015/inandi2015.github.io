<?php
/**
 * Event Planners Theme Customizer
 *
 * @package Full Page
 */
function full_page_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'full_page_custom_header_args', array(
		'default-text-color'     => '949494',
		'width'                  => 1600,
		'height'                 => 200,
		'wp-head-callback'       => 'full_page_header_style',
 		'default-text-color' => false,
 		'header-text' => false,
	) ) );
}
add_action( 'after_setup_theme', 'full_page_custom_header_setup' );
if ( ! function_exists( 'full_page_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see full_page_custom_header_setup().
 */
function full_page_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() ) :
	?>
		.header {
			background: url(<?php echo esc_url(get_header_image()); ?>) no-repeat;
			background-position: center top;
			height:131px;
		}
	<?php endif; ?>	
	</style>
	<?php
}
endif; // full_page_header_style 
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */ 
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function full_page_customize_register( $wp_customize ) {
	//Add a class for titles
    class full_page_Info extends WP_Customize_Control {
        public $type = 'info';
        public $label = '';
        public function render_content() {
        ?>
			<h3 style="text-decoration: underline; color: #DA4141; text-transform: uppercase;"><?php echo esc_html( $this->label ); ?></h3>
        <?php
        }
    }
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->add_setting('color_scheme',array(
			'default'	=> '#1e1e1e',
			'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'color_scheme',array(
			'label' => esc_html__('Color Scheme','full-page'),			
			 'description'	=> esc_html__('More color options in PRO Version','full-page'),	
			'section' => 'colors',
			'settings' => 'color_scheme'
		))
	);
	// Slider Section		
	$wp_customize->add_section( 'slider_section', array(
            'title' => esc_html__('Slider Settings', 'full-page'),
            'priority' => null,
            'description'	=> esc_html__('Featured Image Size Should be ( 1400 X 789 ) More slider settings available in PRO Version','full-page'),		
        )
    );
	$wp_customize->add_setting('page-setting1',array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback'	=> 'full_page_sanitize_integer'
	));
	$wp_customize->add_control('page-setting1',array(
			'type'	=> 'dropdown-pages',
			'label'	=> esc_html__('Select page for slide one:','full-page'),
			'section'	=> 'slider_section'
	));	
	$wp_customize->add_setting('page-setting2',array(
			'default' => '0',
			'capability' => 'edit_theme_options',			
			'sanitize_callback'	=> 'full_page_sanitize_integer'
	));
	$wp_customize->add_control('page-setting2',array(
			'type'	=> 'dropdown-pages',
			'label'	=> esc_html__('Select page for slide two:','full-page'),
			'section'	=> 'slider_section'
	));	
	$wp_customize->add_setting('page-setting3',array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback'	=> 'full_page_sanitize_integer'
	));
	$wp_customize->add_control('page-setting3',array(
			'type'	=> 'dropdown-pages',
			'label'	=> esc_html__('Select page for slide three:','full-page'),
			'section'	=> 'slider_section'
	));	
	//Slider hide
	$wp_customize->add_setting('hide_slides',array(
			'sanitize_callback' => 'full_page_sanitize_checkbox',
			'default' => true,
	));	 
	$wp_customize->add_control( 'hide_slides', array(
    	   'section'   => 'slider_section',    	 
		   'label'	=> esc_html__('Uncheck To Show Slider','full-page'),
    	   'type'      => 'checkbox'
     )); // Slider Section		
	//Show Hide Home Content
	$wp_customize->add_setting('hide_homecontent',array(
			'sanitize_callback' => 'full_page_sanitize_checkbox',
			'default' => false,
	));	 
	$wp_customize->add_control( 'hide_homecontent', array(
    	   'section'   => 'slider_section',    	 
		   'label'	=> esc_html__('Check To Hide Content Over Slider','full-page'),
    	   'type'      => 'checkbox'
     )); // Show Hide Home Content
	// Social Icons 
	$wp_customize->add_section('social_sec',array(
			'title'	=> esc_html__('Social Settings','full-page'),				
			'description'	=> esc_html__('More social icon available in PRO Version','full-page'),		
			'priority'		=> null
	));
	$wp_customize->add_setting('fb_link',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'	
	));
	$wp_customize->add_control('fb_link',array(
			'label'	=> esc_html__('Add Facebook link here','full-page'),
			'section'	=> 'social_sec',
			'setting'	=> 'fb_link'
	));	
	$wp_customize->add_setting('twitt_link',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('twitt_link',array(
			'label'	=> esc_html__('Add Twitter link here','full-page'),
			'section'	=> 'social_sec',
			'setting'	=> 'twitt_link'
	));
	$wp_customize->add_setting('gplus_link',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('gplus_link',array(
			'label'	=> esc_html__('Add Google plus link here','full-page'),
			'section'	=> 'social_sec',
			'setting'	=> 'gplus_link'
	));
	$wp_customize->add_setting('pinterest_link',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('pinterest_link',array(
			'label'	=> esc_html__('Add Pinterest link here','full-page'),
			'section'	=> 'social_sec',
			'setting'	=> 'pinterest_link'
	));	 
	$wp_customize->add_setting('youtube_link',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('youtube_link',array(
			'label'	=> esc_html__('Add Youtube link here','full-page'),
			'section'	=> 'social_sec',
			'setting'	=> 'youtube_link'
	));	
	$wp_customize->add_setting('vimeo_link',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('vimeo_link',array(
			'label'	=> esc_html__('Add Vimeo link here','full-page'),
			'section'	=> 'social_sec',
			'setting'	=> 'vimeo_link'
	));	
	$wp_customize->add_setting('instagram_link',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('instagram_link',array(
			'label'	=> esc_html__('Add Instagram link here','full-page'),
			'section'	=> 'social_sec',
			'setting'	=> 'instagram_link'
	));		
	$wp_customize->add_setting('flickr_link',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('flickr_link',array(
			'label'	=> esc_html__('Add Flickr link here','full-page'),
			'section'	=> 'social_sec',
			'setting'	=> 'flickr_link'
	));		
	$wp_customize->add_setting('dribble_link',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('dribble_link',array(
			'label'	=> esc_html__('Add Dribble link here','full-page'),
			'section'	=> 'social_sec',
			'setting'	=> 'dribble_link'
	));	
	$wp_customize->add_setting('foursquare_link',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('foursquare_link',array(
			'label'	=> esc_html__('Add Foursquare link here','full-page'),
			'section'	=> 'social_sec',
			'setting'	=> 'foursquare_link'
	));		
	$wp_customize->add_setting('behance_link',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('behance_link',array(
			'label'	=> esc_html__('Add Behance link here','full-page'),
			'section'	=> 'social_sec',
			'setting'	=> 'behance_link'
	));		
	$wp_customize->add_setting('linkedin_link',array(
			'default'	=> null,
			'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('linkedin_link',array(
			'label'	=> esc_html__('Add Linkedin link here','full-page'),
			'section'	=> 'social_sec',
			'setting'	=> 'linkedin_link'
	));	
	// Social Icons 	    		
}
add_action( 'customize_register', 'full_page_customize_register' );
//Integer
function full_page_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}
function full_page_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

//setting inline css.
function full_page_custom_css() {
    wp_enqueue_style(
        'full-page-custom-style',
        get_template_directory_uri() . '/css/full-page-custom-style.css'
    );
        $color = get_theme_mod( 'color_scheme' ); //E.g. #e64d43
		$header_text_color = get_header_textcolor();
        $custom_css = "
					#sidebar ul li a:hover,				
					.phone-no strong,					
					.left a:hover,
					.blog_lists h4 a:hover,
					.recent-post h6 a:hover,
					.recent-post a:hover,
					.design-by a,
					.site-description,
					.logo h2 span,
					.fancy-title h2 span,
					.postmeta a:hover,
					.recent-post .morebtn:hover, .sitenav ul li a:hover, .sitenav ul li.current_page_item a, .sitenav ul li.menu-item-has-children.hover, .sitenav ul li.current-menu-parent a.parent, .left-fitbox a:hover h3, .right-fitbox a:hover h3, .tagcloud a, .cols-3 ul li a:hover
					{ 
						 color: {$color} !important;
					}
					.pagination .nav-links span.current, .pagination .nav-links a:hover,
					#commentform input#submit:hover,
					.nivo-controlNav a.active,								
					.wpcf7 input[type='submit'],
					a.ReadMore,
					.section2button,
					input.search-submit,
					#fullpage-sidebar,
					.fullpage-footer
					{ 
					   background-color: {$color} !important;
					}
					.titleborder span:after{border-bottom-color: {$color} !important;}
				";
        wp_add_inline_style( 'full-page-custom-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'full_page_custom_css' );          
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function full_page_customize_preview_js() {
	wp_enqueue_script( 'full_page_customizer', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'full_page_customize_preview_js' );