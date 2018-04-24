<?php


function derefe_init(){

	$labels = array(
			'name'               => _x( 'CusPosType', 'post type general name', 'drf' ),
			'singular_name'      => _x( 'CusPosType', 'post type singular name', 'drf' ),
			'menu_name'          => _x( 'CusPosTypes', 'admin menu', 'drf' ),
			'name_admin_bar'     => _x( 'CusPosType', 'add new on admin bar', 'drf' ),
			'add_new'            => _x( 'Add New', 'CusPosType', 'drf' ),
			'add_new_item'       => __( 'Add New CusPosType', 'drf' ),
			'new_item'           => __( 'New CusPosType', 'drf' ),
			'edit_item'          => __( 'Edit CusPosType', 'drf' ),
			'view_item'          => __( 'View CusPosType', 'drf' ),
			'all_items'          => __( 'All CusPosTypes', 'drf' ),
			'search_items'       => __( 'Search CusPosTypes', 'drf' ),
			'parent_item_colon'  => __( 'Parent CusPosTypes:', 'drf' ),
			'not_found'          => __( 'No CusPosType found.', 'drf' ),
			'not_found_in_trash' => __( 'No CusPosType found in Trash.', 'drf' ),
			'attributes'		 => __(  'CusPosType', 'drf')
		);

		$args = array(
			'labels'             => $labels,
	                'description'=> __( 'A custop post type for plugin Derefe.', 'drf' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'cus_pot_type' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
			'taxonomies'		 => array(  'category', 'post_tag'),
			'menu_icon'			 => "dashicons-format-gallery"
		);

		register_post_type( 'cus_pot_type', $args );

}