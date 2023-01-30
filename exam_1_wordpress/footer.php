
        <!-- START FOOTER -->
        <footer class="section bg-footer">
            <div class="container">
                <div class="row g-sm-4">
                    <div class="col-lg-12">
                        <div class="mb-3 mb-sm-0">
                            <img src="images/logo-dark.png" class="logo-dark" alt="" height="22">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <h6 class="text-uppercase fw-semibold"><?php echo get_theme_mod( 'footer_1_title'); ?></h6>
                        <ul class="list-unstyled footer-link mt-3 mb-0 fs-14">

                            <?php $contact_footer_1_section_setting = get_theme_mod( 'contact_footer_1_section_setting'); ?>

                             <?php foreach ( $contact_footer_1_section_setting as $setting ) : ?>

                            <li><a href="<?php echo $setting['footer_1_link_info_section']; ?>"><?php echo $setting['footer_1_info_title_section']; ?></a></li>

                            <?php endforeach; ?>

                        </ul>
                    </div><!-- End col -->

                    <div class="col-lg-3 col-md-4 col-6">
                        <h6 class="text-uppercase fw-semibold"><?php echo get_theme_mod( 'footer_2_title'); ?></h6>
                        <ul class="list-unstyled footer-link mt-3 mb-0 fs-14">
                            <?php $contact_footer_2_section_setting = get_theme_mod( 'contact_footer_2_section_setting'); ?>

                             <?php foreach ( $contact_footer_2_section_setting as $setting ) : ?>

                            <li><a href="<?php echo $setting['footer_2_link_info_section']; ?>"><?php echo $setting['footer_2_info_title_section']; ?></a></li>

                            <?php endforeach; ?>
                        </ul>
                    </div><!-- End col -->

                    <div class="col-lg-3 col-md-4 col-6 d-none d-sm-block">
                        <h6 class="text-uppercase fw-semibold"><?php echo get_theme_mod( 'footer_3_title'); ?></h6>
                        <ul class="list-unstyled footer-link mt-3 mb-0 fs-14">
                            <?php $contact_footer_3_section_setting = get_theme_mod( 'contact_footer_3_section_setting'); ?>

                             <?php foreach ( $contact_footer_3_section_setting as $setting ) : ?>

                            <li><a href="<?php echo $setting['footer_3_link_info_section']; ?>"><?php echo $setting['footer_3_info_title_section']; ?></a></li>

                            <?php endforeach; ?>
                        </ul>
                    </div><!-- End col -->
                    <div class="col-lg-3 col-10">
                        <h6 class="text-uppercase fw-semibold"><?php echo get_theme_mod( 'footer_4_title_1'); ?>
                            <span class="text-primary text-uppercase fs-18"><?php echo get_theme_mod( 'footer_4_title_2'); ?></span></h6>
                            <p class="mt-md-3 pt-3 pt-md-2 fs-14">Semper nibh a dignissim Integer cursus tempsed.</p>
                        <div class="footer-subcribe text-end shadow-sm d-inline-block">

                            <?php $shotcode_footer_4 = get_theme_mod( 'footer_4_shodcode'); ?>

                           <?php echo do_shortcode( $shotcode_footer_4 );  ?>

                        </div>
                            <div class="mt-md-4 mt-3">
                                <ul class="list-inline footer-social mb-0">

                               <?php $footer_colam_4_sosial_link = get_theme_mod( 'footer_colam_4_sosial_link'); ?>

                                <?php foreach ( $footer_colam_4_sosial_link as $setting ) : ?>

                                    <li class="list-inline-item">
                                        <a href="<?php echo $setting['feature_4_sosial_link_section']; ?>" class="rounded">
                                            <i class="<?php echo $setting['icon_footer_4_sosial_section']; ?>"></i>
                                        </a>
                                    </li>

                                <?php endforeach; ?>

                                </ul>
                            </div>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </footer>
        <!-- END FOOTER -->

        <!-- FOOTER-ALT -->
        <div class="footer-alt pt-3 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-white">©
                                <script>document.write(new Date().getFullYear())</script> <?php echo get_theme_mod( 'copy_right_footer_title'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END FOOTER-ALT -->

        <!--start back-to-top-->
        <button onclick="topFunction()" id="back-to-top">
            <i class="mdi mdi-arrow-up"></i>
        </button>
        <!--end back-to-top-->

        <script>
            var element = document.querySelector(".wpcf7-form");
            element.classList.add("contact-form");
            document.getElementsByTagName("form")[0].setAttribute("id", "myForm"); 
        </script>

        <?php wp_footer(); ?>

    </body>
</html>