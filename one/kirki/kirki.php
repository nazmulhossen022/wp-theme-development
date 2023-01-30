<?php

Kirki::add_panel( 'home', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Home page', 'kirki' ),
    'description' => esc_html__( 'home page edit content', 'kirki' ),
) );

//banner home
Kirki::add_section( 'banner_section', array(
    'title'          => esc_html__( 'Banner Section', 'kirki' ),
    'description'    => esc_html__( 'Banner section description.', 'kirki' ),
    'panel'          => 'home',
    'priority'       => 160,
) );

Kirki::add_field( 'one', [
	'type'     => 'text',
	'settings' => 'banner_title_1',
	'label'    => esc_html__( 'Title 1', 'kirki' ),
	'section'  => 'banner_section',
	'default'  => esc_html__( 'We Discover, Design & Build Digital', 'kirki' ),
	'priority' => 10,
] );
Kirki::add_field( 'one', [
	'type'     => 'text',
	'settings' => 'banner_title_2',
	'label'    => esc_html__( 'Title 2', 'kirki' ),
	'section'  => 'banner_section',
	'default'  => esc_html__( 'Presence of Businesses', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'one', [
	'type'     => 'text',
	'settings' => 'banner_button_text',
	'label'    => esc_html__( 'Button Text', 'kirki' ),
	'section'  => 'banner_section',
	'default'  => esc_html__( 'Explore', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'one', [
	'type'     => 'link',
	'settings' => 'banner_button_link',
	'label'    => __( 'Button Link', 'kirki' ),
	'section'  => 'banner_section',
	'default'  => 'https://mapsteps.com/',
	'priority' => 10,
] );

Kirki::add_field( 'one', [
	'type'     => 'image',
	'settings' => 'banner_image',
	'label'    => __( 'image', 'kirki' ),
	'section'  => 'banner_section',
	'default'  => '../assets/img/hero-1.png',
	'priority' => 10,
] );


//About
Kirki::add_section( 'about_section', array(
    'title'          => esc_html__( 'About Section', 'kirki' ),
    'description'    => esc_html__( 'About section description.', 'kirki' ),
    'panel'          => 'home',
    'priority'       => 160,
) );
   //about title description
Kirki::add_field( 'one', [
	'type'     => 'textarea',
	'settings' => 'about_title_section',
	'label'    => esc_html__( 'Title', 'kirki' ),
	'section'  => 'about_section',
	'default'  => esc_html__( 'We are helping to grow your business.', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'one', [
	'type'     => 'textarea',
	'settings' => 'about_description_section',
	'label'    => esc_html__( 'Description Text', 'kirki' ),
	'section'  => 'about_section',
	'default'  => esc_html__( 'A digital studio specialising in User Experience & eCommerce, we combine innovation with digital craftsmanship to help brands fulfill their potential.', 'kirki' ),
	'priority' => 10,
] );
Kirki::add_field( 'one', [
	'type'     => 'text',
	'settings' => 'about_button_title',
	'label'    => esc_html__( 'Button Text', 'kirki' ),
	'section'  => 'about_section',
	'default'  => esc_html__( 'Explore', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'one', [
	'type'     => 'link',
	'settings' => 'about_button_link',
	'label'    => __( 'Button Link', 'kirki' ),
	'section'  => 'about_section',
	'default'  => 'https://mapsteps.com/',
	'priority' => 10,
] );


Kirki::add_field( 'one', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'About Future Section', 'kirki' ),
	'section'     => 'about_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Your Custom Value', 'kirki' ),
		'field' => 'title',
	],
	'button_label' => esc_html__('"Add new"', 'kirki' ),
	'settings'     => 'about_repeater_setting',
	'default'      => [
		[
			'icon' => esc_html__( 'lni-microphone', 'kirki' ),
			'title' => esc_html__( 'WHAT WE DO', 'kirki' ),
			'description' => esc_html__( 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores', 'kirki' ),
		],
		[
			'icon' => esc_html__( 'lni-users', 'kirki' ),
			'title' => esc_html__( 'Meet our team', 'kirki' ),
			'description' => esc_html__( 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores', 'kirki' ),
		],
		[
			'icon' => esc_html__( 'lni-medall-alt', 'kirki' ),
			'title' => esc_html__( 'Our Creation', 'kirki' ),
			'description' => esc_html__( 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores', 'kirki' ),
		],
	],
	'fields' => [
		'icon' => [
			'type'        => 'text',
			'label'       => esc_html__( 'icon', 'kirki' ),
			'description' => esc_html__( 'Choise icon', 'kirki' ),
			'default'     => '',
		],
		'title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'title', 'kirki' ),
			'description' => esc_html__( 'your title', 'kirki' ),
			'default'     => '',
		],
		'description' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Description', 'kirki' ),
			'description' => esc_html__( 'your description', 'kirki' ),
			'default'     => '',
		],
	]
] );


//OUR SERVICES
Kirki::add_section( 'our_service_section', array(
    'title'          => esc_html__( 'Our Service Section', 'kirki' ),
    'description'    => esc_html__( 'Our Service section description.', 'kirki' ),
    'panel'          => 'home',
    'priority'       => 160,
) );
   //about title description
Kirki::add_field( 'one', [
	'type'     => 'textarea',
	'settings' => 'our_service_title_section',
	'label'    => esc_html__( 'Title', 'kirki' ),
	'section'  => 'our_service_section',
	'default'  => esc_html__( 'Our Services', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'one', [
	'type'     => 'textarea',
	'settings' => 'our_service_description_section',
	'label'    => esc_html__( 'Description Text', 'kirki' ),
	'section'  => 'our_service_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2020.', 'kirki' ),
	'priority' => 10,
] );


Kirki::add_field( 'one', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Our Service Future Section', 'kirki' ),
	'section'     => 'our_service_section',
	'priority'    => 11,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Your Custom Value', 'kirki' ),
		'field' => 'title',
	],
	'button_label' => esc_html__('"Add new"', 'kirki' ),
	'settings'     => 'service_repeater_setting',
	'default'      => [
		[
			'icon' => esc_html__( 'lni-pencil', 'kirki' ),
			'title' => esc_html__( 'CONTENT WRITING', 'kirki' ),
			'title_link'  => 'https://www.facebook.com/nazmul.hossen.77128/',
			'description' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', 'kirki' ),
		],
		[
			'icon' => esc_html__( 'lni-briefcase', 'kirki' ),
			'title' => esc_html__( 'DIGITAL MARKETING', 'kirki' ),
			'title_link'  => 'https://www.facebook.com/nazmul.hossen.77128/',
			'description' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', 'kirki' ),
		],
		[
			'icon' => esc_html__( 'lni-cog', 'kirki' ),
			'title' => esc_html__( 'WEB DEVELOPMENT', 'kirki' ),
			'title_link'  => 'https://www.facebook.com/nazmul.hossen.77128/',
			'description' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', 'kirki' ),
		],
		[
			'icon' => esc_html__( 'lni-mobile', 'kirki' ),
			'title' => esc_html__( 'IOS & ANDROID', 'kirki' ),
			'title_link'  => 'https://www.facebook.com/nazmul.hossen.77128/',
			'description' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', 'kirki' ),
		],
		[
			'icon' => esc_html__( 'lni-layers', 'kirki' ),
			'title' => esc_html__( 'UI/UX DESIGN', 'kirki' ),
			'title_link'  => 'https://www.facebook.com/nazmul.hossen.77128/',
			'description' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', 'kirki' ),
		],
		[
			'icon' => esc_html__( 'lni-rocket', 'kirki' ),
			'title' => esc_html__( 'BRANDING & IDENTITY', 'kirki' ),
			'title_link'  => 'https://www.facebook.com/nazmul.hossen.77128/',
			'description' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', 'kirki' ),
		],
	],
	'fields' => [
		'icon' => [
			'type'        => 'text',
			'label'       => esc_html__( 'icon', 'kirki' ),
			'description' => esc_html__( 'Choise icon', 'kirki' ),
			'default'     => '',
		],
		'title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'title', 'kirki' ),
			'description' => esc_html__( 'your title', 'kirki' ),
			'default'     => '',
		],
		'title_link' => [
			'type'        => 'link',
			'label'       => esc_html__( 'Link', 'kirki' ),
			'description' => esc_html__( 'Link title', 'kirki' ),
			'default'     => '',
		],
		'description' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Description', 'kirki' ),
			'description' => esc_html__( 'your description', 'kirki' ),
			'default'     => '',
		],
	]
] );


//Video promo Section

Kirki::add_section( 'video_promo_section', array(
    'title'          => esc_html__( 'Video promo Section', 'kirki' ),
    'description'    => esc_html__( 'Video promo Section description.', 'kirki' ),
    'panel'          => 'home',
    'priority'       => 160,
) );
Kirki::add_field( 'one', [
	'type'        => 'image',
	'settings'    => 'video_img_url',
	'label'       => esc_html__( 'Backgroubd image', 'kirki' ),
	'description' => esc_html__( 'Choise Background image.', 'kirki' ),
	'section'     => 'video_promo_section',
	'default'     => '',
] );
Kirki::add_field( 'one', [
	'type'     => 'text',
	'settings' => 'video_promo_icon',
	'label'    => esc_html__( 'Video Icon', 'kirki' ),
	'section'  => 'video_promo_section',
	'default'  => esc_html__( 'lni-film-play', 'kirki' ),
	'priority' => 10,
] );
Kirki::add_field( 'one', [
	'type'     => 'link',
	'settings' => 'video_link_setting',
	'label'    => __( 'Video Link', 'kirki' ),
	'section'  => 'video_promo_section',
	'default'  => 'https://www.youtube.com/watch?v=yP6kdOZHids',
	'priority' => 10,
] );
   //video title description
Kirki::add_field( 'one', [
	'type'     => 'textarea',
	'settings' => 'video_promo_title',
	'label'    => esc_html__( 'Title', 'kirki' ),
	'section'  => 'video_promo_section',
	'default'  => esc_html__( 'WATCH VIDEO', 'kirki' ),
	'priority' => 10,
] );



//Team Section
Kirki::add_section( 'team_section', array(
    'title'          => esc_html__( 'Team Section Section', 'kirki' ),
    'description'    => esc_html__( 'Team Section description.', 'kirki' ),
    'panel'          => 'home',
    'priority'       => 160,
) );
   //about title description
Kirki::add_field( 'one', [
	'type'     => 'textarea',
	'settings' => 'team_title_section',
	'label'    => esc_html__( 'Title', 'kirki' ),
	'section'  => 'team_section',
	'default'  => esc_html__( 'MEET OUR TEAM', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'one', [
	'type'     => 'textarea',
	'settings' => 'oteam_description_section',
	'label'    => esc_html__( 'Description Text', 'kirki' ),
	'section'  => 'team_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2020.', 'kirki' ),
	'priority' => 10,
] );


Kirki::add_field( 'one', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Our Service Future Section', 'kirki' ),
	'section'     => 'team_section',
	'priority'    => 11,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Your Custom Value', 'kirki' ),
		'field' => 'title',
	],
	'button_label' => esc_html__('"Add new"', 'kirki' ),
	'settings'     => 'team_repeater_setting',
	'default'      => [
		[
			'image' => get_template_directory_uri().'/assets/img/team/team-01.png',
			'title' => esc_html__( 'DAVID SMITH', 'kirki' ),
			'sub_title' => esc_html__( 'Chief Operating Officer', 'kirki' ),
			'facrbook_link'  => 'https://www.facebook.com/nazmul.hossen.77128/',
			'twitter_link'  => '#',
			'instagram_link'  => '#',
		],
		[
			'image' => get_template_directory_uri().'/assets/img/team/team-02.png',
			'title' => esc_html__( 'ERIC PETERSON', 'kirki' ),
			'sub_title' => esc_html__( 'Product Designer', 'kirki' ),
			'facrbook_link'  => 'https://www.facebook.com/nazmul.hossen.77128/',
			'twitter_link'  => '#',
			'instagram_link'  => '#',
		],
		[
			'image' => get_template_directory_uri().'/assets/img/team/team-03.png',
			'title' => esc_html__( 'DURWIN BABB', 'kirki' ),
			'sub_title' => esc_html__( 'Lead Designer', 'kirki' ),
			'facrbook_link'  => 'https://www.facebook.com/nazmul.hossen.77128/',
			'twitter_link'  => '#',
			'instagram_link'  => '#',
		],
		[
			'image' => get_template_directory_uri().'/assets/img/team/team-01.png',
			'title' => esc_html__( 'MARIJN OTTE', 'kirki' ),
			'sub_title' => esc_html__( 'Front-end Developer', 'kirki' ),
			'facrbook_link'  => 'https://www.facebook.com/nazmul.hossen.77128/',
			'twitter_link'  => '#',
			'instagram_link'  => '#',
		],
	],

	'fields' => [
		'image' => [
			'type'        => 'image',
			'label'       => esc_html__( 'icon', 'kirki' ),
			'description' => esc_html__( 'Choise Image', 'kirki' ),
			'default'     => '',
		],
		'title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Name', 'kirki' ),
			'description' => esc_html__( 'Name', 'kirki' ),
			'default'     => '',
		],
		'sub_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Sub Title', 'kirki' ),
			'description' => esc_html__( 'Sub Title', 'kirki' ),
			'default'     => '',
		],
		'facrbook_link' => [
			'type'        => 'link',
			'label'       => esc_html__( 'Facrbook Link', 'kirki' ),
			'description' => esc_html__( 'Facrbook Link', 'kirki' ),
			'default'     => '',
		],
		'twitter_link' => [
			'type'        => 'link',
			'label'       => esc_html__( 'Twitter Link', 'kirki' ),
			'description' => esc_html__( 'Twitter Link', 'kirki' ),
			'default'     => '',
		],
		'instagram_link' => [
			'type'        => 'link',
			'label'       => esc_html__( 'Instagram Link', 'kirki' ),
			'description' => esc_html__( 'Instagram Link', 'kirki' ),
			'default'     => '',
		],
	]
] );


