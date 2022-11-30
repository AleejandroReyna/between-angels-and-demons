<?php

function demons_theme_supports() {

	//post thumbnails support
	 add_theme_support( 'post-thumbnails' );

	//gutemberg styles
	 add_theme_support( 'wp-block-styles' );

	//image width
	 add_theme_support( 'align-wide' );

	//logo
	 $logo_defaults = array(
	 	'height'      => 100,
	 	'width'       => 400,
	 	'flex-height' => true,
	 	'flex-width'  => true,
	 	'header-text' => array( 'site-title', 'site-description' ),
	 );
	 add_theme_support( 'custom-logo' , $logo_defaults );
}

add_action( 'after_setup_theme' , 'demons_theme_supports' );