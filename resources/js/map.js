window.initMap = function() {
    var bilbao = { lat: 43.274805, lng: -2.960163 };
    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 17,
        center: bilbao
    });
    var marker = new google.maps.Marker({ position: bilbao, map: map });
};
