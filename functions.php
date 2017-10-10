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
add_image_size('portfolio-thumb', 384, 310, TRUE);
add_image_size('related-thumb', 241, 152, TRUE);


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

/***********************************************************************************************************************
 * Register Shams One Custom Post type ['so-portfolio']
 **********************************************************************************************************************/
if (!function_exists('so_portfolio_post_type')) {
	function so_portfolio_post_type()
	{
		register_post_type('so-portfolio', array(
			'labels'      => array(
				'name'               => __('Shams Portfolios'),
				'singular_name'      => __('Shams Portfolio'),
				'add_new'            => __('Add New Portfolio'),
				'add_new_item'       => __('Add New Portfolio'),
				'edit_item'          => __('Edit Portfolio'),
				'new_item'           => __('New Portfolio'),
				'view_item'          => __('Portfolio List'),
				'view_items'         => __('All Portfolios'),
				'all_items'          => __('All Portfolio'),
				'search_items'       => __('Search Portfolio'),
				'not_found'          => __('No Portfolio Found'),
				'not_found_in_trash' => __('No Portfolio Found in Trash'),
			),
			'public'      => TRUE,
			'has_archive' => TRUE,
			'rewrite'     => array('slug' => 'so-portfolio'),
			'menu_icon'   => 'dashicons-portfolio',
			'supports'    => array('title', 'editor', 'thumbnail'),
		));
	}
	add_action('init', 'so_portfolio_post_type');
}
/***********************************************************************************************************************
 * Register Shams One Custom Post type Taxonomy ['so-portfolio']
 **********************************************************************************************************************/
if (!function_exists('so_portfolio_type_taxonomy')) {
	function so_portfolio_type_taxonomy()
	{
		register_taxonomy('so-portfolio-type', array('so-portfolio'), array(
			'labels'            => array(
				'name'               => _x('Portfolio Type', 'taxonomy general name'),
				'singular_name'      => _x('Portfolio Type', 'taxonomy singular name'),
				'search_items'       => __('Portfolio Types', 'softyardlab'),
				'all_items'          => __('All Portfolio Types', 'softyardlab'),
				'parent_items'       => __('Parent Portfolio Types', 'softyardlab'),
				'parent_items_colon' => __('Parent Portfolio Types : ', 'softyardlab'),
				'edit_item'          => __('Edit Portfolio Type', 'softyardlab'),
				'update_item'        => __('Update Portfolio Type', 'softyardlab'),
				'add_new_item'       => __('Add New Portfolio Type', 'softyardlab'),
				'new_item_name'      => __('New Portfolio Type', 'softyardlab'),
				'menu_name'          => __('Portfolio Type', 'softyardlab'),
			),
			'hierarchical'      => FALSE,
			'show_ui'           => TRUE,
			'show_admin_column' => TRUE,
			'query_var'         => TRUE,
			'rewrite'           => array('slug' => 'so-portfolio-type'),
		));
	}
	add_action('init', 'so_portfolio_type_taxonomy');
}
/***********************************************************************************************************************
 * ['sy-portfolio'] Post Type MetaBox Options
 **********************************************************************************************************************/
if (!function_exists('so_portfolio_post_type_metabox_options')) {
	function so_portfolio_post_type_metabox_options()
	{
		$options = array();
		$options['so-portfolio'] = array(
			'id'        => '_so_portfolio_post_options',
			'title'     => 'Portfolio Meta',
			'post_type' => 'so-portfolio',
			'context'   => 'normal',
			'priority'  => 'default',
			'sections'  => array(
				array(
					'name'   => 'portfolio_fields',
					'fields' => array(
						array(
							'id'         => 'portfolio_fields_client',
							'type'       => 'text',
							'title'      => 'Client Name',
							'attributes' => array(
								'placeholder' => 'Ex: Microsoft',
							),
						),
						array(
							'id'         => 'portfolio_fields_date',
							'type'       => 'text',
							'title'      => 'Project Compilation Date',
							'attributes' => array(
								'placeholder' => 'Ex: September 12, 2017',
							),
						),
						array(
							'id'         => 'portfolio_fields_tech',
							'type'       => 'text',
							'title'      => 'Technology Used',
							'attributes' => array(
								'placeholder' => 'Ex: OOP, PHP, MySQL',
								'style'       => 'width: 100%',
							),
						),
						array(
							'id'         => 'portfolio_fields_demo',
							'type'       => 'text',
							'title'      => 'Demo URL',
							'attributes' => array(
								'placeholder' => 'Ex: http://softyardbd.com',
							),
						),
						array(
							'id'         => 'portfolio_fields_live',
							'type'       => 'text',
							'title'      => 'Live URL',
							'attributes' => array(
								'placeholder' => 'Ex: http://softyardbd.com',
							),
						),
						array(
							'id'         => 'portfolio_fields_download',
							'type'       => 'text',
							'title'      => 'Download URL',
							'attributes' => array(
								'placeholder' => 'Ex: http://softyardbd.com',
							),
						),
						array(
							'id'         => 'portfolio_fields_github',
							'type'       => 'text',
							'title'      => 'Git Hub Repository',
							'attributes' => array(
								'placeholder' => 'Ex: http://github.com/',
							),
						),
						array(
							'id'         => 'portfolio_fields_bitbucket',
							'type'       => 'text',
							'title'      => 'Bitbucket Repository',
							'attributes' => array(
								'placeholder' => 'Ex: http://bitbucket.org/',
							),
						),
					),
				),
			),
		);
		return $options;
	}
	add_filter('cs_metabox_options', 'so_portfolio_post_type_metabox_options');
}