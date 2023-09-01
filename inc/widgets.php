<?php 

function wp_fundamental_widget_areas() {

	register_sidebar( array(
		'name' => __( 'Right Sidebar', 'Subroto' ),
		'id' => 'right_sidebar',
		'before_widget' => '<div class="single-sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	)
 );
	register_sidebar( array(
		'name' => __( 'Footer One', 'Subroto' ),
		'id' => 'footer_one',
		'before_widget' => '<div class="col-md-3">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	)
 );
	register_sidebar( array(
		'name' => __( 'Footer Two', 'Subroto' ),
		'id' => 'footer_two',
		'before_widget' => '<div class="col-md-3">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	)
 );
	register_sidebar( array(
		'name' => __( 'Footer Three', 'Subroto' ),
		'id' => 'footer_three',
		'before_widget' => '<div class="col-md-3">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	)
 );
}
add_action('widgets_init', 'wp_fundamental_widget_areas');
?>