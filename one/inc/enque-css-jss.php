<?php


function one_theme_scripts() {
	//css
    wp_enqueue_style( 'customm-css', get_stylesheet_uri() );
    //Bootstrap CSS
    wp_enqueue_style( 'bootstrap-main-css', get_template_directory_uri(). '../assets/css/bootstrap.min.css', array(), '1.0.0', 'all');

    // <!-- Icon -->
    wp_enqueue_style( 'line-icons', get_template_directory_uri(). '../assets/fonts/line-icons.css', array(), '1.0.0', 'all');

    // <!-- Slicknav -->
    wp_enqueue_style( 'slicknav', get_template_directory_uri(). '../assets/css/slicknav.css', array(), '1.0.0', 'all');

    // <!-- Owl carousel -->
    wp_enqueue_style( 'owl-carousel-min', get_template_directory_uri(). '../assets/css/owl.carousel.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'owl-theme', get_template_directory_uri(). '../assets/css/owl.theme.css', array(), '1.0.0', 'all');
    
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri(). '../assets/css/magnific-popup.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'nivo-lightbox', get_template_directory_uri(). '../assets/css/nivo-lightbox.css', array(), '1.0.0', 'all');

    // <!-- Animate -->
    wp_enqueue_style( 'animate', get_template_directory_uri(). '../assets/css/animate.css', array(), '1.0.0', 'all');

    // <!-- Main Style -->
    wp_enqueue_style( 'main-css', get_template_directory_uri(). '../assets/css/main.css', array(), '1.0.0', 'all');

    // <!-- Responsive Style -->
    wp_enqueue_style( 'style-name', get_template_directory_uri(). '../assets/css/responsive.css', array(), '1.0.0', 'all');
   // wp_enqueue_style( 'style-name', get_template_directory_uri(). '', array(), '1.0.0', 'all');


    //js

    //wp_enqueue_script( 'script-name', get_template_directory_uri() . '../', array('jQuery'), '1.0.0', true );
       //<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    //wp_enqueue_script( 'script-name', get_template_directory_uri() . '../assets/js/jquery-min.js', array('jQuery'), '1.0.0', true );

    wp_enqueue_script( 'popper-min', get_template_directory_uri() . '../assets/js/popper.min.js', array('jQuery'), '1.0.0', true );

    wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '../assets/js/bootstrap.min.js', array('jQuery'), '1.0.0', true );

    wp_enqueue_script( 'owl-carousel-min', get_template_directory_uri() . '../assets/js/owl.carousel.min.js', array('jQuery'), '1.0.0', true );

    wp_enqueue_script( 'query-mixitup', get_template_directory_uri() . '../assets/js/jquery.mixitup.js', array('jQuery'), '1.0.0', true );

    wp_enqueue_script( 'wow', get_template_directory_uri() . '../assets/js/wow.js', array('jQuery'), '1.0.0', true );

    wp_enqueue_script( 'jquery-nav', get_template_directory_uri() . '../assets/js/jquery.nav.js', array('jQuery'), '1.0.0', true );

    wp_enqueue_script( 'scrolling-nav', get_template_directory_uri() . '../assets/js/scrolling-nav.js', array('jQuery'), '1.0.0', true );

    wp_enqueue_script( 'jquery-easing-min', get_template_directory_uri() . '../assets/js/jquery.easing.min.js', array('jQuery'), '1.0.0', true );

    wp_enqueue_script( 'jquery-counterup-min', get_template_directory_uri() . '../assets/js/jquery.counterup.min.js', array('jQuery'), '1.0.0', true );
  
    wp_enqueue_script( 'nivo-lightbox', get_template_directory_uri() . '../assets/js/nivo-lightbox.js', array('jQuery'), '1.0.0', true );

    wp_enqueue_script( 'jquery-magnific-popup-min', get_template_directory_uri() . '../assets/js/jquery.magnific-popup.min.js', array('jQuery'), '1.0.0', true );

    wp_enqueue_script( 'waypoints-min', get_template_directory_uri() . '../assets/js/waypoints.min.js', array('jQuery'), '1.0.0', true );

    wp_enqueue_script( 'jquery-slicknav', get_template_directory_uri() . '../assets/js/jquery.slicknav.js', array('jQuery'), '1.0.0', true );

    wp_enqueue_script( 'main-js', get_template_directory_uri() . '../assets/js/main.js', array('jQuery'), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'one_theme_scripts' );
   