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

require_once( '' . dirname( __FILE__ ) . '/class-tgm-plugin-activation.php' );
require_once( '' . dirname( __FILE__ ) . '/shamsone-options.php' );

/* * *********************************************************************************************************************
 * Register the required plugins for this theme
 * ******************************************************************************************************************** */

add_action( 'tgmpa_register', 'so__register_required_plugins' );
function so__register_required_plugins() {
	
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		array(
			'name'     => 'Contact Form 7',
			'slug'     => 'contact-form-7',
			'required' => TRUE,
		),
		array(
			'name'               => 'Codestar Framework',
			// The plugin name.
			'slug'               => 'codestar-framework-1.0.1',
			// The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/lib/plugins/codestar-framework-1.0.1.zip',
			// The plugin source.
			'required'           => TRUE,
			// If false, the plugin is only 'recommended' instead of required.
			'version'            => '',
			// E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => TRUE,
			// If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => TRUE,
			// If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '',
			// If set, overrides default API URL and points to an external URL.
			'is_callable'        => '',
			// If set, this callable will be be checked for availability to determine if a plugin is active.
		),
	);
	
	$config = array(
		'id'           => 'shamsone',
		// Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',
		// Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins',
		// Menu slug.
		'parent_slug'  => 'themes.php',
		// Parent menu slug.
		'capability'   => 'edit_theme_options',
		// Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => TRUE,
		// Show admin notices or not.
		'dismissable'  => TRUE,
		// If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',
		// If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => TRUE,
		// Automatically activate plugins after installation or not.
		'message'      => '',
		// Message to output right before the plugins table.
	);
	
	tgmpa( $plugins, $config );
}

/* * *********************************************************************************************************************
 * Shams One Theme Supports
 * ******************************************************************************************************************** */

add_theme_support( 'post-thumbnails' );
add_image_size( 'portfolio-thumb', 384, 310, TRUE );
add_image_size( 'related-thumb', 241, 152, TRUE );


/* * *********************************************************************************************************************
 * Include Shams One Assets (Stylesheets, JavaScripts)
 * ******************************************************************************************************************** */

if ( ! function_exists( 'so_assets' ) ) {
	
	function so_assets() {
		
		$expertise = array();
		if ( in_array( 'codestar-framework-1.0.1/cs-framework.php', get_option( 'active_plugins' ) ) ) {
			if ( ! empty( cs_get_option( 'so_section_home_expertise' ) ) ) {
				foreach ( cs_get_option( 'so_section_home_expertise' ) as $key => $value ) {
					$expertise[] = $value[ 'so_section_home_expertise_title' ];
				}
			}
		}
		
		wp_enqueue_style( 'so-style', DIR_SHAMS_ONE_STYLE . '/style.css' );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'so-bootstrap', DIR_SHAMS_ONE_JS . 'bootstrap.min.js', array( 'jquery' ), '4.8.2', TRUE );
		wp_enqueue_script( 'so-bootstrap', DIR_SHAMS_ONE_JS . 'bootstrap.min.js', array( 'jquery' ), '4.8.2', TRUE );
		wp_enqueue_script( 'so-jquery-nav', DIR_SHAMS_ONE_JS . 'jquery.nav.js', array( 'jquery' ), '4.8.2', TRUE );
		wp_enqueue_script( 'so-typed', DIR_SHAMS_ONE_JS . 'typed.min.js', array( 'jquery' ), '4.8.2', TRUE );
		wp_enqueue_script( 'so-owl-carousel', DIR_SHAMS_ONE_JS . 'owl.carousel.min.js', array( 'jquery' ), '4.8.2', TRUE );
		wp_enqueue_script( 'so-isotope-pkgd', DIR_SHAMS_ONE_JS . 'isotope.pkgd.min.js', array( 'jquery' ), '4.8.2', TRUE );
		wp_enqueue_script( 'so-jquery-magnific-popup', DIR_SHAMS_ONE_JS . 'jquery.magnific-popup.min.js', array( 'jquery' ), '4.8.2', TRUE );
		wp_enqueue_script( 'so-google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAlXvhmyhieCZuRGoZMZPVefRFd4HpOxe0', array( 'jquery' ), '4.8.2', TRUE );
		wp_enqueue_script( 'so-main', DIR_SHAMS_ONE_JS . 'main.js', array( 'jquery' ), '4.8.2', TRUE );
		wp_localize_script( 'so-main', 'expertise', $expertise );
	}
	
	add_action( 'wp_enqueue_scripts', 'so_assets' );
}

