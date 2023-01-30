<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $aali_theme = 'aali_theme';

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'Theme Options', 'aali' ),
        'dev_mode'             => false,
        'customizer'           => true,
    );

    Redux::setArgs( $aali_theme, $args );


//General Setting
    Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'General', 'aali' ),
        'id'     => 'general_setting',
        'desc'   => esc_html__( 'General Theme Opthion', 'aali' ),
        'icon'   => 'el el-home',
        'fields' => array(
           array(
                'id'        => 'Theme_logo_image_opthion_header',
                'type'      => 'media',
                'title'     => __('Logo', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/logo/logo.png'
                ),
            ),
            array(
                'id'        => 'Theme_logo_image_opthion_header_sticky',
                'type'      => 'media',
                'title'     => __('Sticky Logo', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/logo/dark.png'
                ),
            ),
            array(
                'id'        => 'Theme_logo_image_opthion_header_mobile',
                'type'      => 'media',
                'title'     => __('Mobile Logo', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/logo/dark.png'
                ),
            ),
        )
    ) );

//Home page
    Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'Home Page', 'aali' ),
        'id'     => 'Home_page',
        'desc'   => esc_html__( 'Home Page Content Edit.', 'aali' ),
        'icon'   => 'el el-home',
    ) );

        Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'Banner Section', 'aali' ),
        'id'     => 'banner_home_page',
        'desc'   => esc_html__( 'banner home page', 'aali' ),
        'subsection' => true,
        'fields' => array(
            array(
                'id'       => 'banner_sub_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Banner Subtitle', 'aali' ),
                'default' => "Hello, I'm",
                'hint'     => array(
                    'content' => "Hello, I'm",
                )
            ),
            array(
                'id'       => 'banner_main_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Banner Title', 'aali' ),
                'default' => "Aali",
                'hint'     => array(
                    'content' => "Aali",
                )
            ),
            array(
                'id'       => 'banner_span_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Span Title', 'aali' ),
                'default' => "Creative",
                'hint'     => array(
                    'content' => "Creative",
                )
            ),
            array(
                'id'       => 'banner_span_repeater_title',
                'type'     => 'multi_text',
                'title'    => esc_html__( 'Add Skill Title', 'aali' ),
                'default' => "Freelancer",
            ),
            array(
                'id'       => 'banner_button_1_text',
                'type'     => 'text',
                'title'    => esc_html__( 'Button 1 Text', 'aali' ),
                'default' => "Say Hello",
            ),
            array(
                'id'        => 'banner_button_1_icon',
                'type'      => 'media',
                'title'     => __('Button 1 Icon', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/svg/message.svg'
                ),
            ),
            array(
                'id'       => 'banner_button_1_link',
                'type'     => 'text',
                'title'    => esc_html__( 'Button 1 Link', 'aali' ),
                'default' => "#contact",
            ),
            array(
                'id'       => 'banner_button_2_text',
                'type'     => 'text',
                'title'    => esc_html__( 'Button 2 Text', 'aali' ),
                'default' => "About Me",
            ),
            array(
                'id'       => 'banner_button_2_link',
                'type'     => 'text',
                'title'    => esc_html__( 'Button 2 Link', 'aali' ),
                'default' => "#about",
            ),
            array(
                'id'        => 'banner_hero_image',
                'type'      => 'media',
                'title'     => __('Banner Hero Image', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/hero/1.png'
                ),
            ),
            array(
                'id'       => 'banner_hero_sub_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Image Sub Title', 'aali' ),
                'default' => "Nazmul",
            ),
            array(
                'id'       => 'banner_hero_gmail',
                'type'     => 'text',
                'title'    => esc_html__( 'Gmail Name', 'aali' ),
                'default' => "nazmulhossen022@gmail.com",
            ),
            //Sosial Media
            array(
                   'id' => 'banner_sosal_section',
                   'type' => 'section',
                   'title' => esc_html__('Sosial Media Link', 'aali'),
                   'indent' => true,
                ),
            array(
                    'id'     => 'banner_sosal_divide',
                    'type'   => 'info',
                    'style' => 'success',
                    'title'  => esc_html__( 'Sosial Media Link', 'aali' ),
                ),
            array(
                    'id'     => 'banner_sosal_link_1',
                    'type'   => 'text',
                    'title'  => esc_html__( 'facebook Link', 'aali' ),
                    'default' => "https://www.facebook.com/",
                ),
            array(
                    'id'     => 'banner_sosal_link_2',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Twitter Link', 'aali' ),
                    'default' => "https://www.twitter.com/",
                ),
            array(
                    'id'     => 'banner_sosal_link_3',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Instagram Link', 'aali' ),
                    'default' => "https://www.instagram.com/",
                ),
            array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),


        )
    ) );


        Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'About Section', 'aali' ),
        'id'     => 'about_home_page',
        'desc'   => esc_html__( 'About home page', 'aali' ),
        'subsection' => true,
        'fields' => array(
            array(
                'id'        => 'about_home_image_1',
                'type'      => 'media',
                'title'     => __('Left Image', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/about/1.jpg'
                ),
            ),
            array(
                'id'       => 'about_home_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Title', 'aali' ),
                'default' => "About Me",
                'hint'     => array(
                    'content' => "About Me",
                )
            ),
            array(
                'id'       => 'about_home_title_1',
                'type'     => 'text',
                'title'    => esc_html__( 'Title 1', 'aali' ),
                'default' => "I'm",
                'hint'     => array(
                    'content' => "I'm",
                )
            ),
            array(
                'id'       => 'about_home_title_1_subtitle',
                'type'     => 'text',
                'title'    => esc_html__( 'Title 1 Subtitle', 'aali' ),
                'default' => "Nazmul",
                'hint'     => array(
                    'content' => "Name",
                )
            ),
            array(
                'id'       => 'about_home_title_2',
                'type'     => 'text',
                'title'    => esc_html__( 'Title 2', 'aali' ),
                'default' => "Web",
                'hint'     => array(
                    'content' => "Web",
                )
            ),
            array(
                'id'       => 'about_home_title_2_subtitle',
                'type'     => 'text',
                'title'    => esc_html__( 'Title 2 Subtitle', 'aali' ),
                'default' => "Designer",
                'hint'     => array(
                    'content' => "Designer",
                )
            ),
            array(
                'id'       => 'about_home_title_3',
                'type'     => 'text',
                'title'    => esc_html__( 'Title 3', 'aali' ),
                'default' => "Based in London,UK",
                'hint'     => array(
                    'content' => "Based in London,UK",
                )
            ),
            array(
                 'id'         => 'about_home_description_editor',
                 'type'       => 'editor',
                 'title'      => esc_html__('Description', 'aali'), 
                 'default'    => "Hi! My name is Aali Walker. I am UI/UX designer, and I'm very passionate and dedicated to my work.",
                 'args'   => array(
                        'teeny'            => true,
                        'textarea_rows'    => 10
                    )
            ),
            array(
                'id'       => 'about_home_button_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Button Text', 'aali' ),
                'default' => "Download CV",
                'hint'     => array(
                    'content' => "Download CV",
                )
            ),
            array(
                'id'        => 'about_home_button_icon',
                'type'      => 'media',
                'title'     => __('Button Icon', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/svg/download.svg'
                ),
            ),
            array(
                'id'        => 'about_home_download_cv_link',
                'type'      => 'media',
                'title'     => __('Cv Link', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/cv/1.jpg'
                ),
            ),
            array(
                'id'        => 'about_home_image_2',
                'type'      => 'media',
                'title'     => __('Right Image', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/about/2.jpg'
                ),
            )


        )
    ) );
  //skill section
Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'Skills Section', 'aali' ),
        'id'     => 'skills_home_page',
        'desc'   => esc_html__( 'Skills home page', 'aali' ),
        'subsection' => true,
        'fields' => array(
            array(
                'id'       => 'skill_home_sub_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Sub Title', 'aali' ),
                'default' => "My Skills",
            ),
            array(
                'id'       => 'skill_home_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Title', 'aali' ),
                'default' => "You Can Imagine<br /> I Can Do",
            ),
            array(
                 'id'         => 'skill_home_description_editor',
                 'type'       => 'editor',
                 'title'      => esc_html__('Description', 'aali'), 
                 'default'    => "I am working on a professional, visually sophisticated and technologically proficient, responsive and multi-functional creative personal resume portfolio template Nazmul",
            )


        )
    ) );

