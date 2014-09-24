<?php

	function wplab_assets() {
		$env = WP_ENV;

		if( $env === "production" ){

			wp_enqueue_style( 'app', get_template_directory_uri() . '-child/css/app.min.css');

			wp_enqueue_script( 'app', get_template_directory_uri() . '-child/js/app.min.js', array(), false, true );

		} elseif( $env === "development") {

			wp_enqueue_style( 'app', get_template_directory_uri() . '-child/css/app.css');

			wp_enqueue_script( 'app', get_template_directory_uri() . '-child/js/app.js', array(), false, true );
		}
	}

	add_action( 'wp_enqueue_scripts', 'wplab_assets' );

?>
