function initAutocomplete() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -32.9531426, lng: -60.6575427},
        zoom: 13,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: true,
        zoomControl: true,
    });



    for (i = 0; i < data.length; i++) {

        contents = data[i].mercado;

        var infowindow = new google.maps.InfoWindow({
            content: contents
        });

        if(data[i].mercadocategory_id === 4){
            var iconx = {
                path: MAP_PIN,
                fillColor: '#00CCBB',
                fillOpacity: 1,
                strokeColor: '',
                strokeWeight: 0,
            };
        } else{
            var iconx = {
                path: MAP_PIN,
                fillColor: '#f4901f',
                fillOpacity: 1,
                strokeColor: '',
                strokeWeight: 0
            };
        }


        marker = new google.maps.Marker({
            position: new google.maps.LatLng(data[i].latitud, data[i].longitud),
            map: map,
            icon: iconx,
            map_icon_label: '<span class="map-icon map-icon-point-of-interest"></span>'
        });

        google.maps.event.addListener(marker, 'click', (function (marker, i) {

            return function () {
                infowindow.setContent(data[i].mercado);
                infowindow.open(map, marker);
            }
        })(marker, i));

    }

}