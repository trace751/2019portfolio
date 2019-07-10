<?php
/**
 * Rams Portfolio Theme Customizer
 *
 * @package Rams_Portfolio
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ramsportfolio_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'ramsportfolio_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'ramsportfolio_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'ramsportfolio_customize_register' );

function ramsportfolio_theme_mods( $wp_customize ){
// Add section

	$wp_customize->add_section('social_name', array(
		'title'		=> __('Social Links', 'ramsportfolio'),
		'description' => sprintf(__('Change social links', 'ramsportfolio')),
		'priority'  => 120
	));

//Add settings and controls
	//Instagram
	$wp_customize->add_setting('instagram', array(
		'type'	=>	'theme_mod',
		'default' => _x('Instagram URL', 'ramsportfolio')
	));

	$wp_customize->add_control('instagram', array(
		'label' => __('Instagram', 'ramsportfolio'),
		'section' => 'social_name',
		'priority' => 1
	));

	//Facebook
	$wp_customize->add_setting('facebook', array(
		'type'	=>	'theme_mod',
		'default' => _x('https://facebook.com', 'ramsportfolio')
	));

	$wp_customize->add_control('facebook', array(
		'label' => __('Facebook URL', 'ramsportfolio'),
		'section' => 'social_name',
		'priority' => 1
	));

		//Github
	$wp_customize->add_setting('github', array(
		'type'	=>	'theme_mod',
		'default' => _x('https://github.com', 'ramsportfolio')
	));

	$wp_customize->add_control('github', array(
		'label' => __('Github URL', 'ramsportfolio'),
		'section' => 'social_name',
		'priority' => 1
	));

		//Stack
	$wp_customize->add_setting('stackoverflow', array(
		'type'	=>	'theme_mod',
		'default' => _x('https:stackoverflow.com', 'ramsportfolio')
	));

	$wp_customize->add_control('stackoverflow', array(
		'label' => __('Stackoverflow', 'ramsportfolio'),
		'section' => 'social_name',
		'priority' => 1
	));

		//Linkedin
	$wp_customize->add_setting('linkedin', array(
		'type'	=>	'theme_mod',
		'default' => _x('https://linkedin.com', 'ramsportfolio')
	));

	$wp_customize->add_control('linkedin', array(
		'label' => __('Linkedin', 'ramsportfolio'),
		'section' => 'social_name',
		'priority' => 1
	));

// ================ Main Image Heading
	$wp_customize->add_setting('hero_title', array(
		'type'	=>	'theme_mod',
		'default' => _x('Creative Designer', 'ramsportfolio'),
	));

	$wp_customize->add_control('hero_title', array(
		'section' => 'title_tagline',
		'label' => 'Hero Heading', 'ramsportfolio',
		'type' => 'text'
	));

	$wp_customize->add_setting('hero_subtitle', array(
		'type' => 'theme_mod',
		'default' => _x('ux/ui design', 'ramsportfolio'),
	));

	$wp_customize->add_control('hero_subtitle', array(
		'type' => 'text',
		'label' => 'Hero Subtitle', 'ramsportfolio',
		'section' => 'title_tagline'
	));

	// ============== Add Section Two Intro

	$wp_customize->add_section('section_two', array(
		'title'		=> __('Section Two', 'ramsportfolio'),
		'description' => sprintf(__('Update section bio', 'ramsportfolio')),
		'priority'  => 60
	));

	$wp_customize->add_setting('intro_text', array(
		'type' => 'theme_mod',

	));

	$wp_customize->add_control('intro_text', array(
		'type' => 'text',
		'label' => 'Intro Text', 'ramsportfolio',
		'section' => 'section_two'
	));

	$wp_customize->add_setting('intro_paragraph', array(
		'type' => 'theme_mod',

	));

	$wp_customize->add_control('intro_paragraph', array(
		'type' => 'text',
		'label' => 'Intro Paragraph', 'ramsportfolio',
		'section' => 'section_two'
	));


}
add_action( 'customize_register', 'ramsportfolio_theme_mods' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function ramsportfolio_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function ramsportfolio_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ramsportfolio_customize_preview_js() {
	wp_enqueue_script( 'ramsportfolio-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'ramsportfolio_customize_preview_js' );
