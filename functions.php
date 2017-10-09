<?php
/**
 * Shams Blog functions and definitions.
 *
 * @package    WordPress
 * @subpackage Shams_One
 * @since      Shams One 1.0.0
 */


/* * *********************************************************************************************************************
 * CONSTANT Declaration for Shams One Theme
 * ******************************************************************************************************************** */

define( "DIR_SHAMS_ONE_STYLE", get_stylesheet_directory_uri() );
define( "DIR_SHAMS_ONE_CSS", DIR_SHAMS_ONE_STYLE . "/assets/css/" );
define( "DIR_SHAMS_ONE_IMG", DIR_SHAMS_ONE_STYLE . "/assets/img/" );
define( "DIR_SHAMS_ONE_VIDEO", DIR_SHAMS_ONE_STYLE . "/assets/video/" );
define( "DIR_SHAMS_ONE_JS", DIR_SHAMS_ONE_STYLE . "/assets/js/" );


/* * *********************************************************************************************************************
 * Include All other necessary classes for Shams One
 * ******************************************************************************************************************** */

require_once( '' . dirname( __FILE__ ) . '/shamsone-options.php' );


/* * *********************************************************************************************************************
 * Shams One Theme Supports
 * ******************************************************************************************************************** */

add_theme_support( 'post-thumbnails' );


/* * *********************************************************************************************************************
 * Include Shams One Assets (Stylesheets, JavaScripts)
 * ******************************************************************************************************************** */

if ( ! function_exists( 'so_assets' ) ) {

	function so_assets() {
		wp_enqueue_style( 'so-style', DIR_SHAMS_ONE_STYLE . '/style.css' );

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'so-bootstrap', DIR_SHAMS_ONE_JS . 'bootstrap.min.js', array( 'jquery' ), '4.8.2', TRUE );
		wp_enqueue_script( 'so-bootstrap', DIR_SHAMS_ONE_JS . 'bootstrap.min.js', array( 'jquery' ), '4.8.2', TRUE );
		wp_enqueue_script( 'so-jquery-nav', DIR_SHAMS_ONE_JS . 'jquery.nav.js', array( 'jquery' ), '4.8.2', TRUE );
		wp_enqueue_script( 'so-jquery-particleground', DIR_SHAMS_ONE_JS . 'jquery.particleground.min.js', array( 'jquery' ), '4.8.2', TRUE );
		wp_enqueue_script( 'so-typed', DIR_SHAMS_ONE_JS . 'typed.min.js', array( 'jquery' ), '4.8.2', TRUE );
		wp_enqueue_script( 'so-owl-carousel', DIR_SHAMS_ONE_JS . 'owl.carousel.min.js', array( 'jquery' ), '4.8.2', TRUE );
		wp_enqueue_script( 'so-isotope-pkgd', DIR_SHAMS_ONE_JS . 'isotope.pkgd.min.js', array( 'jquery' ), '4.8.2', TRUE );
		wp_enqueue_script( 'so-jquery-magnific-popup', DIR_SHAMS_ONE_JS . 'jquery.magnific-popup.min.js', array( 'jquery' ), '4.8.2', TRUE );
		wp_enqueue_script( 'so-google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAlXvhmyhieCZuRGoZMZPVefRFd4HpOxe0', array( 'jquery' ), '4.8.2', TRUE );
		wp_enqueue_script( 'so-main', DIR_SHAMS_ONE_JS . 'main.js', array( 'jquery' ), '4.8.2', TRUE );
	}

	add_action( 'wp_enqueue_scripts', 'so_assets' );
}


/***********************************************************************************************************************
 * Create a default Landing Page / Home Page for Shams One
 **********************************************************************************************************************/
if ( get_page_by_title( 'Airport' ) == null ) {
	$post = array(
		'post_title'    => 'Airport',
		'post_status'   => 'publish',
		'post_type'     => 'page',
		'menu_order'    => '-100',
		'page_template' => 'page-template/shamsone-airport.php',
	);
	wp_insert_post( $post );
	$front_page = get_page_by_title( 'Airport' );
	update_option( 'page_on_front', $front_page->ID );
	update_option( 'show_on_front', 'page' );
}

