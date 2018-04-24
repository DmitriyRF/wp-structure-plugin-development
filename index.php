<?php

/**
 * 
 *	Plugin Name: Structure plugin Development Derefe
 *	Description: A simple plugin Derefe
 *	Version: 1.0
 *	Author: DmitriyRF
 *	Author URI: https://dmitriyrf.github.io 
 *	Text Domain: derefe
 * 
**/ 

if( !function_exists('do_action') ){
	echo 'Not allowed. I\'m just a plugin, not much I can do when called directly.';
	exit();
}

//	Setup

//	Includes

//	Hooks

//	Shortcodes


register_activation_hook( __FILE__ , 'drf_activate_plugin' );
include( 'includes/activate.php' );

add_action(  'init', 'derefe_init');
include(  'includes/init.php');

add_action(  'admin_init', 'derefe_admin_init');
include(  'includes/admin/admin_init.php');