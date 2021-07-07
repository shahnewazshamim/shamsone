<?php
/**
 * Md. Shamim Shahnewaz options and definitions.
 *
 * @package    WordPress
 * @subpackage Shamim_Ninja
 * @since      Shamim Ninja 1.0.0
 */

if (class_exists('CSF')) {

	$prefix = 'mss-options';

	/*******************************************************************************************************************
	 * Codestar Framework settings
	 ******************************************************************************************************************/

	CSF::createOptions($prefix, array(
		'menu_title'       => 'MSS Options',
		'type'             => 'theme', // menu, submenu, options, theme, etc.
		'menu_slug'        => 'mss-options',
		'ajax_save'        => true,
		'Enable_reset_all' => false,
		'framework_title'  => 'Theme Options <small><em><a>by Md. Shamim Shahnewaz</a></em></small>',
	));


	/*******************************************************************************************************************
	 * General Section
	 ******************************************************************************************************************/
	CSF::createSection($prefix, array(
		'id'     => 'mss_general',
		'title'  => 'General',
		'icon'   => 'fa fa-dashboard',
		'fields' => array(
			array(
				'id'    => 'mss_profile_image',
				'type'  => 'media',
				'title' => 'Profile Picture',
			),
			array(
				'id'    => 'mss_profile_image_width',
				'type'  => 'slider',
				'min'   => 10,
				'max'   => 100,
				'step'  => 5,
				'title' => 'Profile Picture Width',
			),
			array(
				'id'         => 'mss_is_logo_enable',
				'type'       => 'switcher',
				'text_on'    => 'Enable',
				'text_off'   => 'Disable',
				'text_width' => 100,
				'title'      => 'Enable Social Icon in "FOOTER"',
			),
			array(
				'id'         => 'mss_logo_initial',
				'type'       => 'text',
				'title'      => 'Logo Drop Cap',
				'dependency' => array( 'mss_is_logo_enable', '==', 'true' ),
			),
			array(
				'id'         => 'mss_logo_text',
				'type'       => 'text',
				'title'      => 'Logo Text',
				'dependency' => array( 'mss_is_logo_enable', '==', 'true' ),
			),
		)
	));


	/*******************************************************************************************************************
	 * Hero Section
	 ******************************************************************************************************************/
	CSF::createSection($prefix, array(
		'id'     => 'menu_hero',
		'title'  => 'Home Page',
		'icon'   => 'fa fa-home',
		'fields' => array(
			array(
				'id'    => 'menu_hero_icon',
				'type'  => 'icon',
				'title' => 'Hero Icon',
			),
			array(
				'id'    => 'mss_hero_title',
				'type'  => 'text',
				'title' => 'Hero Title',
			),
			array(
				'id'    => 'mss_hero_subtitle',
				'type'  => 'text',
				'title' => 'Hero Subtitle',
			),
			array(
				'id'    => 'mss_hero_description',
				'type'  => 'textarea',
				'title' => 'Hero Description',
			),
			array(
				'id'                     => 'mss_social_items',
				'type'                   => 'group',
				'min'                    => 2,
				'max'                    => 5,
				'accordion_title_number' => true,
				'title'                  => 'Social Media Items',
				'desc'                   => 'Set the social media.',
				'button_title'           => 'Add new social . . .',
				'fields'                 => array(
					array(
						'id'    => 'mss_social_items_title',
						'type'  => 'text',
						'title' => 'Title'
					),
					array(
						'id'    => 'mss_social_items_url',
						'type'  => 'text',
						'title' => 'URL'
					),
					array(
						'id'    => 'mss_social_items_icon',
						'type'  => 'text',
						'title' => 'Icon name (as per SVG)'
					),
				),
			),
		)
	));


	/*******************************************************************************************************************
	 * About Section
	 ******************************************************************************************************************/
	CSF::createSection($prefix, array(
		'id'     => 'menu_about',
		'title'  => 'About Page',
		'icon'   => 'fa fa-user',
		'fields' => array(
			array(
				'id'    => 'menu_about_icon',
				'type'  => 'icon',
				'title' => 'About Icon',
			),
			array(
				'id'    => 'menu_about_description',
				'type'  => 'text',
				'title' => 'About Description',
			),
		)
	));


	/*******************************************************************************************************************
	 * Resume Section
	 ******************************************************************************************************************/
	CSF::createSection($prefix, array(
		'id'     => 'menu_resume',
		'title'  => 'Resume Page',
		'icon'   => 'fa fa-address-book',
		'fields' => array(
			array(
				'id'    => 'menu_resume_icon',
				'type'  => 'icon',
				'title' => 'Resume Icon',
			),
			array(
				'id'    => 'menu_resume_description',
				'type'  => 'text',
				'title' => 'Resume Description',
			),
		)
	));


	/*******************************************************************************************************************
	 * Works Section
	 ******************************************************************************************************************/
	CSF::createSection($prefix, array(
		'id'     => 'menu_work',
		'title'  => 'Works Page',
		'icon'   => 'fa fa-briefcase',
		'fields' => array(
			array(
				'id'    => 'menu_work_icon',
				'type'  => 'icon',
				'title' => 'Work Icon',
			),
			array(
				'id'    => 'menu_work_description',
				'type'  => 'text',
				'title' => 'Work Description',
			),
		)
	));


	/*******************************************************************************************************************
	 * Blog Section
	 ******************************************************************************************************************/
	CSF::createSection($prefix, array(
		'id'     => 'menu_blog',
		'title'  => 'Blog Page',
		'icon'   => 'fa fa-file-text',
		'fields' => array(
			array(
				'id'    => 'menu_blog_icon',
				'type'  => 'icon',
				'title' => 'Blog Icon',
			),
			array(
				'id'    => 'menu_blog_description',
				'type'  => 'text',
				'title' => 'Blog Description',
			),
		)
	));


	/*******************************************************************************************************************
	 * Contact Section
	 ******************************************************************************************************************/
	CSF::createSection($prefix, array(
		'id'     => 'menu_contact',
		'title'  => 'Contact Page',
		'icon'   => 'fa fa-envelope-open',
		'fields' => array(
			array(
				'id'    => 'menu_contact_icon',
				'type'  => 'icon',
				'title' => 'Contact Icon',
			),
			array(
				'id'    => 'menu_contact_description',
				'type'  => 'text',
				'title' => 'Contact Description',
			),
		)
	));

}