//portfolio Section

Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'Portfolio Section', 'aali' ),
        'id'     => 'portfolio_home_page',
        'desc'   => esc_html__( 'Portfolio home page', 'aali' ),
        'subsection' => true,
        'fields' => array(
            array(
                'id'       => 'portfolio_home_sub_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Sub Title', 'aali' ),
                'default' => "Selected works",
            ),
            array(
                'id'       => 'portfolio_home_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Title', 'aali' ),
                'default' => "Check my portfolio",
            ),
            // array(
            //      'id'         => 'portfolio_home_description_editor',
            //      'type'       => 'editor',
            //      'title'      => esc_html__('Description', 'aali'), 
            //      'default'    => "I am working on a professional, visually sophisticated and technologically proficient, responsive and multi-functional creative personal resume portfolio template Nazmul",
            // )


        )
    ) );


//Services Section

Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'Services Section', 'aali' ),
        'id'     => 'services_home_page',
        'desc'   => esc_html__( 'Services home page', 'aali' ),
        'subsection' => true,
        'fields' => array(
            array(
                'id'       => 'services_home_sub_title_1',
                'type'     => 'text',
                'title'    => esc_html__( 'Sub Title', 'aali' ),
                'default' => "What I Do",
            ),
            array(
                'id'       => 'services_home_title_1',
                'type'     => 'text',
                'title'    => esc_html__( 'Title', 'aali' ),
                'default' => "My Services",
            ),
            array(
                 'id'         => 'services_home_description_editor_1',
                 'type'       => 'editor',
                 'title'      => esc_html__('Description', 'aali'), 
                 'default'    => "We offer high quality products for competitive prices. Our main goal is customer satisfaction, which we obtain through market orientation of ongoing service and support.",
            ),
               //section 1
            array(
                   'id' => 'services_home_section_1',
                   'type' => 'section',
                   'title' => esc_html__('Section 1', 'aali'),
                   'indent' => true 
                ),
            array(
                'id'        => 'services_home_section_icon_1',
                'type'      => 'media',
                'title'     => __('Icon', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/svg/camera.svg'
                ),
            ),
            array(
                    'id'     => 'services_home_section_title_1',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title', 'aali' ),
                    'default' => "Video Production",
                ),
             array(
                    'id'     => 'services_home_section_sub_title_1',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Sub Title', 'aali' ),
                    'default' => "Starts from",
                ),
             array(
                    'id'     => 'services_home_section_price_1',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Price', 'aali' ),
                    'default' => "$49",
                ),
             array(
                 'id'         => 'services_home_section_shot_editor_1',
                 'type'       => 'editor',
                 'title'      => esc_html__('Shot Description', 'aali'), 
                 'default'    => "Aali is a leading web design agency with an award-winning design team that creates innovative, effective websites",
            ),
            array(
                'id'        => 'services_home_section_image_1',
                'type'      => 'media',
                'title'     => __('Image', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/service/1.jpg'
                ),
            ),
             array(
                 'id'         => 'services_home_section_long_editor_1',
                 'type'       => 'editor',
                 'title'      => esc_html__('Long Description', 'aali'), 
                 'default'    => "Nazmul is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals. <br> <br> In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line. <br> <br> That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.",
            ),
            array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),

               //section 2
            array(
                   'id' => 'services_home_section_2',
                   'type' => 'section',
                   'title' => esc_html__('Section 2', 'aali'),
                   'indent' => true 
                ),
            array(
                'id'        => 'services_home_section_icon_2',
                'type'      => 'media',
                'title'     => __('Icon', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/svg/web.svg'
                ),
            ),
            array(
                    'id'     => 'services_home_section_title_2',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title', 'aali' ),
                    'default' => "Brand Identity",
                ),
             array(
                    'id'     => 'services_home_section_sub_title_2',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Sub Title', 'aali' ),
                    'default' => "Starts from",
                ),
             array(
                    'id'     => 'services_home_section_price_2',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Price', 'aali' ),
                    'default' => "$59",
                ),
             array(
                 'id'         => 'services_home_section_shot_editor_2',
                 'type'       => 'editor',
                 'title'      => esc_html__('Shot Description', 'aali'), 
                 'default'    => "Aali is a leading web design agency with an award-winning design team that creates innovative, effective websites",
            ),
            array(
                'id'        => 'services_home_section_image_2',
                'type'      => 'media',
                'title'     => __('Image', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/service/3.jpg'
                ),
            ),
             array(
                 'id'         => 'services_home_section_long_editor_2',
                 'type'       => 'editor',
                 'title'      => esc_html__('Long Description', 'aali'), 
                 'default'    => "Nazmul is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals. <br> <br> In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line. <br> <br> That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.",
            ),
            array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),

              //section 3
            array(
                   'id' => 'services_home_section_3',
                   'type' => 'section',
                   'title' => esc_html__('Section 3', 'aali'),
                   'indent' => true 
                ),
            array(
                'id'        => 'services_home_section_icon_3',
                'type'      => 'media',
                'title'     => __('Icon', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/svg/pen.svg'
                ),
            ),
            array(
                    'id'     => 'services_home_section_title_3',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title', 'aali' ),
                    'default' => "Creative Writing",
                ),
             array(
                    'id'     => 'services_home_section_sub_title_3',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Sub Title', 'aali' ),
                    'default' => "Starts from",
                ),
             array(
                    'id'     => 'services_home_section_price_3',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Price', 'aali' ),
                    'default' => "$69",
                ),
             array(
                 'id'         => 'services_home_section_shot_editor_3',
                 'type'       => 'editor',
                 'title'      => esc_html__('Shot Description', 'aali'), 
                 'default'    => "Aali is a leading web design agency with an award-winning design team that creates innovative, effective websites",
            ),
            array(
                'id'        => 'services_home_section_image_3',
                'type'      => 'media',
                'title'     => __('Image', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/service/2.jpg'
                ),
            ),
             array(
                 'id'         => 'services_home_section_long_editor_3',
                 'type'       => 'editor',
                 'title'      => esc_html__('Long Description', 'aali'), 
                 'default'    => "Nazmul is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals. <br> <br> In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line. <br> <br> That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.",
            ),
            array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),

            //section 4 / 5 hide and show
            array(
                   'id' => 'services_home_section_4_5_show_hide',
                   'type' => 'section',
                   'title' => esc_html__('Section 4 and 5 Show / Hide', 'aali'),
                   'indent' => true 
                ),
             array(
                    'id'     => 'services_home_section_show_4_5',
                    'type'   => 'switch',
                    'title'  => esc_html__( 'Show / Hide Section 4 & 5', 'aali' ),
                    'on' => 'Show',
                    'off' => 'Hide',
                    'default' => true,
                ),

            array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),

              //section 4
            array(
                   'id' => 'services_home_section_4',
                   'type' => 'section',
                   'title' => esc_html__('Section 4 (Opthonal)', 'aali'),
                   'indent' => true 
                ),
            array(
                'id'        => 'services_home_section_icon_4',
                'type'      => 'media',
                'title'     => __('Icon', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/svg/web.svg'
                ),
            ),
            array(
                    'id'     => 'services_home_section_title_4',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title', 'aali' ),
                    'default' => "Seo Ranking",
                ),
             array(
                    'id'     => 'services_home_section_sub_title_4',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Sub Title', 'aali' ),
                    'default' => "Starts from",
                ),
             array(
                    'id'     => 'services_home_section_price_4',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Price', 'aali' ),
                    'default' => "$79",
                ),
             array(
                 'id'         => 'services_home_section_shot_editor_4',
                 'type'       => 'editor',
                 'title'      => esc_html__('Shot Description', 'aali'), 
                 'default'    => "Aali is a leading web design agency with an award-winning design team that creates innovative, effective websites",
            ),
            array(
                'id'        => 'services_home_section_image_4',
                'type'      => 'media',
                'title'     => __('Image', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/service/3.jpg'
                ),
            ),
             array(
                 'id'         => 'services_home_section_long_editor_4',
                 'type'       => 'editor',
                 'title'      => esc_html__('Long Description', 'aali'), 
                 'default'    => "Nazmul is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals. <br> <br> In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line. <br> <br> That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.",
            ),
            array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),

             //section 5
            array(
                   'id' => 'services_home_section_5',
                   'type' => 'section',
                   'title' => esc_html__('Section 5 (Opthonal)', 'aali'),
                   'indent' => true 
                ),
            array(
                'id'        => 'services_home_section_icon_5',
                'type'      => 'media',
                'title'     => __('Icon', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/svg/web.svg'
                ),
            ),
            array(
                    'id'     => 'services_home_section_title_5',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title', 'aali' ),
                    'default' => "Seo Ranking",
                ),
             array(
                    'id'     => 'services_home_section_sub_title_5',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Sub Title', 'aali' ),
                    'default' => "Starts from",
                ),
             array(
                    'id'     => 'services_home_section_price_5',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Price', 'aali' ),
                    'default' => "$79",
                ),
             array(
                 'id'         => 'services_home_section_shot_editor_5',
                 'type'       => 'editor',
                 'title'      => esc_html__('Shot Description', 'aali'), 
                 'default'    => "Aali is a leading web design agency with an award-winning design team that creates innovative, effective websites",
            ),
            array(
                'id'        => 'services_home_section_image_5',
                'type'      => 'media',
                'title'     => __('Image', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/service/3.jpg'
                ),
            ),
             array(
                 'id'         => 'services_home_section_long_editor_5',
                 'type'       => 'editor',
                 'title'      => esc_html__('Long Description', 'aali'), 
                 'default'    => "Nazmul is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals. <br> <br> In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line. <br> <br> That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.",
            ),
            array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),

             //section 6
            array(
                   'id' => 'services_home_section_6',
                   'type' => 'section',
                   'title' => esc_html__('Section 6', 'aali'),
                   'indent' => true 
                ),
            array(
                'id'        => 'services_home_section_icon_6',
                'type'      => 'media',
                'title'     => __('Icon', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/svg/user.svg'
                ),
            ),
            array(
                    'id'     => 'services_home_section_title_6',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title', 'aali' ),
                    'default' => "Digital Marketing",
                ),
             array(
                    'id'     => 'services_home_section_sub_title_6',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Sub Title', 'aali' ),
                    'default' => "Starts from",
                ),
             array(
                    'id'     => 'services_home_section_price_6',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Price', 'aali' ),
                    'default' => "$99",
                ),
             array(
                 'id'         => 'services_home_section_shot_editor_6',
                 'type'       => 'editor',
                 'title'      => esc_html__('Shot Description', 'aali'), 
                 'default'    => "Aali is a leading web design agency with an award-winning design team that creates innovative, effective websites",
            ),
            array(
                'id'        => 'services_home_section_image_6',
                'type'      => 'media',
                'title'     => __('Image', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/service/3.jpg'
                ),
            ),
             array(
                 'id'         => 'services_home_section_long_editor_6',
                 'type'       => 'editor',
                 'title'      => esc_html__('Long Description', 'aali'), 
                 'default'    => "Nazmul is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals. <br> <br> In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line. <br> <br> That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.",
            ),
            array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),

             //section 7
            array(
                   'id' => 'services_home_section_7',
                   'type' => 'section',
                   'title' => esc_html__('Section 7', 'aali'),
                   'indent' => true 
                ),
            array(
                    'id'     => 'services_home_section_title_7',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title', 'aali' ),
                    'default' => "Do You Want Something Different?",
                ),
            array(
                    'id'     => 'services_home_section_button_title_7',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Button Text', 'aali' ),
                    'default' => "Knock Me",
                ),

            array(
                'id'        => 'services_home_section_button_icon_7',
                'type'      => 'media',
                'title'     => __('Icon', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/svg/message.svg'
                ),
            ),
             array(
                    'id'     => 'services_home_section_button_link_7',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Button Link', 'aali' ),
                    'default' => "#contact",
                ),
            array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                )


        )
    ) );

