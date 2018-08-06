<?php


if ( ! function_exists( 'exocube_theme_setup' ) ) :
	// main theme
	function exocube_theme_setup() {


		// Add default posts and comments RSS feed links to head
		add_theme_support( 'automatic-feed-links' );


		// allow wp manage title tag
		add_theme_support( 'title-tag' );


		// enable support for Post Thumbnails on posts and pages
		add_theme_support( 'post-thumbnails' );


		// this theme support 2 menu places
		register_nav_menus( array(
			'menu-header' => 'menu header',
			'menu-footer' => 'menu footer',
		) );


		//Switch default core markup for search form, comment form, and comments to output valid HTML5
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );


		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'blank_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );


		//Add support for core custom logo
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );


	}
endif;
add_action( 'after_setup_theme', 'exocube_theme_setup' );


// Enqueue scripts and styles
function exocube_theme_scripts() {
	wp_enqueue_style( 'exocube-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'exocube_theme_scripts' );
