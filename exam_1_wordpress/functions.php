<?php 

//css js add
require_once "inc/enqueue_css_js.php";

//kirki_framwork
require_once "framwork/theme_function.php";

//menu register
function register_menu(){
        add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats',['video', 'audio', 'Gallery'] );
	register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'exam1' ),
    ) );
}
add_action('after_setup_theme', 'register_menu');

/**
 * Bootstrap Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/bootstrap-nave-walker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

