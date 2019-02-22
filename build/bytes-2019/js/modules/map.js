// Initialize and add the map

window.googleMapsOnLoad = function() {

	var center = null;
	var map = null;
	var currentPopup;
	var bounds = new google.maps.LatLngBounds();
	var mapActive = false;
	function addMarker(lat, lng, info, image, width, height) {
		if(!width) {
			width = 47;
		}

		if(!height) {
			height = 71;
		}

		var pt = new google.maps.LatLng(lat, lng);
		bounds.extend(pt);

		var image = new google.maps.MarkerImage(image,
			new google.maps.Size(width, height),
			new google.maps.Point(0, 0),
			new google.maps.Point((width / 2), height)
		);

		var marker = new google.maps.Marker({
			position: pt,
			map: map,
			icon: image
		});
		var popup = new google.maps.InfoWindow({
			content: info,
			pixelOffset: new google.maps.Size(0, 10),
			maxWidth: 300
		});
		google.maps.event.addListener(marker, "click", function() {
			if (currentPopup != null) {
				currentPopup.close();
				currentPopup = null;
			}
			popup.open(map, marker);
			currentPopup = popup;
		});
		google.maps.event.addListener(map, "click", function() {
			if (currentPopup != null) {
				currentPopup.close();
				currentPopup = null;
			}
		});
		google.maps.event.addListener(popup, "closeclick", function() {
			currentPopup.close();
			map.panTo(center);
			currentPopup = null;
		});
	}


	// The map, centered at Uluru
	var map = new window.google.maps.Map(
		document.getElementById('jsMap'), {
			center: new google.maps.LatLng(50.8292619, -0.1460886),
			zoom: 15,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			panControl: true,
			scrollwheel: false,
			zoomControl: true,
			zoomControlOptions: {
				position: google.maps.ControlPosition.RIGHT_CENTER
			},
			styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#333333"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#E8E8E8"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#36ace5"},{"visibility":"on"}]}]
		}
	);

	var icon = '/assets/bytes-2019/img/marker.png';
	addMarker(50.826238,-0.138210,'<strong>The Lighthouse</strong><br />28 Kensington Street<br />Brighton and Hove<br />BN1 4AJ', '/assets/bytes-2019/img/marker-bytes.png', 73, 110);
	addMarker(50.828649,-0.141149,'<strong>Brighton Train Station</strong>', '/assets/bytes-2019/img/marker-train.png');
	addMarker(50.835210,-0.171036, '<strong>Hove Train Station</strong>', '/assets/bytes-2019/img/marker-train.png');
	addMarker(50.825711,-0.141476,'<strong>NCP</strong><br />Church Street<br />Brighton<br />BN1 1US', '/assets/bytes-2019/img/marker-car.png');
	addMarker(50.831459,-0.137277,'<strong>London Road Parking</strong><br />Providence Place,<br />Brighton<br />BN1 4GE', '/assets/bytes-2019/img/marker-car.png');

}

let injectGoogleMap = () => {
	let mapsJS = document.createElement('script')
	mapsJS.src = `https://maps.googleapis.com/maps/api/js?callback=googleMapsOnLoad&key=AIzaSyAowaipwKQ7aUnX07VbBiuq0PseTDsuq5A`;
	document.getElementsByTagName('head')[0].appendChild(mapsJS);
}

let googleMapsLazyload = () => {
	'use strict';

	let mapObserver;
	const mapObserverConfig = {
		rootMargin: '50px',
		threshold: 0
	};

	const map = document.getElementById('jsMap');

	let onIntersection = (entries, self) => {
		// Loop through the entries
		var isIntersecting = typeof entries[0].isIntersecting === 'boolean' ? entries[0].isIntersecting : entries[0].intersectionRatio > 0
		if (isIntersecting) {
			injectGoogleMap();
			self.unobserve(map);
		}
	}

	mapObserver = new IntersectionObserver(onIntersection, mapObserverConfig);
	mapObserver.observe(map)
}

if(document.getElementById('jsMap')) {
	// eslint-disable-next-line no-negated-condition
	// if (!('IntersectionObserver' in window)) {
		injectGoogleMap();
	// } else {
		// googleMapsLazyload()
	// }
}
