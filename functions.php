<?php

add_theme_support( 'post-thumbnails' );

set_post_thumbnail_size( 1360, 768 );

function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'About',
		'id' => 'about-txt',
		'before_widget' => '<div>',
		'after_widget' => '</div>'
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function linda_scripts() {
	wp_register_script( 'app-js', get_template_directory_uri() . '/js/app.js' );
	wp_enqueue_script( 'app-js');
	wp_enqueue_script( 'jquery-smooth-scroll', get_template_directory_uri() . '/js/jquery.smooth-scroll.min.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'linda_scripts' );


?>