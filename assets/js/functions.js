$(function(){
	initialize_mobile_menu();

	initialize_location_picker();

	initialize_plant_type_picker();

	set_favorite_function('#favorite');

	$('#reset_favorites').click(function(e){
		Cookies.remove('favorites');
		initialize_favorites_link();

		var request = $.ajax({
		     type: "POST",
		     url: 'assets/php/empty.php',
		     success: function(data) {
				$('#favorites').html(data);			
			}
		});

		initialize_favorites_link();
	});	

	initialize_favorites_link();

	initialize_contact_form();
});

function initialize_location_picker(){
	$('#map path, #map polyline, #map polygon').click(function(){
		window.location = 'plants.php?county=' + $(this).attr('id') + '+County' + '&type=All';
	});

	$('#location_map path, #location_map polyline, #location_map polygon').hover(function(){
		var county = $(this).attr('id');
		var county = county.replace(/\+/g,' ');

		$('#county_dropdown').val(county + ' County');
	});	

	$('#county_dropdown').change(function(){
		if ( $('#type').length > 0 ){
			var type = $('#type').text().replace(/\ /g,'+');;
		} else{
			var type="All";
		}

		var county = $(this).val()
		county = county.replace(/\ /g,'+');

		window.location = 'plants.php?county=' + county + '&type=' + type;		
	});

	if ( $('#county').length > 0 ){
		if ( $('#county').text() !== 'California' ){
			$('#county_dropdown').val( $('#county').text() );
		}
	}
}

function initialize_plant_map(counties){
	for(i = 0; i < counties.length; i++){
		var county = counties[i].replace(/\ /g,'+');
		console.log(county);

		document.getElementById(county).classList.add('selected');
	}
}

function initialize_plant_type_picker(){
	var county = $('#county').text().replace(/\ /g,'+');

	$('#plant_type_dropdown select').change(function(){
		window.location = 'plants.php?county=' + county + '&type=' + $(this).val();		
	});
}

function initialize_mobile_menu(){
	$('#menu-toggle').click(function(){
		if ( $('#menu-toggle svg').attr('class') === 'open' ){
			$('#menu-toggle svg').attr('class','');
			$('#mobile_modal').fadeOut();
		} else{
			$('#menu-toggle svg').attr('class','open');
			$('#mobile_modal').fadeIn();			
		}

		var first_y = $('.first-line').attr('y2');
		var last_y = $('.last-line').attr('y2');

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

function initialize_favorites_link(){
	$('#favorite_link').attr('href','favorites.php?ids=' + Cookies.get('favorites'))
}

function set_favorite_function(target){
	var current_favorites = Cookies.get('favorites');

	if(current_favorites !== undefined ){
		if( current_favorites.indexOf( ',' + $(target).attr('data-id') + ',' ) > -1 ){
			$(target).text('Unfavorite');
			$(target).click(function(){
				unfavorite(target);
			});
		}else{
			$(target).click(function(){		
				favorite(target);
			});		
		}		
	} else{
		$(target).click(function(){		
			favorite(target);
		});	
	}
}

function favorite(target){
	if ( Cookies.get('favorites') != undefined ){
		var current_favorites = Cookies.get('favorites') + ',';
	} else{
		var current_favorites = ',';
	}

	current_favorites = current_favorites.replace('undefined','');
	Cookies.set( 'favorites', current_favorites + $(target).attr('data-id') + ',', { expires: 3650 });

	$(target).text('Unfavorite');
	$(target).unbind( "click" );

	$(target).click(function(){
		unfavorite(target);
	});

	initialize_favorites_link();
}

function unfavorite(target){
	var current_favorites = Cookies.get('favorites');

	current_favorites = current_favorites.replace( new RegExp(',' + $(target).attr('data-id') + ',' , 'g' ),'');

	Cookies.set( 'favorites', current_favorites, { expires: 3650 });

	$(target).text('Favorite');
	$(target).unbind( "click" );

	$(target).click(function(){
		favorite(target);
	});

	initialize_favorites_link();
}

function initialize_contact_form(){
	$( "#contact_form" ).on( "submit", function( event ) {
	    event.preventDefault();

	    if ( validate() ){
		    var form_data = $('#contact_form').serialize();

		    if( $(this).hasClass('add-a-plant') ){
		    	form_data += "&add-a-plant=" + true;
		    }

		    $.ajax({
			    type : 'POST',
			    url : 'assets/php/submit_contact.php',
			    data : form_data,
			    success: function(data){
			    	$('.main-content').html(data);
			    }
			});
		}
	});

}

function validate(){
	$('.error').removeClass('error');
	$('#error_text').remove();

	$('.required').each(function(){
		if ( $(this).val() === '' || $(this).val() === null || $(this).val() === undefined ){
			$(this).addClass('error');
			$(this).change(function(){ $(this).removeClass('error') });			
		}
	});

	if ( $('.error').length > 0 ){
		$('<div id="error_text">Please fill out all required fields above. Required fields have a red outline.</div>').insertBefore('input[type=submit]');
		$('#error_text').slideDown(350);

		return false;
	} else{
		return true;
	}
}

// Borrowed animate function works on SVG hamburger icon.
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