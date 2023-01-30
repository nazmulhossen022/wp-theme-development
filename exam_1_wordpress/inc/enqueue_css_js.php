<?php


function custom_css_js_enqueue(){
    
    //wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/fatblog.css', array(), '1.0.0', 'all' );
    

    wp_enqueue_style('bootstrap.min.css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all' );

    wp_enqueue_style('swiper-bundle.min.css', get_template_directory_uri() . '/css/swiper-bundle.min.css', array(), '1.0.0', 'all' );

    wp_enqueue_style('materialdesignicons.min.css', get_template_directory_uri() . '/css/materialdesignicons.min.css', array(), '1.0.0', 'all' );

    wp_enqueue_style('style.min.css', get_template_directory_uri() . '/css/style.min.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
 
    //wp_enqueue_script('customjs', get_template_directory_uri() . '/js/fatblog.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('counter-js', get_template_directory_uri() . '/js/counter.js', array(), '1.0.0', 'true' );

    wp_enqueue_script('swiper-bundle.min.js', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), '1.0.0', 'true' );

    wp_enqueue_script('bootstrap.bundle.min.js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '1.0.0', 'true' );

    wp_enqueue_script('contact.js', get_template_directory_uri() . '/js/contact.js', array(), '1.0.0', 'true' );

    wp_enqueue_script('app.js', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', 'true' );
}
add_action('wp_enqueue_scripts', 'custom_css_js_enqueue');
