jQuery(document).ready(function(){
	var foo = "teste";

	function bar(){
		var foobar;

		jQuery('body').click(function(){
			console.log('teste');
		});
	}

	bar();

});