//Counter Section Start

Kirki::add_section( 'counter_section', array(
    'title'          => esc_html__( 'Counter Section', 'kirki' ),
    'description'    => esc_html__( 'Counter section description.', 'kirki' ),
    'panel'          => 'home',
    'priority'       => 160,
) );

Kirki::add_field( 'one', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Counter Section', 'kirki' ),
	'section'     => 'counter_section',
	'priority'    => 11,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Your Custom Value', 'kirki' ),
		'field' => 'title',
	],
	'button_label' => esc_html__('"Add new"', 'kirki' ),
	'settings'     => 'counter_repeater_setting',
	'default'      => [
		[
			'count_icon' => esc_html__( 'lni-users', 'kirki' ),
			'count_number' => esc_html__( '23576', 'kirki' ),
			'count_title' => esc_html__( 'Users', 'kirki' ),
		],
		[
			'count_icon' => esc_html__( 'lni-emoji-smile', 'kirki' ),
			'count_number' => esc_html__( '2124', 'kirki' ),
			'count_title' => esc_html__( 'Positive Reviews', 'kirki' ),
		],
		[
			'count_icon' => esc_html__( 'lni-download', 'kirki' ),
			'count_number' => esc_html__( '54598', 'kirki' ),
			'count_title' => esc_html__( 'Downloads', 'kirki' ),
		],
		[
			'count_icon' => esc_html__( 'lni-thumbs-up', 'kirki' ),
			'count_number' => esc_html__( '3212', 'kirki' ),
			'count_title' => esc_html__( 'Followers', 'kirki' ),
		],
	],
	'fields' => [
		'count_icon' => [
			'type'        => 'text',
			'label'       => esc_html__( 'icon', 'kirki' ),
			'description' => esc_html__( 'Count icon', 'kirki' ),
			'default'     => '',
		],
		'count_number' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Count Number', 'kirki' ),
			'description' => esc_html__( 'Count Number', 'kirki' ),
			'default'     => '',
		],
		'count_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Count title', 'kirki' ),
			'description' => esc_html__( 'Count title', 'kirki' ),
			'default'     => '',
		],
	]
] );

