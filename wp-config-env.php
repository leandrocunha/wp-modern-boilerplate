<?php
	$env = WP_ENV;

	if( $env === "production" ){

		include "wp-config-prod.php";

	} elseif( $env === "development") {

		include "wp-config-dev.php";
	}
?>
