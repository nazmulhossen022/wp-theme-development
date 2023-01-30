<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap v5.0.2 Landing Page Template" />
        <meta name="keywords" content="bootstrap v5.0.2, premium, marketing, multipurpose" />
        <meta content="Themesdesign" name="author" />


          <?php if ( is_user_logged_in() ) { 

           echo '<style type="text/css"> body.my-login-class { margin-top: 32px; } 
                   body.my-login-class nav#navbar { margin-top: 32px;}</style>'; 
                }
            else
              echo '';
        ?>


        <style type="text/css">

            body{
                color: <?php echo get_theme_mod( 'coor_body', '#1a3365' ); ?> !important;
            }
            /*p text color*/
            p.text-muted {
                        color: <?php echo get_theme_mod( 'coor_body_text', '#6e88a2' ); ?> !important;
                    }
                    /*span text color*/
            span.text-primary {
                    color: <?php echo get_theme_mod( 'coor_span_text', '#0ea6e9' ); ?> !important;
                }
                /*title beofore background color*/
                .heading::before {
                    background-color: <?php echo get_theme_mod( 'coor_hading_before_text', '#4D595E' ); ?> !important;
                }

               /* Banner css control*/
                      /*banner sub title*/
                        h6.text-muted,  span.text-muted{
                                    color: <?php echo get_theme_mod( 'coor_banner_sub_title_text', '#6e88a2' ); ?> !important;
                        }
                                /*button 1*/
                        .btn-outline-primary {
                            color: <?php echo get_theme_mod( 'coor_banner_button_1_text', '#0ea6e9' ); ?> !important;
                            border-color: <?php echo get_theme_mod( 'coor_banner_button_1_text', '#0ea6e9' ); ?> !important;
                        }
                        
                        .home-btn .btn.btn-outline-primary:hover{
                                color: <?php echo get_theme_mod( 'coor_banner_button_1_text_hover', '#0ea6e9' ); ?> !important;
                        }
                        .btn-outline-primary:hover{
                                background: <?php echo get_theme_mod( 'coor_banner_button_1_background_text_hover', '#0ea6e9' ); ?> !important;
                                border-color: <?php echo get_theme_mod( 'coor_banner_button_1_background_text_hover', '#0ea6e9' ); ?> !important;
                                box-shadow: 0px 8px 20px -6px rgb(14 166 233 / 60%);
                        }
                        .home .home-btn .btn:hover .btn-icon, .home .home-btn .btn:focus .btn-icon {
                            background-color: <?php echo get_theme_mod( 'coor_banner_button_1_text_hover', '#0ea6e9' ); ?> !important;
                            color: <?php echo get_theme_mod( 'coor_banner_button_1_background_text_hover', '#0ea6e9' ); ?> !important;
                        }
                          /*banner button 2*/
                        span.text-muted{
                                    color: <?php echo get_theme_mod( 'coor_banner_button_2_text', '#6e88a2' ); ?> !important;
                        }
                           /*banner icon color*/
                        .avatar-title {
                            background-color: <?php echo get_theme_mod( 'coor_banner_button_icon_background', '#0ea6e9' ); ?> !important;
                            color: <?php echo get_theme_mod( 'coor_banner_button_icon', '#fff' ); ?> !important;
                        }
                        .home-shape-arrow i, .home-shape-arrow i.text-dark{
                            background: <?php echo get_theme_mod( 'coor_banner_arro_icon_background', '#fff' ); ?> !important;
                            border: 1px solid <?php echo get_theme_mod( 'coor_banner_arro_icon', '#0ea6e9' ); ?> !important;
                            color: <?php echo get_theme_mod( 'coor_banner_arro_icon', '#0ea6e9' ); ?> !important;
                        }
                /* Banner End css control*/

                /*feature Css Control*/
                        .features-bg {
                                background-color: <?php echo get_theme_mod( 'feature_background_color', '#4D595E' ); ?> !important;
                            }
                         .features .features-card .avatar-md .avatar-title.bg-primary.rounded-circle {
                                    background-color: <?php echo get_theme_mod( 'coor_feature_icon_background', '#CFEDFB' ); ?> !important;
                                    color: <?php echo get_theme_mod( 'coor_feature_icon', '#4D595E' ); ?> !important;
                         }

                        .features .features-card .avatar-md .avatar-title.rounded-circle::before, .features .features-card .avatar-md .avatar-title.rounded-circle::after {
                            background-color: <?php echo get_theme_mod( 'coor_feature_icon_background_sadho', '#B8C8CF' ); ?> !important;
                        }

                 /*feature End Css Control*/

                 /*Next Section 1 css control*/
                     .about-link a {
                            color: <?php echo get_theme_mod( 'next_button_text_color', '#8798ab' ); ?> !important;
                      }
                      .about-link a::after {
                        background: <?php echo get_theme_mod( 'next_button_text_color', '#8798ab' ); ?> !important;
                        opacity: 0.4;
                      }
                 /*Next Section 1 End css control*/

                 /*Button Group css controll*/
                         .btn-outline-dark {
                            color: <?php echo get_theme_mod( 'group_button_text_color', '#1a3365' ); ?> !important;
                            border-color: <?php echo get_theme_mod( 'group_button_text_color', '#1a3365' ); ?> !important;
                        }
                       .btn-outline-dark:hover,.btn-outline-dark:active,.btn-outline-dark:not(:disabled):not(.disabled):active,.btn-outline-dark.active{
                            background: <?php echo get_theme_mod( 'group_button_text_hover_background_color', '#1a3365' ); ?> !important;
                            border-color: <?php echo get_theme_mod( 'group_button_text_hover_background_color', '#1a3365' ); ?> !important;
                            box-shadow: 0px 8px 20px -6px rgb(26 51 101 / 60%);
                            transform: translateY(-6px);
                        }
                        .pricing a.active {
                            border: 1px solid <?php echo get_theme_mod( 'group_button_text_hover_background_color', '#1a3365' ); ?> !important;
                            transform: translateY(-10px);
                        }
                        .btn.btn-outline-dark:active, .btn.btn-outline-dark:hover,.btn.btn-outline-dark.active{
                            color: #fff !important;
                        }
                /*Button Group css controll*/
                        .pricing div.pricing-box:hover {
                            transform: translateY(-10px);
                            border: 1px solid <?php echo get_theme_mod( 'price_box_border_color', '#1a3365' ); ?> !important;
                            transition: all .9s;
                        }
                        .pricing div.active {
                            border: 1px solid <?php echo get_theme_mod( 'price_box_border_color', '#1a3365' ); ?> !important;
                            transform: translateY(-10px);
                        }
                        #pricing .text-info {
                            color: <?php echo get_theme_mod( 'group_price_box_text_1_color', '#49c6e5' ); ?> !important;
                        }
                        #pricing .text-danger {
                            color: <?php echo get_theme_mod( 'group_price_box_text_2_color', '#ef4b4b' ); ?> !important;
                        }
                        #pricing .text-primary {
                            color: <?php echo get_theme_mod( 'group_price_box_text_3_color', '#0ea6e9' ); ?> !important;
                        }
               /*Pricing Box End css controll*/

                /*Testimonial css controll*/
                .testimonial .testimonial-box {
                    background-color: <?php echo get_theme_mod( 'testimonial_background_color', 'rgba(14,166,233,.08)' ); ?> !important;
                }
                .carousel-control-next, .carousel-control-prev {
                    background-color: <?php echo get_theme_mod( 'testimonial_arrow_icon_background_color', '#0ea6e9' ); ?> !important;
                }
                .carousel-control-next, .carousel-control-prev {
                    color: <?php echo get_theme_mod( 'testimonial_arrow_icon_color', '#0ea6e9' ); ?> !important;
                }
                /*Testimonial End css controll*/

                /*Theme Link Color*/
                .navbar-custom .navbar-collapse .navbar-nav .nav-item .nav-link {
                    color: <?php echo get_theme_mod( 'theme_link_text_color', '#1a3365' ); ?> !important;
                }
                .navbar-custom .navbar-collapse .navbar-nav .nav-item .nav-link.active {
                    color: <?php echo get_theme_mod( 'theme_link_text_hover_color', '#0eb5ff' ); ?> !important;
                }
                .navbar-custom .navbar-collapse .navbar-nav .nav-item .nav-link::before {
                    background-color: <?php echo get_theme_mod( 'theme_link_text_hover_border_color', '#0ea6e9' ); ?> !important;
                }
                .navbar-custom .navbar-collapse .nav-btn {
                    background-color: <?php echo get_theme_mod( 'theme_link_button_text_background_color', '#0ea6e9' ); ?> !important;
                    border-color: <?php echo get_theme_mod( 'theme_link_button_text_background_color', '#0ea6e9' ); ?> !important;
                    color: <?php echo get_theme_mod( 'theme_link_button_text_color', '#fff' ); ?> !important;
                    
                }
                .navbar-custom .navbar-collapse a.btn-primary:hover{
                        box-shadow: 0px 8px 20px -6px <?php echo get_theme_mod( 'theme_link_button_text_background_box_shadow_color', 'rgb(14 166 233 / 60%)' ); ?> !important;
                    }
                /*End Theme Link Color*/

                /*Footer css controll*/
                footer.bg-footer {
                        background-color: <?php echo get_theme_mod( 'footer_background_color', 'rgba(14,166,233,.04)' ); ?> !important;
                    }
                    /*.bg-footer .footer-link a {
                        color: #1a3365;
                        line-height: 38px;
                        transition: all .5s;
                    }*/
                    .bg-footer .footer-link a:hover {
                        color: <?php echo get_theme_mod( 'footer_text_hover_color', '#0ea6e9' ); ?> !important;
                    }
                /*Footer End css controll*/
                /*Copy Right css controll*/
                .footer-alt p.text-white {
                    color: <?php echo get_theme_mod( 'copygight_footer_text_color', '#fff' ); ?> !important;
                }
                .footer-alt {
                        background-color: <?php echo get_theme_mod( 'copygight_footer_background_color', '#0ea6e9' ); ?> !important;
                    }
                /*Copy Right End css controll*/

                /*Back To Top css controll*/
                #back-to-top {
                    background: <?php echo get_theme_mod( 'back_to_top_icon_background_color', '#1a3365' ); ?> !important;
                    color: <?php echo get_theme_mod( 'back_to_top_icon_color', '#fff' ); ?> !important;
                }
                #back-to-top:hover {
                    background-color: <?php echo get_theme_mod( 'back_to_top_icon_background_hover_color', '#0ea6e9' ); ?> !important;
                }
                /*Back To Top End css controll*/

        </style>
    
    <?php wp_head(); ?>
        
    </head>
    <body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71" <?php  body_class('my-login-class'); ?>>
        
        <nav class="navbar navbar-expand-lg fixed-top navbar-white navbar-custom sticky" id="navbar">
            <div class="container">
    
                <!-- LOGO -->
                <a class="navbar-brand text-uppercase" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_theme_mod( 'logo_image_theme'); ?>" alt="" height="25">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mdi mdi-menu"></span>
                </button>




                <div class="collapse navbar-collapse" id="navbarCollapse">
                        <?php
                           wp_nav_menu( array(
                               'theme_location'    => 'primary',
                               'depth'             => 2,
                               'container'         => '',
                               //'container_class'   => 'collapse navbar-collapse',
                               //'container_id'      => 'navbarCollapse',
                               'menu_class'        => 'navbar-nav mx-auto',
                               'menu_id'           => 'navbar-navlist',
                               'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                               'walker'            => new WP_Bootstrap_Navwalker(),
                            ) );
                        ?>
                   <!--  <ul class="navbar-nav mx-auto" id="navbar-navlist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul> -->
                 <div class="d-flex align-items-center">
                    <div class="me-5 flex-shrink-0 d-none d-lg-block">
                        <a class="btn btn-primary nav-btn" href="<?php echo get_theme_mod( 'sinup_menu_link'); ?>">
                            <?php echo get_theme_mod( 'sinup_menu_text'); ?>
                        </a>
                    </div>
                </div>
                </div>

            </div>
        </nav>
        <!-- End Navbar -->