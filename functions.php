<?php

	// Theme support
	add_theme_support( 'post-thumbnails', array( 'services' ) );


	// Setup thumbnail sizes
	add_image_size( '350x150', 350, 150, true );


	// Load assets
	function wp_modern_boilerplate_assets() {
		wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/resources/owlcarousel/owl.carousel.css');
		wp_enqueue_style( 'owlcarousel_theme', get_template_directory_uri() . '/resources/owlcarousel/owl.theme.css');

		wp_enqueue_script( 'jquery', array(), false, false );
		wp_enqueue_script( 'holderjs', get_template_directory_uri() . '/resources/holderjs/holder.js', array(), false, false );
		wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/resources/owlcarousel/owl.carousel.js', array(), false, false );
		wp_enqueue_script( 'jquery.nicescroll', get_template_directory_uri() . '/js/jquery.nicescroll/jquery.nicescroll.js', array(), false, false );
		wp_enqueue_script( 'theme_init', get_template_directory_uri() . '/js/init.js', array(), false, false );
	}

	add_action( 'wp_enqueue_scripts', 'wp_modern_boilerplate_assets' );


	// Build Custom Posts Type
	function post_type_services() {
		$labels = array(
			'name' => _x('Services', 'post type general name'),
			'singular_name' => _x('Service', 'post type singular name')
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			//'register_meta_box_cb' => 'services_meta_box',
			'supports' => array('title','editor','thumbnail', 'excerpt')
          );

		register_post_type( 'services' , $args );
		flush_rewrite_rules();
	}

 	add_action('init', 'post_type_services');
?>