//Know More section

Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'Know More Section', 'aali' ),
        'id'     => 'know_more_home_page',
        'desc'   => esc_html__( 'Know More home page', 'aali' ),
        'subsection' => true,
        'fields' => array(
            array(
                'id'       => 'know_more_sub_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Sub Title', 'aali' ),
                'default' => "Know More",
            ),
            array(
                'id'       => 'know_more_home_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Title', 'aali' ),
                'default' => "My Resume",
            ),
            array(
                 'id'         => 'know_more_home_description_editor',
                 'type'       => 'editor',
                 'title'      => esc_html__('Description', 'aali'), 
                 'default'    => "I enjoy every step of the design process, from discussion and collaboration to concept and execution",
            ),
            array(
                'id'       => 'know_more_home_video_link',
                'type'     => 'text',
                'title'    => esc_html__( 'Side Bar Video Link', 'aali' ),
                'default' => "https://vimeo.com/337293658",
            ),

            //section 1
            array(
                   'id' => 'know_more_home_section_1',
                   'type' => 'section',
                   'title' => esc_html__('Section 1', 'aali'),
                   'indent' => true 
                ),
            array(
                    'id'     => 'know_more_home_section_title_1',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title', 'aali' ),
                    'default' => "Education",
                ),
            // repeater section 3
              //item 1
            array(
                    'id'     => 'know_more_home_section_1_divider_1',
                    'type'   => 'info',
                    'style' => 'success',
                    'title'  => esc_html__( 'Section 1 Add Item 1', 'aali' ),
                    'desc'  => esc_html__('Section 1 Add Item 1', 'aali')
                ),
            array(
                'id'        => 'know_more_home_section_1_icon_1',
                'type'      => 'media',
                'title'     => __('Icon 1', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/svg/degree.svg'
                ),
            ),
            array(
                    'id'     => 'know_more_home_section_1_title_1',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title 1', 'aali' ),
                    'default' => "Cognitive Sciences",
                ),

            
             array(
                    'id'     => 'know_more_home_section_1_sub_title_1',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Sub Title 1', 'aali' ),
                    'default' => "University of Maine",
                ),
             array(
                    'id'     => 'know_more_home_section__date_1',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Date Section 1', 'aali' ),
                    'default' => "2018 - 2020",
                ),
             array(
                    'id'     => 'know_more_home_section_1_description_1',
                    'type'   => 'editor',
                    'title'  => esc_html__( 'Description 1', 'aali' ),
                    'default' => "Aali is a leading web design agency with an award-winning design",
                ),
            array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),
            //item 2
            array(
                    'id'     => 'know_more_home_section_1_divider_2',
                    'type'   => 'info',
                    'style' => 'success',
                    'title'  => esc_html__( 'Section 1 Add Item 2', 'aali' ),
                    'desc'  => esc_html__('Section 1 Add Item 2', 'aali')
                ),
            array(
                'id'        => 'know_more_home_section_1_icon_2',
                'type'      => 'media',
                'title'     => __('Icon 2', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/svg/degree.svg'
                ),
            ),
            array(
                    'id'     => 'know_more_home_section_1_title_2',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title 2', 'aali' ),
                    'default' => "Civil Engineering",
                ),

            
             array(
                    'id'     => 'know_more_home_section_1_sub_title_2',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Sub Title 2', 'aali' ),
                    'default' => "University of Texas",
                ),
             array(
                    'id'     => 'know_more_home_section__date_2',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Date Section 2', 'aali' ),
                    'default' => "2014 - 2018",
                ),
             array(
                    'id'     => 'know_more_home_section_1_description_2',
                    'type'   => 'editor',
                    'title'  => esc_html__( 'Description 2', 'aali' ),
                    'default' => "Aali is a leading web design agency with an award-winning design",
                ),
            array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),
            //item 3
            array(
                    'id'     => 'know_more_home_section_1_divider_3',
                    'type'   => 'info',
                    'style' => 'success',
                    'title'  => esc_html__( 'Section 1 Add Item 3', 'aali' ),
                    'desc'  => esc_html__('Section 1 Add Item 3', 'aali')
                ),
            array(
                'id'        => 'know_more_home_section_1_icon_3',
                'type'      => 'media',
                'title'     => __('Icon 3', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/svg/degree.svg'
                ),
            ),
            array(
                    'id'     => 'know_more_home_section_1_title_3',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title 3', 'aali' ),
                    'default' => "Bachelor of Science",
                ),
            
             array(
                    'id'     => 'know_more_home_section_1_sub_title_3',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Sub Title 3', 'aali' ),
                    'default' => "Univercity of Oxford",
                ),
             array(
                    'id'     => 'know_more_home_section__date_3',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Date Section 3', 'aali' ),
                    'default' => "2012 - 2014",
                ),
             array(
                    'id'     => 'know_more_home_section_1_description_3',
                    'type'   => 'editor',
                    'title'  => esc_html__( 'Description 3', 'aali' ),
                    'default' => "Aali is a leading web design agency with an award-winning design",
                ),
            array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),

            //section 2
            array(
                   'id' => 'know_more_home_section_2',
                   'type' => 'section',
                   'title' => esc_html__('Section 2', 'aali'),
                   'indent' => true 
                ),
            array(
                    'id'     => 'know_more_home_section_title_2',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title', 'aali' ),
                    'default' => "Experience",
                ),
            // repeater section 3
              //item 1
            array(
                    'id'     => 'know_more_home_section_2_divider_1',
                    'type'   => 'info',
                    'style' => 'success',
                    'title'  => esc_html__( 'Section 2 Add Item 1', 'aali' ),
                    'desc'  => esc_html__('Section 2 Add Item 1', 'aali')
                ),
            array(
                'id'        => 'know_more_home_section_2_icon_1',
                'type'      => 'media',
                'title'     => __('Icon 1', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/svg/case.svg'
                ),
            ),
            array(
                    'id'     => 'know_more_home_section_2_title_1',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title 1', 'aali' ),
                    'default' => "Product Designer",
                ),

            
             array(
                    'id'     => 'know_more_home_section_2_sub_title_1',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Sub Title 1', 'aali' ),
                    'default' => "Easy Computers",
                ),
             array(
                    'id'     => 'know_more_home_section_2_date_1',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Date Section 1', 'aali' ),
                    'default' => "2018 - running",
                ),
             array(
                    'id'     => 'know_more_home_section_2_description_1',
                    'type'   => 'editor',
                    'title'  => esc_html__( 'Description 1', 'aali' ),
                    'default' => "Aali is a leading web design agency with an award-winning design",
                ),
            array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),
            //item 2
            array(
                    'id'     => 'know_more_home_section_2_divider_2',
                    'type'   => 'info',
                    'style' => 'success',
                    'title'  => esc_html__( 'Section 2 Add Item 2', 'aali' ),
                    'desc'  => esc_html__('Section 2 Add Item 2', 'aali')
                ),
            array(
                'id'        => 'know_more_home_section_2_icon_2',
                'type'      => 'media',
                'title'     => __('Icon 2', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/svg/case.svg'
                ),
            ),
            array(
                    'id'     => 'know_more_home_section_2_title_2',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title 2', 'aali' ),
                    'default' => "UI/UX Expert",
                ),

            
             array(
                    'id'     => 'know_more_home_section_2_sub_title_2',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Sub Title 2', 'aali' ),
                    'default' => "eTheme Group",
                ),
             array(
                    'id'     => 'know_more_home_section_2_date_2',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Date Section 2', 'aali' ),
                    'default' => "2015 - 2018",
                ),
             array(
                    'id'     => 'know_more_home_section_2_description_2',
                    'type'   => 'editor',
                    'title'  => esc_html__( 'Description 2', 'aali' ),
                    'default' => "Aali is a leading web design agency with an award-winning design",
                ),
            array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),
            //item 3
            array(
                    'id'     => 'know_more_home_section_2_divider_3',
                    'type'   => 'info',
                    'style' => 'success',
                    'title'  => esc_html__( 'Section 2 Add Item 3', 'aali' ),
                    'desc'  => esc_html__('Section 2 Add Item 3', 'aali')
                ),
            array(
                'id'        => 'know_more_home_section_2_icon_3',
                'type'      => 'media',
                'title'     => __('Icon 3', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/svg/case.svg'
                ),
            ),
            array(
                    'id'     => 'know_more_home_section_2_title_3',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title 3', 'aali' ),
                    'default' => "Senior Developer",
                ),
            
             array(
                    'id'     => 'know_more_home_section_2_sub_title_3',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Sub Title 3', 'aali' ),
                    'default' => "Envato Studio",
                ),
             array(
                    'id'     => 'know_more_home_section_2_date_3',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Date Section 3', 'aali' ),
                    'default' => "2012 - 2018",
                ),
             array(
                    'id'     => 'know_more_home_section_2_description_3',
                    'type'   => 'editor',
                    'title'  => esc_html__( 'Description 3', 'aali' ),
                    'default' => "Aali is a leading web design agency with an award-winning design",
                ),
            array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),


        )
    ) );

  //Testimonial section
Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'Testimonial Section', 'aali' ),
        'id'     => 'testimonial_home_page',
        'desc'   => esc_html__( 'Testimonial home page', 'aali' ),
        'subsection' => true,
        'fields' => array(
            array(
                'id'        => 'testimonial_home_sub_title_image',
                'type'      => 'media',
                'title'     => __('Image', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/hero/2.png'
                ),
            ),
            array(
                'id'       => 'testimonial_home_sub_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Sub Title', 'aali' ),
                'default' => "Testimonial",
            ),
            array(
                'id'       => 'testimonial_home_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Title', 'aali' ),
                'default' => "What People Say",
            ),


        )
    ) );

 //Blog section
Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'Blog Section', 'aali' ),
        'id'     => 'blog_home_page',
        'desc'   => esc_html__( 'Blog home page', 'aali' ),
        'subsection' => true,
        'fields' => array(
            array(
                'id'       => 'blog_home_sub_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Sub Title', 'aali' ),
                'default' => "Latest Updates",
            ),
            array(
                'id'       => 'blog_home_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Title', 'aali' ),
                'default' => "From My Blog",
            ),
             array(
                 'id'         => 'blog_home_description_editor',
                 'type'       => 'editor',
                 'title'      => esc_html__('Description', 'aali'), 
                 'default'    => "We offer high quality products for competitive prices. Our main goal is customer satisfaction",
            )


        )
    ) );

 //Count section
Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'Count Section', 'aali' ),
        'id'     => 'count_home_page',
        'desc'   => esc_html__( 'Count home page', 'aali' ),
        'subsection' => true,
        'fields' => array(
            //item 1
            array(
                   'id' => 'count_home_section_1',
                   'type' => 'section',
                   'title' => esc_html__('Section 1', 'aali'),
                   'indent' => true 
                ),
            array(
                    'id'     => 'count_home_section_divide_1',
                    'type'   => 'info',
                    'style' => 'success',
                    'title'  => esc_html__( 'Count Item 1', 'aali' ),
                    'desc'  => esc_html__('Count Item 1', 'aali')
                ),
            array(
                    'id'     => 'count_home_section_1_count_title_1',
                    'type'   => 'text',
                    'title'  => esc_html__( 'count number', 'aali' ),
                    'default' => "5",
                ),
            array(
                    'id'     => 'count_home_section_1_count_number_1',
                    'type'   => 'text',
                    'title'  => esc_html__( 'count number text', 'aali' ),
                    'default' => "K",
                ),
            array(
                    'id'     => 'count_home_section_1_title_1',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title 1', 'aali' ),
                    'default' => "JavaScript",
                ),
            array(
                    'id'     => 'count_home_section_1_title_2',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title 2', 'aali' ),
                    'default' => "Projects",
                ),
            
            array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),
             //item 2
            array(
                   'id' => 'count_home_section_2',
                   'type' => 'section',
                   'title' => esc_html__('Section 2', 'aali'),
                   'indent' => true 
                ),
            array(
                    'id'     => 'count_home_section_divide_2',
                    'type'   => 'info',
                    'style' => 'success',
                    'title'  => esc_html__( 'Count Item 2', 'aali' ),
                    'desc'  => esc_html__('Count Item 2', 'aali')
                ),
            array(
                    'id'     => 'count_home_section_2_count_title_1',
                    'type'   => 'text',
                    'title'  => esc_html__( 'count number', 'aali' ),
                    'default' => "90",
                ),
            array(
                    'id'     => 'count_home_section_2_count_number_1',
                    'type'   => 'text',
                    'title'  => esc_html__( 'count number text', 'aali' ),
                    'default' => "+",
                ),
            array(
                    'id'     => 'count_home_section_2_title_1',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title 1', 'aali' ),
                    'default' => "Digital",
                ),
            array(
                    'id'     => 'count_home_section_2_title_2',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title 2', 'aali' ),
                    'default' => "Products",
                ),
            
            array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),
            //item 3
            array(
                   'id' => 'count_home_section_3',
                   'type' => 'section',
                   'title' => esc_html__('Section 3', 'aali'),
                   'indent' => true 
                ),
            array(
                    'id'     => 'count_home_section_divide_3',
                    'type'   => 'info',
                    'style' => 'success',
                    'title'  => esc_html__( 'Count Item 3', 'aali' ),
                    'desc'  => esc_html__('Count Item 3', 'aali')
                ),
            array(
                    'id'     => 'count_home_section_3_count_title_1',
                    'type'   => 'text',
                    'title'  => esc_html__( 'count number', 'aali' ),
                    'default' => "300",
                ),
            array(
                    'id'     => 'count_home_section_3_count_number_1',
                    'type'   => 'text',
                    'title'  => esc_html__( 'count number text', 'aali' ),
                    'default' => "+",
                ),
            array(
                    'id'     => 'count_home_section_3_title_1',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title 1', 'aali' ),
                    'default' => "Happy",
                ),
            array(
                    'id'     => 'count_home_section_3_title_2',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Title 2', 'aali' ),
                    'default' => "Clients",
                ),
            
            array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),


        )
    ) );

