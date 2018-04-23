<?php


function drf_activate_plugin(){

	if(  version_compare(get_bloginfo('version'), '4.9', '<')  ){
		wp_die(  __('Your must update WordPress to use this plugin', 'drf')  );
	}
}