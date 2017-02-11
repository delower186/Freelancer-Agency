<?php
function freelancer_agency_customizer_register($wp_customize){
	
//-------------------------------------------header section-------------------------------------------------
	$wp_customize->add_section('freelancer_agency_header',array(
		'title'			=> __('Header','freelancer-agency'),
		'priority'		=> 10,
	));
		//header image
	$wp_customize->add_setting('header_image',array(
		'default' =>get_template_directory_uri() . '/assets/images/header-bg.jpg',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'header_image', array(
		'label' 		=> __('Change Header Image','freelancer-agency'),
		'section' => 'freelancer_agency_header',
		'settings' => 'header_image',
		'transport' => 'postMessage',
	)));
		//blog banner image
	$wp_customize->add_setting('blogbanner_image',array(
		'default' => get_template_directory_uri() . '/assets/images/blog-banner.jpg',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'blogbanner_image', array(
		'label' 		=> __('Change Blog banner Image','freelancer-agency'),
		'section' => 'freelancer_agency_header',
		'settings' => 'blogbanner_image',
		'transport' => 'postMessage',
	)));
	//logo
	$wp_customize->add_setting('logo_image',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'logo_image', array(
		'label' 		=> __('Change logo','freelancer-agency'),
		'section' => 'freelancer_agency_header',
		'settings' => 'logo_image',
		'transport' => 'postMessage',
	)));
	//Favicon
	$wp_customize->add_setting('favicon',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'favicon', array(
		'label' 		=> __('Change Favicon','freelancer-agency'),
		'section' => 'freelancer_agency_header',
		'settings' => 'favicon',
		'transport' => 'postMessage',
	)));
		//sliding text header
	$wp_customize->add_setting('sliding_text_header',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('sliding_text_header', array(
		'label' 		=> __('Sliding Text header','freelancer-agency'),
		'section' => 'freelancer_agency_header',
		'settings' => 'sliding_text_header',
		'transport' => 'postMessage',
	));
		//sliding text 1
	$wp_customize->add_setting('sliding_text1',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('sliding_text1', array(
		'label' 		=> __('Sliding Text 1','freelancer-agency'),
		'section' => 'freelancer_agency_header',
		'settings' => 'sliding_text1',
		'transport' => 'postMessage',
	));
		//sliding text 2
	$wp_customize->add_setting('sliding_text2',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('sliding_text2', array(
		'label' 		=> __('Sliding Text 2','freelancer-agency'),
		'section' => 'freelancer_agency_header',
		'settings' => 'sliding_text2',
		'transport' => 'postMessage'
	));
		//sliding text 3
	$wp_customize->add_setting('sliding_text3',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('sliding_text3', array(
		'label' 		=> __('Sliding Text 3','freelancer-agency'),
		'section' => 'freelancer_agency_header',
		'settings' => 'sliding_text3',
		'transport' => 'postMessage',
	));
		//sliding text footer
	$wp_customize->add_setting('sliding_text_footer',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('sliding_text_footer', array(
		'label' 		=> __('Sliding Text Footer','freelancer-agency'),
		'section' => 'freelancer_agency_header',
		'settings' => 'sliding_text_footer',
		'transport' => 'postMessage',
	));
//-------------------------------------------Welcome section-------------------------------------------------
	$wp_customize->add_section('freelancer_agency_welcome',array(
		'title'			=> __('Welcome','freelancer-agency'),
		'priority'		=> 15,
	));
		//section Title
	$wp_customize->add_setting('welcome_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('welcome_title', array(
		'label' 		=> __('Welcome Title','freelancer-agency'),
		'section' => 'freelancer_agency_welcome',
		'settings' => 'welcome_title',
		'transport' => 'postMessage',
	));	
		//section description
	$wp_customize->add_setting('welcome_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('welcome_desc', array(
		'label' 		=> __('Welcome Description','freelancer-agency'),
		'section' => 'freelancer_agency_welcome',
		'settings' => 'welcome_desc',
		'type' 		=> 'textarea',
		'transport' => 'postMessage',
	));	
//-------------------------column 1------------------------------
		//Column 1 Title
	$wp_customize->add_setting('col1_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('col1_title', array(
		'label' 		=> __('Column 1 Title','freelancer-agency'),
		'section' => 'freelancer_agency_welcome',
		'settings' => 'col1_title',
		'transport' => 'postMessage',
	));	
		//Column 1 Description
	$wp_customize->add_setting('col1_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('col1_desc', array(
		'label' 		=> __('Column 1 Description','freelancer-agency'),
		'section' => 'freelancer_agency_welcome',
		'settings' => 'col1_desc',
		'type' 		=> 'textarea',
		'transport' => 'postMessage',
	));	
//-------------------------column 2------------------------------
		//Column 2 Title
	$wp_customize->add_setting('col2_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('col2_title', array(
		'label' 		=> __('Column 2 Title','freelancer-agency'),
		'section' => 'freelancer_agency_welcome',
		'settings' => 'col2_title',
		'transport' => 'postMessage',
	));	
		//Column 2 Description
	$wp_customize->add_setting('col2_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('col2_desc', array(
		'label' 		=> __('Column 2 Description','freelancer-agency'),
		'section' => 'freelancer_agency_welcome',
		'settings' => 'col2_desc',
		'type' 		=> 'textarea',
		'transport' => 'postMessage',
	));	
//-------------------------column 3------------------------------
		//Column 3 Title
	$wp_customize->add_setting('col3_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('col3_title', array(
		'label' 		=> __('Column 3 Title','freelancer-agency'),
		'section' => 'freelancer_agency_welcome',
		'settings' => 'col3_title',
		'transport' => 'postMessage',
	));	
		//Column 1 Description
	$wp_customize->add_setting('col3_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('col3_desc', array(
		'label' 		=> __('Column 3 Description','freelancer-agency'),
		'section' => 'freelancer_agency_welcome',
		'settings' => 'col3_desc',
		'type' 		=> 'textarea',
		'transport' => 'postMessage',
	));	
//-------------------------column 4------------------------------
		//Column 4 Title
	$wp_customize->add_setting('col4_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('col4_title', array(
		'label' 		=> __('Column 4 Title','freelancer-agency'),
		'section' => 'freelancer_agency_welcome',
		'settings' => 'col4_title',
		'transport' => 'postMessage',
	));	
		//Column 1 Description
	$wp_customize->add_setting('col4_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('col4_desc', array(
		'label' 		=> __('Column 4 Description','freelancer-agency'),
		'section' => 'freelancer_agency_welcome',
		'settings' => 'col4_desc',
		'type' 		=> 'textarea',
		'transport' => 'postMessage',
	));	
