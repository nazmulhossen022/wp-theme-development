<?php get_header(); ?>
      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="contents text-center">
                <h2 class="head-title wow fadeInUp"><?php echo get_theme_mod( 'banner_title_1'); ?> <br> <?php echo get_theme_mod( 'banner_title_2'); ?></h2>
                <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                  <a href="<?php echo get_theme_mod( 'banner_button_link'); ?>" class="btn btn-common"><?php echo get_theme_mod( 'banner_button_text'); ?></a>
                </div>
              </div>
              <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
                <img class="img-fluid" src="<?php echo get_theme_mod( 'banner_image'); ?>" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Feature Section Start -->
    <div id="feature">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="text-wrapper">
              <div>
                <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s"><?php echo get_theme_mod( 'about_title_section'); ?></h2>
                <p class="mb-4"><?php echo get_theme_mod( 'about_description_section'); ?></p>
                <a href="<?php echo get_theme_mod( 'about_button_link'); ?>" class="btn btn-common"><?php echo get_theme_mod( 'about_button_title'); ?></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 padding-none feature-bg">
            <div class="feature-thumb">

              <?php
              $about_defult = [
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
                          ];

                $about_seating = get_theme_mod( 'about_repeater_setting', $about_defult );

               ?>

                <?php foreach( $about_seating as $setting ) : ?>

              <div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="icon">
                  <i class="<?php echo $setting['icon']; ?>"></i>
                </div>
                <div class="feature-content">
                  <h3><?php echo $setting['title']; ?></h3>
                  <p><?php echo $setting['description']; ?></p>
                </div>
              </div>

              <?php endforeach; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature Section End -->

    <!-- Services Section Start -->
    <section id="services" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod( 'our_service_title_section'); ?></h2>
          <p><?php echo get_theme_mod( 'our_service_description_section'); ?></p>
        </div>
        <div class="row">

           <?php
              $service_defaults = [
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
                                ];

                $service_settings = get_theme_mod( 'service_repeater_setting', $service_defaults );

               ?>

                <?php foreach( $service_settings as $setting ) : ?>

                  <!-- Services item -->
                  <div class="col-md-6 col-lg-4 col-xs-12">
                    <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
                      <div class="icon">
                        <i class="<?php echo $setting['icon']; ?>"></i>
                      </div>
                      <div class="services-content">
                        <h3><a href="<?php echo $setting['title_link']; ?>"><?php echo $setting['title']; ?></a></h3>
                        <p><?php echo $setting['description']; ?></p>
                      </div>
                    </div>
                  </div>

           <?php endforeach; ?>

          <!-- Services item -->

        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Start Video promo Section -->
    <section class="video-promo section-padding" style="background: url(<?php echo get_theme_mod( 'video_img_url'); ?>);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="video-promo-content text-center wow fadeInUp" data-wow-delay="0.3s">
              <a href="<?php echo get_theme_mod( 'video_link_setting'); ?>" class="video-popup"><i class="<?php echo get_theme_mod( 'video_promo_icon'); ?>"></i></a>
              <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms"><?php echo get_theme_mod( 'video_promo_title'); ?></h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Video Promo Section -->

    <!-- Team Section Start -->
    <section id="team" class="section-padding text-center">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod( 'team_title_section'); ?></h2>
          <p><?php echo get_theme_mod( 'oteam_description_section'); ?></p>
        </div>
        <div class="row">

          <?php
              $team_defaults = [
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
                            ];

                $team_settings = get_theme_mod( 'team_repeater_setting', $team_defaults );

               ?>

                <?php foreach( $team_settings as $setting ) : ?>
                  <?php $img_url = wp_get_attachment_url($setting['image']); ?>

          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- Team Item Starts -->
            <div class="team-item text-center wow fadeInRight" data-wow-delay="0.3s">
              <div class="team-img">
                <img class="img-fluid" src="<?php echo $img_url; ?>" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="<?php echo $setting['facrbook_link']; ?>"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="<?php echo $setting['twitter_link']; ?>"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="<?php echo $setting['instagram_link']; ?>"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#"><?php echo $setting['title']; ?></a></h3>
                <p><?php echo $setting['sub_title']; ?></p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          
 <?php endforeach; ?>

        </div>
      </div>
    </section>
    <!-- Team Section End -->

    <!-- Counter Section Start -->
    <section id="counter" class="section-padding">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="row">
              <?php
              $count_defaults = [
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
                            ];

                $count_settings = get_theme_mod( 'counter_repeater_setting', $count_defaults );

               ?>

                <?php foreach( $count_settings as $setting ) : ?>

                    <!-- Start counter -->
                    <div class="col-lg-3 col-md-6 col-xs-12">
                      <div class="counter-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-o"><i class="<?php echo $setting['count_icon']; ?>"></i></div>
                        <div class="fact-count">
                          <h3><span class="counter"><?php echo $setting['count_number']; ?></span></h3>
                          <p><?php echo $setting['count_title']; ?></p>
                        </div>
                      </div>
                    </div>
                    <!-- End counter -->

             <?php endforeach; ?>


            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Section End -->

    <!-- Pricing section Start --> 
    <section id="pricing" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod( 'pricing_title_section'); ?></h2>
          <p><?php echo get_theme_mod( 'pricing_description_section'); ?></p>
        </div>
        <div class="row">
