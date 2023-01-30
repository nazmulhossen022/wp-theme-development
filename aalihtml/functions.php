<?php


//css js add
require_once get_template_directory() . '/inc/custom_css_js.php';

//custom filds 
require_once get_template_directory() . '/inc/custom_filds.php';

//custom framework
require_once get_template_directory() . '/inc/frame_work.php';

function wpdocs_show_tags() {
    $post_tags = get_the_tags();
    $separator = ' , ';
    $output = '';
 
    if ( ! empty( $post_tags ) ) {
        foreach ( $post_tags as $tag ) {
            $output .= '<a href="' . esc_attr( get_tag_link( $tag->ID ) ) . '">' . __( $tag->name ) . '</a>' . $separator;
        }
    }
 
    return trim( $output, $separator );
}

//menu register
function theme_setup(){
	//thumbnails
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
    add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
    add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies
	add_theme_support( 'post-formats',['video', 'audio', 'Gallery'] );

	//register menu
	register_nav_menus( array(
   'primary' => __( 'Primary Menu', 'aali' ),
   'footer' => __( 'Footer Menu', 'aali' ),
    ) );
}
add_action('after_setup_theme', 'theme_setup');

//footer menu link class
function footer_add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'footer_link_class')) {
    $atts['class'] = $args->footer_link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'footer_add_menu_link_class', 1, 3 );

/**
 * Bootstrap Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/bootstrap-nave-walker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );




/**custom post type skill*/

function skill_add_home_page() {
    $labels = array(
        'name'                  => _x( 'Skill', 'Post type general name', 'aali' ),
        'singular_name'         => _x( 'Skill', 'Post type singular name', 'aali' ),
        'menu_name'             => _x( 'Skills', 'Admin Menu text', 'aali' ),
        'name_admin_bar'        => _x( 'Skill', 'Add New on Toolbar', 'aali' ),
        'add_new'               => __( 'Add New', 'aali' ),
        'add_new_item'          => __( 'Add New skill', 'aali' ),
        'new_item'              => __( 'New skill', 'aali' ),
        'edit_item'             => __( 'Edit skill', 'aali' ),
        'view_item'             => __( 'View skill', 'aali' ),
        'all_items'             => __( 'All skills', 'aali' ),
        // 'search_items'          => __( 'Search skills', 'aali' ),
        // 'parent_item_colon'     => __( 'Parent skills:', 'aali' ),
        // 'not_found'             => __( 'No skills found.', 'aali' ),
        // 'not_found_in_trash'    => __( 'No skills found in Trash.', 'aali' ),
        // 'featured_image'        => _x( 'Skill Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'aali' ),
        // 'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'aali' ),
        // 'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'aali' ),
        // 'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'aali' ),
        // 'archives'              => _x( 'Skill archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'aali' ),
        // 'insert_into_item'      => _x( 'Insert into skill', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'aali' ),
        // 'uploaded_to_this_item' => _x( 'Uploaded to this skill', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'aali' ),
        // 'filter_items_list'     => _x( 'Filter skills list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'aali' ),
        // 'items_list_navigation' => _x( 'Skills list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'aali' ),
        // 'items_list'            => _x( 'Skills list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'aali' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Skill custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'skill' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        //'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'Skill', $args );
}
add_action( 'init', 'skill_add_home_page' );

/**custom post type Portfolio*/

function portfolio_add_home_page() {
    $labels = array(
        'name'                  => _x( 'Portfolio', 'Post type general name', 'aali' ),
        'singular_name'         => _x( 'Portfolio', 'Post type singular name', 'aali' ),
        'menu_name'             => _x( 'Portfolios', 'Admin Menu text', 'aali' ),
        'name_admin_bar'        => _x( 'Portfolio', 'Add New on Toolbar', 'aali' ),
        'add_new'               => __( 'Add New', 'aali' ),
        'add_new_item'          => __( 'Add New Portfolio', 'aali' ),
        'new_item'              => __( 'New Portfolio', 'aali' ),
        'edit_item'             => __( 'Edit Portfolio', 'aali' ),
        'view_item'             => __( 'View Portfolio', 'aali' ),
        'all_items'             => __( 'All Portfolios', 'aali' ),
        // 'search_items'          => __( 'Search skills', 'aali' ),
        // 'parent_item_colon'     => __( 'Parent skills:', 'aali' ),
        // 'not_found'             => __( 'No skills found.', 'aali' ),
        // 'not_found_in_trash'    => __( 'No skills found in Trash.', 'aali' ),
        // 'featured_image'        => _x( 'Skill Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'aali' ),
        // 'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'aali' ),
        // 'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'aali' ),
        // 'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'aali' ),
        // 'archives'              => _x( 'Skill archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'aali' ),
        // 'insert_into_item'      => _x( 'Insert into skill', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'aali' ),
        // 'uploaded_to_this_item' => _x( 'Uploaded to this skill', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'aali' ),
        // 'filter_items_list'     => _x( 'Filter skills list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'aali' ),
        // 'items_list_navigation' => _x( 'Skills list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'aali' ),
        // 'items_list'            => _x( 'Skills list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'aali' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Portfolio custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'portfolio' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'Portfolio', $args );
}
add_action( 'init', 'portfolio_add_home_page' );

/**custom post type Testimonial*/

function testimonial_add_home_page() {
    $labels = array(
        'name'                  => _x( 'Testimonial', 'Post type general name', 'aali' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'aali' ),
        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'aali' ),
        'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'aali' ),
        'add_new'               => __( 'Add New', 'aali' ),
        'add_new_item'          => __( 'Add New Testimonial', 'aali' ),
        'new_item'              => __( 'New Testimonial', 'aali' ),
        'edit_item'             => __( 'Edit Testimonial', 'aali' ),
        'view_item'             => __( 'View Testimonial', 'aali' ),
        'all_items'             => __( 'All Testimonials', 'aali' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Testimonial custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor' ),
        //'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'Testimonial', $args );
}
add_action( 'init', 'testimonial_add_home_page' );

//
add_action( 'genesis_before', 'script_urls' );

function script_urls() {
?>
    <script type="text/javascript">
     var stylesheetDir = '<?= get_bloginfo("stylesheet_directory"); ?>';
    </script>
<?php
}