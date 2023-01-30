<?php

//Panels & Sections
//Adding Panels


Kirki::add_panel( 'home_page_color', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Home page Color', 'exam1' ),
    'description' => esc_html__( 'home page Color', 'exam1' ),
) );




//Color
Kirki::add_section( 'theme_color_sections', array(
    'title'          => esc_html__( 'Default Color Section', 'exam1' ),
    'description'    => esc_html__( 'Default section description.', 'exam1' ),
    'panel'          => 'home_page_color',
    'priority'       => 160,
) );
    //body title color
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'coor_body',
	'label'    => esc_html__( 'Body Color', 'exam1' ),
	'section'  => 'theme_color_sections',
	'default'  => '#1a3365',
	'priority' => 10,
		'choices'         => array(
		'alpha' => true,
	),
] );
    //body text color
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'coor_body_text',
	'label'    => esc_html__( 'Text Color', 'exam1' ),
	'section'  => 'theme_color_sections',
	'default'  => '#6e88a2',
	'priority' => 10,
		'choices'         => array(
		'alpha' => true,
	),
] );
  //body span color
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'coor_span_text',
	'label'    => esc_html__( 'Span Text Color', 'exam1' ),
	'section'  => 'theme_color_sections',
	'default'  => '#0ea6e9',
	'priority' => 10,
		'choices'         => array(
		'alpha' => true,
	),
] );
   //title beafore color
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'coor_hading_before_text',
	'label'    => esc_html__( 'Title Before Background Color', 'exam1' ),
	'section'  => 'theme_color_sections',
	'default'  => '#4D595E',
	'priority' => 10,
		'choices'         => array(
		'alpha' => true,
	),
] );


//Banner Sub title color
Kirki::add_section( 'theme_banner_color_section', array(
    'title'          => esc_html__( 'Banner Color Section', 'exam1' ),
    'description'    => esc_html__( 'Banner Color section description.', 'exam1' ),
    'panel'          => 'home_page_color',
    'priority'       => 160,
) );
     //sub title & Button Color
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'coor_banner_sub_title_text',
	'label'    => esc_html__( 'Banner Sub Title & Button 2 Text Color', 'exam1' ),
	'section'  => 'theme_banner_color_section',
	'default'  => '#6e88a2',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );
   //banner button color
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'coor_banner_button_1_text',
	'label'    => esc_html__( 'Button 1 Text Color', 'exam1' ),
	'section'  => 'theme_banner_color_section',
	'default'  => '#0ea6e9',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );


Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'coor_banner_button_1_text_hover',
	'label'    => esc_html__( 'Button 1 Text Hover Color', 'exam1' ),
	'section'  => 'theme_banner_color_section',
	'default'  => '#fff',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'coor_banner_button_1_background_text_hover',
	'label'    => esc_html__( 'Button 1 Text Hover Background Color', 'exam1' ),
	'section'  => 'theme_banner_color_section',
	'default'  => '#0ea6e9',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );
    //banner button 2 color
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'coor_banner_button_2_text',
	'label'    => esc_html__( 'Button 2 Text Color', 'exam1' ),
	'section'  => 'theme_banner_color_section',
	'default'  => '#6e88a2',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );

    //banner button icon color
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'coor_banner_button_icon',
	'label'    => esc_html__( 'Button icon color', 'exam1' ),
	'section'  => 'theme_banner_color_section',
	'default'  => '#fff',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );

    //banner button icon background color
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'coor_banner_button_icon_background',
	'label'    => esc_html__( 'Button icon Background Color', 'exam1' ),
	'section'  => 'theme_banner_color_section',
	'default'  => '#0ea6e9',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );

    //banner Arrow icon color
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'coor_banner_arro_icon',
	'label'    => esc_html__( 'Arrow icon color', 'exam1' ),
	'section'  => 'theme_banner_color_section',
	'default'  => '#0ea6e9',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );

    //banner Arrow icon background color
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'coor_banner_arro_icon_background',
	'label'    => esc_html__( 'Arrow icon Background Color', 'exam1' ),
	'section'  => 'theme_banner_color_section',
	'default'  => '#fff',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );


//Fuature Section color
Kirki::add_section( 'theme_feature_color_section', array(
    'title'          => esc_html__( 'Fuature Color Section', 'exam1' ),
    'description'    => esc_html__( 'Fuature Color section description.', 'exam1' ),
    'panel'          => 'home_page_color',
    'priority'       => 160,
) );


      //feature color
Kirki::add_field( 'exam1', array(
	'type'      => 'color',
	'settings'  => 'feature_background_color',
	'label'     => __( 'Fuature background Color', 'exam1' ),
	'section'   => 'theme_feature_color_section',
	'default'   => '#4D595E',
	'priority'  => 10,
	'choices'   => array(
		'alpha' => true,
	),
) );

Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'coor_feature_icon',
	'label'    => esc_html__( 'Feature Icon Color', 'exam1' ),
	'section'  => 'theme_feature_color_section',
	'default'  => '#4D595E',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );

Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'coor_feature_icon_background',
	'label'    => esc_html__( 'Feature Icon Background Color', 'exam1' ),
	'section'  => 'theme_feature_color_section',
	'default'  => '#CFEDFB',
	'priority' => 10,
	'choices'         => array(
		'alpha' => true,
	),
] );

Kirki::add_field( 'exam1', [
	'type'     => 'color',
	'settings' => 'coor_feature_icon_background_sadho',
	'label'    => esc_html__( 'Feature Icon Background Hover Color', 'exam1' ),
	'section'  => 'theme_feature_color_section',
	'default'  => '#B8C8CF',
	'priority' => 10,
	'choices'         => array(
		'alpha' => true,
	),
] );

//Next Section color
Kirki::add_section( 'theme_section1_color_section', array(
    'title'          => esc_html__( 'Next Section', 'exam1' ),
    'description'    => esc_html__( 'Next Color section description.', 'exam1' ),
    'panel'          => 'home_page_color',
    'priority'       => 160,
) );
    //button text color
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'next_button_text_color',
	'label'    => esc_html__( 'Button Text & Icon color', 'exam1' ),
	'section'  => 'theme_section1_color_section',
	'default'  => '#8798ab',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );

