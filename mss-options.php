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
				'id'    => 'menu_hero_description',
				'type'  => 'text',
				'title' => 'Hero Description',
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

}