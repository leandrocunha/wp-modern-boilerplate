<?php

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

?>