//Button Group Section color
Kirki::add_section( 'theme_counter_color_section', array(
    'title'          => esc_html__( 'Button Group Section', 'exam1' ),
    'description'    => esc_html__( 'Button Group Color section description.', 'exam1' ),
    'panel'          => 'home_page_color',
    'priority'       => 160,
) );
    //button text color
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'group_button_text_color',
	'label'    => esc_html__( 'Button Text color', 'exam1' ),
	'section'  => 'theme_counter_color_section',
	'default'  => '#1a3365',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );
    //button text Hover color
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'group_button_text_hover_color',
	'label'    => esc_html__( 'Button Text hover color', 'exam1' ),
	'section'  => 'theme_counter_color_section',
	'default'  => '#fff',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );
    //button text Hover Background color
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'group_button_text_hover_background_color',
	'label'    => esc_html__( 'Button Text hover  kBackground color', 'exam1' ),
	'section'  => 'theme_counter_color_section',
	'default'  => '#1a3365',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );

//Price Section color
// Kirki::add_section( 'theme_price_color_section', array(
//     'title'          => esc_html__( 'Price Section', 'exam1' ),
//     'description'    => esc_html__( 'Price Color section description.', 'exam1' ),
//     'panel'          => 'home_page_color',
//     'priority'       => 160,
// ) );
    //border color
// Kirki::add_field( 'exam1', [
// 	'type'     => 'Color',
// 	'settings' => 'price_box_border_color',
// 	'label'    => esc_html__( 'Button Text & Icon color', 'exam1' ),
// 	'section'  => 'theme_price_color_section',
// 	'default'  => '#1a3365',
// 	'priority' => 10,
// 	'choices'  => array(
// 		'alpha' => true,
// 	),
// ] );
    //box 1 text color
// Kirki::add_field( 'exam1', [
// 	'type'     => 'Color',
// 	'settings' => 'group_price_box_text_1_color',
// 	'label'    => esc_html__( 'Box 1 Text color', 'exam1' ),
// 	'section'  => 'theme_price_color_section',
// 	'default'  => '#49c6e5 ',
// 	'priority' => 10,
// 	'choices'  => array(
// 		'alpha' => true,
// 	),
// ] );
    //box 2 text color
// Kirki::add_field( 'exam1', [
// 	'type'     => 'Color',
// 	'settings' => 'group_price_box_text_2_color',
// 	'label'    => esc_html__( 'Box 2 Text color', 'exam1' ),
// 	'section'  => 'theme_price_color_section',
// 	'default'  => '#ef4b4b  ',
// 	'priority' => 10,
// 	'choices'  => array(
// 		'alpha' => true,
// 	),
// ] );

    //box 3 text color
// Kirki::add_field( 'exam1', [
// 	'type'     => 'Color',
// 	'settings' => 'group_price_box_text_3_color',
// 	'label'    => esc_html__( 'Box 3 Text color', 'exam1' ),
// 	'section'  => 'theme_price_color_section',
// 	'default'  => '#0ea6e9  ',
// 	'priority' => 10,
// 	'choices'  => array(
// 		'alpha' => true,
// 	),
// ] );

//Testimonial Section color
Kirki::add_section( 'theme_testimonial_color_section', array(
    'title'          => esc_html__( 'Testimonial Section', 'exam1' ),
    'description'    => esc_html__( 'Testimonial Color section description.', 'exam1' ),
    'panel'          => 'home_page_color',
    'priority'       => 160,
) );
    //Arrow Icon color
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'testimonial_background_color',
	'label'    => esc_html__( 'Testimonial Background Color', 'exam1' ),
	'section'  => 'theme_testimonial_color_section',
	'default'  => 'rgba(14,166,233,.08)',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'testimonial_arrow_icon_color',
	'label'    => esc_html__( 'Testimonial Arrow Icon color', 'exam1' ),
	'section'  => 'theme_testimonial_color_section',
	'default'  => '#fff',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );
    //Arrow Icon color
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'testimonial_arrow_icon_background_color',
	'label'    => esc_html__( 'Testimonial Arrow Icon Background color', 'exam1' ),
	'section'  => 'theme_testimonial_color_section',
	'default'  => '#0ea6e9',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );

//Link Section color
Kirki::add_section( 'theme_link_color_section', array(
    'title'          => esc_html__( 'Link Color', 'exam1' ),
    'description'    => esc_html__( 'Link Color section description.', 'exam1' ),
    'panel'          => 'home_page_color',
    'priority'       => 160,
) );

Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'theme_link_text_color',
	'label'    => esc_html__( 'Text Color', 'exam1' ),
	'section'  => 'theme_link_color_section',
	'default'  => '#1a3365',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'theme_link_text_hover_color',
	'label'    => esc_html__( 'Text Hover Color', 'exam1' ),
	'section'  => 'theme_link_color_section',
	'default'  => '#0eb5ff',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'theme_link_text_hover_border_color',
	'label'    => esc_html__( 'Text Border Color', 'exam1' ),
	'section'  => 'theme_link_color_section',
	'default'  => '#0ea6e9',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );

Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'theme_link_button_text_color',
	'label'    => esc_html__( 'Button Text Color', 'exam1' ),
	'section'  => 'theme_link_color_section',
	'default'  => '#fff',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'theme_link_button_text_background_color',
	'label'    => esc_html__( 'Button Background', 'exam1' ),
	'section'  => 'theme_link_color_section',
	'default'  => '#0ea6e9',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'theme_link_button_text_background_box_shadow_color',
	'label'    => esc_html__( 'Box Shadow Color', 'exam1' ),
	'section'  => 'theme_link_color_section',
	'default'  => 'rgb(14 166 233 / 60%)',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );




//Footer Section color
Kirki::add_section( 'theme_footer_color_section', array(
    'title'          => esc_html__( 'Footer Section', 'exam1' ),
    'description'    => esc_html__( 'Footer Color section description.', 'exam1' ),
    'panel'          => 'home_page_color',
    'priority'       => 160,
) );

Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'footer_background_color',
	'label'    => esc_html__( 'Footer Background Color', 'exam1' ),
	'section'  => 'theme_footer_color_section',
	'default'  => 'rgba(14,166,233,.04)',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'footer_text_hover_color',
	'label'    => esc_html__( 'Text Hover Color', 'exam1' ),
	'section'  => 'theme_footer_color_section',
	'default'  => '#0ea6e9',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );



