window.onload = function () {
    console.log('Page Chargee ');
    var mymap = L.map('mapid').setView([14.731995, -17.433143], 13);
    var tilestreets = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox.satellite',
        accessToken: 'pk.eyJ1IjoicGFwcGFsYWl0eSIsImEiOiJjanZmNjhjZzEyOTkwNDRwOGdwaXd4a3N4In0.2lSGuwLya_-5ONuitm2PYA'
    });
    tilestreets.addTo(mymap);
    var marker = L.marker([14.731995, -17.433143]).addTo(mymap);
    marker.bindPopup("<b>Hello world!</b><br>I am a popup.");

    var popup = L.popup();

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(mymap);
    }

    mymap.on('click', onMapClick);
}