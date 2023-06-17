<?php

// Theme Title
add_theme_support('title-tag');

function enqueueing_styles_and_scripts(){
	wp_enqueue_style( 'style.css' );
	wp_register_style('foy4748_custom_style', get_template_directory_uri().'/css/custom.css', array(), '1.0', 'all');
	wp_enqueue_style('foy4748_custom_style');
}

add_action('wp_enqueue_scripts', 'enqueueing_styles_and_scripts');

function customizing_wpd($wp_customize){
	$wp_customize-> add_section('header_area', array(
		'title'=>'Choose Logo'
	));

	$wp_customize-> add_setting('brand_logo', array(
		'default' => get_bloginfo('template_directory') . '/img/logo.svg',
	));

	$wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'brand_logo', array(
		'label'=>'Logo Upload',
		'description' => 'Change logo as you like',
		'settings'=>'brand_logo',
		'section'=>'header_area'
	)));

}

add_action('customize_register', 'customizing_wpd');
