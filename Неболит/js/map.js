function init_map() {
    var myOptions = {
        zoom:12,
        center:new google.maps.LatLng(53.90453979999999,27.561524400000053),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
    marker = new google.maps.Marker({
        map: map,position: new google.maps.LatLng(53.90453979999999,27.561524400000053)
    });
    infowindow = new google.maps.InfoWindow({
        content:'<strong>НЕБОЛИТ</strong><br>Минск, Беларусь<br>'
    });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });

    infowindow.open(map,marker);
}

google.maps.event.addDomListener(window, 'load', init_map);
