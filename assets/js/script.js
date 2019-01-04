
function initMap() {
    var myLatLng = {lat: 0.959810, lng: 104.542785};

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map
    });
}
