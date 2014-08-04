<?php

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'instrumentos',
		'before_widget' => '<div class="box box-%2$s"><div class="top"></div><div class="mid">',
		'after_widget' => '</div></div><div class="bot"></div></div>',
		'before_title' => '<h2><span>',
		'after_title' => '</span></h2><div class="interior">',
	));
}

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'atividades',
		'before_widget' => '<div class="box box-%2$s"><div class="top"></div><div class="mid">',
		'after_widget' => '</div></div><div class="bot"></div></div>',
		'before_title' => '<h2><span>',
		'after_title' => '</span></h2><div class="interior">',
	));
}

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'parceiros',
		'before_widget' => '<div class="box box-%2$s"><div class="top"></div><div class="mid">',
		'after_widget' => '</div></div><div class="bot"></div></div>',
		'before_title' => '<h2><span>',
		'after_title' => '</span></h2><div class="interior">',
	));
}

function tambor_setup() {

// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'twentytwelve' ) );
}
add_action( 'after_setup_theme', 'tambor_setup' );


?>
