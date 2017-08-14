<?php
/**
 * Sambal Cakalang functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Sambal_Cakalang
 * @since Sambal Cakalang 1.0
 */

if ( ! function_exists( 'sambal_cakalang_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own sambal_cakalang_setup() function to override in a child theme.
 *
 * @since Sambal Cakalang 1.0
 */
function sambal_cakalang_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/sambal_cakalang
	 * If you're building a theme based on Sambal Cakalang, use a find and replace
	 * to change 'sambal_cakalang' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'sambal_cakalang' );

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
	 * Enable support for custom logo.
	 *
	 *  @since Sambal Cakalang 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'sambal_cakalang' ),
		'social'  => __( 'Social Links Menu', 'sambal_cakalang' ),
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

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

}
endif; // sambal_cakalang_setup
add_action( 'after_setup_theme', 'sambal_cakalang_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Sambal Cakalang 1.0
 */
function sambal_cakalang_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sambal_cakalang_content_width', 1000 );
}
add_action( 'after_setup_theme', 'sambal_cakalang_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Sambal Cakalang 1.0
 */
function sambal_cakalang_widgets_init() {
	// register_sidebar( array(
	// 	'name'          => __( 'Sidebar', 'sambal_cakalang' ),
	// 	'id'            => 'sidebar-1',
	// 	'description'   => __( 'Add widgets here to appear in your sidebar.', 'sambal_cakalang' ),
	// 	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</section>',
	// 	'before_title'  => '<h2 class="widget-title">',
	// 	'after_title'   => '</h2>',
	// ) );

	// register_sidebar( array(
	// 	'name'          => __( 'Content Bottom 1', 'sambal_cakalang' ),
	// 	'id'            => 'sidebar-2',
	// 	'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'sambal_cakalang' ),
	// 	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</section>',
	// 	'before_title'  => '<h2 class="widget-title">',
	// 	'after_title'   => '</h2>',
	// ) );

	// register_sidebar( array(
	// 	'name'          => __( 'Content Bottom 2', 'sambal_cakalang' ),
	// 	'id'            => 'sidebar-3',
	// 	'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'sambal_cakalang' ),
	// 	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</section>',
	// 	'before_title'  => '<h2 class="widget-title">',
	// 	'after_title'   => '</h2>',
	// ) );
}
add_action( 'widgets_init', 'sambal_cakalang_widgets_init' );

/**
 * Enqueues scripts and styles.
 *
 * @since Sambal Cakalang 1.0
 */
function sambal_cakalang_scripts() {
	
	//the stylesheets
    wp_enqueue_style( 'sambal_cakalang-font-google', 'https://fonts.googleapis.com/css?family=Oswald:300,400,500|Roboto:100,300,400,500,700' );
    wp_enqueue_style( 'sambal_cakalang-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.0.0' );
    wp_enqueue_style( 'sambal_cakalang-style', get_template_directory_uri() . '/assets/css/style.css', array( 'sambal_cakalang-bootstrap' ), '1.0.0' );
    wp_enqueue_style( 'sambal_cakalang-mediaqueries', get_template_directory_uri() . '/assets/css/mediaqueries.css', array( 'sambal_cakalang-bootstrap' ), '1.0.0' );
    
    //the scripts
    wp_enqueue_script( 'sambal_cakalang-jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', array(), '3.2.1', true );
    wp_enqueue_script( 'sambal_cakalang-tether', get_template_directory_uri() . '/assets/js/tether.js', array(), '1.2.4', true );
    wp_enqueue_script( 'sambal_cakalang-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '3.2.1', true );
    wp_enqueue_script( 'sambal_cakalang-script.js', get_template_directory_uri() . '/assets/js/script.js', array(), '3.2.1', true );
    
}
add_action( 'wp_enqueue_scripts', 'sambal_cakalang_scripts' );

/**
 * Adds ACF Supports for Theme Settings
 *
 * @since Sambal Cakalang 1.0
 *
 */
if( function_exists('acf_add_options_page') ) :

    acf_add_options_page( array(
        'page_title'    =>  'Theme Settings',
        'menu_title'    =>  'Theme Settings',
        'menu_slug'     =>  'theme_settings',
        'capability'    =>  'edit_posts',
        'parent_slug'   =>  '',
        'position'      =>  false,
        'icon_url'      =>  false,
    ) );

    acf_add_options_sub_page( array(
        'page_title'    =>  'Header',
        'menu_title'    =>  'Header',
        'menu_slug'     =>  'theme_settings_header',
        'capability'    =>  'edit_posts',
        'parent_slug'   =>  'theme_settings',
        'position'      =>  false,
        'icon_url'      =>  false,
    ) );

    acf_add_options_sub_page( array(
        'page_title'    =>  'Footer',
        'menu_title'    =>  'Footer',
        'menu_slug'     =>  'theme_settings_footer',
        'capability'    =>  'edit_posts',
        'parent_slug'   =>  'theme_settings',
        'position'      =>  false,
        'icon_url'      =>  false,
    ) );

endif;