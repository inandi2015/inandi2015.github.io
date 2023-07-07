<?php 
/**
 * Full Page functions and definitions
 *
 * @package Full Page
 */
 global $content_width;
 if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */ 
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! function_exists( 'full_page_setup' ) ) : 
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function full_page_setup() {
	load_theme_textdomain( 'full-page', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_post_type_support( 'page', 'excerpt' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'custom-logo', array(
		'height'      => 72,
		'width'       => 184,
		'flex-height' => true,
	) );	
	//Register Menus
	register_nav_menus( array(
			'primary' => __( 'Home Sibebar Navigation', 'full-page' ),
		) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_editor_style( 'editor-style.css' );
} 
endif; // full_page_setup
add_action( 'after_setup_theme', 'full_page_setup' );
function full_page_widgets_init() { 	
	register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'full-page' ),
		'description'   => esc_html__( 'Appears on blog page sidebar', 'full-page' ),
		'id'            => 'sidebar-1',
		'before_widget' => '',		
		'before_title'  => '<h3 class="widget-title titleborder"><span>',
		'after_title'   => '</span></h3><aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
	) );	
}
add_action( 'widgets_init', 'full_page_widgets_init' );
function full_page_font_url(){
		$font_url = '';		
		/* Translators: If there are any character that are not
		* supported by Roboto Condensed, trsnalate this to off, do not
		* translate into your own language.
		*/
		$robotocondensed = _x('on','Roboto Condensed:on or off','full-page');		
		/* Translators: If there has any character that are not supported 
		*  by Scada, translate this to off, do not translate
		*  into your own language.
		*/
		$lato = _x('on','Lato:on or off','full-page');	
		$roboto = _x('on','Roboto:on or off','full-page');
		$poppins = _x('on','Poppins:on or off','full-page');
		$montserrat = _x('on','Montserrat:on or off','full-page');
		
		if('off' !== $robotocondensed ){
			$font_family = array();
			if('off' !== $robotocondensed){
				$font_family[] = 'Roboto Condensed:300,400,600,700,800,900';
			}
			if('off' !== $lato){
				$font_family[] = 'Lato:100,100i,300,300i,400,400i,700,700i,900,900i';
			}
			if('off' !== $roboto){
				$font_family[] = 'Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
			}
			if('off' !== $poppins){
				$font_family[] = 'Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
			}
			if('off' !== $montserrat){
				$font_family[] = 'Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
			}							
						
			$query_args = array(
				'family'	=> urlencode(implode('|',$font_family)),
			);
			$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
		}
	return $font_url;
	}
	
function skt_full_page_slide_codes() { 
$hideslide = get_theme_mod('hide_slides', 1);
if (!is_home() && is_front_page()) {if( $hideslide == '') { ?>
<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery.supersized({
					// Functionality
					slideshow               :   1,			// Slideshow on/off
					autoplay				:	1,			// Slideshow starts playing automatically
					start_slide             :   1,			// Start slide (0 is random)
					stop_loop				:	2,			// Pauses slideshow on last slide
					random					: 	2,			// Randomize slide order (Ignores start slide)
					slide_interval          :   5000,		// Length between transitions
					transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	1000,		// Speed of transition

					new_window				:	1,			// Image links open in new window/tab
					pause_hover             :   0,			// Pause slideshow on hover
					keyboard_nav            :   1,			// Keyboard navigation on/off
					performance				:	1,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
					image_protect			:	0,			// Disables image dragging and right click with Javascript
															   
					// Size & Position
					min_width		        :   0,			// Min width allowed (in pixels)
					min_height		        :   0,			// Min height allowed (in pixels)
					vertical_center         :   1,			// Vertically center background
					horizontal_center       :   1,			// Horizontally center background
					fit_always				:	0,			// Image will never exceed browser width or height (Ignores min. dimensions)
					fit_portrait         	:   1,			// Portrait images will not exceed browser height
					fit_landscape			:   0,			// Landscape images will not exceed browser width
															   
					// Components							
					slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					thumb_links				:	1,			// Individual thumb links for each slide
					thumbnail_navigation    :   0,			// Thumbnail navigation
					slides 					:  	[			// Slideshow Images
 
<?php
$pages = array();
for($sld=1; $sld<4; $sld++) { 
	$mod = absint( get_theme_mod('page-setting'.$sld));
    if ( 'page-none-selected' != $mod ) {
      $pages[] = $mod;
    }	
} 

if( !empty($pages) ) :
$args = array(
      'posts_per_page' => 3,
      'post_type' => 'page',
      'post__in' => $pages,
      'orderby' => 'post__in'
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) :	
	$sld = 1;
        $i = 0;
        while ( $query->have_posts() ) : $query->the_post();
          $skt_full_page_slideno[] = $i;
          $skt_full_page_slidetitle[] = get_the_title();
		  $skt_full_page_slidedesc[] = get_the_excerpt();
          $skt_full_page_slidelink[] = esc_url(get_permalink());
?>		  

		 {image : '<?php the_post_thumbnail_url('full'); ?>', title : '<div id="slidefillimage"><div class="slide-title-area"><div class="slide-title"><a href="<?php echo esc_url($skt_full_page_slidelink[$i] ); ?>"><?php echo esc_html($skt_full_page_slidetitle[$i] ); ?></a></div></div>  <?php if(!empty($skt_full_page_slidedesc[$i])){?><div class="slide-description-area"><div class="slide-description"><?php echo esc_html($skt_full_page_slidedesc[$i] ); ?></div></div><?php } ?></div>'}, 						
<?php
$i++;
 $sld++;

        endwhile; endif; endif; 
?>						
					]
				});
		    });
		</script>
<?php }} 
}
add_action('wp_head', 'skt_full_page_slide_codes');

