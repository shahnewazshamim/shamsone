<?php
/**
 * Shams One options and definitions.
 *
 * @package    WordPress
 * @subpackage Shams_One
 * @since      Shams One 1.0.0
 */

function shamsone_options( $options ) {
	$options = array();

	/*******************************************************************************************************************
	 * Profile Sections
	 ******************************************************************************************************************/
	$options['profile'] = array(
		'name'   => 'so_profile',
		'title'  => 'Profile',
		'icon'   => 'fa fa-user',
		'fields' => array(
			array(
				'id'    => 'so_profile_first_name',
				'type'  => 'text',
				'title' => 'First Name',
				'desc'  => 'Also so on about section',
			),
			array(
				'id'    => 'so_profile_last_name',
				'type'  => 'text',
				'title' => 'Last Name',
				'desc'  => 'Also so on about section',
			),
			array(
				'id'    => 'so_section_about_avatar',
				'type'  => 'upload',
				'title' => 'Profile Picture',
				'desc'  => 'Ex: Your profile avatar',
			),
			array(
				'id'    => 'so_profile_address_map',
				'type'  => 'text',
				'title' => 'Address',
				'desc'  => 'Ex: House no #706, Road no #10, Baridhara DOHS, Dhaka',
			),
			array(
				'id'    => 'so_profile_address_phone',
				'type'  => 'text',
				'title' => 'Phone No',
				'desc'  => 'Ex: +8801713302618',
			),
			array(
				'id'    => 'so_profile_address_mail',
				'type'  => 'text',
				'title' => 'Email',
				'desc'  => 'Ex: info@shamim.ninja',
			),
			array(
				'id'    => 'so_profile_address_link',
				'type'  => 'text',
				'title' => 'Website',
				'desc'  => 'Ex: http://shamim.ninja',
			),
		),
	);

	/*******************************************************************************************************************
	 * Header Sections
	 ******************************************************************************************************************/
	$options['header'] = array(
		'name'   => 'so_header',
		'title'  => 'Header',
		'icon'   => 'fa fa-header',
		'fields' => array(),
	);

	/*******************************************************************************************************************
	 * Single Page Sections
	 ******************************************************************************************************************/
	$options[] = array(
		'name'     => 'so_landing',
		'title'    => 'Home Pages',
		'icon'     => 'fa fa-home',
		'sections' => array(
			array(
				'name'   => 'so_section_home',
				'title'  => 'Home Section',
				'icon'   => 'fa fa-arrow-right',
				'fields' => array(
					array(
						'id'      => 'so_section_home_enable',
						'type'    => 'switcher',
						'title'   => 'Show on Home Page',
						'desc'    => 'By Default active',
						'default' => 1,
					),
					array(
						'id'    => 'so_section_home_video_enable',
						'type'  => 'switcher',
						'title' => 'Enable Video Background',
						'desc'  => 'If enable Video Background will appear and Image Background will be disappear',
					),
					array(
						'id'         => 'so_section_home_video',
						'type'       => 'upload',
						'title'      => 'Video Background',
						'desc'       => 'Ex: Upload a video for background',
						'dependency' => array( 'so_section_home_video_enable', '==', 'true' ),
					),
					array(
						'id'         => 'so_section_home_image',
						'type'       => 'upload',
						'title'      => 'Image Background',
						'desc'       => 'Ex: Upload an image for background',
						'dependency' => array( 'so_section_home_video_enable', '==', 'false' ),
					),

					array(
						'id'    => 'so_section_home_intro_line_one',
						'type'  => 'text',
						'title' => 'Intro Text Line #01',
						'desc'  => 'Ex: I am',
					),
					array(
						'id'    => 'so_section_home_intro_line_two',
						'type'  => 'text',
						'title' => 'Intro Text Line #02',
						'desc'  => 'By default your first and last name',
					),
				),
			),
			array(
				'name'   => 'so_section_about',
				'title'  => 'About Section',
				'icon'   => 'fa fa-arrow-right',
				'fields' => array(
					array(
						'id'      => 'so_section_about_enable',
						'type'    => 'switcher',
						'title'   => 'Show on Home Page',
						'desc'    => 'By Default active',
						'default' => 1,
					),
					array(
						'id'    => 'so_section_about_title',
						'type'  => 'text',
						'title' => 'Title',
						'desc'  => 'Ex: Lorem ipsum dolor',
					),
					array(
						'id'    => 'so_section_about_subtitle',
						'type'  => 'textarea',
						'title' => 'Subtitle',
						'desc'  => 'Ex: Lorem ipsum dolor sit amet, consectetuer adipiscing elit',
					),
					array(
						'id'    => 'so_section_about_bio',
						'type'  => 'textarea',
						'title' => 'Bio/Overview',
						'desc'  => 'Ex: Lorem ipsum dolor sit amet, consectetuer adipiscing elit',
					),
					array(
						'id'      => 'so_section_about_button_one_enable',
						'type'    => 'switcher',
						'title'   => 'Button One',
						'desc'    => 'Ex: Hire Me',
						'default' => 1,
					),
					array(
						'id'         => 'so_section_about_button_one_text',
						'type'       => 'text',
						'title'      => 'Button One Text',
						'desc'       => 'Ex: Hire Me',
						'dependency' => array( 'so_section_about_button_one_enable', '==', 'true' ),
					),
					array(
						'id'         => 'so_section_about_button_one_url',
						'type'       => 'text',
						'title'      => 'Button One URL',
						'desc'       => 'Ex: http://shamim.ninja',
						'dependency' => array( 'so_section_about_button_one_enable', '==', 'true' ),
					),
					array(
						'id'      => 'so_section_about_button_two_enable',
						'type'    => 'switcher',
						'title'   => 'Button Two',
						'desc'    => 'Ex: resume',
						'default' => 1,
					),
					array(
						'id'         => 'so_section_about_button_two_text',
						'type'       => 'text',
						'title'      => 'Button Two Text',
						'desc'       => 'Ex: Resume',
						'dependency' => array( 'so_section_about_button_two_enable', '==', 'true' ),
					),
					array(
						'id'         => 'so_section_about_button_two_url',
						'type'       => 'text',
						'title'      => 'Button Two URL',
						'desc'       => 'Ex: http://shamim.ninja/download',
						'dependency' => array( 'so_section_about_button_two_enable', '==', 'true' ),
					),
					array(
						'id'              => 'so_section_about_skill',
						'type'            => 'group',
						'title'           => 'Skills',
						'desc'            => 'Add skill to show on about section',
						'button_title'    => 'New Skill',
						'accordion_title' => 'Skill Set',
						'fields'          => array(
							array(
								'id'    => 'so_section_about_skill_title',
								'type'  => 'text',
								'title' => 'Technology',
							),
							array(
								'id'    => 'so_section_about_skill_level',
								'type'  => 'text',
								'title' => 'Level',
							),
						)
					),
				),
			),
			array(
				'name'   => 'so_section_whyme',
				'title'  => 'Why Me Section',
				'icon'   => 'fa fa-arrow-right',
				'fields' => array(
					array(
						'id'      => 'so_section_whyme_enable',
						'type'    => 'switcher',
						'title'   => 'Show on Home Page',
						'desc'    => 'By Default active',
						'default' => 1,
					),
					array(
						'id'              => 'so_section_whyme_procedure',
						'type'            => 'group',
						'title'           => 'Work Process',
						'desc'            => 'Add work process to show on about section',
						'button_title'    => 'New Process',
						'accordion_title' => 'Working Process',
						'fields'          => array(
							array(
								'id'    => 'so_section_whyme_procedure_title',
								'type'  => 'text',
								'title' => 'Process Title',
							),
							array(
								'id'    => 'so_section_whyme_procedure_icon',
								'type'  => 'icon',
								'title' => 'Font Awesome Icon',
							),
							array(
								'id'    => 'so_section_whyme_procedure_description',
								'type'  => 'textarea',
								'title' => 'Short Description',
							),
						)
					),
				),
			),
			array(
				'name'   => 'so_section_resume',
				'title'  => 'Resume Section',
				'icon'   => 'fa fa-arrow-right',
				'fields' => array(
					array(
						'id'      => 'so_section_resume_enable',
						'type'    => 'switcher',
						'title'   => 'Show on Home Page',
						'desc'    => 'By Default active',
						'default' => 1,
					),
					array(
						'id'    => 'so_section_resume_title',
						'type'  => 'text',
						'title' => 'Title',
						'desc'  => 'Ex: Lorem ipsum dolor',
					),
					array(
						'id'    => 'so_section_resume_subtitle',
						'type'  => 'textarea',
						'title' => 'Subtitle',
						'desc'  => 'Ex: Lorem ipsum dolor sit amet, consectetuer adipiscing elit',
					),
					array(
						'id'              => 'so_section_resume_education',
						'type'            => 'group',
						'title'           => 'Education Details',
						'desc'            => 'Add education details to show on resume section',
						'button_title'    => 'New Institution',
						'accordion_title' => 'Degree',
						'fields'          => array(
							array(
								'id'    => 'so_section_resume_education_degree',
								'type'  => 'text',
								'title' => 'Degree Name',
							),
							array(
								'id'    => 'so_section_resume_education_institution',
								'type'  => 'text',
								'title' => 'University / Institution Name',
							),
							array(
								'id'    => 'so_section_resume_education_description',
								'type'  => 'text',
								'title' => 'Short Description',
							),
						)
					),
					array(
						'id'              => 'so_section_resume_job',
						'type'            => 'group',
						'title'           => 'Experience Details',
						'desc'            => 'Add experience to show on resume section',
						'button_title'    => 'New Experience',
						'accordion_title' => 'Designation',
						'fields'          => array(
							array(
								'id'    => 'so_section_resume_job_title',
								'type'  => 'text',
								'title' => 'Designation',
							),
							array(
								'id'    => 'so_section_resume_job_company',
								'type'  => 'text',
								'title' => 'Company Name',
							),
							array(
								'id'    => 'so_section_resume_job_description',
								'type'  => 'text',
								'title' => 'Description',
							),
						)
					),
				),
			),
			array(
				'name'   => 'so_section_service',
				'title'  => 'Services Section',
				'icon'   => 'fa fa-arrow-right',
				'fields' => array(
					array(
						'id'      => 'so_section_service_enable',
						'type'    => 'switcher',
						'title'   => 'Show on Home Page',
						'desc'    => 'By Default active',
						'default' => 1,
					),
					array(
						'id'    => 'so_section_service_title',
						'type'  => 'text',
						'title' => 'Title',
						'desc'  => 'Ex: Lorem ipsum dolor',
					),
					array(
						'id'    => 'so_section_service_subtitle',
						'type'  => 'textarea',
						'title' => 'Subtitle',
						'desc'  => 'Ex: Lorem ipsum dolor sit amet, consectetuer adipiscing elit',
					),
					array(
						'id'              => 'so_section_service_list',
						'type'            => 'group',
						'title'           => 'Service Details',
						'desc'            => 'Add service to show on service section',
						'button_title'    => 'New Service',
						'accordion_title' => 'Service',
						'fields'          => array(
							array(
								'id'    => 'so_section_service_list_title',
								'type'  => 'text',
								'title' => 'My Offer',
							),
							array(
								'id'    => 'so_section_service_list_icon',
								'type'  => 'icon',
								'title' => 'Font Awesome Icon',
							),
							array(
								'id'    => 'so_section_service_list_description',
								'type'  => 'textarea',
								'title' => 'Description',
							),
						)
					),
				),
			),
			array(
				'name'   => 'so_section_testimonial',
				'title'  => 'Testimonial Section',
				'icon'   => 'fa fa-arrow-right',
				'fields' => array(
					array(
						'id'      => 'so_section_testimonial_enable',
						'type'    => 'switcher',
						'title'   => 'Show on Home Page',
						'desc'    => 'By Default active',
						'default' => 1,
					),
				),
			),
			array(
				'name'   => 'so_section_portfolio',
				'title'  => 'Portfolio Section',
				'icon'   => 'fa fa-arrow-right',
				'fields' => array(
					array(
						'id'      => 'so_section_portfolio_enable',
						'type'    => 'switcher',
						'title'   => 'Show on Home Page',
						'desc'    => 'By Default active',
						'default' => 1,
					),
					array(
						'id'    => 'so_section_portfolio_title',
						'type'  => 'text',
						'title' => 'Title',
						'desc'  => 'Ex: Lorem ipsum dolor',
					),
					array(
						'id'    => 'so_section_portfolio_subtitle',
						'type'  => 'textarea',
						'title' => 'Subtitle',
						'desc'  => 'Ex: Lorem ipsum dolor sit amet, consectetuer adipiscing elit',
					),
				),
			),
			array(
				'name'   => 'so_section_overview',
				'title'  => 'Overview Section',
				'icon'   => 'fa fa-arrow-right',
				'fields' => array(
					array(
						'id'      => 'so_section_overview_enable',
						'type'    => 'switcher',
						'title'   => 'Show on Home Page',
						'desc'    => 'By Default active',
						'default' => 1,
					),
					array(
						'id'              => 'so_section_overview_stat',
						'type'            => 'group',
						'title'           => 'Statistics',
						'desc'            => 'Add some key stat to show on overview section',
						'button_title'    => 'New Statistics',
						'accordion_title' => 'Statistics',
						'fields'          => array(
							array(
								'id'    => 'so_section_overview_stat_title',
								'type'  => 'text',
								'title' => 'Process Title',
							),
							array(
								'id'    => 'so_section_overview_stat_icon',
								'type'  => 'icon',
								'title' => 'Font Awesome Icon',
							),
							array(
								'id'    => 'so_section_overview_stat_value',
								'type'  => 'text',
								'title' => 'Statistics Value',
							),
						)
					),
				),
			),
			array(
				'name'   => 'so_section_blog',
				'title'  => 'Blog Section',
				'icon'   => 'fa fa-arrow-right',
				'fields' => array(
					array(
						'id'      => 'so_section_blog_enable',
						'type'    => 'switcher',
						'title'   => 'Show on Home Page',
						'desc'    => 'By Default active',
						'default' => 1,
					),
				),
			),
			array(
				'name'   => 'so_section_contact',
				'title'  => 'Contact Section',
				'icon'   => 'fa fa-arrow-right',
				'fields' => array(
					array(
						'id'      => 'so_section_contact_enable',
						'type'    => 'switcher',
						'title'   => 'Show on Home Page',
						'desc'    => 'By Default active',
						'default' => 1,
					),
				),
			),
		),
	);

	/*******************************************************************************************************************
	 * Footer Sections
	 ******************************************************************************************************************/
	$options['footer'] = array(
		'name'   => 'so_footer',
		'title'  => 'Footer',
		'icon'   => 'fa fa-copyright',
		'fields' => array(
			array(
				'id'    => 'so_copyright',
				'type'  => 'text',
				'title' => '&copy; Copyright Text',
				'desc'  => 'Ex: ' . '&copy; ' . date( 'Y' ) . ' ' . get_bloginfo( 'name' ) . ' All Rights Reserved',
			),
			array(
				'id'    => 'so_enable_social',
				'type'  => 'switcher',
				'title' => 'Enable Social Icon',
				'desc'  => 'By Default no one is active',
			),
		),
	);

	/*******************************************************************************************************************
	 * Social Options
	 ******************************************************************************************************************/
	$options['social'] = array(
		'name'   => 'so_social',
		'title'  => 'Social Network',
		'icon'   => 'fa fa-share',
		'fields' => array(
			array(
				'id'    => 'so_social_menu_facebook',
				'type'  => 'text',
				'title' => 'Facebook',
				'desc'  => 'If empty this icon is not showing on social menu',
			),
			array(
				'id'    => 'so_social_menu_twitter',
				'type'  => 'text',
				'title' => 'Twitter',
				'desc'  => 'If empty this icon is not showing on social menu',
			),
			array(
				'id'    => 'so_social_menu_linkedin',
				'type'  => 'text',
				'title' => 'LinkedIn',
				'desc'  => 'If empty this icon is not showing on social menu',
			),
			array(
				'id'    => 'so_social_menu_google_plus',
				'type'  => 'text',
				'title' => 'Google Plus',
				'desc'  => 'If empty this icon is not showing on social menu',
			),
			array(
				'id'    => 'so_social_menu_youtube',
				'type'  => 'text',
				'title' => 'Youtube',
				'desc'  => 'If empty this icon is not showing on social menu',
			),
			array(
				'id'    => 'so_social_menu_vimeo',
				'type'  => 'text',
				'title' => 'Vimeo',
				'desc'  => 'If empty this icon is not showing on social menu',
			),
			array(
				'id'    => 'so_social_menu_pinterest',
				'type'  => 'text',
				'title' => 'Pinterest',
				'desc'  => 'If empty this icon is not showing on social menu',
			),
			array(
				'id'    => 'so_social_menu_instagram ',
				'type'  => 'text',
				'title' => 'Instagram ',
				'desc'  => 'If empty this icon is not showing on social menu',
			),
			array(
				'id'    => 'so_social_menu_skype ',
				'type'  => 'text',
				'title' => 'Skype ',
				'desc'  => 'If empty this icon is not showing on social menu',
			),
			array(
				'id'    => 'so_social_menu_stack_overflow',
				'type'  => 'text',
				'title' => 'Stack Overflow',
				'desc'  => 'If empty this icon is not showing on social menu',
			),
			array(
				'id'    => 'so_social_menu_stack_exchange',
				'type'  => 'text',
				'title' => 'Stack Exchange',
				'desc'  => 'If empty this icon is not showing on social menu',
			),
			array(
				'id'    => 'so_social_menu_github',
				'type'  => 'text',
				'title' => 'Github',
				'desc'  => 'If empty this icon is not showing on social menu',
			),
			array(
				'id'    => 'so_social_menu_bitbucket',
				'type'  => 'text',
				'title' => 'Bitbucket',
				'desc'  => 'If empty this icon is not showing on social menu',
			),
			array(
				'id'    => 'so_social_menu_wordpress',
				'type'  => 'text',
				'title' => 'Wordpress',
				'desc'  => 'If empty this icon is not showing on social menu',
			),
		),
	);


	return $options;
}

add_filter( 'cs_framework_options', 'shamsone_options' );