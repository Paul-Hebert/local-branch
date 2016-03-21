$(function(){
	initialize_mobile_menu();

	initialize_location_picker();
});

function initialize_location_picker(){
	$('#map path, #map polyline, #map polygon').click(function(){
		var county = $(this).attr('id').split('_');

		window.location = 'plants.php?county=' + county[3] + '+County';
	});

	$('#county_dropdown').change(function(){
		window.location = 'plants.php?county=' + $(this).val();		
	});
}

function initialize_mobile_menu(){
	$('#menu-toggle').click(function(){
		$('header nav a').addClass('box-shadow');

		if ( $('#menu-toggle svg').attr('class') === 'open' ){
			$('#menu-toggle svg').attr('class','');
		} else{
			$('#menu-toggle svg').attr('class','open');
		}

		var first_y = $('.first-line').attr('y2');
		var last_y = $('.last-line').attr('y2');

		//$('.first-line').attr('y2', last_y);
		//$('.last-line').attr('y2', first_y);

		animate(
	        $('.first-line'), // target jQuery element
	        { y2: last_y}, // target attributes
	        300 // optional duration in ms, defaults to 400
	    );
		animate(
	        $('.last-line'), // target jQuery element
	        { y2: first_y}, // target attributes
	        300 // optional duration in ms, defaults to 400
	    );


		$('header nav').toggleClass('visible-y');
	});
}

function animate($el, attrs, speed) {
    speed = speed || 400;
    var start = {},
        timeout = 20,
        steps = Math.floor(speed/timeout),
        cycles = steps;
    
    $.each(attrs, function(k,v) {
        start[k] = $el.attr(k);
    });
    
    (function loop() {
        $.each(attrs, function(k,v) {
            var pst = (v - start[k])/steps;
            $el.attr(k, function(i, old) {
                return +old + pst;
            });
        });
      if ( --cycles )
          setTimeout(loop, timeout);
      else
          $el.attr(attrs);
    })();
}