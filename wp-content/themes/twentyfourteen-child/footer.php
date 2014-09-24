		<?php

			/* * *
			 *
			 * Here you can add some
			 * features only when you are
			 * on development enviroment
			 *
			 * * */

			if(WP_ENV === 'development'){
		?>
				<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
		<?php

			}

			wp_footer();

		?>
	</body>
</html>
