<?php
	// enable featured images in pages and posts.
	add_theme_support('post-thumbnails');

	// enable customizable menus.
	// you can register multiple menus by adding more register_nav_menu blocks, 
	// like the 'Secondary Menu' that is commented out below
	function register_my_menu() {
	     register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
	     //register_nav_menu( 'secondary-menu', __( 'Secondary Menu' ) );
	}
	add_action( 'init', 'register_my_menu' );

	// enable a "widgetized sidebar".
	if ( function_exists('register_sidebar') ) register_sidebar();
	function additional_custom_styles() {

    /*Enqueue The Styles*/
    wp_enqueue_style( 'uniquestylesheetid', get_template_directory_uri() . '/css/custom.css' ); 
	}	
	add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );

	
?>