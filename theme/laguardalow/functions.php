<?php
	// Stylesheet
	// function laguardalow_resources() {
	// 	wp_enqueue_style('style', get_stylesheet_uri());
	// }
	// add_action('wp_enqueue_scripts', 'laguardalow_resources');

	// Navigation menus
  register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'footer' => __( 'Footer Menu'),
	));

  function people_init() {
		// create a new taxonomy
		register_taxonomy(
			'people',
			'post',
			array(
				'label' => __( 'People' ),
				'rewrite' => array( 'slug' => 'person' ),
				'capabilities' => array(
					'assign_terms' => 'edit_guides',
					'edit_terms' => 'publish_guides'
				)
			)
		);
	}
	add_action( 'init', 'people_init' );