//Copigight Section color
Kirki::add_section( 'theme_copiright_color_section', array(
    'title'          => esc_html__( 'Copigight Section', 'exam1' ),
    'description'    => esc_html__( 'Copigight Color section description.', 'exam1' ),
    'panel'          => 'home_page_color',
    'priority'       => 160,
) );

Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'copygight_footer_text_color',
	'label'    => esc_html__( 'Copigight Text Color', 'exam1' ),
	'section'  => 'theme_copiright_color_section',
	'default'  => '#fff',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'copygight_footer_background_color',
	'label'    => esc_html__( 'Copigight Background Color', 'exam1' ),
	'section'  => 'theme_copiright_color_section',
	'default'  => '#0ea6e9',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );

//Back To top Section color
Kirki::add_section( 'theme_back_to_top_color_section', array(
    'title'          => esc_html__( 'Back To top Section', 'exam1' ),
    'description'    => esc_html__( 'Back To top Color section description.', 'exam1' ),
    'panel'          => 'home_page_color',
    'priority'       => 160,
) );

Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'back_to_top_icon_color',
	'label'    => esc_html__( 'Back To top icon Color', 'exam1' ),
	'section'  => 'theme_back_to_top_color_section',
	'default'  => '#fff',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'back_to_top_icon_background_color',
	'label'    => esc_html__( 'Back To top icon Background Color', 'exam1' ),
	'section'  => 'theme_back_to_top_color_section',
	'default'  => '#1a3365',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );
Kirki::add_field( 'exam1', [
	'type'     => 'Color',
	'settings' => 'back_to_top_icon_background_hover_color',
	'label'    => esc_html__( 'Back To top icon Background Hover Color', 'exam1' ),
	'section'  => 'theme_back_to_top_color_section',
	'default'  => '#0ea6e9',
	'priority' => 10,
	'choices'  => array(
		'alpha' => true,
	),
] );






//Panels & Sections
//Adding Panels
//Logo home
Kirki::add_panel( 'theme_logo_websites', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Logo', 'exam1' ),
    'description' => esc_html__( 'Select Logo', 'exam1' ),
) );


Kirki::add_section( 'home_logo_section', array(
    'title'          => esc_html__( 'Logo', 'exam1' ),
    'description'    => esc_html__( 'Theme Logo', 'exam1' ),
    'panel'          => 'theme_logo_websites',
    'priority'       => 160,
) );


Kirki::add_field( 'exam1', [
	'type'     => 'image',
	'settings' => 'logo_image_theme',
	'label'    => esc_html__( 'Logo Select', 'exam1' ),
	'section'  => 'home_logo_section',
	'default'  => get_template_directory_uri().'/images/logo-dark.png',
	'priority' => 10,
] );



//Panels & Sections
//Adding Panels
//Logo home
Kirki::add_panel( 'theme_menu_link_websites', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Menu Button', 'exam1' ),
    'description' => esc_html__( 'Menu Button', 'exam1' ),
) );


Kirki::add_section( 'theme_menu_link_section', array(
    'title'          => esc_html__( 'Menu Button Text', 'exam1' ),
    'description'    => esc_html__( 'Menu Button Text', 'exam1' ),
    'panel'          => 'theme_menu_link_websites',
    'priority'       => 160,
) );


Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'sinup_menu_text',
	'label'    => esc_html__( 'Signup button text', 'exam1' ),
	'section'  => 'theme_menu_link_section',
	'default'  => esc_html__( "Sign Up", 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	'type'     => 'link',
	'settings' => 'sinup_menu_link',
	'label'    => esc_html__( 'Signup button Link', 'exam1' ),
	'section'  => 'theme_menu_link_section',
	'default'  => 'https://www.facebook.com/nazmul.hossen.77128/',
	'priority' => 10,
] );



//Panels & Sections
//Adding Panels


Kirki::add_panel( 'home_page', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Home page', 'exam1' ),
    'description' => esc_html__( 'home page edit content', 'exam1' ),
) );

//banner home
Kirki::add_section( 'home_banner_section', array(
    'title'          => esc_html__( 'Banner Section', 'exam1' ),
    'description'    => esc_html__( 'Banner section description.', 'exam1' ),
    'panel'          => 'home_page',
    'priority'       => 160,
) );


