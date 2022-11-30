<?php

function demons_register_menus() {
	register_nav_menus( array(
		'top_menu' => __( 'Top Menu' , 'demons' )
	) );

	register_nav_menus( array(
		'footer_menu' => __( 'Footer Menu' , 'demons' )
	) );

}

add_action( 'after_setup_theme' , 'demons_register_menus' , 0 );