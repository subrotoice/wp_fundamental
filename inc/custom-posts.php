<?php
/* Register Custom Post Types********************************************/
	add_action( 'init', 'create_post_type' );
	function create_post_type() {
		register_post_type( 'News',
			array(
				'labels' => array(
					'name' => __( 'News' ),
					'singular_name' => __( 'News' ),
					'add_new' => __( 'Add New' ),
					'add_new_item' => __( 'Add New News' ),
					'edit_item' => __( 'Edit News' ),
					'new_item' => __( 'New News' ),
					'view_item' => __( 'View News' ),
					'not_found' => __( 'Sorry, we couldn\'t find the News you are looking for.' )
				),
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => true,
			'menu_position' => 14,
			'has_archive' => true,
			'hierarchical' => true, 
			'capability_type' => 'page',
			'rewrite' => array( 'slug' => 'News' ),
			'taxonomies' => array('category', 'post_tag', 'thumbnail'),
			'supports' => array( 'title', 'editor', 'comments', 'revisions', 'author', 'excerpt', 'custom-fields', 'thumbnail', 'post-formats', 'category' )
			)
		);
	}