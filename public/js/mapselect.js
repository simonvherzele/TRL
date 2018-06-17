//map.js
 
//Set up some of our variables.
var map; //Will contain map object.
var marker = false; ////Has the user plotted their location marker? 

        
//Function called to initialize / create the map.
//This is called when the page has loaded.
function initMap() {
 
    //The center location of our map.
    var centerOfMap = new google.maps.LatLng(52.357971, -6.516758);
 
    //Map options.
    var options = {
      center: centerOfMap, //Set center.
      zoom: 12 //The zoom value.
    };
    
    //Create the map object.
    map = new google.maps.Map(document.getElementById('map'), options);

    marker = new google.maps.Marker({
                position: centerOfMap,
                map: map,
                draggable: true //make it draggable
            });

    if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            map.setCenter(pos);
            marker.setPosition(pos);
            markerLocation();
        });
    };

    markerLocation();
    
    google.maps.event.addListener(map, 'click', function(event) {
        var clickedLocation = event.latLng;
        google.maps.event.addListener(marker, 'dragend', function(event){
                markerLocation();
        });
        marker.setPosition(clickedLocation);
        markerLocation();
    });


}
        
//This function will get the marker's current location and then add the lat/long
//values to our textfields so that we can save the location.
function markerLocation(){
    //Get location.
    var currentLocation = marker.getPosition();
    //Add lat and lng values to a field that we can save.
    document.getElementById('lat').value = currentLocation.lat(); //latitude
    document.getElementById('lng').value = currentLocation.lng(); //longitude
}
        
        
//Load the map when the page has finished loading.
google.maps.event.addDomListener(window, 'load', initMap);