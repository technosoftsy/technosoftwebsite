<?php
if ( ! function_exists( 'cozipress_setup' ) ) :
function cozipress_setup() {

/**
 * Define Constants
 */
// Root path/URI.
define( 'COZIPRESS_PARENT_DIR', get_template_directory() );
define( 'COZIPRESS_PARENT_URI', get_template_directory_uri() );

// Root path/URI.
define( 'COZIPRESS_PARENT_INC_DIR', COZIPRESS_PARENT_DIR . '/inc');
define( 'COZIPRESS_PARENT_INC_URI', COZIPRESS_PARENT_URI . '/inc');

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	
	add_theme_support( 'custom-header' );
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	
	//Add selective refresh for sidebar widget
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'cozipress' );
		
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary_menu' => esc_html__( 'Primary Menu', 'cozipress' ),
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
	) );
	
	
	add_theme_support('custom-logo');

	/*
	 * WooCommerce Plugin Support
	 */
	add_theme_support( 'woocommerce' );
	
	// Gutenberg wide images.
	add_theme_support( 'align-wide' );
	
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'assets/css/editor-style.css', cozipress_google_font() ) );
	
	//Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'cozipress_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'cozipress_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cozipress_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cozipress_content_width', 1170 );
}
add_action( 'after_setup_theme', 'cozipress_content_width', 0 );



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function cozipress_widgets_init() {
	
	register_sidebar( array(
		'name' => __( 'Sidebar Widget Area', 'cozipress' ),
		'id' => 'cozipress-sidebar-primary',
		'description' => __( 'The Primary Widget Area', 'cozipress' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'cozipress' ),
		'id' => 'cozipress-footer-widget-area',
		'description' => __( 'The Footer Widget Area', 'cozipress' ),
		'before_widget' => '<div class="col wow fadeInUp"><aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside></div>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
	

	register_sidebar( array(
		'name' => __( 'WooCommerce Widget Area', 'cozipress' ),
		'id' => 'cozipress-woocommerce-sidebar',
		'description' => __( 'This Widget area for WooCommerce Widget', 'cozipress' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
}
add_action( 'widgets_init', 'cozipress_widgets_init' );


/**
 * All Styles & Scripts.
 */
require_once get_template_directory() . '/inc/enqueue.php';

/**
 * Nav Walker fo Bootstrap Dropdown Menu.
 */

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';


/**
 * Customizer additions.
 */
 require_once get_template_directory() . '/inc/cozipress-customizer.php';


 function contactusfile(){

wp_enqueue_style( 'technosoft_main_style', get_theme_file_uri('assets/css/customstyle/css/style.css') );

 }

 add_action( 'wp_enqueue_scripts', 'contactusfile') ;

