<?php

/**
 * Bootstrap Coach functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bootstrap_coach
 */
// freemius integration start

if ( !function_exists( 'bc_fs' ) ) {
    // Create a helper function for easy SDK access.
    function bc_fs()
    {
        global  $bc_fs ;
        
        if ( !isset( $bc_fs ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/freemius/start.php';
            $bc_fs = fs_dynamic_init( array(
                'id'             => '8726',
                'slug'           => 'bootstrap-coach',
                'premium_slug'   => 'bootstrap-coach-pro',
                'type'           => 'theme',
                'public_key'     => 'pk_82610fddf916653598dae43fed08e',
                'is_premium'     => false,
                'premium_suffix' => 'Pro',
                'has_addons'     => false,
                'has_paid_plans' => true,
                'menu'           => array(
                'support' => false,
            ),
                'is_live'        => true,
            ) );
        }
        
        return $bc_fs;
    }
    
    // Init Freemius.
    bc_fs();
    // Signal that SDK was initiated.
    do_action( 'bc_fs_loaded' );
}

// freemius integration end
if ( !defined( 'BOOTSTRAP_COACH_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( 'BOOTSTRAP_COACH_VERSION', '1.1.1' );
}

if ( !function_exists( 'bootstrap_coach_setup' ) ) {
    define( 'BOOTSTRAP_COACH_DIR', dirname( __FILE__ ) );
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function bootstrap_coach_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Bbootstrap Coach, use a find and replace
         * to change 'bootstrap-coach' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'bootstrap-coach', get_template_directory() . '/languages' );
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'main-menu' => esc_html__( 'Main Menu', 'bootstrap-coach' ),
        ) );
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script'
        ) );
        add_editor_style( get_stylesheet_uri() );
        add_theme_support( 'register_block_style' );
        add_theme_support( 'register_block_pattern' );
        add_theme_support( "wp-block-styles" );
        add_theme_support( "responsive-embeds" );
        add_theme_support( "align-wide" );
        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'bootstrap_coach_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );
        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
        require get_template_directory() . '/inc/starter-content.php';
        $starter_content = bootstrap_coach_starter_content();
        add_theme_support( 'starter-content', $starter_content );
    }

}

add_action( 'after_setup_theme', 'bootstrap_coach_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bootstrap_coach_content_width()
{
    $GLOBALS['content_width'] = apply_filters( 'bootstrap_coach_content_width', 640 );
}

add_action( 'after_setup_theme', 'bootstrap_coach_content_width', 0 );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
require get_template_directory() . '/inc/widgets/widgets.php';
/**
 * Enqueue scripts and styles.
 */
function bootstrap_coach_scripts()
{
    $body_font_family = get_theme_mod( 'body_font_family', 'Nunito' );
    $heading_font_family = get_theme_mod( 'heading_font_family', 'Merriweather' );
    $site_identity_font_family = esc_attr( get_theme_mod( 'bs_site_identity_font_family', 'Merriweather' ) );
    wp_enqueue_style(
        'bootstrap-coach-bootstrap',
        get_template_directory_uri() . '/css/bootstrap.min.css',
        array(),
        '5.0.1'
    );
    wp_enqueue_style(
        'font-awesome',
        get_template_directory_uri() . '/css/font-awesome.css',
        array(),
        '4.6.1'
    );
    wp_enqueue_style(
        'barfiller',
        get_template_directory_uri() . '/css/barfiller.css',
        array(),
        '1.0.1'
    );
    wp_enqueue_style(
        'owl',
        get_template_directory_uri() . '/css/owl.carousel.min.css',
        array(),
        '2.3.4'
    );
    wp_enqueue_style(
        'bootstrap-coach-style',
        get_template_directory_uri() . '/style.css',
        array(),
        BOOTSTRAP_COACH_VERSION
    );
    wp_style_add_data( 'bootstrap-coach-style', 'rtl', 'replace' );
    wp_dequeue_script( 'all' );
    wp_enqueue_script(
        'bootstrap-coach-bootstrap',
        get_template_directory_uri() . '/js/bootstrap.bundle.min.js',
        array( 'jquery' ),
        '5.0.1',
        true
    );
    wp_enqueue_script(
        'barfiller',
        get_template_directory_uri() . '/js/jquery.barfiller.js',
        array( 'jquery' ),
        '1.0.1',
        true
    );
    wp_enqueue_script(
        'owl',
        get_template_directory_uri() . '/js/owl.carousel.min.js',
        array( 'jquery' ),
        '2.3.4',
        true
    );
    wp_enqueue_script(
        'bootstrap-coach-navigation',
        get_template_directory_uri() . '/js/navigation.js',
        array(),
        BOOTSTRAP_COACH_VERSION,
        true
    );
    wp_enqueue_script(
        'bootstrap-coach-script',
        get_template_directory_uri() . '/js/script.js',
        array( 'jquery' ),
        BOOTSTRAP_COACH_VERSION,
        true
    );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'bootstrap_coach_scripts' );
/**
 * Recommended Plugins
 */
require get_template_directory() . '/inc/tgmpa/recommended-plugins.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Custom contrl
 */
require get_template_directory() . '/inc/custom-controls/custom-control.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Shortcode hooks
 */
require get_template_directory() . '/inc/shortcode-hooks.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}
/**
 * Typography Functions
 */
require get_template_directory() . '/inc/typography/typography.php';
/**
 * Customizer changes css
 */
require get_template_directory() . '/inc/dynamic-css.php';