/***********************************************************************************************************************
 * Register Navigation on Theme
 **********************************************************************************************************************/
if ( ! function_exists( 'register_so_menu' ) ) {
	
	function register_so_menu() {
		
		register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
	}
	
	add_action( 'init', 'register_so_menu' );
}

add_filter( 'nav_menu_css_class', 'special_nav_class', 10, 2 );

function special_nav_class( $classes, $item ) {
	
	if ( in_array( 'current-menu-item', $classes ) ) {
		$classes[] = 'current ';
	}
	
	return $classes;
}

/***********************************************************************************************************************
 * Create a default Landing Page / Home Page for Shams One
 **********************************************************************************************************************/
if ( get_page_by_title( 'Airport' ) == NULL ) {
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
if ( ! function_exists( 'so_portfolio_post_type' ) ) {
	
	function so_portfolio_post_type() {
		
		register_post_type( 'so-portfolio', array(
			'labels'      => array(
				'name'               => __( 'Shams Portfolios' ),
				'singular_name'      => __( 'Shams Portfolio' ),
				'add_new'            => __( 'Add New' ),
				'add_new_item'       => __( 'Add New Portfolio' ),
				'edit_item'          => __( 'Edit Portfolio' ),
				'new_item'           => __( 'New Portfolio' ),
				'view_item'          => __( 'Portfolio List' ),
				'view_items'         => __( 'View Portfolios' ),
				'all_items'          => __( 'All Portfolios' ),
				'search_items'       => __( 'Search Portfolio' ),
				'not_found'          => __( 'No Portfolio Found' ),
				'not_found_in_trash' => __( 'No Portfolio Found in Trash' ),
			),
			'public'      => TRUE,
			'has_archive' => TRUE,
			'rewrite'     => array( 'slug' => 'so-portfolio' ),
			'menu_icon'   => 'dashicons-portfolio',
			'supports'    => array( 'title', 'editor', 'thumbnail' ),
		) );
	}
	
	add_action( 'init', 'so_portfolio_post_type' );
}
/***********************************************************************************************************************
 * Register Shams One Custom Post type Taxonomy ['so-portfolio']
 **********************************************************************************************************************/
if ( ! function_exists( 'so_portfolio_type_taxonomy' ) ) {
	
	function so_portfolio_type_taxonomy() {
		
		register_taxonomy( 'so-portfolio-type', array( 'so-portfolio' ), array(
			'labels'            => array(
				'name'          => _x( 'Portfolio Types', 'taxonomy general name' ),
				'singular_name' => _x( 'Portfolio Types', 'taxonomy singular name' ),
				'search_items'  => __( 'Portfolio Types', 'shamsone' ),
				'all_items'     => __( 'All Portfolio Types', 'shamsone' ),
				'edit_item'     => __( 'Edit Type', 'shamsone' ),
				'update_item'   => __( 'Update Type', 'shamsone' ),
				'add_new_item'  => __( 'Add New Type', 'shamsone' ),
				'new_item_name' => __( 'New Portfolio Type', 'shamsone' ),
				'menu_name'     => __( 'Portfolio Types', 'shamsone' ),
			),
			'hierarchical'      => FALSE,
			'show_ui'           => TRUE,
			'show_admin_column' => TRUE,
			'query_var'         => TRUE,
			'rewrite'           => array( 'slug' => 'so-portfolio-type' ),
		) );
	}
	
	add_action( 'init', 'so_portfolio_type_taxonomy' );
}
/***********************************************************************************************************************
 * ['sy-portfolio'] Post Type MetaBox Options
 **********************************************************************************************************************/
if ( ! function_exists( 'so_portfolio_post_type_metabox_options' ) ) {
	
	function so_portfolio_post_type_metabox_options() {
		
		$options                   = array();
		$options[ 'so-portfolio' ] = array(
			'id'        => '_so_portfolio_post_options',
			'title'     => 'Portfolio Options',
			'post_type' => 'so-portfolio',
			'context'   => 'normal',
			'priority'  => 'default',
			'sections'  => array(
				array(
					'name'   => 'so_portfolio_overview',
					'title'  => 'Overview',
					'icon'   => 'fa fa-arrow-right',
					'fields' => array(
						array(
							'id'              => 'so_portfolio_overview_functionality',
							'type'            => 'group',
							'title'           => 'Functionality',
							'desc'            => 'Add the key functionality to show on portfolio details',
							'button_title'    => 'New Functionality',
							'accordion_title' => 'Functionality',
							'fields'          => array(
								array(
									'id'    => 'so_portfolio_overview_functionality_title',
									'type'  => 'text',
									'title' => 'Title',
								),
							),
						),
						array(
							'id'    => 'so_portfolio_overview_duration',
							'type'  => 'text',
							'title' => 'Duration',
							'desc'  => 'Add the duration to show on portfolio details',
						),
						array(
							'id'    => 'so_portfolio_overview_team',
							'type'  => 'text',
							'title' => 'Team Size',
							'desc'  => 'Add the team size to show on portfolio details',
						),
						array(
							'id'              => 'so_portfolio_overview_role',
							'type'            => 'group',
							'title'           => 'Roles Played',
							'desc'            => 'Add the key role to show on portfolio details',
							'button_title'    => 'New Role',
							'accordion_title' => 'Role',
							'fields'          => array(
								array(
									'id'    => 'so_portfolio_overview_role_title',
									'type'  => 'text',
									'title' => 'Title',
								),
							),
						),
					),
				),
				array(
					'name'   => 'so_portfolio_key',
					'title'  => 'Tech and Tools',
					'icon'   => 'fa fa-arrow-right',
					'fields' => array(
						array(
							'id'              => 'so_portfolio_key_tech',
							'type'            => 'group',
							'title'           => 'Using Technologies',
							'desc'            => 'Add the technologies to show on portfolio details',
							'button_title'    => 'New Technology',
							'accordion_title' => 'Technology',
							'fields'          => array(
								array(
									'id'    => 'so_portfolio_key_tech_title',
									'type'  => 'text',
									'title' => 'Title',
								),
							),
						),
						array(
							'id'              => 'so_portfolio_key_tool',
							'type'            => 'group',
							'title'           => 'Using Tools',
							'desc'            => 'Add the technologies to show on portfolio details',
							'button_title'    => 'New Tool',
							'accordion_title' => 'Tool',
							'fields'          => array(
								array(
									'id'    => 'so_portfolio_key_tool_title',
									'type'  => 'text',
									'title' => 'Title',
								),
							),
						),
					),
				),
				array(
					'name'   => 'so_portfolio_other',
					'title'  => 'Demo and Download',
					'icon'   => 'fa fa-arrow-right',
					'fields' => array(
						array(
							'id'    => 'so_portfolio_other_github',
							'type'  => 'text',
							'title' => 'Github',
							'desc'  => 'Add the URL to show on portfolio details',
						),
						array(
							'id'    => 'so_portfolio_other_bitbucket',
							'type'  => 'text',
							'title' => 'Bitbucket',
							'desc'  => 'Add the URL to show on portfolio details',
						),
						array(
							'id'    => 'so_portfolio_other_wordpress',
							'type'  => 'text',
							'title' => 'Wordpress',
							'desc'  => 'Add the URL to show on portfolio details',
						),
						array(
							'id'    => 'so_portfolio_other_link',
							'type'  => 'text',
							'title' => 'Demo Link',
							'desc'  => 'Add the URL to show on portfolio details',
						),
						array(
							'id'    => 'so_portfolio_other_server',
							'type'  => 'text',
							'title' => 'Live Link',
							'desc'  => 'Add the URL to show on portfolio details',
						),
						array(
							'id'    => 'so_portfolio_other_user',
							'type'  => 'text',
							'title' => 'Client Name',
							'desc'  => 'Add the client name to show on portfolio details',
						),
					),
				),
			),
		);
		
		return $options;
	}
	
	add_filter( 'cs_metabox_options', 'so_portfolio_post_type_metabox_options' );
}