//contact Section

Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'Contact Section', 'aali' ),
        'id'     => 'contact_home_page',
        'desc'   => esc_html__( 'Contact home page', 'aali' ),
        'subsection' => true,
        'fields' => array(
            array(
                'id'       => 'contact_home_sub_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Sub Title', 'aali' ),
                'default' => "Get in Touch",
            ),
            array(
                'id'       => 'contact_home_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Title', 'aali' ),
                'default' => "Connect with Me with Confidence",
            ),
            array(
                 'id'         => 'contact_home_description_editor',
                 'type'       => 'editor',
                 'title'      => esc_html__('Description', 'aali'), 
                 'default'    => "Please fill out the form on this section to contact with me. Or call between 9:00 a.m. and 8:00 p.m. ET, Monday through Friday",
            ),
            array(
                'id'       => 'contact_home_address_section',
                'type'     => 'slides',
                'title'    => esc_html__( 'Information Contact', 'aali' ),
                'placeholder' => array(
                        'title'       => esc_html__('title', 'aali'),
                        'description'         => esc_html__('description', 'aali'),
                    ),
                'show'   => array(
                    'title' => true,
                    'description' => true,
                    'url' => false,
                 ),
            ),
            array(
                 'id'         => 'contact_home_form_short_code',
                 'type'       => 'text',
                 'title'      => esc_html__('Form Shortcode', 'aali'),
                 'subtitle' => esc_html__('[contact-form]', 'aali'), 
                 'default'    => "",
            ),


        )
    ) );