Kirki::add_field( 'exam1', [
	'type'     => 'image',
	'settings' => 'banner_image_home',
	'label'    => esc_html__( 'Banner Image', 'exam1' ),
	'section'  => 'home_banner_section',
	'default'  => get_template_directory_uri().'/images/home.png',
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'subtitle_title',
	'label'    => esc_html__( 'Sub Title', 'exam1' ),
	'section'  => 'home_banner_section',
	'default'  => esc_html__( "I'm Graphics Designer", 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'banner_title_1',
	'label'    => esc_html__( 'Title 1', 'exam1' ),
	'section'  => 'home_banner_section',
	'default'  => esc_html__( 'Make your life simplier with', 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'banner_title_2',
	'label'    => esc_html__( 'Title 2', 'exam1' ),
	'section'  => 'home_banner_section',
	'default'  => esc_html__( 'Kasy', 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'button_title_1',
	'label'    => esc_html__( 'Button 1 title', 'exam1' ),
	'section'  => 'home_banner_section',
	'default'  => esc_html__( 'About us', 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	'type'     => 'link',
	'settings' => 'button_link_1',
	'label'    => esc_html__( 'Button 1 link', 'exam1' ),
	'section'  => 'home_banner_section',
	'default'  => 'https://www.facebook.com/nazmul.hossen.77128/',
	'priority' => 10,
] );


Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'button_title_2',
	'label'    => esc_html__( 'Button 2 title', 'exam1' ),
	'section'  => 'home_banner_section',
	'default'  => esc_html__( 'Watch Now', 'exam1' ),
	'priority' => 10,
] );


Kirki::add_field( 'exam1', [
	'type'     => 'link',
	'settings' => 'button_2_video_link',
	'label'    => esc_html__( 'Video link', 'exam1' ),
	'section'  => 'home_banner_section',
	'default'  => 'https://www.w3schools.com/html/mov_bbb.mp4',
	'priority' => 10,
] );


//Skill Catagory Image
Kirki::add_section( 'skill_catagory_section', array(
    'title'          => esc_html__( 'Skill Catagory Image', 'exam1' ),
    'description'    => esc_html__( 'Choice Skill Catagory Image', 'exam1' ),
    'panel'          => 'home_page',
    'priority'       => 160,
) );

Kirki::add_field( 'exam1', [
	    'type'     => 'repeater',
		'settings' => 'skill_catagory_image_section_setting',
		'label'    => esc_html__( 'Choices Image', 'exam1' ),
		'section'  => 'skill_catagory_section',
		'priority' => 10,
		'default'  => [
			[
				'image_skill_section' => get_template_directory_uri().'/images/logo/brand-logo-1.png',
			],
		],
		'fields'   => [
			'image_skill_section'   => [
				'type'        => 'image',
				'label'       => esc_html__( 'Title', 'exam1' ),
				'default'     => '',
			],
			
		],
	]
);


//Features section
Kirki::add_section( 'features_banner_section', array(
    'title'          => esc_html__( 'Features Section', 'exam1' ),
    'description'    => esc_html__( 'Features section description.', 'exam1' ),
    'panel'          => 'home_page',
    'priority'       => 160,
) );


Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'feature_title',
	'label'    => esc_html__( 'Title', 'exam1' ),
	'section'  => 'features_banner_section',
	'default'  => esc_html__( "Features", 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	'type'     => 'textarea',
	'settings' => 'feature_description',
	'label'    => esc_html__( 'Description', 'exam1' ),
	'section'  => 'features_banner_section',
	'default'  => esc_html__( "Ut enim ad minima veniam quis nostrum exercitationem ullam corporis suscipit laboriosam nisi commodi consequatur.", 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	    'type'     => 'repeater',
		'settings' => 'feature_section_setting',
		'label'    => esc_html__( 'Features Section Add', 'exam1' ),
		'section'  => 'features_banner_section',
		'priority' => 10,
		'default'  => [
			[
				'icon_feature_section' => 'mdi-trophy-variant-outline',
				'feature_title_section'   => esc_html__( 'Responsive Layout', 'exam1' ),
				'feature_description_section'   => esc_html__( 'Aenean tellus metus bibendum sed posuere ac pede amet augue turpis Pellentesque posuere.', 'exam1' ),
			],
		],
		'fields'   => [
			'icon_feature_section' => [
				'type'        => 'select',
				'label'       => esc_html__( 'Link Target', 'exam1' ),
				'description' => esc_html__( 'Description', 'exam1' ),
				'default'     => '_self',
				'choices'     => [
					'mdi-trophy-variant-outline' => esc_html__( 'Icon 1', 'exam1' ),
					'mdi-atom' => esc_html__( 'Icon 2', 'exam1' ),
					'mdi-email-outline' => esc_html__( 'Icon 3', 'exam1' ),
					'mdi-lock-open' => esc_html__( 'Icon 4', 'exam1' ),
					'mdi-shield-account-outline' => esc_html__( 'Icon 5', 'exam1' ),
					'mdi-octagram-outline' => esc_html__( 'Icon 6', 'exam1' ),
				],
			],
			'feature_title_section'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'exam1' ),
				'default'     => '',
			],
			'feature_description_section'    => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Description', 'exam1' ),
				'default'     => '',
			],
			
		],
	]
);




//start about section
Kirki::add_section( 'start_about_section', array(
    'title'          => esc_html__( 'About Section', 'exam1' ),
    'description'    => esc_html__( 'About section description.', 'exam1' ),
    'panel'          => 'home_page',
    'priority'       => 160,
) );


Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'start_about_title',
	'label'    => esc_html__( 'Title', 'exam1' ),
	'section'  => 'start_about_section',
	'default'  => esc_html__( "Modern & Powerful Interface", 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	'type'     => 'textarea',
	'settings' => 'start_about_description',
	'label'    => esc_html__( 'Description', 'exam1' ),
	'section'  => 'start_about_section',
	'default'  => esc_html__( "In an ideal world this website wouldn’t exist, a client would acknowledge the importance design starts.", 'exam1' ),
	'priority' => 10,
] );

        //about items 3 section Add

     //item 1
