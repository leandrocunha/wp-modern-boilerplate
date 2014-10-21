jQuery(document).ready(function($){

 	$("html").niceScroll({
           scrollspeed: 80,
           mousescrollstep: 50
 	});

	$("#owl-carousel").owlCarousel({

		autoPlay: 3000,
		singleItem: true,
		pagination: true

  	});

});
