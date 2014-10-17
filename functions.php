<?php 

	function wp_modern_boilerplate_scripts() {		
		// wp_enqueue_script( 'jquery', array(), false, false );
		wp_enqueue_script( 'holderjs', get_template_directory_uri() . '/js/holderjs/holder.js', array(), false, false );
	}

	add_action( 'wp_enqueue_scripts', 'wp_modern_boilerplate_scripts' );

?>