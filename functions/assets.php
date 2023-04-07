<?php

function demons_theme_assets() {
	wp_enqueue_script( 'main' , get_template_directory_uri() . "/assets/js/main.js" );
	wp_enqueue_style( 'style' , get_template_directory_uri() . "/assets/stylesheets/style.css" );
}

add_action( 'wp_enqueue_scripts' , 'demons_theme_assets' );