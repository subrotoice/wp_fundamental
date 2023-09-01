<?php
// WP Fundamental theme supports
if ( ! function_exists( 'wp_fundamental_theme_supports' ) ) :
function wp_fundamental_theme_supports(){
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'post-image', 400, 400, true );
    
	register_nav_menus( array(
		'primary'   => __( 'Primary navigation', 'wp_fundamental' ),
	) );  
	register_nav_menu( 'secondary_menu', __( 'Secondary Menu', 'wp_fundamental' ) );	
}
endif;
add_action('after_setup_theme', 'wp_fundamental_theme_supports');

// Calling Theme files
function wp_fundamental_theme_files(){
    
    wp_enqueue_style( 'wp_fundamental-theme-bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css', array(), '3.3.4' );
    wp_enqueue_style( 'wp_fundamental-theme-fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array(), '4.3.0' );
	wp_enqueue_style( 'wp_fundamental-theme-comments', get_template_directory_uri() . '/css/wordpress_comments.css', array(), '1.0' );
    wp_enqueue_style( 'wp_fundamental-theme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'wp_fundamental-theme-responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0' );
    
    
	if (!is_admin()) {
		wp_deregister_script('jquery');
		// or load the Google API copy in the footer
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js', false, '3.0.0', true);
		wp_enqueue_script('jquery');
	}
    wp_enqueue_script( 'ppm-quickstart-bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array(), '20120206', true );
    wp_enqueue_script( 'ppm-quickstart-main-js', get_template_directory_uri() . '/js/main.js', array(), '20120206', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'wp_fundamental_theme_files'); 
function excerpt($num) {
$limit = $num+1;
$excerpt = explode(' ', get_the_excerpt(), $limit);
array_pop($excerpt);
$excerpt = implode(" ",$excerpt)."...";
echo $excerpt;
}
add_action('excerpt_added', 'excerpt'); 
function wp_fundamental_ie_compitable_elements(){
    ?>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" type="image/png" href=""/>
    <?php
}
add_action('wp_head', 'wp_fundamental_ie_compitable_elements');
// Includes
require_once dirname( __FILE__ ) .'/cs-framework/cs-framework.php';
require_once('inc/wp_bootstrap_navwalker.php'); // Register Custom Navigation Walker
include_once('inc/widgets.php');
include_once('inc/shortcodes.php');
include_once('inc/custom-posts.php');

add_filter('widget_text', 'do_shortcode');
?>