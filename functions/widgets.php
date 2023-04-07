<?php

function demons_widgets_init() {

    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Left', 'demons' ),
            'id'            => 'footer-left',
            'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'demons' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Right', 'demons' ),
            'id'            => 'footer-right',
            'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'demons' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );


}
add_action( 'widgets_init', 'demons_widgets_init' );