//footer

Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'Footer', 'aali' ),
        'id'     => 'footer',
        'desc'   => esc_html__( 'Footer Content Edit.', 'aali' ),
        'icon'   => 'el el-cog',
        'fields' => array(
            array(
                'id'        => 'footer_image_logo',
                'type'      => 'media',
                'title'     => __('Footer Logo', 'aali'),
                'compiler'  => true,
                'default'   => array(
                    'url' => get_template_directory_uri() .'/img/logo/logo.png'
                ),
            ),
            array(
                'id'       => 'footer_text_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Title', 'aali' ),
                'default' => "Connect",
            ),
            //Sosial Media
            array(
                   'id' => 'footer_sosal_section',
                   'type' => 'section',
                   'title' => esc_html__('Sosial Media', 'aali'),
                   'indent' => true,
                ),
            array(
                    'id'     => 'footer_sosal_divide',
                    'type'   => 'info',
                    'style' => 'success',
                    'title'  => esc_html__( 'Sosial Media', 'aali' ),
                ),
            array(
                    'id'     => 'footer_sosal_link_1',
                    'type'   => 'text',
                    'title'  => esc_html__( 'facebook Link', 'aali' ),
                    'default' => "https://www.facebook.com/",
                ),
            array(
                    'id'     => 'footer_sosal_link_2',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Twitter Link', 'aali' ),
                    'default' => "https://www.twitter.com/",
                ),
            array(
                    'id'     => 'footer_sosal_link_3',
                    'type'   => 'text',
                    'title'  => esc_html__( 'Instagram Link', 'aali' ),
                    'default' => "https://www.instagram.com/",
                ),
            array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),
            
            array(
                'id'       => 'footer_copy_right_text',
                'type'     => 'text',
                'title'    => esc_html__( 'Copy Right Text', 'aali' ),
                'default' => 'Designed with love by <a class="line_anim" href="https://www.facebook.com/nazmul.hossen.77128/" target="_blank">Nazmul</a> &copy; 2021',
                'hint'     => array(
                    'content' => 'Designed with love by <a class="line_anim" href="https://www.facebook.com/nazmul.hossen.77128/" target="_blank">Nazmul</a> &copy; 2021',
                )
            )
        )
    ) );



