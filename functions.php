<?php

// Theme Title
add_theme_support('title-tag');

function enqueueing_styles_and_scripts(){
	wp_enqueue_style( 'style.css' );
	wp_register_style('foy4748_custom_style', get_template_directory_uri().'/css/custom.css', array(), '1.0', 'all');
	wp_enqueue_style('foy4748_custom_style');
}

add_action('wp_enqueue_scripts', 'enqueueing_styles_and_scripts');