Kirki::add_field( 'exam1', [
	'type'     => 'image',
	'settings' => 'start_about_item_image_1',
	'label'    => esc_html__( 'Item Image 1', 'exam1' ),
	'section'  => 'start_about_section',
	'default'  => get_template_directory_uri().'/images/about.png',
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'start_about_item_sub_title_1',
	'label'    => esc_html__( 'Item 1 Sub Title', 'exam1' ),
	'section'  => 'start_about_section',
	'default'  => esc_html__( "IDynamic Growth.", 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'start_about_item_title_1',
	'label'    => esc_html__( 'Item 1 Title', 'exam1' ),
	'section'  => 'start_about_section',
	'default'  => esc_html__( "It’s Everything You’ll Ever Need.", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'textarea',
	'settings' => 'start_about_item_description_1',
	'label'    => esc_html__( 'Item 1 Description', 'exam1' ),
	'section'  => 'start_about_section',
	'default'  => esc_html__( "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem at enim ad minima veniam.", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'start_about_item_button_title_1',
	'label'    => esc_html__( 'Item 1 Button Text', 'exam1' ),
	'section'  => 'start_about_section',
	'default'  => esc_html__( "Know More", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'start_about_item_button_link_1',
	'label'    => esc_html__( 'Item 1 Button Link', 'exam1' ),
	'section'  => 'start_about_section',
	'default'  => 'https://www.facebook.com/nazmul.hossen.77128/',
	'priority' => 10,
] );

     //item 2
Kirki::add_field( 'exam1', [
	'type'     => 'image',
	'settings' => 'start_about_item_image_2',
	'label'    => esc_html__( 'Item Image 2', 'exam1' ),
	'section'  => 'start_about_section',
	'default'  => get_template_directory_uri().'/images/about-2.png',
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'start_about_item_sub_title_2',
	'label'    => esc_html__( 'Item 2 Sub Title', 'exam1' ),
	'section'  => 'start_about_section',
	'default'  => esc_html__( "About Us.", 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'start_about_item_title_2',
	'label'    => esc_html__( 'Item 2 Title', 'exam1' ),
	'section'  => 'start_about_section',
	'default'  => esc_html__( "We're knowledgeable about making benefits higher.", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'textarea',
	'settings' => 'start_about_item_description_2',
	'label'    => esc_html__( 'Item 2 Description', 'exam1' ),
	'section'  => 'start_about_section',
	'default'  => esc_html__( "Morbi pretium neque id viverra dolor, luctus porta iaculis purus tempor ultricies varius magni at congue rutrum. Lorem ipsum dolor amet elitr nonumy eirmod tempor integer tempus aliquet neque dolor feugiat felis ipsum massa nec faucibus", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'start_about_item_button_title_2',
	'label'    => esc_html__( 'Item 2 Button Text', 'exam1' ),
	'section'  => 'start_about_section',
	'default'  => esc_html__( "Know More", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'start_about_item_button_link_2',
	'label'    => esc_html__( 'Item 2 Button Link', 'exam1' ),
	'section'  => 'start_about_section',
	'default'  => 'https://www.facebook.com/nazmul.hossen.77128/',
	'priority' => 10,
] );

      //item 3
Kirki::add_field( 'exam1', [
	'type'     => 'image',
	'settings' => 'start_about_item_image_3',
	'label'    => esc_html__( 'Item Image 3', 'exam1' ),
	'section'  => 'start_about_section',
	'default'  => get_template_directory_uri().'/images/about-3.png',
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'start_about_item_sub_title_3',
	'label'    => esc_html__( 'Item 3 Sub Title', 'exam1' ),
	'section'  => 'start_about_section',
	'default'  => esc_html__( "100% Trustd Platform.", 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'start_about_item_title_3',
	'label'    => esc_html__( 'Item 3 Title', 'exam1' ),
	'section'  => 'start_about_section',
	'default'  => esc_html__( "Easy Way to Manage your team.", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'textarea',
	'settings' => 'start_about_item_description_3',
	'label'    => esc_html__( 'Item 3 Description', 'exam1' ),
	'section'  => 'start_about_section',
	'default'  => esc_html__( "We bring the breathe of our experience and industry knowledge to help your team. Visualize you product roadmap write about spaces cross-functional collaboration.", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'start_about_item_button_title_3',
	'label'    => esc_html__( 'Item 3 Button Text', 'exam1' ),
	'section'  => 'start_about_section',
	'default'  => esc_html__( "Know More", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'start_about_item_button_link_3',
	'label'    => esc_html__( 'Item 3 Button Link', 'exam1' ),
	'section'  => 'start_about_section',
	'default'  => 'https://www.facebook.com/nazmul.hossen.77128/',
	'priority' => 10,
] );



//counter section
Kirki::add_section( 'counter_section', array(
    'title'          => esc_html__( 'Counter Section', 'exam1' ),
    'description'    => esc_html__( 'Counter section description.', 'exam1' ),
    'panel'          => 'home_page',
    'priority'       => 160,
) );


Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'counter_title',
	'label'    => esc_html__( 'Title', 'exam1' ),
	'section'  => 'counter_section',
	'default'  => esc_html__( "We're all about helping you reach your next financial goal and loan help", 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	'type'     => 'textarea',
	'settings' => 'counter_description',
	'label'    => esc_html__( 'Description', 'exam1' ),
	'section'  => 'counter_section',
	'default'  => esc_html__( "Organized workflow and predictive patterns to boost your revenue.", 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	    'type'     => 'repeater',
		'settings' => 'counter_section_setting',
		'label'    => esc_html__( 'Counter Section Add', 'exam1' ),
		'section'  => 'counter_section',
		'priority' => 10,
		'default'  => [
			[
				'count_number_section'   => esc_html__( '3700', 'exam1' ),
				'count_title_section'   => esc_html__( 'k', 'exam1' ),
				'count_description_section'   => esc_html__( 'Customer Empowered $5 billion+', 'exam1' ),
			],
			[
				'count_number_section'   => esc_html__( '250', 'exam1' ),
				'count_title_section'   => esc_html__( '+', 'exam1' ),
				'count_description_section'   => esc_html__( 'Times Internaational Award Winner', 'exam1' ),
			],
			[
				'count_number_section'   => esc_html__( '34780', 'exam1' ),
				'count_title_section'   => esc_html__( '+', 'exam1' ),
				'count_description_section'   => esc_html__( 'Completed Projects $19 billion+', 'exam1' ),
			],
		],
		'fields'   => [
			'count_number_section'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Count Number', 'exam1' ),
				'default'     => '',
			],
			'count_title_section'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Count Title', 'exam1' ),
				'default'     => '',
			],
			'count_description_section'    => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Count Description', 'exam1' ),
				'default'     => '',
			],
			
		],
	'choices' => [
	          'limit' => 3,
        ],
	]
);

Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'counter_button_title',
	'label'    => esc_html__( 'Button text', 'exam1' ),
	'section'  => 'counter_section',
	'default'  => esc_html__( "Know More", 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	'type'     => 'link',
	'settings' => 'counter_button_link',
	'label'    => esc_html__( 'Button Link', 'exam1' ),
	'section'  => 'counter_section',
	'default'  => 'https://www.facebook.com/nazmul.hossen.77128/',
	'priority' => 10,
] );


//START pricing Section
Kirki::add_section( 'pricing_section', array(
    'title'          => esc_html__( 'Pricing Section', 'exam1' ),
    'description'    => esc_html__( 'Pricing section description.', 'exam1' ),
    'panel'          => 'home_page',
    'priority'       => 160,
) );


Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'pricing_title',
	'label'    => esc_html__( 'Title', 'exam1' ),
	'section'  => 'pricing_section',
	'default'  => esc_html__( "Choose a plan that's right for you", 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	'type'     => 'textarea',
	'settings' => 'pricing_description',
	'label'    => esc_html__( 'Description', 'exam1' ),
	'section'  => 'pricing_section',
	'default'  => esc_html__( "30 - day money back guarantee", 'exam1' ),
	'priority' => 10,
] );

     //pricing plan 1
Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'pricing_plan_title_1',
	'label'    => esc_html__( 'Pricing Plan Title 1', 'exam1' ),
	'section'  => 'pricing_section',
	'default'  => esc_html__( "Standard", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'pricing_plan_price_1',
	'label'    => esc_html__( 'Pricing Plan Price Name 1', 'exam1' ),
	'section'  => 'pricing_section',
	'default'  => esc_html__( "$10", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'pricing_plan_month_1',
	'label'    => esc_html__( 'Pricing Plan Month Name 1', 'exam1' ),
	'section'  => 'pricing_section',
	'default'  => esc_html__( "/-Monthly", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	    'type'     => 'repeater',
		'settings' => 'pricing_plan_title_subtitle_1',
		'label'    => esc_html__( 'Pricing Plan Title & Sub Title Add', 'exam1' ),
		'section'  => 'pricing_section',
		'priority' => 10,
		'default'  => [
			[
				'pricing_plan_repeater_title_1'   => esc_html__( 'Email Accounts', 'exam1' ),
				'pricing_plan_repeater_sub_title_1'   => esc_html__( 'Daily 50 Mails', 'exam1' ),
			],
		],
		'fields'   => [
			'pricing_plan_repeater_title_1'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'exam1' ),
				'default'     => '',
			],
			'pricing_plan_repeater_sub_title_1'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Sub Title', 'exam1' ),
				'default'     => '',
			],
			
		],
	]
);

Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'pricing_plan_button_1',
	'label'    => esc_html__( 'Pricing Plan Button Text 1', 'exam1' ),
	'section'  => 'pricing_section',
	'default'  => esc_html__( "Choose Plan", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'link',
	'settings' => 'pricing_plan_button_link_1',
	'label'    => esc_html__( 'Pricing Plan Button Link 1', 'exam1' ),
	'section'  => 'pricing_section',
	'default'  => 'https://www.facebook.com/nazmul.hossen.77128/',
	'priority' => 10,
] );

     //pricing plan 2
Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'pricing_plan_title_2',
	'label'    => esc_html__( 'Pricing Plan Title 2', 'exam1' ),
	'section'  => 'pricing_section',
	'default'  => esc_html__( "Premium", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'pricing_plan_price_2',
	'label'    => esc_html__( 'Pricing Plan Price Name 2', 'exam1' ),
	'section'  => 'pricing_section',
	'default'  => esc_html__( "$30", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'pricing_plan_month_2',
	'label'    => esc_html__( 'Pricing Plan Month Name 2', 'exam1' ),
	'section'  => 'pricing_section',
	'default'  => esc_html__( "/-Monthly", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	    'type'     => 'repeater',
		'settings' => 'pricing_plan_title_subtitle_2',
		'label'    => esc_html__( 'Pricing Plan Title & Sub Title Add', 'exam1' ),
		'section'  => 'pricing_section',
		'priority' => 10,
		'default'  => [
			[
				'pricing_plan_repeater_title_2'   => esc_html__( 'Email Accounts', 'exam1' ),
				'pricing_plan_repeater_sub_title_2'   => esc_html__( 'Daily 100 Mails', 'exam1' ),
			],
		],
		'fields'   => [
			'pricing_plan_repeater_title_2'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'exam1' ),
				'default'     => '',
			],
			'pricing_plan_repeater_sub_title_2'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Sub Title', 'exam1' ),
				'default'     => '',
			],
			
		],
	]
);

Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'pricing_plan_button_2',
	'label'    => esc_html__( 'Pricing Plan Button Text 2', 'exam1' ),
	'section'  => 'pricing_section',
	'default'  => esc_html__( "Choose Plan", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'link',
	'settings' => 'pricing_plan_button_link_2',
	'label'    => esc_html__( 'Pricing Plan Button Link 2', 'exam1' ),
	'section'  => 'pricing_section',
	'default'  => 'https://www.facebook.com/nazmul.hossen.77128/',
	'priority' => 10,
] );

     //pricing plan 3
Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'pricing_plan_title_3',
	'label'    => esc_html__( 'Pricing Plan Title 3', 'exam1' ),
	'section'  => 'pricing_section',
	'default'  => esc_html__( "Enterprise", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'pricing_plan_price_3',
	'label'    => esc_html__( 'Pricing Plan Price Name 3', 'exam1' ),
	'section'  => 'pricing_section',
	'default'  => esc_html__( "$39", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'pricing_plan_month_3',
	'label'    => esc_html__( 'Pricing Plan Month Name 3', 'exam1' ),
	'section'  => 'pricing_section',
	'default'  => esc_html__( "/-Monthly", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	    'type'     => 'repeater',
		'settings' => 'pricing_plan_title_subtitle_3',
		'label'    => esc_html__( 'Pricing Plan Title & Sub Title Add', 'exam1' ),
		'section'  => 'pricing_section',
		'priority' => 10,
		'default'  => [
			[
				'pricing_plan_repeater_title_3'   => esc_html__( 'Email Accounts', 'exam1' ),
				'pricing_plan_repeater_sub_title_3'   => esc_html__( 'Daily Unlimited Mails', 'exam1' ),
			],
		],
		'fields'   => [
			'pricing_plan_repeater_title_3'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'exam1' ),
				'default'     => '',
			],
			'pricing_plan_repeater_sub_title_3'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Sub Title', 'exam1' ),
				'default'     => '',
			],
			
		],
	]
);

Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'pricing_plan_button_3',
	'label'    => esc_html__( 'Pricing Plan Button Text 3', 'exam1' ),
	'section'  => 'pricing_section',
	'default'  => esc_html__( "Choose Plan", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'link',
	'settings' => 'pricing_plan_button_link_3',
	'label'    => esc_html__( 'Pricing Plan Button Link 3', 'exam1' ),
	'section'  => 'pricing_section',
	'default'  => 'https://www.facebook.com/nazmul.hossen.77128/',
	'priority' => 10,
] );


