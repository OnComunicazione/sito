<?php

if(function_exists('register_nav_menus')){
	register_nav_menus(
		array(
			'main_nav' => 'Main Navigation Menu'
			)
	);
}


add_theme_support( 'post-thumbnails' );