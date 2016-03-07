$(function(){
	$('#menu-toggle').click(function(){
		$('header nav a').addClass('box-shadow');

		if ( $('#menu-toggle svg').attr('class') === 'open' ){
			$('#menu-toggle svg').attr('class','');
		} else{
			$('#menu-toggle svg').attr('class','open');
		}

		$('header nav').toggleClass('visible-y');
	});
});