//color Section

Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'Defult Color', 'aali' ),
        'id'     => 'color_aali_theme',
        'desc'   => esc_html__( 'Color Change', 'aali' ),
        'icon'   => 'el el-cog',
        'fields' => array(
            array(
                'id'       => 'aali_theme_color_mouce_cursor',
                'type'     => 'color',
                'title'    => esc_html__( 'Mouse Cursor Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    'border-color'  => '.aali_tm_all_wrap[data-color=crimson] .cursor-outer',
                    'background-color'  => '.aali_tm_all_wrap[data-color=crimson] .cursor-inner'
                )
            ),
            array(
                'id'       => 'aali_theme_color_body',
                'type'     => 'color',
                'title'    => esc_html__( 'body Text Color', 'aali' ),
                'default' => "#7d7789",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => 'body'
                )
            ),
            array(
                'id'       => 'aali_theme_color_h3',
                'type'     => 'color',
                'title'    => esc_html__( 'h3 Title Color', 'aali' ),
                'default' => "#15111e",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => 'h3'
                )
            ),
             //Header color
            array(
                   'id' => 'theme_header_section_color',
                   'type' => 'section',
                   'title' => esc_html__('Header Section Color', 'aali'),
                   'indent' => true,
                ),
            array(
                'id'       => 'theme_header_section_menu_text_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Menu Text Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_header .menu ul li a'
                )
            ),
            array(
                'id'       => 'theme_header_section_menu_text_hover_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Hover Menu Text Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_header .menu ul li a:hover,.aali_tm_all_wrap[data-color="crimson"] .aali_tm_header .menu ul li.current a'
                )
            ),
            array(
                'id'       => 'theme_header_section_menu_sticky_text_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Sticky Header Menu Color', 'aali' ),
                'default' => "#15111e",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_header.animate .menu ul li a'
                )
            ),
            array(
                'id'       => 'theme_header_section_menu_sticky_background_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Sticky Header background Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'background-color'  => '.aali_tm_header.animate'
                )
            ),
            array(
                    'id'     => 'theme_header_section_color-end',
                    'type'   => 'section',
                    'indent' => false,
                ),
              //button group color
            array(
                   'id' => 'banner_group_button_1_section',
                   'type' => 'section',
                   'title' => esc_html__('Button Banner & About Section', 'aali'),
                   'indent' => true,
                ),
            array(
                'id'       => 'banner_group_home_button_1_text_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Button Text Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_button a'
                )
            ),
            array(
                'id'       => 'banner_group_home_button_1_icon_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Button Icon Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_button a .svg'
                )
            ),
            array(
                'id'       => 'banner_group_home_button_1_background_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Button Background Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'background-color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_button a',
                    'border-color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_button a',
                )
            ),
            array(
                    'id'     => 'banner_group_button_1_section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),

            //Sosial Media
            // array(
            //        'id' => 'footer_sosal_section',
            //        'type' => 'section',
            //        'title' => esc_html__('Sosial Media', 'aali'),
            //        'indent' => true,
            //     ),
            // array(
            //         'id'     => 'footer_sosal_divide',
            //         'type'   => 'info',
            //         'style' => 'success',
            //         'title'  => esc_html__( 'Sosial Media', 'aali' ),
            //     ),
            // array(
            //         'id'     => 'footer_sosal_link_1',
            //         'type'   => 'text',
            //         'title'  => esc_html__( 'facebook Link', 'aali' ),
            //         'default' => "https://www.facebook.com/",
            //     ),
            // array(
            //         'id'     => 'section-end',
            //         'type'   => 'section',
            //         'indent' => false,
            //     ),

        )
    ) );

    //banner color
Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'Banner Color Section', 'aali' ),
        'id'     => 'banner_color_home_page',
        'desc'   => esc_html__( 'Banner Color', 'aali' ),
        'subsection' => true,
        'fields' => array(
            array(
                'id'       => 'banner_home_image_box_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Image Box Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'background-color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_hero .avatar .one .in, .aali_tm_all_wrap[data-color="crimson"] .aali_tm_hero .avatar .three .in, .aali_tm_all_wrap[data-color="crimson"] .aali_tm_hero .avatar .two .in, .aali_tm_all_wrap[data-color="crimson"] .aali_tm_hero .five .in'
                )
            ),
            array(
                'id'       => 'banner_home_sub_title_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Sub Title Color', 'aali' ),
                'default' => "#FFFFFF",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'            => '.aali_tm_hero .content .hello'
                )
            ),
            array(
                'id'       => 'banner_home_title_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Title Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_hero .content .name'
                )
            ),
            array(
                'id'       => 'banner_home_headline_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Headline Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_hero .cd-headline'
                )
            ),
            
             //banner button 2 color
            array(
                   'id' => 'banner_button_2_section',
                   'type' => 'section',
                   'title' => esc_html__('Button 2', 'aali'),
                   'indent' => true,
                ),
            array(
                'id'       => 'banner_home_button_2_text_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Button 2 Text Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_hero .simple_button a'
                )
            ),
            array(
                    'id'     => 'banner_button_2_section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),
            array(
                'id'       => 'banner_home_mail_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Mail Text Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_hero .hero_mail a'
                )
            ),
             //banner sosial color
            array(
                   'id' => 'banner_sosial_color_section',
                   'type' => 'section',
                   'title' => esc_html__('Sosial Section', 'aali'),
                   'indent' => true,
                ),
            array(
                'id'       => 'banner_home_sosial_icon_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Icon Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_hero .socials ul a'
                )
            ),
            array(
                'id'       => 'banner_home_sosial_icon_hover_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Icon Hover Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_hero .socials ul a:hover'
                )
            ),
            array(
                    'id'     => 'banner_sosial_color_section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),

        )
    ) );

