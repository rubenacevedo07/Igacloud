function initAutocomplete() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -32.9531426, lng: -60.6575427},
    zoom: 11,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    disableDefaultUI: true,
    zoomControl: true,
  });

  	

 	for (i = 0; i < data.length; i++) {
 		var infowindow = new google.maps.InfoWindow({
		    content: data[i].mercado
		  });
	    marker = new google.maps.Marker({
	        position: new google.maps.LatLng(data[i].latitud, data[i].longitud),
	        map: map
	    });
	    google.maps.event.addListener(marker, 'click', (function(marker, i) {
	      
	        return function() {
	        	
	            infowindow.setContent(data[i].mercado);
	            infowindow.open(map, marker);
	        }
	    })(marker, i));
		
	}
}