//Pricing section Start

Kirki::add_section( 'pricing_section', array(
    'title'          => esc_html__( 'Pricing Section', 'kirki' ),
    'description'    => esc_html__( 'Pricing section description.', 'kirki' ),
    'panel'          => 'home',
    'priority'       => 160,
) );
   //about title description
Kirki::add_field( 'one', [
	'type'     => 'textarea',
	'settings' => 'pricing_title_section',
	'label'    => esc_html__( 'Title', 'kirki' ),
	'section'  => 'pricing_section',
	'default'  => esc_html__( 'Best Pricing', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'one', [
	'type'     => 'textarea',
	'settings' => 'pricing_description_section',
	'label'    => esc_html__( 'Description Text', 'kirki' ),
	'section'  => 'pricing_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2020.', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'one', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Repeater Control', 'kirki' ),
	'section'     => 'pricing_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'text',
		'value' => esc_html__( 'Your Custom Value', 'kirki' ),
	],
	'button_label' => esc_html__('"Add new" button label (optional) ', 'kirki' ),
	'settings'     => 'pricing_repeater_setting',
	'default'      => [
		[
			'title_text' => esc_html__( 'Basic', 'kirki' ),
			'title_background' => esc_html__( '#000000', 'kirki' ),
			'price_title' => esc_html__( '$12.99', 'kirki' ),
			'price_month' => esc_html__( 'Month', 'kirki' ),
			'sub_title' => esc_html__( 'Operational Excellence', 'kirki' ),
			'button_title' => esc_html__( 'Get More', 'kirki' ),
			'button_url'  => 'https://kirki.org/',
		],
	],
	'fields' => [
		'title_text' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Title Text', 'kirki' ),
			'description' => esc_html__( 'Title Text', 'kirki' ),
			'default'     => '',
		],
		'title_background' => [
			'type'        => 'color',
			'label'       => esc_html__( 'Title Color', 'kirki' ),
			'description' => esc_html__( 'Title Color', 'kirki' ),
			'default'     => '',
		],
		'price_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Price Title', 'kirki' ),
			'description' => esc_html__( 'Price Title', 'kirki' ),
			'default'     => '',
		],
		'price_month' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Price Month', 'kirki' ),
			'description' => esc_html__( 'Price Month', 'kirki' ),
			'default'     => '',
		],
		'sub_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Sub Title', 'kirki' ),
			'description' => esc_html__( 'Sub Title', 'kirki' ),
			'default'     => '',
		],
		'button_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Button Text', 'kirki' ),
			'description' => esc_html__( 'Button Text', 'kirki' ),
			'default'     => '',
		],
		'button_url'  => [
			'type'        => 'text',
			'label'       => esc_html__( 'Button URL', 'kirki' ),
			'description' => esc_html__( 'Button URL', 'kirki' ),
			'default'     => '',
		],
	]
] );


