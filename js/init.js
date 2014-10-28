jQuery(document).ready(function($){

 	$("html").niceScroll({
           scrollspeed: 80,
           mousescrollstep: 50
 	});

	$("#owl-carousel").owlCarousel({

		singleItem: true,
		pagination: true

  	});

  	$('.fill-box').fillBox();

});
