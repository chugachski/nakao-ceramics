<?php

function galley_post_type() {
		$args = array(
				'labels' => array(
						'name'               => __( 'Galleries', 'nakao' ),
						'singular_name'      => __( 'Gallery', 'nakao' ),
						'add_new'            => __( 'Add Gallery', 'nakao' ),
						'add_new_item'       => __( 'Add New Gallery', 'nakao' ),
						'new_item'           => __( 'New Gallery', 'nakao' ),
						'edit_item'          => __( 'Edit Gallery', 'nakao' ),
						'view_item'          => __( 'View Gallery', 'nakao' ),
						'all_items'          => __( 'All Galleries', 'nakao' ),
						'search_items'       => __( 'Search Galleries', 'nakao' )
				),
				'public' => true,
				'show_ui' => true,
				'capability_type' => 'post',
				'hierarchical' => true,
				'rewrite' => array('slug' => 'galleries'),
				'query_var' => true,
				'menu_icon' => 'dashicons-images-alt',
				'supports' => array(
						'title',
						'editor',
						'excerpt',
						'trackbacks',
						'custom-fields',
						'comments',
						'revisions',
						'thumbnail',
						'author',
						'page-attributes'
				)
		);
		register_post_type( 'galleries', $args );
}
add_action( 'init', 'galley_post_type' );