//About color
Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'About Color Section', 'aali' ),
        'id'     => 'about_color_home_page',
        'desc'   => esc_html__( 'About Color', 'aali' ),
        'subsection' => true,
        'fields' => array(
            array(
                'id'       => 'about_home_image_box_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Image Box Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'background-color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_about .square'
                )
            ),
            array(
                'id'       => 'about_home_sub_title_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Sub Title Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'            => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_about .center .small'
                )
            ),
            array(
                'id'       => 'about_home_span_title_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Title Span Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'            => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_about .center h3 span'
                )
            ),
            array(
                'id'       => 'about_home_sub_title_2_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Sub Title 2 Color', 'aali' ),
                'default' => "#15111e",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'            => '.aali_tm_about .center .subtitle'
                )
            ),
            array(
                'id'       => 'about_home_description_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Description Color', 'aali' ),
                'default' => "#15111e",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'            => ''
                )
            ),


             

        )
    ) );

//Skill & Portfolio & Testimonial color
Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'Skill & Portfolio & Testimonial Color', 'aali' ),
        'id'     => 'skil_portfolio_testimonial_color_home_page',
        'desc'   => esc_html__( 'Skill & Portfolio & Testimonial Color', 'aali' ),
        'subsection' => true,
        'fields' => array(
            array(
                'id'       => 'skill__port_home_sub_title_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Sub Title Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'            => '.aali_tm_main_title[data-color="light"] span'
                )
            ),
            array(
                'id'       => 'skill_port_home_title_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Title Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'            => '.aali_tm_main_title[data-color="light"] h3'
                )
            ),
            array(
                'id'       => 'skill_port_home_description_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Description Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'            => '.aali_tm_main_title[data-color="light"] p'
                )
            ),

           // Skill color
            array(
                   'id' => 'skill_text_section_color',
                   'type' => 'section',
                   'title' => esc_html__('Skill Section', 'aali'),
                   'indent' => true,
                ),
            array(
                'id'       => 'skill_section_background_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Background Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'background-color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_skills'
                )
            ),
            array(
                'id'       => 'skill_text_color_section',
                'type'     => 'color',
                'title'    => esc_html__( 'Text Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.progress_inner > span'
                )
            ),

            array(
                'id'       => 'skill_text_background_persent_section',
                'type'     => 'color',
                'title'    => esc_html__( 'Skill % Background Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'color' => '.site-header',
                    'background-color'  => '.progress_inner .background .bar_in'
                )
            ),
            array(
                    'id'     => 'skill_text_section_color-end',
                    'type'   => 'section',
                    'indent' => false,
                ),

            // Portfolio color
            array(
                   'id' => 'portfolio_text_section_color',
                   'type' => 'section',
                   'title' => esc_html__('Portfolio Section', 'aali'),
                   'indent' => true,
                ),
            array(
                'id'       => 'portfolio_menu_text_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Menu Text Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_portfolio .portfolio_filter ul li a'
                )
            ),
            array(
                'id'       => 'portfolio_menu_catagory_text_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Catagory Text Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_portfolio .portfolio_list .details span'
                )
            ),
            array(
                'id'       => 'portfolio_title_text_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Portfolio Title Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_portfolio .portfolio_list .details h3'
                )
            ),
            array(
                'id'       => 'portfolio_hover_background_overlay_color',
                'type'     => 'color',
                'title'    => esc_html__( 'hover background overlay color', 'aali' ),
                'default' => "rgba(234,67,67,.72)",
                //'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'background-color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_portfolio .portfolio_list ul li .list_inner .overlay'
                )
            ),
            array(
                    'id'     => 'portfolio_text_section_color-end',
                    'type'   => 'section',
                    'indent' => false,
                ),

            // Testimonial color
            array(
                   'id' => 'testimonial_text_section_color',
                   'type' => 'section',
                   'title' => esc_html__('Testimonial Section', 'aali'),
                   'indent' => true,
                ),
             array(
                'id'       => 'testimonial_background_section_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Background Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'color' => '.site-header',
                    'background-color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_testimonials'
                )
            ),
             array(
                'id'       => 'testimonial_box_background_section_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Image Box Color', 'aali' ),
                'default' => "#3c3c3c",
                'validate' => 'color',
                'output' => array(
                    //'color' => '.site-header',
                    'background-color'  => '.aali_tm_testimonials .square'
                )
            ),
            array(
                'id'       => 'testimonial_text_title_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Title Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_testimonials ul li .name h3'
                )
            ),
            array(
                'id'       => 'testimonial_text_description_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Description Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_testimonials ul li .text p'
                )
            ),
            array(
                    'id'     => 'testimonial_text_section_color-end',
                    'type'   => 'section',
                    'indent' => false,
                ),



             

        )
    ) );

//Services color
Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'Services Color Section', 'aali' ),
        'id'     => 'services_color_home_page',
        'desc'   => esc_html__( 'Services Color', 'aali' ),
        'subsection' => true,
        'fields' => array(
            array(
                   'id' => 'services_text_section_1_color',
                   'type' => 'section',
                   'title' => esc_html__('Section 1', 'aali'),
                   'indent' => true,
                ),
            array(
                'id'       => 'services_home_sub_title_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Sub Title Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'            => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_main_title span'
                )
            ),
            array(
                    'id'     => 'services_text_section_1_color-end',
                    'type'   => 'section',
                    'indent' => false,
                ),

            array(
                'id'       => 'services_home_price_text_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Price Text Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'            => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_service .service_list .price span'
                )
            ),

            array(
                   'id' => 'services_text_section_2_color',
                   'type' => 'section',
                   'title' => esc_html__('Section 2', 'aali'),
                   'indent' => true,
                ),
            array(
                'id'       => 'services_home_button_icon_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Button Icon Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'            => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_button.border .svg'
                )
            ),
            array(
                'id'       => 'services_home_button_hover_text_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Hover Button Text Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.aali_tm_button.border a:hover',
                    'color'            => '.aali_tm_button.border a:hover, .aali_tm_all_wrap[data-color="crimson"] .aali_tm_button.border a:hover svg'
                )
            ),
            array(
                'id'       => 'services_home_button_hover_background_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Hover Button Background Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'color' => '.site-header',
                    'background-color'            => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_button.border a:hover'
                )
            ),
            array(
                    'id'     => 'services_text_section_2_color-end',
                    'type'   => 'section',
                    'indent' => false,
                ),

             

        )
    ) );


//Know More color
Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'Know More Color', 'aali' ),
        'id'     => 'know_more_color_home_page',
        'desc'   => esc_html__( 'Know More Color', 'aali' ),
        'subsection' => true,
        'fields' => array(
            array(
                'id'       => 'know_more_home_image_box_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Image Box Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'color' => '.site-header',
                    'background-color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_resume .media .square'
                )
            ),
            array(
                'id'       => 'know_more_sub_title_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Sub Title Color', 'aali' ),
                'default' => "#15111e",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_resume .info .left span'
                )
            ),
            array(
                'id'       => 'know_more_title_icon_background_color',
                'type'     => 'color',
                'title'    => esc_html__( 'title & icon Background Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'color' => '.site-header',
                    'background-color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_resume .main_title span:before, .aali_tm_all_wrap[data-color="crimson"] .aali_tm_resume .icon'
                )
            ),
  

        )
    ) );