//-------------------------------------------about section-------------------------------------------------
	$wp_customize->add_section('freelancer_agency_about',array(
		'title'			=> __('About','freelancer-agency'),
		'priority'		=> 16,
	));
		//About Title
	$wp_customize->add_setting('about_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml'
	));
	$wp_customize->add_control('about_title', array(
		'label' 		=> __('About Title','freelancer-agency'),
		'section' => 'freelancer_agency_about',
		'settings' => 'about_title',
		'transport' => 'postMessage',
	));
		//About Description
	$wp_customize->add_setting('about_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('about_desc', array(
		'label' 		=> __('About Description','freelancer-agency'),
		'section' => 'freelancer_agency_about',
		'settings' => 'about_desc',
		'type' 		=> 'textarea',
		'transport' => 'postMessage',
	));
		//About Know more button url
	$wp_customize->add_setting('know_more_url',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('know_more_url', array(
		'label' 		=> __('Know More URL','freelancer-agency'),
		'section' => 'freelancer_agency_about',
		'settings' => 'know_more_url',
		'transport' => 'postMessage',
	));		
		//about image
	$wp_customize->add_setting('about_image',array(
		'default' => get_template_directory_uri() . '/assets/images/about-img',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'about_image', array(
		'label' 		=> __('Change About Image','freelancer-agency'),
		'section' => 'freelancer_agency_about',
		'settings' => 'about_image',
		'transport' => 'postMessage',
	)));
		//About Know introduction button url
	$wp_customize->add_setting('introduction_url',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('introduction_url', array(
		'label' 		=> __('Introduction URL','freelancer-agency'),
		'section' => 'freelancer_agency_about',
		'settings' => 'introduction_url',
		'transport' => 'postMessage',
	));	
//-------------------------------------------call to action section-------------------------------------------------
	$wp_customize->add_section('freelancer_agency_action',array(
		'title'			=> __('Call to Action','freelancer-agency'),
		'priority'		=> 17,
	));
		//Call to action text
	$wp_customize->add_setting('action_text',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('action_text', array(
		'label' 		=> __('Call to Action Text','freelancer-agency'),
		'section' => 'freelancer_agency_action',
		'settings' => 'action_text',
		'transport' => 'postMessage',
	));
		//Call to action text
	$wp_customize->add_setting('button_text',array(
		'default' => 'GET IT NOW',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('button_text', array(
		'label' 		=> __('Call to Action Button Text','freelancer-agency'),
		'section' => 'freelancer_agency_action',
		'settings' => 'button_text',
		'transport' => 'postMessage',
	));
		//Call to action button url
	$wp_customize->add_setting('button_url',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('button_url', array(
		'label' 		=> __('Get It Now URL','freelancer-agency'),
		'section' => 'freelancer_agency_action',
		'settings' => 'button_url',
		'transport' => 'postMessage',
	));	
		//Call to action image
	$wp_customize->add_setting('action_image',array(
		'default' => get_template_directory_uri() . '/assets/images/call-to-action-bg.png',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'action_image', array(
		'label' 		=> __('Call To Action Image','freelancer-agency'),
		'section' => 'freelancer_agency_action',
		'settings' => 'action_image',
		'transport' => 'postMessage',
	)));
//-------------------------------------------team-------------------------------------------------
	$wp_customize->add_section('freelancer_agency_team',array(
		'title'			=> __('Team','freelancer-agency'),
		'priority'		=> 18,
	));
		//Team Title
	$wp_customize->add_setting('team_title',array(
		'default' => 'Meet our team',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('team_title', array(
		'label' 		=> __('Team Title','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'team_title',
		'transport' => 'postMessage',
	));
		//Team Description
	$wp_customize->add_setting('team_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('team_desc', array(
		'label' 		=> __('Team Description','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'team_desc',
		'type' 		=> 'textarea',
		'transport' => 'postMessage',
	));
//----------------------------member 1----------------------------
		//Member Description
	$wp_customize->add_setting('member1',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('member1', array(
		'label' 		=> __('Member1 Description','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'member1',
		'type' 		=> 'textarea',
		'transport' => 'postMessage',
	));	
		//facebook
	$wp_customize->add_setting('facebook-m1',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('facebook-m1', array(
		'label' 		=> __('Facebook URL','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'facebook-m1',
		'transport' => 'postMessage',
	));
		//twitter
	$wp_customize->add_setting('twitter-m1',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('twitter-m1', array(
		'label' 		=> __('Twitter URL','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'twitter-m1',
		'transport' => 'postMessage',
	));
		//linkedin
	$wp_customize->add_setting('linkedin-m1',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('linkedin-m1', array(
		'label' 		=> __('Linkedin URL','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'linkedin-m1',
		'transport' => 'postMessage',
	));
		//Name
	$wp_customize->add_setting('name1',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('name1', array(
		'label' 		=> __('Member1 Name','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'name1',
		'transport' => 'postMessage',
	));	
		//Position
	$wp_customize->add_setting('position1',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('position1', array(
		'label' 		=> __('Member1 Position','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'position1',
		'transport' => 'postMessage',
	));	
		//Member1 image
	$wp_customize->add_setting('member1_image',array(
		'default' => get_template_directory_uri() . '/assets/images/team-member1.png',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'member1_image', array(
		'label' 		=> __('Member1 Image','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'member1_image',
		'transport' => 'postMessage',
	)));
//----------------------------member 2----------------------------
		//Member Description
	$wp_customize->add_setting('member2',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('member2', array(
		'label' 		=> __('Member2 Description','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'member2',
		'type' 		=> 'textarea',
		'transport' => 'postMessage',
	));	
		//facebook
	$wp_customize->add_setting('facebook-m2',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('facebook-m2', array(
		'label' 		=> __('Facebook URL','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'facebook-m2',
		'transport' => 'postMessage',
	));
		//twitter
	$wp_customize->add_setting('twitter-m2',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('twitter-m2', array(
		'label' 		=> __('Twitter URL','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'twitter-m2',
		'transport' => 'postMessage',
	));
		//linkedin
	$wp_customize->add_setting('linkedin-m2',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('linkedin-m2', array(
		'label' 		=> __('Linkedin URL','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'linkedin-m2',
		'transport' => 'postMessage',
	));
		//Name
	$wp_customize->add_setting('name2',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('name2', array(
		'label' 		=> __('Member2 Name','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'name2',
		'transport' => 'postMessage',
	));	
		//Position
	$wp_customize->add_setting('position2',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('position2', array(
		'label' 		=> __('Member2 Position','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'position2',
		'transport' => 'postMessage',
	));	
		//Member2 image
	$wp_customize->add_setting('member2_image',array(
		'default' => get_template_directory_uri() . '/assets/images/team-member2.png',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'member2_image', array(
		'label' 		=> __('Member2 Image','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'member2_image',
		'transport' => 'postMessage',
	)));
//----------------------------member 3----------------------------
		//Member Description
	$wp_customize->add_setting('member3',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('member3', array(
		'label' 		=> __('Member3 Description','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'member3',
		'type' 		=> 'textarea',
		'transport' => 'postMessage',
	));	
		//facebook
	$wp_customize->add_setting('facebook-m3',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('facebook-m3', array(
		'label' 		=> __('Facebook URL','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'facebook-m3',
		'transport' => 'postMessage',
	));
		//twitter
	$wp_customize->add_setting('twitter-m3',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('twitter-m3', array(
		'label' 		=> __('Twitter URL','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'twitter-m3',
		'transport' => 'postMessage',
	));
		//linkedin
	$wp_customize->add_setting('linkedin-m3',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('linkedin-m3', array(
		'label' 		=> __('Linkedin URL','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'linkedin-m3',
		'transport' => 'postMessage',
	));
		//Name
	$wp_customize->add_setting('name3',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('name3', array(
		'label' 		=> __('Member3 Name','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'name3',
		'transport' => 'postMessage',
	));	
		//Position
	$wp_customize->add_setting('position3',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('position3', array(
		'label' 		=> __('Member3 Position','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'position3',
		'transport' => 'postMessage',
	));	
		//Member3 image
	$wp_customize->add_setting('member3_image',array(
		'default' => get_template_directory_uri() . '/assets/images/team-member3.png',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'member3_image', array(
		'label' 		=> __('Member3 Image','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'member3_image',
		'transport' => 'postMessage',
	)));
//----------------------------member 4----------------------------
		//Member Description
	$wp_customize->add_setting('member4',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('member4', array(
		'label' 		=> __('Member4 Description','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'member4',
		'type' 		=> 'textarea',
		'transport' => 'postMessage',
	));	
		//facebook
	$wp_customize->add_setting('facebook-m4',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('facebook-m4', array(
		'label' 		=> __('Facebook URL','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'facebook-m4',
		'transport' => 'postMessage',
	));
		//twitter
	$wp_customize->add_setting('twitter-m4',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('twitter-m4', array(
		'label' 		=> __('Twitter URL','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'twitter-m4',
		'transport' => 'postMessage',
	));
		//linkedin
	$wp_customize->add_setting('linkedin-m4',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('linkedin-m4', array(
		'label' 		=> __('Linkedin URL','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'linkedin-m4',
		'transport' => 'postMessage',
	));
		//Name
	$wp_customize->add_setting('name4',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('name4', array(
		'label' 		=> __('Member4 Name','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'name4',
		'transport' => 'postMessage',
	));	
		//Position
	$wp_customize->add_setting('position4',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('position4', array(
		'label' 		=> __('Member4 Position','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'position4',
		'transport' => 'postMessage',
	));	
		//Member4 image
	$wp_customize->add_setting('member4_image',array(
		'default' => get_template_directory_uri() . '/assets/images/team-member4.png',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'member4_image', array(
		'label' 		=> __('Member4 Image','freelancer-agency'),
		'section' => 'freelancer_agency_team',
		'settings' => 'member4_image',
		'transport' => 'postMessage',
	)));
//-------------------------------------------service-------------------------------------------------
	$wp_customize->add_section('freelancer_agency_service',array(
		'title'			=> __('Service','freelancer-agency'),
		'priority'		=> 19,
	));
		//section title
	$wp_customize->add_setting('serivce_title',array(
		'default' => 'Service we offer',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('serivce_title', array(
		'label' 		=> __('Service Title','freelancer-agency'),
		'section' => 'freelancer_agency_service',
		'settings' => 'serivce_title',
		'transport' => 'postMessage',
	));	
		//section description
	$wp_customize->add_setting('serivce_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('serivce_desc', array(
		'label' 		=> __('Service Desc','freelancer-agency'),
		'section' => 'freelancer_agency_service',
		'settings' => 'serivce_desc',
		'type'		=> 'textarea',
		'transport' => 'postMessage',
	));	
//----------------------------service1-------------------
		//title
	$wp_customize->add_setting('serivce1_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('serivce1_title', array(
		'label' 		=> __('Service1 Title','freelancer-agency'),
		'section' => 'freelancer_agency_service',
		'settings' => 'serivce1_title',
		'transport' => 'postMessage',
	));	
		//description
	$wp_customize->add_setting('serivce1_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('serivce1_desc', array(
		'label' 		=> __('Service1 Desc','freelancer-agency'),
		'section' => 'freelancer_agency_service',
		'settings' => 'serivce1_desc',
		'type'		=> 'textarea',
		'transport' => 'postMessage',
	));	
//----------------------------service2-------------------
		//title
	$wp_customize->add_setting('serivce2_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('serivce2_title', array(
		'label' 		=> __('Service2 Title','freelancer-agency'),
		'section' => 'freelancer_agency_service',
		'settings' => 'serivce2_title',
		'transport' => 'postMessage',
	));	
		//description
	$wp_customize->add_setting('serivce2_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('serivce2_desc', array(
		'label' 		=> __('Service2 Desc','freelancer-agency'),
		'section' => 'freelancer_agency_service',
		'settings' => 'serivce2_desc',
		'type'		=> 'textarea',
		'transport' => 'postMessage',
	));	
//----------------------------service3-------------------
		//title
	$wp_customize->add_setting('serivce3_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('serivce3_title', array(
		'label' 		=> __('Service3 Title','freelancer-agency'),
		'section' => 'freelancer_agency_service',
		'settings' => 'serivce3_title',
		'transport' => 'postMessage',
	));	
		//description
	$wp_customize->add_setting('serivce3_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('serivce3_desc', array(
		'label' 		=> __('Service3 Desc','freelancer-agency'),
		'section' => 'freelancer_agency_service',
		'settings' => 'serivce3_desc',
		'type'		=> 'textarea',
		'transport' => 'postMessage',
	));	
//----------------------------service4-------------------
		//title
	$wp_customize->add_setting('serivce4_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('serivce4_title', array(
		'label' 		=> __('Service4 Title','freelancer-agency'),
		'section' => 'freelancer_agency_service',
		'settings' => 'serivce4_title',
		'transport' => 'postMessage',
	));	
		//description
	$wp_customize->add_setting('serivce4_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('serivce4_desc', array(
		'label' 		=> __('Service4 Desc','freelancer-agency'),
		'section' => 'freelancer_agency_service',
		'settings' => 'serivce4_desc',
		'type'		=> 'textarea',
		'transport' => 'postMessage',
	));	
//----------------------------service5-------------------
		//title
	$wp_customize->add_setting('serivce5_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('serivce5_title', array(
		'label' 		=> __('Service5 Title','freelancer-agency'),
		'section' => 'freelancer_agency_service',
		'settings' => 'serivce5_title',
		'transport' => 'postMessage',
	));	
		//description
	$wp_customize->add_setting('serivce5_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('serivce5_desc', array(
		'label' 		=> __('Service5 Desc','freelancer-agency'),
		'section' => 'freelancer_agency_service',
		'settings' => 'serivce5_desc',
		'type'		=> 'textarea',
		'transport' => 'postMessage',
	));	
//----------------------------service6-------------------
		//title
	$wp_customize->add_setting('serivce6_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('serivce6_title', array(
		'label' 		=> __('Service6 Title','freelancer-agency'),
		'section' => 'freelancer_agency_service',
		'settings' => 'serivce6_title',
		'transport' => 'postMessage',
	));	
		//description
	$wp_customize->add_setting('serivce6_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('serivce6_desc', array(
		'label' 		=> __('Service6 Desc','freelancer-agency'),
		'section' => 'freelancer_agency_service',
		'settings' => 'serivce6_desc',
		'type'		=> 'textarea',
		'transport' => 'postMessage',
	));	
//----------------------------service7-------------------
		//title
	$wp_customize->add_setting('serivce7_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('serivce7_title', array(
		'label' 		=> __('Service7 Title','freelancer-agency'),
		'section' => 'freelancer_agency_service',
		'settings' => 'serivce7_title',
		'transport' => 'postMessage',
	));	
		//description
	$wp_customize->add_setting('serivce7_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('serivce7_desc', array(
		'label' 		=> __('Service7 Desc','freelancer-agency'),
		'section' => 'freelancer_agency_service',
		'settings' => 'serivce7_desc',
		'type'		=> 'textarea',
		'transport' => 'postMessage',
	));	
//----------------------------service8-------------------
		//title
	$wp_customize->add_setting('serivce8_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('serivce8_title', array(
		'label' 		=> __('Service8 Title','freelancer-agency'),
		'section' => 'freelancer_agency_service',
		'settings' => 'serivce8_title',
		'transport' => 'postMessage',
	));	
		//description
	$wp_customize->add_setting('serivce8_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('serivce8_desc', array(
		'label' 		=> __('Service8 Desc','freelancer-agency'),
		'section' => 'freelancer_agency_service',
		'settings' => 'serivce8_desc',
		'type'		=> 'textarea',
		'transport' => 'postMessage',
	));	
//-------------------------------------------Portfolio-------------------------------------------------
	$wp_customize->add_section('freelancer_agency_portfolio',array(
		'title'			=> __('Portfolio','freelancer-agency'),
		'priority'		=> 20,
	));
		//portfolio title
	$wp_customize->add_setting('portfolio_title',array(
		'default' => 'Recent portfolio',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('portfolio_title', array(
		'label' 		=> __('Portfolio Title','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'portfolio_title',
		'transport' => 'postMessage',
	));	
		//portfolio description
	$wp_customize->add_setting('portfolio_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('portfolio_desc', array(
		'label' 		=> __('Portfolio Desc','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'portfolio_desc',
		'type'		=> 'textarea',
		'transport' => 'postMessage',
	));
//----------------------------project1--------------------
		//project1 title
	$wp_customize->add_setting('project1_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('project1_title', array(
		'label' 		=> __('Project1 Title','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project1_title',
		'transport' => 'postMessage',
	));	
		//project1 description
	$wp_customize->add_setting('project1_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('project1_desc', array(
		'label' 		=> __('Project1 Desc','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project1_desc',
		'type'		=> 'textarea',
		'transport' => 'postMessage',
	));	
		//Project1 image-small
	$wp_customize->add_setting('project1_image-small',array(
		'default' => get_template_directory_uri() . '/assets/images/portfolio-img-small1.jpg',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'project1_image-small', array(
		'label' 		=> __('Project1 Image Small','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project1_image-small',
		'transport' => 'postMessage',
	)));
		//Project1 image-big
	$wp_customize->add_setting('project1_image-big',array(
		'default' => get_template_directory_uri() . '/assets/images/portfolio-img-big1.jpg',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'project1_image-big', array(
		'label' 		=> __('Project1 Image Big','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project1_image-big',
		'transport' => 'postMessage',
	)));
//----------------------------project2--------------------
		//project2 title
	$wp_customize->add_setting('project2_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('project2_title', array(
		'label' 		=> __('Project2 Title','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project2_title',
		'transport' => 'postMessage',
	));	
		//project1 description
	$wp_customize->add_setting('project2_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('project2_desc', array(
		'label' 		=> __('Project2 Desc','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project2_desc',
		'type'		=> 'textarea',
		'transport' => 'postMessage',
	));	
		//Project2 image-small
	$wp_customize->add_setting('project2_image-small',array(
		'default' => get_template_directory_uri() . '/assets/images/portfolio-img-small2.jpg',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'project2_image-small', array(
		'label' 		=> __('Project2 Image Small','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project2_image-small',
		'transport' => 'postMessage',
	)));
		//Project2 image-big
	$wp_customize->add_setting('project2_image-big',array(
		'default' => get_template_directory_uri() . '/assets/images/portfolio-img-big2.jpg',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'project2_image-big', array(
		'label' 		=> __('Project2 Image Big','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project2_image-big',
		'transport' => 'postMessage',
	)));
//----------------------------project3--------------------
		//project3 title
	$wp_customize->add_setting('project3_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('project3_title', array(
		'label' 		=> __('Project3 Title','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project3_title',
		'transport' => 'postMessage',
	));	
		//project3 description
	$wp_customize->add_setting('project3_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('project3_desc', array(
		'label' 		=> __('Project3 Desc','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project3_desc',
		'type'		=> 'textarea',
		'transport' => 'postMessage',
	));	
		//Project3 image-small
	$wp_customize->add_setting('project3_image-small',array(
		'default' => get_template_directory_uri() . '/assets/images/portfolio-img-small3.jpg',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'project3_image-small', array(
		'label' 		=> __('Project3 Image Small','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project3_image-small',
		'transport' => 'postMessage',
	)));
		//Project3 image-big
	$wp_customize->add_setting('project3_image-big',array(
		'default' => get_template_directory_uri() . '/assets/images/portfolio-img-big3.jpg',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'project3_image-big', array(
		'label' 		=> __('Project3 Image Big','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project3_image-big',
		'transport' => 'postMessage',
	)));
//----------------------------project4--------------------
		//project4 title
	$wp_customize->add_setting('project4_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('project4_title', array(
		'label' 		=> __('Project4 Title','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project4_title',
		'transport' => 'postMessage',
	));	
		//project4 description
	$wp_customize->add_setting('project4_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('project4_desc', array(
		'label' 		=> __('Project4 Desc','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project4_desc',
		'type'		=> 'textarea',
		'transport' => 'postMessage',
	));	
		//Project4 image-small
	$wp_customize->add_setting('project4_image-small',array(
		'default' => get_template_directory_uri() . '/assets/images/portfolio-img-small4.jpg',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'project4_image-small', array(
		'label' 		=> __('Project4 Image Small','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project4_image-small',
		'transport' => 'postMessage',
	)));
		//Project4 image-big
	$wp_customize->add_setting('project4_image-big',array(
		'default' => get_template_directory_uri() . '/assets/images/portfolio-img-big4.jpg',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'project4_image-big', array(
		'label' 		=> __('Project4 Image Big','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project4_image-big',
		'transport' => 'postMessage',
	)));
//----------------------------project5--------------------
		//project5 title
	$wp_customize->add_setting('project5_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('project5_title', array(
		'label' 		=> __('Project5 Title','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project5_title',
		'transport' => 'postMessage',
	));	
		//project5 description
	$wp_customize->add_setting('project5_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('project5_desc', array(
		'label' 		=> __('Project5 Desc','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project5_desc',
		'type'		=> 'textarea',
		'transport' => 'postMessage',
	));	
		//Project5 image-small
	$wp_customize->add_setting('project5_image-small',array(
		'default' => get_template_directory_uri() . '/assets/images/portfolio-img-small5.jpg',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'project5_image-small', array(
		'label' 		=> __('Project5 Image Small','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project5_image-small',
		'transport' => 'postMessage',
	)));
		//Project5 image-big
	$wp_customize->add_setting('project5_image-big',array(
		'default' => get_template_directory_uri() . '/assets/images/portfolio-img-big5.jpg',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'project5_image-big', array(
		'label' 		=> __('Project5 Image Big','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project5_image-big',
		'transport' => 'postMessage',
	)));
//----------------------------project6--------------------
		//project6 title
	$wp_customize->add_setting('project6_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('project6_title', array(
		'label' 		=> __('Project6 Title','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project6_title',
		'transport' => 'postMessage',
	));	
		//project6 description
	$wp_customize->add_setting('project6_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('project6_desc', array(
		'label' 		=> __('Project6 Desc','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project6_desc',
		'type'		=> 'textarea',
		'transport' => 'postMessage',
	));	
		//Project6 image-small
	$wp_customize->add_setting('project6_image-small',array(
		'default' => get_template_directory_uri() . '/assets/images/portfolio-img-small6.jpg',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'project6_image-small', array(
		'label' 		=> __('Project6 Image Small','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project6_image-small',
		'transport' => 'postMessage',
	)));
		//Project6 image-big
	$wp_customize->add_setting('project6_image-big',array(
		'default' => get_template_directory_uri() . '/assets/images/portfolio-img-big6.jpg',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'project6_image-big', array(
		'label' 		=> __('Project6 Image Big','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project6_image-big',
		'transport' => 'postMessage',
	)));
//----------------------------project7--------------------
		//project7 title
	$wp_customize->add_setting('project7_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('project7_title', array(
		'label' 		=> __('Project7 Title','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project7_title',
		'transport' => 'postMessage',
	));	
		//project7 description
	$wp_customize->add_setting('project7_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('project7_desc', array(
		'label' 		=> __('Project7 Desc','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project7_desc',
		'type'		=> 'textarea',
		'transport' => 'postMessage',
	));	
		//Project7 image-small
	$wp_customize->add_setting('project7_image-small',array(
		'default' => get_template_directory_uri() . '/assets/images/portfolio-img-small7.jpg',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'project7_image-small', array(
		'label' 		=> __('Project7 Image Small','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project7_image-small',
		'transport' => 'postMessage',
	)));
		//Project7 image-big
	$wp_customize->add_setting('project7_image-big',array(
		'default' => get_template_directory_uri() . '/assets/images/portfolio-img-big7.jpg',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'project7_image-big', array(
		'label' 		=> __('Project7 Image Big','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project7_image-big',
		'transport' => 'postMessage',
	)));
//----------------------------project8--------------------
		//project8 title
	$wp_customize->add_setting('project8_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('project8_title', array(
		'label' 		=> __('Project8 Title','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project8_title',
		'transport' => 'postMessage',
	));	
		//project8 description
	$wp_customize->add_setting('project8_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('project8_desc', array(
		'label' 		=> __('Project8 Desc','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project8_desc',
		'type'		=> 'textarea',
		'transport' => 'postMessage',
	));	
		//Project8 image-small
	$wp_customize->add_setting('project8_image-small',array(
		'default' => get_template_directory_uri() . '/assets/images/portfolio-img-small7.jpg',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'project8_image-small', array(
		'label' 		=> __('Project8 Image Small','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project8_image-small',
		'transport' => 'postMessage',
	)));
		//Project8 image-big
	$wp_customize->add_setting('project8_image-big',array(
		'default' => get_template_directory_uri() . '/assets/images/portfolio-img-big7.jpg',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'project8_image-big', array(
		'label' 		=> __('Project8 Image Big','freelancer-agency'),
		'section' => 'freelancer_agency_portfolio',
		'settings' => 'project8_image-big',
		'transport' => 'postMessage',
	)));
//-------------------------------------------Counter-------------------------------------------------
	$wp_customize->add_section('freelancer_agency_counter',array(
		'title'			=> __('Counter','freelancer-agency'),
		'priority'		=> 21,
	));
		//counter image
	$wp_customize->add_setting('counter_image',array(
		'default' => get_template_directory_uri() . '/assets/images/counter-bg.jpg',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'counter_image', array(
		'label' 		=> __('Counter Image','freelancer-agency'),
		'section' => 'freelancer_agency_counter',
		'settings' => 'counter_image',
		'transport' => 'postMessage',
	)));
		//happy clients
	$wp_customize->add_setting('happy_clients',array(
		'default' => 1050,
		'sanitize_callback' => 'freelancer_agency_sanitize_number_absint',
	));
	$wp_customize->add_control('happy_clients', array(
		'label' 		=> __('Happy Clients','freelancer-agency'),
		'section' => 'freelancer_agency_counter',
		'settings' => 'happy_clients',
		'type'		=> 'number',
		'transport' => 'postMessage',
	));	
		//project delivery
	$wp_customize->add_setting('project_delivery',array(
		'default' => 750,
		'sanitize_callback' => 'freelancer_agency_sanitize_number_absint',
	));
	$wp_customize->add_control('project_delivery', array(
		'label' 		=> __('Project Delivery','freelancer-agency'),
		'section' => 'freelancer_agency_counter',
		'settings' => 'project_delivery',
		'type'		=> 'number',
		'transport' => 'postMessage',
	));	
		//followers
	$wp_customize->add_setting('followers',array(
		'default' => 2300,
		'sanitize_callback' => 'freelancer_agency_sanitize_number_absint',
	));
	$wp_customize->add_control('followers', array(
		'label' 		=> __('Followers','freelancer-agency'),
		'section' => 'freelancer_agency_counter',
		'settings' => 'followers',
		'type'		=> 'number',
		'transport' => 'postMessage',
	));	
		//project done
	$wp_customize->add_setting('project_done',array(
		'default' => 800,
		'sanitize_callback' => 'freelancer_agency_sanitize_number_absint',
	));
	$wp_customize->add_control('project_done', array(
		'label' 		=> __('Project Done','freelancer-agency'),
		'section' => 'freelancer_agency_counter',
		'settings' => 'project_done',
		'type'		=> 'number',
		'transport' => 'postMessage',
	));	
//-------------------------------------------Price Table-------------------------------------------------
	$wp_customize->add_section('freelancer_agency_pricetable',array(
		'title'			=> __('Price Table','freelancer-agency'),
		'priority'		=> 22,
	));
		//Price Table title
	$wp_customize->add_setting('pricetable_title',array(
		'default' => 'Pricing Table',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('pricetable_title', array(
		'label' 		=> __('Price Table Title','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'pricetable_title',
		'transport' => 'postMessage',
	));	
		//Price Table description
	$wp_customize->add_setting('pricetable_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('pricetable_desc', array(
		'label' 		=> __('Price Table Desc','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'pricetable_desc',
		'type'		=> 'textarea',
		'transport' => 'postMessage',
	));
//-----------------------------Basic Price-------------------

		//Price title
	$wp_customize->add_setting('bprice_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('bprice_title', array(
		'label' 		=> __('Price Col 1 Title','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'bprice_title',
		'transport' => 'postMessage',
	));	
		//Price amount
	$wp_customize->add_setting('bprice_amount',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('bprice_amount', array(
		'label' 		=> __('Price Amount','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'bprice_amount',
		'transport' => 'postMessage',
	));
		//Feature 1
	$wp_customize->add_setting('bfeature1',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('bfeature1', array(
		'label' 		=> __('Feature 1','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'bfeature1',
		'transport' => 'postMessage',
	));
		//Feature 2
	$wp_customize->add_setting('bfeature2',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('bfeature2', array(
		'label' 		=> __('Feature 2','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'bfeature2',
		'transport' => 'postMessage',
	));
		//Feature 3
	$wp_customize->add_setting('bfeature3',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('bfeature3', array(
		'label' 		=> __('Feature 3','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'bfeature3',
		'transport' => 'postMessage',
	));
		//Feature 4
	$wp_customize->add_setting('bfeature4',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('bfeature4', array(
		'label' 		=> __('Feature 4','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'bfeature4',
		'transport' => 'postMessage',
	));
		//Feature 5
	$wp_customize->add_setting('bfeature5',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('bfeature5', array(
		'label' 		=> __('Feature 5','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'bfeature5',
		'transport' => 'postMessage',
	));
		//Feature 6
	$wp_customize->add_setting('bfeature6',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('bfeature6', array(
		'label' 		=> __('Feature 6','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'bfeature6',
		'transport' => 'postMessage',
	));
		//Button Title
	$wp_customize->add_setting('bbutton_title',array(
		'default' => 'SIGN UP',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('bbutton_title', array(
		'label' 		=> __('Button Title','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'bbutton_title',
		'transport' => 'postMessage',
	));
		//Button Url
	$wp_customize->add_setting('bbutton_url',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('bbutton_url', array(
		'label' 		=> __('Button URL','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'bbutton_url',
		'transport' => 'postMessage',
	));
//-----------------------------Standard Price-------------------

		//Price title
	$wp_customize->add_setting('sprice_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('sprice_title', array(
		'label' 		=> __('Price Col 2 Title','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'sprice_title',
		'transport' => 'postMessage',
	));	
		//Price amount
	$wp_customize->add_setting('sprice_amount',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('sprice_amount', array(
		'label' 		=> __('Price Amount','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'sprice_amount',
		'transport' => 'postMessage',
	));
		//Feature 1
	$wp_customize->add_setting('sfeature1',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('sfeature1', array(
		'label' 		=> __('Feature 1','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'sfeature1',
		'transport' => 'postMessage',
	));
		//Feature 2
	$wp_customize->add_setting('sfeature2',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('sfeature2', array(
		'label' 		=> __('Feature 2','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'sfeature2',
		'transport' => 'postMessage',
	));
		//Feature 3
	$wp_customize->add_setting('sfeature3',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('sfeature3', array(
		'label' 		=> __('Feature 3','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'sfeature3',
		'transport' => 'postMessage',
	));
		//Feature 4
	$wp_customize->add_setting('sfeature4',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('sfeature4', array(
		'label' 		=> __('Feature 4','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'sfeature4',
		'transport' => 'postMessage',
	));
		//Feature 5
	$wp_customize->add_setting('sfeature5',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('sfeature5', array(
		'label' 		=> __('Feature 5','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'sfeature5',
		'transport' => 'postMessage',
	));
		//Feature 6
	$wp_customize->add_setting('sfeature6',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('sfeature6', array(
		'label' 		=> __('Feature 6','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'sfeature6',
		'transport' => 'postMessage',
	));
		//Button Title
	$wp_customize->add_setting('sbutton_title',array(
		'default' => 'SIGN UP',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('sbutton_title', array(
		'label' 		=> __('Button Title','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'sbutton_title',
		'transport' => 'postMessage',
	));
		//Button Url
	$wp_customize->add_setting('sbutton_url',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('sbutton_url', array(
		'label' 		=> __('Button URL','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'sbutton_url',
		'transport' => 'postMessage',
	));
//-----------------------------Advance Price-------------------

		//Price title
	$wp_customize->add_setting('aprice_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('aprice_title', array(
		'label' 		=> __('Price Col 3 Title','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'aprice_title',
		'transport' => 'postMessage',
	));	
		//Price amount
	$wp_customize->add_setting('aprice_amount',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('aprice_amount', array(
		'label' 		=> __('Price Amount','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'aprice_amount',
		'transport' => 'postMessage',
	));
		//Feature 1
	$wp_customize->add_setting('afeature1',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('afeature1', array(
		'label' 		=> __('Feature 1','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'afeature1',
		'transport' => 'postMessage',
	));
		//Feature 2
	$wp_customize->add_setting('afeature2',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('afeature2', array(
		'label' 		=> __('Feature 2','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'afeature2',
		'transport' => 'postMessage',
	));
		//Feature 3
	$wp_customize->add_setting('afeature3',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('afeature3', array(
		'label' 		=> __('Feature 3','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'afeature3',
		'transport' => 'postMessage',
	));
		//Feature 4
	$wp_customize->add_setting('afeature4',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('afeature4', array(
		'label' 		=> __('Feature 4','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'afeature4',
		'transport' => 'postMessage',
	));
		//Feature 5
	$wp_customize->add_setting('afeature5',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('afeature5', array(
		'label' 		=> __('Feature 5','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'afeature5',
		'transport' => 'postMessage',
	));
		//Feature 6
	$wp_customize->add_setting('afeature6',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('afeature6', array(
		'label' 		=> __('Feature 6','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'afeature6',
		'transport' => 'postMessage',
	));
		//Button Title
	$wp_customize->add_setting('abutton_title',array(
		'default' => 'SIGN UP',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('abutton_title', array(
		'label' 		=> __('Button Title','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'abutton_title',
		'transport' => 'postMessage',
	));
		//Button Url
	$wp_customize->add_setting('abutton_url',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('abutton_url', array(
		'label' 		=> __('Button URL','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'abutton_url',
		'transport' => 'postMessage',
	));
//-----------------------------Mighty Price-------------------

		//Price title
	$wp_customize->add_setting('mprice_title',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('mprice_title', array(
		'label' 		=> __('Price Col 4 Title','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'mprice_title',
		'transport' => 'postMessage',
	));	
		//Price amount
	$wp_customize->add_setting('mprice_amount',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('mprice_amount', array(
		'label' 		=> __('Price Amount','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'mprice_amount',
		'transport' => 'postMessage',
	));
		//Feature 1
	$wp_customize->add_setting('mfeature1',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('mfeature1', array(
		'label' 		=> __('Feature 1','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'mfeature1',
		'transport' => 'postMessage',
	));
		//Feature 2
	$wp_customize->add_setting('mfeature2',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('mfeature2', array(
		'label' 		=> __('Feature 2','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'mfeature2',
		'transport' => 'postMessage',
	));
		//Feature 3
	$wp_customize->add_setting('mfeature3',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('mfeature3', array(
		'label' 		=> __('Feature 3','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'mfeature3',
		'transport' => 'postMessage',
	));
		//Feature 4
	$wp_customize->add_setting('mfeature4',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('mfeature4', array(
		'label' 		=> __('Feature 4','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'mfeature4',
		'transport' => 'postMessage',
	));
		//Feature 5
	$wp_customize->add_setting('mfeature5',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('mfeature5', array(
		'label' 		=> __('Feature 5','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'mfeature5',
		'transport' => 'postMessage',
	));
		//Feature 6
	$wp_customize->add_setting('mfeature6',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('mfeature6', array(
		'label' 		=> __('Feature 6','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'mfeature6',
		'transport' => 'postMessage',
	));
		//Button Title
	$wp_customize->add_setting('mbutton_title',array(
		'default' => 'SIGN UP',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('mbutton_title', array(
		'label' 		=> __('Button Title','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'mbutton_title',
		'transport' => 'postMessage',
	));
		//Button Url
	$wp_customize->add_setting('mbutton_url',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('mbutton_url', array(
		'label' 		=> __('Button URL','freelancer-agency'),
		'section' => 'freelancer_agency_pricetable',
		'settings' => 'mbutton_url',
		'transport' => 'postMessage',
	));
//-------------------------------------------testimonial-------------------------------------------------
	$wp_customize->add_section('freelancer_agency_testimonial',array(
		'title'			=> __('Testimonial','freelancer-agency'),
		'priority'		=> 23,
	));
		//Testimonial Title
	$wp_customize->add_setting('testimonial_title',array(
		'default' => 'What people say about us',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('testimonial_title', array(
		'label' 		=> __('Testimonial Title','freelancer-agency'),
		'section' => 'freelancer_agency_testimonial',
		'settings' => 'testimonial_title',
		'transport' => 'postMessage',
	));
		//Testimonial image
	$wp_customize->add_setting('testimonial_image',array(
		'default' => get_template_directory_uri() . '/assets/images/testimonial-bg.jpg',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'testimonial_image', array(
		'label' 		=> __('Testimonial Image','freelancer-agency'),
		'section' => 'freelancer_agency_testimonial',
		'settings' => 'testimonial_image',
		'transport' => 'postMessage',
	)));
//-----------------------------------slide1------------------------------
		//slide content
	$wp_customize->add_setting('slide1_comment',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('slide1_comment', array(
		'label' 		=> __('Slide1 Comment','freelancer-agency'),
		'section' => 'freelancer_agency_testimonial',
		'settings' => 'slide1_comment',
		'type' 		=> 'textarea',
		'transport' => 'postMessage',
	));
		//slide image
	$wp_customize->add_setting('slide1_image',array(
		'default' => get_template_directory_uri() . '/assets/images/testimonial-image1.png',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'slide1_image', array(
		'label' 		=> __('Slide1 Image','freelancer-agency'),
		'section' => 'freelancer_agency_testimonial',
		'settings' => 'slide1_image',
		'transport' => 'postMessage',
	)));
		//slide name
	$wp_customize->add_setting('slide1_name',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('slide1_name', array(
		'label' 		=> __('Slide1 Name','freelancer-agency'),
		'section' => 'freelancer_agency_testimonial',
		'settings' => 'slide1_name',
		'transport' => 'postMessage',
	));
		//slide position
	$wp_customize->add_setting('slide1_position',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('slide1_position', array(
		'label' 		=> __('Slide1 Position','freelancer-agency'),
		'section' => 'freelancer_agency_testimonial',
		'settings' => 'slide1_position',
		'transport' => 'postMessage',
	));
//-----------------------------------slide2------------------------------
		//slide content
	$wp_customize->add_setting('slide2_comment',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('slide2_comment', array(
		'label' 		=> __('Slide2 Comment','freelancer-agency'),
		'section' => 'freelancer_agency_testimonial',
		'settings' => 'slide2_comment',
		'type' 		=> 'textarea',
		'transport' => 'postMessage',
	));
		//slide image
	$wp_customize->add_setting('slide2_image',array(
		'default' => get_template_directory_uri() . '/assets/images/testimonial-image1.png',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'slide2_image', array(
		'label' 		=> __('Slide2 Image','freelancer-agency'),
		'section' => 'freelancer_agency_testimonial',
		'settings' => 'slide2_image',
		'transport' => 'postMessage',
	)));
		//slide name
	$wp_customize->add_setting('slide2_name',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('slide2_name', array(
		'label' 		=> __('Slide2 Name','freelancer-agency'),
		'section' => 'freelancer_agency_testimonial',
		'settings' => 'slide2_name',
		'transport' => 'postMessage',
	));
		//slide position
	$wp_customize->add_setting('slide2_position',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('slide2_position', array(
		'label' 		=> __('Slide2 Position','freelancer-agency'),
		'section' => 'freelancer_agency_testimonial',
		'settings' => 'slide2_position',
		'transport' => 'postMessage',
	));
//-------------------------------------------blog section-------------------------------------------------
	$wp_customize->add_section('freelancer_agency_blog',array(
		'title'			=> __('Blog','freelancer-agency'),
		'priority'		=> 24,
	));
		//blog title
	$wp_customize->add_setting('blog_title',array(
		'default' => 'Our blog',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('blog_title', array(
		'label' 		=> __(' Section Title','freelancer-agency'),
		'section' => 'freelancer_agency_blog',
		'settings' => 'blog_title',
		'transport' => 'postMessage',
	));
		//blog description
	$wp_customize->add_setting('blog_desc',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('blog_desc', array(
		'label' 		=> __('Section Description','freelancer-agency'),
		'section' => 'freelancer_agency_blog',
		'settings' => 'blog_desc',
		'type' => 'textarea',
		'transport' => 'postMessage',
	));
//-------------------------------------------Clients-------------------------------------------------
	$wp_customize->add_section('freelancer_agency_clients',array(
		'title'			=> __('Clients','freelancer-agency'),
		'priority'		=> 25,
	));
		//client1 image
	$wp_customize->add_setting('client1_image',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'client1_image', array(
		'label' 		=> __('Client1 Image','freelancer-agency'),
		'section' => 'freelancer_agency_clients',
		'settings' => 'client1_image',
		'transport' => 'postMessage',
	)));
		//client2 image
	$wp_customize->add_setting('client2_image',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'client2_image', array(
		'label' 		=> __('Client2 Image','freelancer-agency'),
		'section' => 'freelancer_agency_clients',
		'settings' => 'client2_image',
		'transport' => 'postMessage',
	)));
		//client3 image
	$wp_customize->add_setting('client3_image',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'client3_image', array(
		'label' 		=> __('Client3 Image','freelancer-agency'),
		'section' => 'freelancer_agency_clients',
		'settings' => 'client3_image',
		'transport' => 'postMessage',
	)));
		//client4 image
	$wp_customize->add_setting('client4_image',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'client4_image', array(
		'label' 		=> __('Client4 Image','freelancer-agency'),
		'section' => 'freelancer_agency_clients',
		'settings' => 'client4_image',
		'transport' => 'postMessage',
	)));
		//client5 image
	$wp_customize->add_setting('client5_image',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'client5_image', array(
		'label' 		=> __('Client1 Image','freelancer-agency'),
		'section' => 'freelancer_agency_clients',
		'settings' => 'client5_image',
		'transport' => 'postMessage',
	)));
		//client6 image
	$wp_customize->add_setting('client6_image',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'client6_image', array(
		'label' 		=> __('Client6 Image','freelancer-agency'),
		'section' => 'freelancer_agency_clients',
		'settings' => 'client6_image',
		'transport' => 'postMessage',
	)));
		//client7 image
	$wp_customize->add_setting('client7_image',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'client7_image', array(
		'label' 		=> __('Client7 Image','freelancer-agency'),
		'section' => 'freelancer_agency_clients',
		'settings' => 'client7_image',
		'transport' => 'postMessage',
	)));
		//client8 image
	$wp_customize->add_setting('client8_image',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'client8_image', array(
		'label' 		=> __('Client8 Image','freelancer-agency'),
		'section' => 'freelancer_agency_clients',
		'settings' => 'client8_image',
		'transport' => 'postMessage',
	)));
		//client9 image
	$wp_customize->add_setting('client9_image',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'client9_image', array(
		'label' 		=> __('Client9 Image','freelancer-agency'),
		'section' => 'freelancer_agency_clients',
		'settings' => 'client9_image',
		'transport' => 'postMessage',
	)));
		//client10 image
	$wp_customize->add_setting('client10_image',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'client10_image', array(
		'label' 		=> __('Client10 Image','freelancer-agency'),
		'section' => 'freelancer_agency_clients',
		'settings' => 'client10_image',
		'transport' => 'postMessage',
	)));
//-------------------------------------------contact-------------------------------------------------
	$wp_customize->add_section('freelancer_agency_contact',array(
		'title'			=> __('Contact','freelancer-agency'),
		'priority'		=> 26,
	));
		//Postal Address
	$wp_customize->add_setting('postal_address',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('postal_address', array(
		'label' 		=> __('Postal Address','freelancer-agency'),
		'section' => 'freelancer_agency_contact',
		'settings' => 'postal_address',
		'type' => 'textarea',
		'transport' => 'postMessage',
	));
		//Headquarters
	$wp_customize->add_setting('headquarters',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('headquarters', array(
		'label' 		=> __('Headquarters','freelancer-agency'),
		'section' => 'freelancer_agency_contact',
		'settings' => 'headquarters',
		'type' => 'textarea',
		'transport' => 'postMessage',
	));
		//Phone
	$wp_customize->add_setting('phone',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('phone', array(
		'label' 		=> __('Phone','freelancer-agency'),
		'section' => 'freelancer_agency_contact',
		'settings' => 'phone',
		'type' => 'textarea',
		'transport' => 'postMessage',
	));
		//E-Mail
	$wp_customize->add_setting('email',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_nohtml',
	));
	$wp_customize->add_control('email', array(
		'label' 		=> __('E-Mail','freelancer-agency'),
		'section' => 'freelancer_agency_contact',
		'settings' => 'email',
		'type' => 'textarea',
		'transport' => 'postMessage',
	));
		//contact background image
	$wp_customize->add_setting('contact_background',array(
		'default' => get_template_directory_uri() . '/assets/images/contact-bg.jpg',
		'sanitize_callback' => 'freelancer_agency_sanitize_image',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'contact_background', array(
		'label' 		=> __('Background Image','freelancer-agency'),
		'section' => 'freelancer_agency_contact',
		'settings' => 'contact_background',
		'transport' => 'postMessage',
	)));
//-------------------------------------------google map-------------------------------------------------
	$wp_customize->add_section('freelancer_agency_google_map',array(
		'title'			=> __('Google Map','freelancer-agency'),
		'priority'		=> 27,
	));	
	$wp_customize->add_setting('google_map',array(
		'default' => '',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('google_map', array(
		'label' 		=> __('Location','freelancer-agency'),
		'section' => 'freelancer_agency_google_map',
		'settings' => 'google_map',
		'type' => 'textarea',
		'transport'	=> 'postMessage',
	));
//-------------------------------------------footer-------------------------------------------------
	$wp_customize->add_section('freelancer_agency_footer',array(
		'title'			=> __('Footer','freelancer-agency'),
		'priority'		=> 100,
	));
		// footer copyright
	$default = '';
	$wp_customize->add_setting('copyright',array(
		'default' => $default,
		'sanitize_callback' => 'freelancer_agency_sanitize_html',
	));
	$wp_customize->add_control('copyright', array(
		'label' 		=> __('Copyright Notice','freelancer-agency'),
		'section' => 'freelancer_agency_footer',
		'settings' => 'copyright',
	));
//--------------------------footer social media----------------------------
		// facebook
	$wp_customize->add_setting('facebook',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('facebook', array(
		'label' 		=> __('Facebook URL','freelancer-agency'),
		'section' => 'freelancer_agency_footer',
		'settings' => 'facebook',
		'transport'	=> 'postMessage',
	));
		// twitter
	$wp_customize->add_setting('twitter',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('twitter', array(
		'label' 		=> __('Twitter URL','freelancer-agency'),
		'section' => 'freelancer_agency_footer',
		'settings' => 'twitter',
		'transport'	=> 'postMessage',
	));
		// google-plus
	$wp_customize->add_setting('google-plus',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('google-plus', array(
		'label' 		=> __('Google Plus URL','freelancer-agency'),
		'section' => 'freelancer_agency_footer',
		'settings' => 'google-plus',
		'transport'	=> 'postMessage',
	));
		// youtube
	$wp_customize->add_setting('youtube',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('youtube', array(
		'label' 		=> __('Youtube URL','freelancer-agency'),
		'section' => 'freelancer_agency_footer',
		'settings' => 'youtube',
		'transport'	=> 'postMessage',
	));
		// linkedin
	$wp_customize->add_setting('linkedin',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('linkedin', array(
		'label' 		=> __('Linkedin URL','freelancer-agency'),
		'section' => 'freelancer_agency_footer',
		'settings' => 'linkedin',
		'transport'	=> 'postMessage',
	));
		// dribbble
	$wp_customize->add_setting('dribbble',array(
		'default' => '#',
		'sanitize_callback' => 'freelancer_agency_sanitize_url',
	));
	$wp_customize->add_control('dribbble', array(
		'label' 		=> __('Dribbble URL','freelancer-agency'),
		'section' => 'freelancer_agency_footer',
		'settings' => 'dribbble',
		'transport'	=> 'postMessage',
	));

}
// css background image changing function
function freelancer_agency_css_background(){
	?>
		<style type="text/css">
			.team-img-1 { 
				background-image: url(<?php echo esc_url(get_theme_mod('member1_image',get_template_directory_uri() . '/assets/images/team-member1.png')); ?>);
			}

			.team-img-2 { 
				background-image: url(<?php echo esc_url(get_theme_mod('member2_image',get_template_directory_uri() . '/assets/images/team-member2.png')); ?>);
			}

			.team-img-3 { 
				background-image: url(<?php echo esc_url(get_theme_mod('member3_image',get_template_directory_uri() . '/assets/images/team-member3.png')); ?>);
			}
			.team-img-4 { 
				background-image: url(<?php echo esc_url(get_theme_mod('member4_image',get_template_directory_uri() . '/assets/images/team-member4.png')); ?>);
			}
			#contact { 
				background-image: url(<?php echo esc_url(get_theme_mod('contact_background',get_template_directory_uri() . '/assets/images/contact-bg.jpg')); ?>);
			}
		</style>
	<?php
}
add_action('wp_head','freelancer_agency_css_background');
add_action('customize_register','freelancer_agency_customizer_register');
//sanitize functions
require_once(dirname(__FILE__) . '/sanitization_callbacks.php');
