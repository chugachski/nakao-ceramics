<?php

function event_post_type() {
		$args = array(
				'labels' => array(
						'name'               => __( 'Events', 'nakao' ),
						'singular_name'      => __( 'Event', 'nakao' ),
						'add_new'            => __( 'Add Event', 'nakao' ),
						'add_new_item'       => __( 'Add New Event', 'nakao' ),
						'new_item'           => __( 'New Event', 'nakao' ),
						'edit_item'          => __( 'Edit Event', 'nakao' ),
						'view_item'          => __( 'View Event', 'nakao' ),
						'all_items'          => __( 'All Events', 'nakao' ),
						'search_items'       => __( 'Search Events', 'nakao' )
				),
				'public' => true,
				'show_ui' => true,
				'capability_type' => 'post',
				'hierarchical' => true,
				'rewrite' => array('slug' => 'events'),
				'query_var' => true,
				'menu_icon' => 'dashicons-calendar-alt',
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
		register_post_type( 'events', $args );
}
add_action( 'init', 'event_post_type' );
