<?php

/*------------------------------------------------------------
* Include child-theme css styles
*------------------------------------------------------------*/

add_action( 'wp_enqueue_scripts', 'korra_child_load_styles', 11 );
function korra_child_load_styles() {
	wp_enqueue_style( 'korra_child_main_style', get_theme_file_uri() . '/style.css' );

	//load bootstrap
	wp_enqueue_style( 'korra_child_bootstrap_style', get_theme_file_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_script('bootstrap_js', get_theme_file_uri() . '/js/bootstrap.min.js');

	//load js for custom functions
	wp_enqueue_script('custom_functions', get_theme_file_uri() . '/js/custom.functions.js');
}

/*------------------------------------------------------------
* Include child-theme language files
*------------------------------------------------------------*/

add_action( 'after_setup_theme', 'korra_child_load_textdomain' );
function korra_child_load_textdomain() {
	load_child_theme_textdomain( 'whyte', get_theme_file_path() . '/languages' );
}



/*------------------------------------------------------------
* Custom functions start here
*------------------------------------------------------------*/


function whyte_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'whyte' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'whyte' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title"><a href="/blog">',
		'after_title'   => '</a></h2>',
	) );
}

add_action( 'widgets_init', 'whyte_widgets_init' );