function skt_full_page_home_script() {
	wp_enqueue_script("jquery");
	wp_register_script('full-page_cookies', get_template_directory_uri() . '/js/jquery-cookie.js','', true);
	wp_enqueue_script('full-page_cookies'); 
}
add_action( 'wp_head', 'skt_full_page_home_script', 0 );
	
function full_page_scripts() {
	wp_enqueue_style('full-page-font', full_page_font_url(), array());
	wp_enqueue_style( 'full-page-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'full-page-editor-style', get_template_directory_uri()."/editor-style.css" );
	wp_enqueue_style( 'full-page-main-style', get_template_directory_uri()."/css/responsive.css" );		
	wp_enqueue_style( 'full-page-base-style', get_template_directory_uri()."/css/style_base.css" );
	wp_enqueue_script( 'full-page-custom-js', get_template_directory_uri() . '/js/custom.js','','1.0', true );	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_style('full-page-scrollbar_css',get_template_directory_uri().'/css/scrollbar.css', 'scrollbar_css' );
	wp_enqueue_style( 'supersized-css', 'https://demosktthemes.com/free/fullpage/supersized.css' );
	wp_enqueue_style( 'supersized-shutter_css' , 'https://demosktthemes.com/free/fullpage/supersized.shutter.css' );
	wp_register_script('full-page_scrollbar', get_template_directory_uri() . '/js/scrollbar.js','','3.1', true);
	wp_enqueue_script('full-page_scrollbar');
	wp_register_script('full-page_easing', get_template_directory_uri() . '/js/jquery.easing.js','','1.3', true);
	wp_enqueue_script('full-page_easing');		
	wp_enqueue_script( 'supersized', 'https://demosktthemes.com/free/fullpage/supersized.3.2.7.js', array( 'jquery' ), true );
	wp_enqueue_script( 'supersized-shutter', 'https://demosktthemes.com/free/fullpage/supersized.shutter.js', array( 'jquery' ), true );
}
add_action( 'wp_enqueue_scripts', 'full_page_scripts' );

define('FULL_PAGE_SKTTHEMES_URL','https://www.sktthemes.org/');
define('FULL_PAGE_SKTTHEMES_PRO_THEME_URL','https://www.sktthemes.org/shop/full-page-wordpress-theme/');
define('FULL_PAGE_SKTTHEMES_FREE_THEME_URL','https://www.sktthemes.org/shop/free-full-page-slider-wordpress-theme/');
define('FULL_PAGE_SKTTHEMES_THEME_DOC','http://sktthemesdemo.net/documentation/sktfullpage-documentation/');
define('FULL_PAGE_SKTTHEMES_LIVE_DEMO','https://www.sktperfectdemo.com/demos/fullpage/');
define('FULL_PAGE_SKTTHEMES_THEMES','https://www.sktthemes.org/themes/');
/**
 * Custom template for about theme.
 */
require get_template_directory() . '/inc/about-themes.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
// get slug by id
function full_page_get_slug_by_id($id) {
	$post_data = get_post($id, ARRAY_A);
	$slug = $post_data['post_name'];
	return $slug; 
}
if ( ! function_exists( 'full_page_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function full_page_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;
require_once get_template_directory() . '/customize-pro/example-1/class-customize.php';
/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function full_page_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", esc_html(get_bloginfo( 'pingback_url' ) ));
	}
}
add_action( 'wp_head', 'full_page_pingback_header' );

add_filter( 'body_class','full_page_body_class' );
function full_page_body_class( $classes ) {
 	$classes[] = 'panleload';
    return $classes;
}
/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function full_page_custom_excerpt_length( $excerpt_length ) {
    return 19;
}
add_filter( 'excerpt_length', 'full_page_custom_excerpt_length', 999 );
/**
 *
 * Style For About Theme Page
 *
 */
function full_page_admin_about_page_css_enqueue($hook) {
   if ( 'appearance_page_full_page_guide' != $hook ) {
        return;
    }
    wp_enqueue_style( 'full-page-about-page-style', get_template_directory_uri() . '/css/full-page-about-page-style.css' );
}
add_action( 'admin_enqueue_scripts', 'full_page_admin_about_page_css_enqueue' );

/* Lens Menu */

class full_page_CSS_Menu_Lens extends Walker {

  var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );
 
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul>\n";
  }
 
  function end_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }
  
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
 
    global $wp_query;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $class_names = $value = '';
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
   
    /* Add active class */
    if(in_array('current-menu-item', $classes)) {
      $classes[] = 'active';
      unset($classes['current-menu-item']);
    }
   
    /* Check for children */
    $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
    if (!empty($children)) {
      $classes[] = 'has-sub';
    }
   
    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
   
    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
   
    $output .= $indent . '<li' . $id . $value . $class_names .'>';
   
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
   
    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'><span>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= '</span></a>';
    $item_output .= $args->after;
   
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
 
  function end_el( &$output, $item, $depth = 0, $args = array() ) {
    $output .= "</li>\n";
  }
}
/* Lens Menu */


// WordPress wp_body_open backward compatibility
if ( ! function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}

/**
 * Include the Plugin_Activation class.
 */

require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'full_page_register_required_plugins' );
 
function full_page_register_required_plugins() {
	$plugins = array(
		array(
			'name'      => 'SKT Templates',
			'slug'      => 'skt-templates',
			'required'  => false,
		) 				
	);

	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'skt-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}