//OUR SKILL section Start

Kirki::add_section( 'our_skill_section', array(
    'title'          => esc_html__( 'Our Skill Section', 'kirki' ),
    'description'    => esc_html__( 'Our Skill section description.', 'kirki' ),
    'panel'          => 'home',
    'priority'       => 160,
) );
   //about title description
Kirki::add_field( 'one', [
	'type'     => 'image',
	'settings' => 'pricing_image_section',
	'label'    => esc_html__( 'image', 'kirki' ),
	'section'  => 'our_skill_section',
	'default'  => get_template_directory_uri().'/assets/img/about/img-1.jpg',
	'priority' => 10,
] );

Kirki::add_field( 'one', [
	'type'     => 'textarea',
	'settings' => 'pricing_title_section',
	'label'    => esc_html__( 'Title', 'kirki' ),
	'section'  => 'our_skill_section',
	'default'  => esc_html__( 'Best Pricing', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'one', [
	'type'     => 'textarea',
	'settings' => 'pricing_description_section',
	'label'    => esc_html__( 'Description Text', 'kirki' ),
	'section'  => 'our_skill_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2020.', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'one', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Repeater Control', 'kirki' ),
	'section'     => 'our_skill_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'text',
		'value' => esc_html__( 'Your Custom Value', 'kirki' ),
	],
	'button_label' => esc_html__('"Add new" button label (optional) ', 'kirki' ),
	'settings'     => 'skill_repeater_setting',
	'default'      => [
		[
			'title_text' => esc_html__( 'STRATEGY & ANALYSIS 88%', 'kirki' ),
			'title_color' => esc_html__( '#000000', 'kirki' ),
			'skill_persent' => esc_html__( '88', 'kirki' ),
			'skill_color' => esc_html__( '#000000', 'kirki' ),

		],
	],
	'fields' => [
		'title_text' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Title Text', 'kirki' ),
			'description' => esc_html__( 'Title Text', 'kirki' ),
			'default'     => '',
		],
		'title_color' => [
			'type'        => 'color',
			'label'       => esc_html__( 'Title Color', 'kirki' ),
			'description' => esc_html__( 'Title Color', 'kirki' ),
			'default'     => '',
		],
		'skill_persent' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Skill Title', 'kirki' ),
			'description' => esc_html__( 'Skill Title', 'kirki' ),
			'default'     => '',
		],
		'skill_color' => [
			'type'        => 'color',
			'label'       => esc_html__( 'Percentage Color', 'kirki' ),
			'description' => esc_html__( 'Percentage Color', 'kirki' ),
			'default'     => '',
		],
	]
] );



