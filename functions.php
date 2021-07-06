<?php
/**
 * Shams Blog functions and definitions.
 *
 * @package    WordPress
 * @subpackage Shamim_Ninja
 * @since      Shamim Ninja 1.0.0
 */



/***********************************************************************************************************************
 * Register CODE STAR Framework
 **********************************************************************************************************************/

require_once get_theme_file_path() . '/csf/codestar-framework.php';

if (!function_exists('cs_get_options')) {

	function cs_get_options($array = array())
	{
		return get_option('mss-options');
	}
}


/***********************************************************************************************************************
 * Include All other necessary classes for Md. Shamim Shahnewaz
 **********************************************************************************************************************/
require_once( '' . dirname( __FILE__ ) . '/mss-options.php' );


/***********************************************************************************************************************
 * CONSTANT Declaration for Md. Shamim Shahnewaz Theme
 **********************************************************************************************************************/

define("DIR_MSS_STYLE", get_stylesheet_directory_uri());
define("DIR_MSS_CSS", DIR_MSS_STYLE . "/assets/css/");
define("DIR_MSS_IMG", DIR_MSS_STYLE . "/assets/img/");
define("DIR_MSS_FONT", DIR_MSS_STYLE . "/assets/fonts/");
define("DIR_MSS_JS", DIR_MSS_STYLE . "/assets/js/");


/***********************************************************************************************************************
 * Md. Shamim Shahnewaz Theme Supports
 **********************************************************************************************************************/

add_theme_support( 'post-thumbnails' );
add_theme_support( 'responsive-embeds' );


/***********************************************************************************************************************
 * Include Md. Shamim Shahnewaz Assets (Stylesheets, JavaScripts)
 **********************************************************************************************************************/
if (!function_exists('mss_assets')) {

	function mss_assets()
	{
		wp_enqueue_style( 'mss-fa', DIR_MSS_CSS . '/font-awesome.min.css' );
		wp_enqueue_style( 'mss-lineicons', DIR_MSS_CSS . '/LineIcons.css' );
		wp_enqueue_style( 'mss-bootstrap', DIR_MSS_CSS . '/bootstrap.css' );
		wp_enqueue_style( 'mss-owl.carousel.min', DIR_MSS_CSS . '/owl.carousel.min.css' );
		wp_enqueue_style( 'mss-magnific-popup', DIR_MSS_CSS . '/magnific-popup.css' );
		wp_enqueue_style( 'mss-green-color', DIR_MSS_CSS . '/color/green-color.css' );
		wp_enqueue_style( 'mss-style', DIR_MSS_CSS . '/main.css' );
		wp_enqueue_style( 'mss-colorfull', DIR_MSS_CSS . '/color/colorfull-main.css' );

		wp_enqueue_script( 'jquery' );
		//wp_enqueue_script( 'mss-jquery-migrate', DIR_MSS_JS . 'jquery-migrate-3.0.0.min.js', array( 'jquery' ), '3.3.2', TRUE );
		wp_enqueue_script( 'mss-bootstrap', DIR_MSS_JS . 'bootstrap.js', array( 'jquery' ), '3.3.2', TRUE );
		wp_enqueue_script( 'mss-jquery.easing.min', DIR_MSS_JS . 'jquery.easing.min.js', array( 'jquery' ), '3.3.2', TRUE );
		wp_enqueue_script( 'mss-jquery.countTo', DIR_MSS_JS . 'jquery.countTo.js', array( 'jquery' ), '3.3.2', TRUE );
		wp_enqueue_script( 'mss-typed', DIR_MSS_JS . 'typed.js', array( 'jquery' ), '3.3.2', TRUE );
		wp_enqueue_script( 'mss-jquery.magnific-popup.min', DIR_MSS_JS . 'jquery.magnific-popup.min.js', array( 'jquery' ), '3.3.2', TRUE );
		wp_enqueue_script( 'mss-isotope.pkgd.min', DIR_MSS_JS . 'isotope.pkgd.min.js', array( 'jquery' ), '3.3.2', TRUE );
		wp_enqueue_script( 'mss-owl.carousel.min', DIR_MSS_JS . 'owl.carousel.min.js', array( 'jquery' ), '3.3.2', TRUE );
		wp_enqueue_script( 'mss-arshia', DIR_MSS_JS . 'arshia.js', array( 'jquery' ), '3.3.2', TRUE );
	}

	add_action('wp_enqueue_scripts', 'mss_assets');
}


/***********************************************************************************************************************
 * Register Navigation on Theme
 **********************************************************************************************************************/

if ( ! function_exists( 'register_mss_menu' ) ) {

	function register_mss_menu() {

		register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
	}

	add_action( 'init', 'register_mss_menu' );
}





/* FOR DEV */
function dd($var) {
	echo '<pre>';
	var_dump($var);
	exit;
}
function pr($var) {
	echo '<pre>';
	print_r($var);
	exit;
}