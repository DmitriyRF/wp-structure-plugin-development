<?php

function derefe_create_metaboxes($post){

/*
	add_meta_box( 
		string $id, 
		string $title, 
		callable $callback, 
		string|array|WP_Screen $screen = null, 
		string $context = 'advanced', 
		string $priority = 'default', 
		array $callback_args = null 
	)
*/

	add_meta_box(

		'derefe-cus_pot_type-options-metabox',		//	Meta box ID

		__( 'Cus Post Type', 'drf'),				//	Title of the meta box

		'derefe_options_mb_callback',				//	Function that fills the box with the desired content, should echo its output.
		
		'cus_pot_type',								//	Post type, single screen ID, WP_Screen object,

		'normal',									//	The context within the screen where the boxes should display.  

		'high'										//	The priority within the context where the boxes should show
	);
}