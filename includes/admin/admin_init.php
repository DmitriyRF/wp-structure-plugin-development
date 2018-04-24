<?php

function derefe_admin_init(){

	//The hook allows meta box registration for any post type.
	// add_action( 'add_meta_boxes', string $post_type, WP_Post $post )

	// The hook will only run when editing a specific post type. 
	// add_action( "add_meta_boxes_{$post_type}", WP_Post $post )

	add_action(  'add_meta_boxes_cus_pot_type', 'derefe_create_metaboxes');
	include(  'create_metaboxes.php');
	include(  'custom-post-type-options.php');

}