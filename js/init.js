jQuery(document).ready(function($){

 	$("html").niceScroll({
           scrollspeed: 45,
           mousescrollstep: 100,
           cursoropacitymin: 0.1,
           cursoropacitymax: 0.7,
           cursorborder: '1px solid transparent',
           cursorwidth: 8,
           railpadding: { top: 3, right: 3, left: 3, bottom: 3 }
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