//Testimonial Section
Kirki::add_section( 'testimonial_section', array(
    'title'          => esc_html__( 'Testimonial Section', 'exam1' ),
    'description'    => esc_html__( 'Testimonial section description.', 'exam1' ),
    'panel'          => 'home_page',
    'priority'       => 160,
) );


Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'testimonial_title',
	'label'    => esc_html__( 'Title', 'exam1' ),
	'section'  => 'testimonial_section',
	'default'  => esc_html__( "Stories From Our Customers", 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	'type'     => 'textarea',
	'settings' => 'testimonial_description',
	'label'    => esc_html__( 'Description', 'exam1' ),
	'section'  => 'testimonial_section',
	'default'  => esc_html__( "Though lorem ipsum is sometimes referred to as greek copy or greeking, lorem ipsum text is a garbled form of Latin text.", 'exam1' ),
	'priority' => 10,
] );


Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'testimonial_title_2',
	'label'    => esc_html__( 'Title 2', 'exam1' ),
	'section'  => 'testimonial_section',
	'default'  => esc_html__( "Let's Hear What They Say", 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	'type'     => 'textarea',
	'settings' => 'testimonial_description_2',
	'label'    => esc_html__( 'Description 2', 'exam1' ),
	'section'  => 'testimonial_section',
	'default'  => esc_html__( "Don't take our word for it - hear what our lovely users are saying.", 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	    'type'     => 'repeater',
		'settings' => 'testimonial_section_setting',
		'label'    => esc_html__( 'Choices Image', 'exam1' ),
		'section'  => 'testimonial_section',
		'priority' => 10,
		'default'  => [
			[
				'testimonial_checkbox'    => true,
				'testimonial_image_icon' => get_template_directory_uri().'/images/quote.png',
				'testimonial_image_section' => get_template_directory_uri().'/images/user/user1.png',
				'testimonial_title'   => esc_html__( 'Email Accounts', 'exam1' ),
				'testimonial_sub_title'   => esc_html__( 'Email Accounts', 'exam1' ),
				'testimonial_description'   => esc_html__( 'Loremipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.', 'exam1' ),
			],
		],
		'fields'   => [
			'testimonial_checkbox'    => [
				'type'    => 'checkbox',
				'label'   => esc_html__( 'Active Testimonial', 'exam1' ),
				'default' => false,
			],
			'testimonial_image_icon'   => [
				'type'        => 'image',
				'label'       => esc_html__( 'Icon', 'exam1' ),
				'default'     => '',
			],
			'testimonial_image_section'   => [
				'type'        => 'image',
				'label'       => esc_html__( 'Image', 'exam1' ),
				'default'     => '',
			],
			'testimonial_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'exam1' ),
				'default'     => '',
			],
			'testimonial_sub_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Sub Title', 'exam1' ),
				'default'     => '',
			],
			'testimonial_description'   => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Description', 'exam1' ),
				'default'     => '',
			],
			
			
		],
	]
);


