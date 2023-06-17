<?php

// Theme Title
add_theme_support('title-tag');

/*
 * Registering and Enqueueing Stylesheets and Scripts
 *
 */
function enqueueing_styles_and_scripts(){ //Connection1
	wp_enqueue_style( 'style.css' );
	wp_register_style('foy4748_custom_style', get_template_directory_uri().'/css/custom.css', array(), '1.0', 'all');
	wp_enqueue_style('foy4748_custom_style');

	wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'enqueueing_styles_and_scripts'); //Connection1 


/*
 * Wordpress Dashboard (WPD)
 * Customizer
 *
 */
function customizing_wpd($wp_customize){ //Connection2
	/*
	 * Logo Customizer
	 *
	 */
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
	/* --------------------
	 */

	/*
	 * Title Customizer
	 *
	 */
	$wp_customize-> add_section('site_title_section', array(
		'title'=>"Change Site title"
	));

	$wp_customize-> add_setting('site_title_setting', array(
		'default'=>'My First Web Site Ever',
		'sanitie_callback'=>'sanitize_text_field'
	));

	$wp_customize-> add_control('site_title_control', array(
		'label'=>"Change Site Title as you like",
		'section'=>'site_title_section',
		'settings'=>'site_title_setting',
		'type'=>'text'
	));
}

add_action('customize_register', 'customizing_wpd'); //Connection2
