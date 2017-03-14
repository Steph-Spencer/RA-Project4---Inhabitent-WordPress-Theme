<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RED_Starter_Theme
 */

include 'lib.php';

if ( ! function_exists( 'red_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function red_starter_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // red_starter_setup
add_action( 'after_setup_theme', 'red_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function red_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'red_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'red_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function red_starter_widgets_init() {
	$sidebars = array (
		array(
			"id" 			=> "sidebar-1" ,
			"name" 			=>"Sidebar",
			"description" 	=> "default sidebar",
			"before_title"	=> "<h2>",
			"after_title"	=> "</h2>"
			),
		array(
			"id"			=>"business-info-sidebar",
			"name"			=>"Business Info Sidebar",
			"description"	=>"adds contact info and business hours to the right pane of the page",
			"before_title"	=>"<h2 class='widget-title'>",
			"after_title"	=>"</h2>"
			),
		array(
			"id"			=>"footer-sidebar",
			"name"			=>"Footer Sidebar",
			"description"	=>"adds information to the footer at the bottom of the page",
			"before_title"	=>"<h4 class='business-info'>",
			"after_title"	=>"</h4>"
			),
		array(
			"id"			=>"banner-image-sidebar",
			"name"			=>"Banner Image",
			"description"	=>"displays a full-width image",
			"before_title"	=>"",
			"after_title"	=>"",
			)
		);
	
	foreach ($sidebars as  $sidebar_name) {
		
		register_sidebar( array(
			'name'          => esc_html( $sidebar_name["name"] ),
			'id'            => $sidebar_name["id"],
			'description'   => $sidebar_name["description"],
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => $sidebar_name["before_title"],
			'after_title'   => $sidebar_name["after_title"],
		) );
	}
	
}

add_action( 'widgets_init', 'red_starter_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function red_starter_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}

add_filter( 'stylesheet_uri', 'red_starter_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function red_starter_scripts() {
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'red_starter_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
?>