//Blog color
Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'Blog Color', 'aali' ),
        'id'     => 'blog_color_home_page',
        'desc'   => esc_html__( 'Blog Color', 'aali' ),
        'subsection' => true,
        'fields' => array(
            array(
                'id'       => 'blog_catagory_title_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Catagory Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_news .news_list ul li .details .category a'
                )
            ),
            array(
                'id'       => 'blog_title_text_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Title Color', 'aali' ),
                'default' => "#15111e",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_news .news_list ul li .details .title a'
                )
            ),
            array(
                'id'       => 'blog_redmore_button_text_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Button Text Color', 'aali' ),
                'default' => "#15111e",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_learn_more a'
                )
            ),
            array(
                'id'       => 'blog_redmore_button_border_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Button Border Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'border-color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_learn_more a'
                )
            ),
            array(
                'id'       => 'blog_redmore_button_hover_text_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Button Hover Text Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_learn_more a:hover'
                )
            ),
            array(
                'id'       => 'blog_redmore_button_hover_background_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Button Hover Background Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'background-color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_learn_more a:hover',
                    'border-color' => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_learn_more a'
                )
            ),
  

        )
    ) );

//Count color
Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'Count Section Color', 'aali' ),
        'id'     => 'count_color_home_page',
        'desc'   => esc_html__( 'Count Section Color', 'aali' ),
        'subsection' => true,
        'fields' => array(
            array(
                'id'       => 'count_section_background_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Background Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'color' => '.site-header',
                    'background-color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_counter'
                )
            ),
            array(
                'id'       => 'count_text_number_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Number Text Color', 'aali' ),
                'default' => "#f4f5fe",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_counter .counter_list .value span, .aali_tm_counter .counter_list .value .big, .aali_tm_counter .counter_list .value .small'
                )
            ),
            array(
                'id'       => 'count_text_title_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Title Color', 'aali' ),
                'default' => "#f4f5fe",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_counter .counter_list .wrapper .text h3'
                )
            ),
  

        )
    ) );

//Contact Section color
Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'Contact Section Color', 'aali' ),
        'id'     => 'contact_color_home_page',
        'desc'   => esc_html__( 'Contact Section Color', 'aali' ),
        'subsection' => true,
        'fields' => array(
            array(
                'id'       => 'contact_text_subtitle_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Subtitle Color', 'aali' ),
                'default' => "#15111e",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_contact .left ul li span'
                )
            ),
            array(
                'id'       => 'contact_text_title_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Title Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_contact .left ul li h3'
                )
            ),
  

        )
    ) );

//Footer Section color
Redux::setSection( $aali_theme, array(
        'title'  => esc_html__( 'Footer Section Color', 'aali' ),
        'id'     => 'footer_color_home_page',
        'desc'   => esc_html__( 'Footer Section Color', 'aali' ),
        'subsection' => true,
        'fields' => array(
            array(
                'id'       => 'footer_section_background_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Background Color', 'aali' ),
                'default' => "#3c3c3c",
                'validate' => 'color',
                'output' => array(
                    //'color' => '.site-header',
                    'background-color'  => '.aali_tm_copyright'
                )
            ),
            array(
                'id'       => 'footer_text_copy_right_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Copy Right Text Color', 'aali' ),
                'default' => "#b6b2bf",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_copyright .bottom .left p'
                )
            ),
            array(
                'id'       => 'footer_text_menu_text_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Menu Text Color', 'aali' ),
                'default' => "#b6b2bf",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_copyright .bottom .right ul li a'
                )
            ),
            array(
                'id'       => 'footer_text_menu_hover_text_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Menu Hover Text Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_copyright .bottom .right ul li a:hover'
                )
            ),

            array(
                'id'       => 'footer_back_to_top_icon_background_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Back To Top Background Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'background-color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_copyright .square'
                )
            ),


            //banner button 2 color
            array(
                   'id' => 'footer_sosial_media_color',
                   'type' => 'section',
                   'title' => esc_html__('Sosial Media', 'aali'),
                   'indent' => true,
                ),
            array(
                'id'       => 'footer_sosial_media_color_title',
                'type'     => 'color',
                'title'    => esc_html__( 'Title Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_copyright .social span'
                )
            ),
            array(
                'id'       => 'footer_sosial_media_color_icon',
                'type'     => 'color',
                'title'    => esc_html__( 'Icon Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_copyright .social ul li a'
                )
            ),
            array(
                'id'       => 'footer_sosial_media_color_icon_background',
                'type'     => 'color',
                'title'    => esc_html__( 'Icon Background Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'background-color'  => '.aali_tm_copyright .social ul li a'
                )
            ),
            array(
                'id'       => 'footer_sosial_media_color_icon_hover',
                'type'     => 'color',
                'title'    => esc_html__( 'Icon Color', 'aali' ),
                'default' => "#ffffff",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_copyright .social ul li a:hover'
                )
            ),
            array(
                'id'       => 'footer_sosial_media_color_icon_background_hover',
                'type'     => 'color',
                'title'    => esc_html__( 'Icon Background Color', 'aali' ),
                'default' => "#ea4343",
                'validate' => 'color',
                'output' => array(
                    //'background-color' => '.site-header',
                    'background-color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_copyright .social ul li a:hover'
                )
            ),
            array(
                    'id'     => 'footer_sosial_media_color-end',
                    'type'   => 'section',
                    'indent' => false,
                ),
  

        )
    ) );







// Redux::setSection( $aali_theme, array(
//         'title'  => esc_html__( 'Skills Section', 'aali' ),
//         'id'     => 'skills_home_page',
//         'desc'   => esc_html__( 'Skills home page', 'aali' ),
//         'subsection' => true,
//         'fields' => array(
//             array(
//                 'id'       => 'skill_home_sub_title',
//                 'type'     => 'text',
//                 'title'    => esc_html__( 'Sub Title', 'aali' ),
//                 'default' => "My Skills",
//             ),
//             array(
//                 'id'       => 'skill_home_title',
//                 'type'     => 'text',
//                 'title'    => esc_html__( 'Title', 'aali' ),
//                 'default' => "You Can Imagine<br /> I Can Do",
//             ),
//             array(
//                  'id'         => 'skill_home_description_editor',
//                  'type'       => 'editor',
//                  'title'      => esc_html__('Description', 'aali'), 
//                  'default'    => "I am working on a professional, visually sophisticated and technologically proficient, responsive and multi-functional creative personal resume portfolio template Nazmul",
//             ),


//banner button 2 color
            // array(
            //        'id' => 'banner_button_2_section',
            //        'type' => 'section',
            //        'title' => esc_html__('Button 2', 'aali'),
            //        'indent' => true,
            //     ),
            // array(
            //     'id'       => 'banner_home_button_2_text_color',
            //     'type'     => 'color',
            //     'title'    => esc_html__( 'Button 2 Text Color', 'aali' ),
            //     'default' => "#ffffff",
            //     'validate' => 'color',
            //     'output' => array(
            //         //'background-color' => '.site-header',
            //         'color'  => '.aali_tm_hero .simple_button a'
            //     )
            // ),
            // array(
            //         'id'     => 'banner_button_2_section-end',
            //         'type'   => 'section',
            //         'indent' => false,
            //     ),




            // array(
            //     'id'       => 'blog_home_image_box_color',
            //     'type'     => 'color',
            //     'title'    => esc_html__( 'Image Box Color', 'aali' ),
            //     'default' => "#ea4343",
            //     'validate' => 'color',
            //     'output' => array(
            //         //'color' => '.site-header',
            //         'background-color'  => '.aali_tm_all_wrap[data-color="crimson"] .aali_tm_resume .media .square'
            //     )
            // ),



//         )
//     ) );