//contact Section
Kirki::add_section( 'contact_section', array(
    'title'          => esc_html__( 'contact Section', 'exam1' ),
    'description'    => esc_html__( 'contact section description.', 'exam1' ),
    'panel'          => 'home_page',
    'priority'       => 160,
) );


Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'contact_title',
	'label'    => esc_html__( 'Title', 'exam1' ),
	'section'  => 'contact_section',
	'default'  => esc_html__( "Contact Us", 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	'type'     => 'textarea',
	'settings' => 'contact_description',
	'label'    => esc_html__( 'Description', 'exam1' ),
	'section'  => 'contact_section',
	'default'  => esc_html__( "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'contact_form_name_section',
	'label'    => esc_html__( 'My Editor Control', 'exam1' ),
	'section'  => 'contact_section',
	'default'  => esc_html__( " ", 'exam1' ),
	'priority' => 10,
] );


Kirki::add_field( 'exam1', [
	    'type'     => 'repeater',
		'settings' => 'contact_address_section_setting',
		'label'    => esc_html__( 'Contact Address Section Add', 'exam1' ),
		'section'  => 'contact_section',
		'priority' => 10,
		'default'  => [
			[
				'icon_contact_section' => 'mdi mdi-email-outline align-middle text-muted fs-20 me-2',
				'contact_info_section'   => esc_html__( 'support@website.com', 'exam1' ),
			],
		],
		'fields'   => [
			'icon_contact_section' => [
				'type'        => 'select',
				'label'       => esc_html__( 'Link Target', 'exam1' ),
				'description' => esc_html__( 'Description', 'exam1' ),
				'default'     => '_self',
				'choices'     => [
					'mdi mdi-email-outline align-middle text-muted fs-20 me-2' => esc_html__( 'Email Icon', 'exam1' ),
					'mdi mdi-web align-middle text-muted fs-20 me-2' => esc_html__( 'website Icon', 'exam1' ),
					'mdi mdi-phone align-middle text-muted fs-20 me-2' => esc_html__( 'Phone Icon', 'exam1' ),
					'mdi mdi-hospital-building text-muted fs-20 me-2' => esc_html__( 'Time Icon', 'exam1' ),
					'mdi mdi-map-marker-outline text-muted fs-20 me-2' => esc_html__( 'Address Icon', 'exam1' ),
				],
			],
			'contact_info_section'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Info Add', 'exam1' ),
				'default'     => '',
			],
			
		],
	]
);




//Footer Section


         //Footer Colum 1 
Kirki::add_section( 'footer_colam_1_section', array(
    'title'          => esc_html__( 'Footer Colum 1', 'exam1' ),
    'description'    => esc_html__( 'Add Content Footer Colum 1', 'exam1' ),
    'panel'          => 'home_page',
    'priority'       => 160,
) );


Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'footer_1_title',
	'label'    => esc_html__( 'Title', 'exam1' ),
	'section'  => 'footer_colam_1_section',
	'default'  => esc_html__( "About", 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	    'type'     => 'repeater',
		'settings' => 'contact_footer_1_section_setting',
		'label'    => esc_html__( 'Footer 1 Section Add', 'exam1' ),
		'section'  => 'footer_colam_1_section',
		'priority' => 10,
		'default'  => [
			[
				'footer_1_info_title_section'   => esc_html__( 'About', 'exam1' ),
				'footer_1_link_info_section' => 'https://www.facebook.com/nazmul.hossen.77128/',
			],
		],
		'fields'   => [
			'footer_1_info_title_section'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Add Title', 'exam1' ),
				'default'     => '',
			],
			'footer_1_link_info_section'   => [
				'type'        => 'link',
				'label'       => esc_html__( 'Add Link', 'exam1' ),
				'default'     => '',
			],
			
		],
	]
);



         //Footer Colum 2
