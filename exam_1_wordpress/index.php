<?php get_header(); ?>

        <!-- Start Home -->
        <section class="section home" id="home">
            <div class="container">
                <div class="row align-items-center mt-5 mt-lg-0">
                    <div class="col-lg-5">
                        <div class="home-heading">
                            <h6 class="text-uppercase text-muted"><?php echo get_theme_mod( 'subtitle_title'); ?></h6>
                            <h1 class="lh-sm"><?php echo get_theme_mod( 'banner_title_1'); ?> <span class="text-primary"><?php echo get_theme_mod( 'banner_title_2'); ?></span></h1>
                        </div>
                        <div class="home-btn d-grid d-sm-block gap-3">
                            <a class="btn btn-outline-primary rounded-pill me-sm-3" href="<?php echo get_theme_mod( 'button_link_1'); ?>"><?php echo get_theme_mod( 'button_title_1'); ?>
                                <span class="avatar-xs">
                                    <span class="avatar-title rounded-circle btn-icon">
                                        <i class="mdi mdi-chevron-double-right"></i>
                                    </span>
                                </span>
                            </a>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=".watchvideomodal">
                                <div class="d-inline-flex align-items-center">
                                    <div class="flex-grow-1 me-2">
                                        <span class="text-muted fs-14"><?php echo get_theme_mod( 'button_title_2'); ?></span>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="avatar-sm">
                                            <div class="avatar-title rounded-circle modal-btn">
                                                <i class="mdi mdi-play"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-lg watchvideomodal" data-keyboard="false"
                            tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                                <div class="modal-content home-modal">
                                    <div class="modal-header border-0">
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <video id="VisaChipCardVideo" class="video-box" controls>
                                        <source src="<?php echo get_theme_mod( 'button_2_video_link'); ?>"
                                            type="video/mp4">
                                        <!--Browser does not support <video> tag -->
                                    </video>
                                </div>
                            </div>
                        </div>
                        <!-- END MODAL -->
                        </div>
                    </div><!-- end col-->
                    <div class="col-lg-7">
                        <div class="ms-md-4">
                            <img class="home-img" src="<?php echo get_theme_mod( 'banner_image_home'); ?>" alt="">
                        </div>
                    </div><!-- end col-->
                    <div class="col-lg-12">
                        <div class="client-list">
                            <div class="row justify-content-around">

                              <?php $skill_catagory_image_section_setting = get_theme_mod( 'skill_catagory_image_section_setting'); ?>

                              <?php foreach ( $skill_catagory_image_section_setting as $setting ) : ?>

                              <?php  $skill_image =  wp_get_attachment_url($setting['image_skill_section']);  ?>

                                <div class="col-md-2 col-6">
                                    <img class="img-fluid" src="<?php echo $skill_image; ?>" alt="">
                                </div><!-- End col-->

                               <?php endforeach; ?>

                            </div><!-- End row-->
                        </div>
                    </div><!-- End col-->
                </div><!-- end row-->
            </div><!--end container-->
            <div class="container-fluid">
                <div class="row">
                    <div class="home-shape-arrow">
                        <a href="#features" class="mouse-down"><i class="mdi mdi-arrow-down arrow-icon text-dark h5"></i></a>
                    </div>
                </div><!--end row-->
            </div><!--end container-->
        </section>
        <!-- End Home -->

        <!-- Start features -->
        <section class="section features features-bg" id="features">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center mb-5">
                            <h3 class="heading"><?php echo get_theme_mod( 'feature_title'); ?></h3>
                            <p class="text-muted fs-17"><?php echo get_theme_mod( 'feature_description'); ?></p>
                        </div>
                    </div><!-- end col-->
                </div><!-- end row-->
                <div class="row">

                    <?php $feature_section_setting = get_theme_mod( 'feature_section_setting'); ?>

                    <?php foreach ( $feature_section_setting as $setting ) : ?>

                    <div class="col-lg-4 col-md-6">
                        <div class="card features-card">
                            <div class="card-body">
                                <div class="avatar-md mb-4">
                                    <div class="avatar-title bg-primary rounded-circle">
                                        <i class="mdi <?php echo $setting['icon_feature_section']; ?>"></i>
                                    </div>
                                </div>
                                <h5><?php echo $setting['feature_title_section']; ?></h5>
                                <p class="text-muted"><?php echo $setting['feature_description_section']; ?></p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <?php endforeach; ?>

                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!-- end Features -->

        <!-- start about -->
        <section class="section" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center mb-lg-5">
                            <h3 class="heading"><?php echo get_theme_mod( 'start_about_title'); ?></h3>
                        <p class="text-muted fs-17 mb-0"><?php echo get_theme_mod( 'start_about_description'); ?></p>
                        </div>
                    </div><!--  end col  -->
                </div><!--  end row  -->

                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="card border-0">
                            <img src="<?php echo get_theme_mod( 'start_about_item_image_1'); ?>" alt="">
                        </div>
                    </div><!--  end col  -->
                    <div class="col-lg-5">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="about-title">
                                    <span></span>
                                    <h6 class="text-uppercase"><?php echo get_theme_mod( 'start_about_item_sub_title_1'); ?></h6>
                                </div>
                                <h4><?php echo get_theme_mod( 'start_about_item_title_1'); ?></h4>
                                <p class="text-muted lh-base"><?php echo get_theme_mod( 'start_about_item_description_1'); ?></p>
                                <div class="about-link">
                                    <a href="<?php echo get_theme_mod( 'start_about_item_button_link_1'); ?>"><?php echo get_theme_mod( 'start_about_item_button_title_1'); ?> <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--  end col  -->
                </div><!--  end row  -->

                <div class="row my-4 align-items-center justify-content-between">
                    <div class="col-lg-5">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="me-lg-5">
                                    <div class="about-title">
                                        <span></span>
                                        <h6 class="text-uppercase"><?php echo get_theme_mod( 'start_about_item_sub_title_2'); ?></h6>
                                    </div>
                                        <h4><?php echo get_theme_mod( 'start_about_item_title_2'); ?></h4>
                                        <p class="text-muted"><?php echo get_theme_mod( 'start_about_item_description_2'); ?></p>
                                            <div class="about-link">
                                                <a href="<?php echo get_theme_mod( 'start_about_item_button_link_2'); ?>"><?php echo get_theme_mod( 'start_about_item_button_title_2'); ?> <i class="mdi mdi-arrow-right"></i></a>
                                            </div>
                                </div>
                            </div><!-- End card-body -->
                        </div><!-- End card -->
                    </div><!--  end col  -->
                    <div class="col-lg-6">
                        <img src="<?php echo get_theme_mod( 'start_about_item_image_2'); ?>" class="img-fluid" alt="">
                    </div><!--  end col  -->
                </div><!--  end row  -->

                <div class="row align-items-center justify-content-between pt-lg-5">
                    <div class="col-lg-6">
                        <div class="buy-about-img">
                            <img src="<?php echo get_theme_mod( 'start_about_item_image_3'); ?>" class="img-fluid" alt="">
                        </div>
                    </div><!-- End col -->
                    <div class="col-lg-5">
                        <div class="ms-lg-5">
                            <div class="about-title">
                                <span></span>
                                <h6 class="text-uppercase"><?php echo get_theme_mod( 'start_about_item_sub_title_3'); ?></h6>
                            </div>
                            <h4><?php echo get_theme_mod( 'start_about_item_title_3'); ?></h4>
                            <p class="text-muted"><?php echo get_theme_mod( 'start_about_item_description_3'); ?></p>
                                <div class="about-link">
                                    <a href="<?php echo get_theme_mod( 'start_about_item_button_link_3'); ?>"><?php echo get_theme_mod( 'start_about_item_button_title_3'); ?> <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                        </div>
                    </div><!-- End col -->
                </div><!-- End row -->

            </div><!--  end container  -->
        </section>
        <!--  end about  -->

        <!-- start counter -->
        <section class="bg-counter w-100" style="background-image: url(images/counter-bg.png);">  
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center">
                            <h3 class="heading"><?php echo get_theme_mod( 'counter_title'); ?></h3>
                            <p class="text-muted"><?php echo get_theme_mod( 'counter_description'); ?></p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="row justify-content-lg-between justify-content-center">

                   <?php $counter_section_setting = get_theme_mod( 'counter_section_setting'); ?>

                    <?php foreach ( $counter_section_setting as $setting ) : ?>

                    <div class="col-lg-3 col-md-6">
                        <div class="mt-5 text-center">
                            <h1 class="fw-semibold display-6 mb-3">
                                <span class="counter_value" data-target="<?php echo $setting['count_number_section']; ?>">0</span>
                                <span><?php echo $setting['count_title_section']; ?></span>
                            </h1>
                            <p class="mb-0 fs-17 text-muted"><?php echo $setting['count_description_section']; ?></p>
                        </div>
                    </div><!--end col-->

                    <?php endforeach; ?>

                   <!--  <div class="col-lg-3 col-md-6">
                        <div class="mt-5 text-center">
                            <h1 class="fw-semibold display-6 mb-3">
                                <span class="counter_value" data-target="250">0</span>
                                <span>+</span>
                            </h1>
                            <p class="mb-0 fs-17 text-muted">Times Internaational Award Winner</p>
                        </div>
                    </div> -->


                    <div class="col-lg-12">
                        <div class="d-flex justify-content-center">
                            <div class="mt-5">
                                <a class="btn btn-outline-dark" href="<?php echo get_theme_mod( 'counter_button_link'); ?>"><?php echo get_theme_mod( 'counter_button_title'); ?> <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--emd row-->
            </div><!--end container-->
        </section>
        <!-- end counter -->

        <!-- START pricing -->
        <section class="section pricing" id="pricing">
            <div class="bg-shape"></div>
            <div class="container">
                <div class="row gy-5 justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h3 class="heading"><?php echo get_theme_mod( 'pricing_title'); ?></h3>
                            <p class="text-muted"> <?php echo get_theme_mod( 'pricing_description'); ?></p>
                        </div>
                    </div><!-- End col -->
                    <div class="col-lg-4 col-md-6">
                        <span class="pricing-bg"></span>
                        <div class="card pricing-box border-light h-100 py-5 mx-1">
                            <div class="pb-4 text-center border-bottom">
                                <h6 class="text-info"><?php echo get_theme_mod( 'pricing_plan_title_1'); ?></h6>
                                <h1 class="mb-0 pt-2 fw-bold"><?php echo get_theme_mod( 'pricing_plan_price_1'); ?> <sub class="fs-14 fw-normal text-muted"><?php echo get_theme_mod( 'pricing_plan_month_1'); ?></sub></h1>
                            </div>
                            <div class="p-4 pb-0">
                                    <ul class="list-unstyled">

                            <?php $pricing_plan_title_subtitle_1 = get_theme_mod( 'pricing_plan_title_subtitle_1'); ?>

                             <?php foreach ( $pricing_plan_title_subtitle_1 as $setting ) : ?>
                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shring-0">
                                                    <i class="mdi mdi-circle-medium"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <span> <?php echo $setting['pricing_plan_repeater_title_1']; ?> </span>
                                                    <p class="text-muted fs-12 mb-0"> <?php echo $setting['pricing_plan_repeater_sub_title_1']; ?></p>
                                                </div>
                                            </div>
                                        </li>

                                <?php endforeach; ?>

                                    </ul>
                            </div>
                            <div class="mx-auto">
                                <a href="<?php echo get_theme_mod( 'pricing_plan_button_link_1'); ?>" class="btn btn-outline-dark"><?php echo get_theme_mod( 'pricing_plan_button_1'); ?></a>
                                </div>
                        </div><!-- End card -->
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card pricing-box border-light h-100 py-5 mx-1 active">
                            <div class="pb-4 text-center border-bottom">
                                <h6 class="text-danger"><?php echo get_theme_mod( 'pricing_plan_title_2'); ?></h6>
                                <h1 class="mb-0 pt-2 fw-bold"><?php echo get_theme_mod( 'pricing_plan_price_2'); ?> <sub class="fs-14 fw-normal text-muted"><?php echo get_theme_mod( 'pricing_plan_month_2'); ?></sub></h1>
                            </div>
                            <div class="p-4 pb-0">
                                    <ul class="list-unstyled">

                            <?php $pricing_plan_title_subtitle_2 = get_theme_mod( 'pricing_plan_title_subtitle_2'); ?>

                             <?php foreach ( $pricing_plan_title_subtitle_2 as $setting ) : ?>

                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shring-0">
                                                    <i class="mdi mdi-circle-medium"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <span> <?php echo $setting['pricing_plan_repeater_title_2']; ?> </span> 
                                                    <p class="text-muted fs-12 mb-0">  <?php echo $setting['pricing_plan_repeater_sub_title_2']; ?></p>
                                                </div>
                                            </div>
                                        </li>

                            <?php endforeach; ?>


                                    </ul>
                            </div>
                            <div class="mx-auto">
                                <a href="<?php echo get_theme_mod( 'pricing_plan_button_link_2'); ?>" class="btn btn-outline-dark active"><?php echo get_theme_mod( 'pricing_plan_button_2'); ?></a>
                              </div>
                        </div><!-- End card -->
                    </div>
                    <!-- col end -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card pricing-box border-light h-100 py-5 mx-1">
                            <div class="pb-4 text-center border-bottom">
                                <h6 class="text-primary"><?php echo get_theme_mod( 'pricing_plan_title_3'); ?></h6>
                                <h1 class="mb-0 pt-2 fw-bold"><?php echo get_theme_mod( 'pricing_plan_price_3'); ?> <sub class="fs-14 fw-normal text-muted"><?php echo get_theme_mod( 'pricing_plan_month_3'); ?></sub></h1>
                            </div>
                            <div class="p-4 pb-0">
                                    <ul class="list-unstyled">

                            <?php $pricing_plan_title_subtitle_3 = get_theme_mod( 'pricing_plan_title_subtitle_3'); ?>

                             <?php foreach ( $pricing_plan_title_subtitle_3 as $setting ) : ?>

                                        <li>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shring-0">
                                                    <i class="mdi mdi-circle-medium"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <span> <?php echo $setting['pricing_plan_repeater_title_3']; ?> </span>
                                                    <p class="text-muted fs-12 mb-0"> <?php echo $setting['pricing_plan_repeater_sub_title_3']; ?></p>
                                                </div>
                                            </div>
                                        </li>

                            <?php endforeach; ?>

                                    </ul>
                            </div>
                            <div class="mx-auto">
                                <a href="<?php echo get_theme_mod( 'pricing_plan_button_link_3'); ?>" class="btn btn-outline-dark"><?php echo get_theme_mod( 'pricing_plan_button_3'); ?></a>
                              </div>
                        </div><!-- End card -->
                    </div>
                    <!-- col end -->
                </div><!-- End row -->
            </div><!-- End container -->
        </section>
        <!-- END pricing -->

        <!-- testimonial -->
        <section class="section testimonial">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center mb-5">
                            <h3 class="heading"><?php echo get_theme_mod( 'testimonial_title'); ?></h3>
                        <p class="text-muted fs-17"><?php echo get_theme_mod( 'testimonial_description'); ?></p>
                        </div>
                    </div><!-- End col -->
                </div><!-- End row -->
                <div class="row justify-content-between">
                    <div class="col-lg-3">
                        <h4><?php echo get_theme_mod( 'testimonial_title_2'); ?></h4>
                        <p class="fs-14 text-muted"><?php echo get_theme_mod( 'testimonial_description_2'); ?></p>
                        <button class="carousel-control-prev d-none d-lg-block" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <i class="mdi mdi-arrow-left"></i>
                        </button>
                        <button class="carousel-control-next d-none d-lg-block" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <i class="mdi mdi-arrow-right"></i>
                        </button>
                    </div>
                    <div class="col-lg-8">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators mb-0">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                            </div>

                            <div class="carousel-inner">

                            <?php $testimonial_section_setting = get_theme_mod( 'testimonial_section_setting'); ?>

                             <?php foreach ( $testimonial_section_setting as $setting ) : ?>

                                  <?php  $icon_image =  wp_get_attachment_url($setting['testimonial_image_icon']);  ?>
                                   <?php  $image =  wp_get_attachment_url($setting['testimonial_image_section']);  ?>

                                   <?php if($setting['testimonial_checkbox'] == true) {?>

                                   <div class="carousel-item active">
                                        <div class="card testimonial-box h-100">
                                            <div class="card-body">
                                                <img class="mb-4" src="<?php echo $icon_image;  ?>" alt="">
                                                <p class="text-muted"><?php echo $setting['testimonial_description']; ?> </p>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img class="avatar-sm rounded-circle img-fluid" src="<?php echo $image;  ?>" alt="">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-0"> <?php echo $setting['testimonial_title']; ?></h6>
                                                        <p class="text-muted mb-0 fs-14"><?php echo $setting['testimonial_sub_title']; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                   <?php } else { ?>

                                   <div class="carousel-item">
                                        <div class="card testimonial-box h-100">
                                            <div class="card-body">
                                                <img class="mb-4" src="<?php echo $icon_image;  ?>" alt="">
                                                <p class="text-muted"><?php echo $setting['testimonial_description']; ?> </p>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <img class="avatar-sm rounded-circle img-fluid" src="<?php echo $image;  ?>" alt="">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-0"> <?php echo $setting['testimonial_title']; ?></h6>
                                                        <p class="text-muted mb-0 fs-14"><?php echo $setting['testimonial_sub_title']; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php } ?>


                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>
                
            </div><!-- End container -->
        </section>
        <!-- testimonial -->

        <!-- Start contact -->
        <section class="section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-5">
                            <h3 class="heading"><?php echo get_theme_mod( 'contact_title'); ?></h3>
                            <p class="text-muted mt-2"><?php echo get_theme_mod( 'contact_description'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-lg-6">
                        <?php $contact_form_shotcode = get_theme_mod( 'contact_form_name_section'); ?>

                        <?php echo do_shortcode( $contact_form_shotcode );  ?>
                        <!--end form-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-4">
                        <div class="contact-details mb-4 mb-lg-0">

                            <?php $contact_address_section_setting = get_theme_mod( 'contact_address_section_setting'); ?>

                             <?php foreach ( $contact_address_section_setting as $setting ) : ?>

                            <p class="mb-3"><i class="<?php echo $setting['icon_contact_section']; ?>"></i> <span class="fw-medium"><?php echo $setting['contact_info_section']; ?></span></p>

                             <?php endforeach; ?>
                        </div>
                        <!--end contact-details-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!-- End contect -->


<?php get_footer(); ?>