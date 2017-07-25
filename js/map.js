
(function() {
	"use strict";
	console.log(" SEAF fired");

	//variables
	var map= new google.maps.Map(document.querySelector('.map-wrapper')),
	marker,
	preloader = document.querySelector('.preload-wrapper'),

	//directions service
	directionsService = new google.maps.DirectionsService(),
	directionsDisplay,
	locations = [];

	//functions
	function initMap(position){
		locations[0]= {lat:43.1315,lng: -80.7472};
		directionsDisplay = new google.maps.DirectionsRenderer();
		directionsDisplay.setMap(map);

		map.setCenter({lat: 42.978422, lng: -81.194892});

		map.setZoom(11);

		marker = new google.maps.Marker({
			position : {lat:42.931326,lng: -81.224625},
			map: map,
			title: 'Moda Fina'
		});
    marker = new google.maps.Marker({
      position : {lat:43.002260,lng: -81.174578},
      map: map,
      title: 'Hair Fantasy!'
    });
		preloader.classList.add('hide-preloader');
	}

	// geocoding api => find an address on a map


	function calcRoute(codeLoc){
		var request = {
			origin: locations[0],
			destination: location[1],
			travelMode: 'DRIVING'
		};

		directionsService.route(request, function(response, status){
			if(status === 'OK'){
				directionsDisplay.setDirections(response);
			}
		});
	}


	if(navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(initMap, handleError);
	} else {
		console.log("no geolocation for you!");
	}

	function handleError(e){
		console.log(e);
	}

	//geocodeButton.addEventListener('click', codeAddress, false);

	//listeners

	})();