Kirki::add_section( 'footer_colam_2_section', array(
    'title'          => esc_html__( 'Footer Colum 2', 'exam1' ),
    'description'    => esc_html__( 'Add Content Footer Colum 2', 'exam1' ),
    'panel'          => 'home_page',
    'priority'       => 160,
) );


Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'footer_2_title',
	'label'    => esc_html__( 'Title', 'exam1' ),
	'section'  => 'footer_colam_2_section',
	'default'  => esc_html__( "GATTING STARTED", 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	    'type'     => 'repeater',
		'settings' => 'contact_footer_2_section_setting',
		'label'    => esc_html__( 'Footer 2 Section Add', 'exam1' ),
		'section'  => 'footer_colam_2_section',
		'priority' => 10,
		'default'  => [
			[
				'footer_2_info_title_section'   => esc_html__( 'introduction', 'exam1' ),
				'footer_2_link_info_section' => 'https://www.facebook.com/nazmul.hossen.77128/',
			],
		],
		'fields'   => [
			'footer_2_info_title_section'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Add Title', 'exam1' ),
				'default'     => '',
			],
			'footer_2_link_info_section'   => [
				'type'        => 'link',
				'label'       => esc_html__( 'Add Link', 'exam1' ),
				'default'     => '',
			],
			
		],
	]
);


         //Footer Colum 3
Kirki::add_section( 'footer_colam_3_section', array(
    'title'          => esc_html__( 'Footer Colum 3', 'exam1' ),
    'description'    => esc_html__( 'Add Content Footer Colum 3', 'exam1' ),
    'panel'          => 'home_page',
    'priority'       => 160,
) );


Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'footer_3_title',
	'label'    => esc_html__( 'Title', 'exam1' ),
	'section'  => 'footer_colam_3_section',
	'default'  => esc_html__( "Resources", 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	    'type'     => 'repeater',
		'settings' => 'contact_footer_3_section_setting',
		'label'    => esc_html__( 'Footer 3 Section Add', 'exam1' ),
		'section'  => 'footer_colam_3_section',
		'priority' => 10,
		'default'  => [
			[
				'footer_3_info_title_section'   => esc_html__( 'Monitoring Grader', 'exam1' ),
				'footer_3_link_info_section' => 'https://www.facebook.com/nazmul.hossen.77128/',
			],
		],
		'fields'   => [
			'footer_3_info_title_section'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Add Title', 'exam1' ),
				'default'     => '',
			],
			'footer_3_link_info_section'   => [
				'type'        => 'link',
				'label'       => esc_html__( 'Add Link', 'exam1' ),
				'default'     => '',
			],
			
		],
	]
);


         //Footer Colum 4
Kirki::add_section( 'footer_colam_4_section', array(
    'title'          => esc_html__( 'Footer Colum 4', 'exam1' ),
    'description'    => esc_html__( 'Add Content Footer Colum 4', 'exam1' ),
    'panel'          => 'home_page',
    'priority'       => 160,
) );


Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'footer_4_title_1',
	'label'    => esc_html__( 'Title 1', 'exam1' ),
	'section'  => 'footer_colam_4_section',
	'default'  => esc_html__( "Social medial", 'exam1' ),
	'priority' => 10,
] );
Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'footer_4_title_2',
	'label'    => esc_html__( 'Title 2', 'exam1' ),
	'section'  => 'footer_colam_4_section',
	'default'  => esc_html__( "Kasy", 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	'type'     => 'text',
	'settings' => 'footer_4_shodcode',
	'label'    => esc_html__( 'Shodcode', 'exam1' ),
	'section'  => 'footer_colam_4_section',
	'default'  => esc_html__( "shodcode name", 'exam1' ),
	'priority' => 10,
] );

Kirki::add_field( 'exam1', [
	    'type'     => 'repeater',
		'settings' => 'footer_colam_4_sosial_link',
		'label'    => esc_html__( 'Features Section Add', 'exam1' ),
		'section'  => 'footer_colam_4_section',
		'priority' => 10,
		'default'  => [
			[
				'icon_footer_4_sosial_section' => 'mdi mdi-facebook text-dark',
				'feature_4_sosial_link_section'   => 'https://www.facebook.com/nazmul.hossen.77128/',
			],
		],
		'fields'   => [
			'icon_footer_4_sosial_section' => [
				'type'        => 'select',
				'label'       => esc_html__( 'Sosial Icon', 'exam1' ),
				'description' => esc_html__( 'Select Icon', 'exam1' ),
				'default'     => 'mdi mdi-facebook text-dark',
				'choices'     => [
					'mdi mdi-facebook text-dark' => esc_html__( 'Facebook', 'exam1' ),
					'mdi mdi-linkedin text-dark' => esc_html__( 'Lindin', 'exam1' ),
					'mdi mdi-pinterest text-dark' => esc_html__( 'Pintarest', 'exam1' ),
					'mdi mdi-twitter text-dark' => esc_html__( 'Twitter', 'exam1' ),
				],
			],
			'feature_4_sosial_link_section'   => [
				'type'        => 'link',
				'label'       => esc_html__( 'Link', 'exam1' ),
				'default'     => '',
			],
			
		],
	]
);


//Copy Right Footer
Kirki::add_section( 'copy_right_footer_section', array(
    'title'          => esc_html__( 'Copy Right Footer', 'exam1' ),
    'description'    => esc_html__( 'Copy Right Footer Section', 'exam1' ),
    'panel'          => 'home_page',
    'priority'       => 160,
) );


Kirki::add_field( 'exam1', [
	'type'     => 'textarea',
	'settings' => 'copy_right_footer_title',
	'label'    => esc_html__( 'Copy Right Title', 'exam1' ),
	'section'  => 'copy_right_footer_section',
	'default'  => esc_html__( "Kasy. Design by Themesdesign", 'exam1' ),
	'priority' => 10,
] );






// Kirki::add_field( 'exam1', [
// 	'type'     => 'image',
// 	'settings' => 'banner_image_home',
// 	'label'    => esc_html__( 'Sub Title', 'exam1' ),
// 	'section'  => 'home_banner_section',
// 	'default'  => get_template_directory_uri().'/images/home.png',
// 	'priority' => 10,
// ] );

