$(document).ready(function () {
	// Create an object that holds options for the GMap
	var gmapOptions = {
		center : new google.maps.LatLng(45.423494,-75.697933)
		, zoom : 13
		, mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	
	// Create a variable to hold the GMap and add the GMap to the page
	var map = new google.maps.Map(document.getElementById('map'), gmapOptions);

	// Share one info window variable for all the markers
	var infoWindow;

	// Loop through all the places and add a marker to the GMap
	$('.mapped li').each(function (i, elem) {
		var ottawamapped = $(this).find('a').html();

		// Create some HTML content for the info window
		// Style the content in your CSS
		var info = '<div class="info-window">'
			+ '<strong>' 
			+ '<a href="single.php?id='+i+'"> ' + ottawamapped + '</a>' 
			+ '</strong>'
			+ '</div>' 
			+ '<div class="exemple"><div class="basic" id="12_1"></div></div>'
;

		// Determine this ottawamapped's latitude and longitude
		var lat = $(this).find('meta[itemprop="latitude"]').attr('content');
		var lng = $(this).find('meta[itemprop="longitude"]').attr('content');
		var pos = new google.maps.LatLng(lat, lng);

		// Create a marker object for this ottawamapped
		var marker = new google.maps.Marker({
			position : pos
			, map : map
			, title : ottawamapped
			, icon : 'images/icons.png'
			, animation: google.maps.Animation.DROP
		});

		// A function for showing this ottawamapped's info window
		function showInfoWindow (ev) {
			if (ev.preventDefault) {
				ev.preventDefault();
			}

			// Close the previous info window first, if one already exists
			if (infoWindow) {
				infoWindow.close();
			}

			// Create an info window object and assign it the content
			infoWindow = new google.maps.InfoWindow({
				content : info
			});

			infoWindow.open(map, marker);
		}

		// Add a click event listener for the marker
		google.maps.event.addListener(marker, 'click', showInfoWindow);
		// Add a click event listener to the list item
		google.maps.event.addDomListener($(this).children('a').get(0), 'click', showInfoWindow);
	});
});