//OUR WORKS section Start

Kirki::add_section( 'our_work_section', array(
    'title'          => esc_html__( 'OUR WORKS Section', 'kirki' ),
    'description'    => esc_html__( 'OUR WORKS section description.', 'kirki' ),
    'panel'          => 'home',
    'priority'       => 160,
) );
   //about title description

Kirki::add_field( 'one', [
	'type'     => 'textarea',
	'settings' => 'our_work_title_section',
	'label'    => esc_html__( 'Title', 'kirki' ),
	'section'  => 'our_work_section',
	'default'  => esc_html__( 'OUR WORKS', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'one', [
	'type'     => 'textarea',
	'settings' => 'our_work_description_section',
	'label'    => esc_html__( 'Description Text', 'kirki' ),
	'section'  => 'our_work_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2020.', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'one', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Repeater Control', 'kirki' ),
	'section'     => 'our_work_section',
	'priority'    => 10,

	'row_label' => [
		'type'  => 'text',
		'value' => esc_html__( 'Your Custom Value', 'kirki' ),
	],
	'button_label' => esc_html__('"Add new" button label (optional) ', 'kirki' ),
	'settings'     => 'our_works_repeater_setting',
	'default'      => [
		[
			'port_image' => get_template_directory_uri().'/assets/img/about/img-1.jpg',
			'title' => esc_html__( 'Title Name', 'kirki' ),
     		'image_link' => '#',
		],
	],
	'fields' => [
		'port_image' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Image ', 'kirki' ),
			'description' => esc_html__( 'Select Image', 'kirki' ),
			'default'     => '',
		],
		'title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Title', 'kirki' ),
			'description' => esc_html__( 'Image Title', 'kirki' ),
			'default'     => '',
		],
		'image_link' => [
			'type'        => 'link',
			'label'       => esc_html__( 'Image Link', 'kirki' ),
			'description' => esc_html__( 'Image Link', 'kirki' ),
			'default'     => '',
		],
	]
] );


