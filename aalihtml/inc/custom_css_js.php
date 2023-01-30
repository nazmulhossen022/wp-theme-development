<?php


function custom_css_js_enqueue(){
    
    //wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/fatblog.css', array(), '1.0.0', 'all' );
    $theme_name = wp_get_theme();
    $theme_version = $theme_name->get('aali');
    
    //wp css link
    wp_enqueue_style('google-fonbts-1', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
    wp_enqueue_style('google-fonbts-2', 'https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
    wp_enqueue_style('google-fonbts-3', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    
    wp_enqueue_style('plugins.css', get_template_directory_uri() . '/css/plugins.css', array(), $theme_version, 'all' );
    wp_enqueue_style('dark.css', get_template_directory_uri() . '/css/dark.css', array(), $theme_version, 'all' );
    wp_enqueue_style('colors.css', get_template_directory_uri() . '/css/colors.css', array(), $theme_version, 'all' );
    wp_enqueue_style('style.css', get_template_directory_uri() . '/css/style.css', array(), $theme_version, 'all' );

    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
 
    //wp_enqueue_script('customjs', get_template_directory_uri() . '/js/fatblog.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/js/jquery.js', array(), $theme_version, 'true' );
    wp_enqueue_script('plugins-js', get_template_directory_uri() . '/js/plugins.js', array(), $theme_version, 'true' );
    wp_enqueue_script('init-js', get_template_directory_uri() . '/js/init.js', array(), $theme_version, 'true' );

}
add_action('wp_enqueue_scripts', 'custom_css_js_enqueue');
