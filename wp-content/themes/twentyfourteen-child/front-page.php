<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Hello, world!</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="btn btn-primary" data-toggle="tooltip" href="#" id="tooltip" title="This is a tooltip test!">test tooltip</a>
			</div>
		</div>
	</div>

<!--
<div id="siri" style=" width: 640px; height: 200px; "></div>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/SiriWaveJS/siriwave.js"></script>
<script type="text/javascript">
  var SW = new SiriWave({
    width: 640,
    height: 200,
    color: '#fff',
    container: document.getElementById('siri')
  });
  SW.setSpeed(0.2);
  SW.setNoise(1);
  SW.start();
</script>
-->

<?php get_footer(); ?>
