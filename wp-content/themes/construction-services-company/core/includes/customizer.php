<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'construction_services_company_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'construction-services-company' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'construction_services_company_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'construction-services-company' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'construction_services_company_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'construction-services-company' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'construction-services-company' ),
			'off' => esc_html__( 'Disable', 'construction-services-company' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'construction_services_company_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'construction-services-company' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'construction-services-company' ),
			'off' => esc_html__( 'Disable', 'construction-services-company' ),
		],
	] );

	// PANEL

	Kirki::add_panel( 'construction_services_company_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'construction-services-company' ),
	) );

	// Scroll Top

	Kirki::add_section( 'construction_services_company_section_scroll', array(
	    'title'          => esc_html__( 'Additional Settings', 'construction-services-company' ),
	    'description'    => esc_html__( 'Scroll To Top', 'construction-services-company' ),
	    'panel'          => 'construction_services_company_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'construction_services_company_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'construction-services-company' ),
		'section'     => 'construction_services_company_section_scroll',
		'default'     => '1',
		'priority'    => 10,
	] );

	// POST SECTION

	Kirki::add_section( 'construction_services_company_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'construction-services-company' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'construction-services-company' ),
	    'panel'          => 'construction_services_company_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'construction_services_company_enable_post_heading',
		'section'     => 'construction_services_company_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'construction-services-company' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'construction_services_company_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'construction-services-company' ),
		'section'     => 'construction_services_company_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'construction-services-company' ),
			'off' => esc_html__( 'Disable', 'construction-services-company' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'construction_services_company_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'construction-services-company' ),
		'section'     => 'construction_services_company_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'construction-services-company' ),
			'off' => esc_html__( 'Disable', 'construction-services-company' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'construction_services_company_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'construction-services-company' ),
		'section'     => 'construction_services_company_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'construction_services_company_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'construction-services-company' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'construction-services-company' ),
	    'panel'          => 'construction_services_company_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'construction_services_company_header_phone_number_heading',
		'section'     => 'construction_services_company_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Phone Number', 'construction-services-company' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'construction_services_company_header_phone_number',
		'section'  => 'construction_services_company_section_header',
		'default'  => '',
		'sanitize_callback' => 'construction_services_company_sanitize_phone_number',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'construction_services_company_enable_email_heading',
		'section'     => 'construction_services_company_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Email Address', 'construction-services-company' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'construction_services_company_header_email',
		'section'  => 'construction_services_company_section_header',
		'default'  => '',
		'sanitize_callback' => 'sanitize_email',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'construction_services_company_enable_location_heading',
		'section'     => 'construction_services_company_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Location', 'construction-services-company' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'construction_services_company_header_location',
		'section'  => 'construction_services_company_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'construction_services_company_enable_search',
		'section'     => 'construction_services_company_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'construction-services-company' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'construction_services_company_search_box_enable',
		'section'     => 'construction_services_company_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'construction-services-company' ),
			'off' => esc_html__( 'Disable', 'construction-services-company' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'construction_services_company_enable_socail_link',
		'section'     => 'construction_services_company_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'construction-services-company' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'construction_services_company_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'construction-services-company' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'construction-services-company' ),
		'settings'     => 'construction_services_company_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'construction-services-company' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'construction-services-company' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'construction-services-company' ),
				'description' => esc_html__( 'Add the social icon url here.', 'construction-services-company' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'construction_services_company_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'construction-services-company' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'construction-services-company' ),
        'panel'          => 'construction_services_company_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'construction_services_company_enable_heading',
		'section'     => 'construction_services_company_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'construction-services-company' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'construction_services_company_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'construction-services-company' ),
		'section'     => 'construction_services_company_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'construction-services-company' ),
			'off' => esc_html__( 'Disable', 'construction-services-company' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'construction_services_company_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'construction-services-company' ),
		'section'     => 'construction_services_company_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'construction-services-company' ),
			'off' => esc_html__( 'Disable', 'construction-services-company' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'construction_services_company_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'construction-services-company' ),
		'section'     => 'construction_services_company_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'construction-services-company' ),
			'off' => esc_html__( 'Disable', 'construction-services-company' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'construction_services_company_slider_heading',
		'section'     => 'construction_services_company_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'construction-services-company' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'construction_services_company_slider_extra_heading' ,
        'label'    => esc_html__( 'Extra Heading',  'construction-services-company' ),
        'section'  => 'construction_services_company_blog_slide_section',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'construction_services_company_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'construction-services-company' ),
		'section'     => 'construction_services_company_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'construction_services_company_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'construction-services-company' ),
		'section'     => 'construction_services_company_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'construction-services-company' ),
		'priority'    => 10,
		'choices'     => construction_services_company_get_categories_select(),
	] );

	//OUR SERVICES SECTION

	Kirki::add_section( 'construction_services_company_what_we_do_section', array(
	    'title'          => esc_html__( 'Our Servies Settings', 'construction-services-company' ),
	    'description'    => esc_html__( 'Here you can add services post.', 'construction-services-company' ),
	    'panel'          => 'construction_services_company_panel_id',
	    'priority'       => 160,
	) );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'construction_services_company_enable_heading',
		'section'     => 'construction_services_company_what_we_do_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Our Services',  'construction-services-company' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'construction_services_company_what_we_do_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'construction-services-company' ),
		'section'     => 'construction_services_company_what_we_do_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'construction-services-company' ),
			'off' => esc_html__( 'Disable',  'construction-services-company' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'construction_services_company_what_we_do_short_heading' ,
        'label'    => esc_html__( 'Short Heading',  'construction-services-company' ),
        'section'  => 'construction_services_company_what_we_do_section',
    ] );
    
	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'construction_services_company_what_we_do_heading' ,
        'label'    => esc_html__( 'Heading',  'construction-services-company' ),
        'section'  => 'construction_services_company_what_we_do_section',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'construction_services_company_what_we_do_left_number',
		'label'       => esc_html__( 'Number of post to show', 'construction-services-company' ),
		'section'     => 'construction_services_company_what_we_do_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'construction_services_company_what_we_do_left_category',
		'label'       => esc_html__( 'Select the category to show post', 'construction-services-company' ),
		'section'     => 'construction_services_company_what_we_do_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'construction-services-company' ),
		'priority'    => 10,
		'choices'     => construction_services_company_get_categories_select(),
	] );

	// FOOTER SECTION

	Kirki::add_section( 'construction_services_company_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'construction-services-company' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'construction-services-company' ),
        'panel'          => 'construction_services_company_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'construction_services_company_footer_text_heading',
		'section'     => 'construction_services_company_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'construction-services-company' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'construction_services_company_footer_text',
		'section'  => 'construction_services_company_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'construction_services_company_footer_enable_heading',
		'section'     => 'construction_services_company_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'construction-services-company' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'construction_services_company_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'construction-services-company' ),
		'section'     => 'construction_services_company_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'construction-services-company' ),
			'off' => esc_html__( 'Disable', 'construction-services-company' ),
		],
	] );
}