<?php
           

                $pricing_settings_sections = get_theme_mod( 'pricing_repeater_setting');

               ?>

                <?php foreach( $pricing_settings_sections as $setting ) : ?>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="table wow fadeInLeft" data-wow-delay="1.2s">
              <div class="title" style="background:<?php echo $setting['title_background']; ?>">
                <h3><?php echo $setting['title_text']; ?></h3>
              </div>
              <div class="pricing-header">
                <p class="price-value"><?php echo $setting['price_title']; ?><span>/<?php echo $setting['price_month']; ?></span></p>
              </div>
              <ul class="description">
                <li><?php echo $setting['sub_title']; ?></li>
                <li>24/7 Tech Suport</li>
                <li>Operational Excellence</li>
                <li>Business Idea Ready</li>
                <li>2 Database</li>
                <li>Customer Support</li>
              </ul>
              <button class="btn btn-common"><?php echo $setting['button_title']; ?></button>
            </div> 
          </div>

             <?php endforeach; ?>
        </div>
      </div>
    </section>
    <!-- Pricing Table Section End -->

    <div class="skill-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
            <?php $persentage_image = get_theme_mod( 'pricing_image_section', '' ); ?>
            <img class="img-fluid" src="<?php echo esc_url( $persentage_image ); ?>" alt="" >
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 info wow fadeInRight" data-wow-delay="0.3s">
            <div class="site-heading">
              <h2 class="section-title"><?php echo get_theme_mod( 'pricing_title_section'); ?></h2>
              <p>
                <?php echo get_theme_mod( 'pricing_description_section'); ?>
              </p>
            </div>
            <div class="skills-section">
              <!-- Progress Bar Start -->
              <?php
           

                $skill_settings_sections = get_theme_mod( 'skill_repeater_setting');

               ?>

                <?php foreach( $skill_settings_sections as $setting ) : ?>
              <div class="progress-box">
                <h5 style="color: <?php echo $setting['title_color']; ?>;"><?php echo $setting['title_text']; ?><span class="pull-right"> <?php echo $setting['skill_persent']; ?>%</span></h5>
                <div class="progress" style="opacity: 1; left: 0px;">
                  <div class="progress-bar" role="progressbar" data-width="<?php echo $setting['skill_persent']; ?>" style="width: <?php echo $setting['skill_persent']; ?>%; background: <?php echo $setting['skill_color']; ?>;"></div>
                </div>
              </div>

               <?php endforeach; ?>

              <!-- End Progressbar -->
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Portfolio Section -->
    <section id="portfolios" class="section-padding">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod( 'our_work_title_section'); ?></h2>
          <p><?php echo get_theme_mod( 'our_work_description_section'); ?></p>
        </div>

        <!-- Portfolio Recent Projects -->
        <div id="portfolio" class="row">

 <?php
  // $our_works_defaults = [
  //                                 [
  //                                   'port_image' => get_template_directory_uri().'/assets/img/about/img-1.jpg',
  //                                   'title' => esc_html__( 'Title Name', 'kirki' ),
  //                                     'image_link' => '#',
  //                                 ],
  //                      ];
           

                 //$our_works_repeater_setting = get_theme_mod( 'our_works_repeater_setting', $our_works_defaults );
 $our_works_repeater_setting = get_theme_mod( 'our_works_repeater_setting');

               ?>

                <?php //foreach( $our_works_repeater_setting as $setting ) :
                      //$port_image = wp_get_attachment_url($setting['port_image']);
                ?>

         <div class="col-lg-4 col-md-6 col-xs-12 mix development print">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="<?php //echo $port_image; ?>" alt="" />  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="<?php //echo $port_image; ?>"><i class="lni-eye item-icon"></i></a>
                      </div>
                      <a href="<?php //echo $setting['image_link']; ?>"><?php //echo $setting['title']; ?></a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div>

       <?php //endforeach; ?>

          <!-- <div class="col-lg-4 col-md-6 col-xs-12 mix print design">
            <div class="portfolio-item">
              <div class="shot-item">
                <img src="assets/img/portfolio/img-6.jpg" alt="" />  
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <a class="lightbox" href="assets/img/portfolio/img-6.jpg"><i class="lni-eye item-icon"></i></a>
                      </div>
                      <a href="#">User Friendly</a>
                    </div>
                  </div>
                </div>
              </div>               
            </div>
          </div> -->


        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 
  
    <!-- Testimonial Section Start -->
    <section id="testimonial" class="testimonial section-padding">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
               <?php
                $testimonial_repeater_setting = get_theme_mod( 'test_repeater_setting');
               ?>

                <?php foreach( $testimonial_repeater_setting as $setting ) :
                      
                ?>
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <?php //$test_images = wp_get_attachment_url($setting['test_image']); ?>
                    <img src="<?php //echo $test_images; ?>" alt="">
                    <img src=<?php get_template_directory_uri().'/assets/img/testimonial/img5.png' ?>>
                  </div>
                  <div class="info">
                    <h2><a href="#"><?php echo $setting['link_text']; ?></a></h2>
                    <h3><a href="#">B<?php echo $setting['link_url']; ?></a></h3>
                  </div>
                  <div class="content">
                    <p class="description"><?php echo $setting['link_url']; ?></p>
                  </div>
                </div>
              </div>

          <?php endforeach; ?>



              <!-- <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img5.png" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#">Jason A.</a></h2>
                    <h3><a href="#">Designer</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                </div>
              </div> -->

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End -->  

    <!-- Blog Section -->
    <section id="blog" class="section-padding">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Latest blog</h2>
          <p>A desire to help and empower others between community contributors in technology <br> began to grow in 2020.</p>
        </div>
        <div class="row">

          <?php
           $i = 1;

           if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                if ($i == 4) {  break; }
            ?>

          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper wow fadeInLeft" data-wow-delay="0.3s">
              <div class="blog-item-img">
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <h3>
                <a href="single-post.html"><?php the_title(); ?></a>
                </h3>
                <p>
                <?php
                  $expart = post_excerpt(15);
                  $content = post_content(15);
                 if($expart){
                  echo $expart;
                } else {
                  echo $content;
                } ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <?php
                  $i++;
                  endwhile;
                  endif; 
          ?>


        </div>
      </div>
    </section>
    <!-- blog Section End -->

    <!-- Clients Section Start -->
    <div id="clients" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">NOTABLE CLIENTS</h2>
          <p>Over the last 20 years, we have helped and guided organisations to achieve outstanding results</p>
        </div>
        <div class="row text-align-">
          <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
            <div class="client-item-wrapper">
              <img class="img-fluid" src="assets/img/clients/img1.png" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
            <div class="client-item-wrapper">
              <img class="img-fluid" src="assets/img/clients/img2.png" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.9s">
            <div class="client-item-wrapper">
              <img class="img-fluid" src="assets/img/clients/img3.png" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="1.2s">
            <div class="client-item-wrapper">
              <img class="img-fluid"  src="assets/img/clients/img4.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Clients Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="section-padding">    
      <div class="container">
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-block">
              <form id="contactForm">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                      <div class="help-block with-errors"></div>
                    </div>                                 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                      <div class="help-block with-errors"></div>
                    </div> 
                  </div>
                   <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <textarea class="form-control" id="message" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="submit-button">
                      <button class="btn btn-common" id="form-submit" type="submit">Send Message</button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div> 
                      <div class="clearfix"></div> 
                    </div>
                  </div>
                </div>            
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-right-area wow fadeIn">
              <div class="contact-title">
                <h1>We're a friendly bunch..</h1>
                <p>We create projects for companies and startups with a passion for quality</p>
              </div>
              <h2>Contact Us</h2>
              <div class="contact-right">
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-map-marker"></i>
                  </div>
                  <p>ADDRESS: 28 Green Tower, New York City, USA</p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-envelope"></i>
                  </div>
                  <p><a href="#">Email:  contact@stuck.com</a></p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-phone-handset"></i>
                  </div>
                  <p><a href="#">Phone:  +84 846 250 592</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </section>
    <!-- Contact Section End -->
    
   <?php get_footer(); ?>