jQuery(document).ready(function($){

 	$("html").niceScroll({
           scrollspeed: 200,
           mousescrollstep: 500
 	});

	$("#owl-carousel").owlCarousel({

		singleItem: true,
		pagination: true

  	});

  	$('.fill-box').fillBox();


  	$('.navbar-nav li > a').click(function(e){

  		e.preventDefault();

  		var me = $(this),
  			target = me.data('scroll');

  		if( target === "home"){
  			$.scrollTo( 0, 900, { offset: -61 } );
  		}else{
  			$.scrollTo( $('.' + target + '-scroll'), 900, { offset: -61 } );
  		}
  	});
});
