<?php
	add_action( 'wp_enqueue_scripts', 'tours_and_travels_enqueue_styles' );
	function tours_and_travels_enqueue_styles() {
    	$parent_style = 'vw-tour-lite-style'; // Style handle of parent theme.
		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'tours-and-travels-style', get_stylesheet_uri(), array( $parent_style ) );
	}

	function tours_and_travels_customizer ( $wp_customize ) {

		//Our Product

		$wp_customize->add_section('tours_and_travels_product',array(
			'title'	=> __('Top Destination','tours-and-travels'),
			'description'=> __('This section will appear below the Services','tours-and-travels'),
			'panel' => 'vw_tour_lite_panel_id',
		));

		$wp_customize->add_setting('tours_and_travels_title',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));		
		$wp_customize->add_control('tours_and_travels_title',array(
			'label'	=> __('Section Title','tours-and-travels'),
			'section'=> 'tours_and_travels_product',
			'setting'=> 'tours_and_travelss_title',
			'type'=> 'text'
		));	
		
		for ( $count = 0; $count <= 0; $count++ ) {

			$wp_customize->add_setting( 'tours_and_travels_product_page' . $count, array(
				'default'           => '',
				'sanitize_callback' => 'absint'
			));
			$wp_customize->add_control( 'tours_and_travels_product_page' . $count, array(
				'label'    => __( 'Select Product Page', 'tours-and-travels' ),
				'section'  => 'tours_and_travels_product',
				'type'     => 'dropdown-pages'
			));
		}
	}

	add_action( 'customize_register', 'tours_and_travels_customizer' );

	define('tours_and_travels_CREDIT','https://wordpress.org','tours-and-travels');

	if ( ! function_exists( 'tours_and_travels_credit' ) ) {
		function tours_and_travels_credit(){
				echo "<a href=".esc_url(tours_and_travels_CREDIT)." target='_blank'>". esc_html__('wordpress.org','tours-and-travels') ."</a>";
		}
	}

?>