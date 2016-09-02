<?php

if(function_exists('register_nav_menus')){
	register_nav_menus(
		array(
			'main_nav' => 'Main Navigation Menu'
			)
	);
}


add_theme_support( 'post-thumbnails' );


show_admin_bar( false );

function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );


function add_taxonomies_to_pages() {
 register_taxonomy_for_object_type( 'post_tag', 'page' );
 register_taxonomy_for_object_type( 'category', 'page' );
 }
add_action( 'init', 'add_taxonomies_to_pages' );

