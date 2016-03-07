var map;
var panel;
var initMap;
var calculate;
var direction;
var google;

initMap = function(){
  var latLng = new google.maps.LatLng(50.6371834, 3.063017400000035); // Correspond au coordonnées de Lille
  var myOptions = {
    zoom      : 14, // Zoom par défaut
    center    : latLng, // Coordonnées de départ de la carte de type latLng 
    mapTypeId : google.maps.MapTypeId.ROADMAP, // Type de carte, différentes valeurs possible HYBRID, ROADMAP, SATELLITE, TERRAIN
    maxZoom   : 20
  };
  
  map = new google.maps.Map(document.getElementById('map'), myOptions);
  panel = document.getElementById('panel');

  var marker = new google.maps.Marker({
    position : latLng,
    map      : map,
    title    : "Position",
    draggable: true,
    animation: google.maps.Animation.DROP
  });
  marker.addListener('click', toggleBounce);

  google.maps.event.addListener(map, 'click', function (event) {
    new google.maps.Marker({
      map: map,
      position: event.latLng,
      animation: google.maps.Animation.DROP
    });
  });

  var infoWindow = new google.maps.InfoWindow({
    position : latLng,
    map : map
  });
  
  var request = {
    location: latLng,
    radius: '1000',
    types: ['amusement_park' ,'aquarium' , 'bar' ,'casino' ,'city_hall' , 'night_club']
  };

  service = new google.maps.places.PlacesService(map);
  service.nearbySearch(request, callback);

  
  google.maps.event.addListener(infoWindow, 'domready', function() { // infoWindow est bien sûr notre info-bulle
    jQuery("#tabs").tabs();
  });
  
  direction = new google.maps.DirectionsRenderer({
    map   : map,
    panel : panel // Dom element pour afficher les instructions d'itinéraire
  });

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      infoWindow.setPosition(pos);
      infoWindow.setContent('&dArr; Vous êtes ici &dArr;');
      map.setCenter(pos);
    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }
  map.controls[google.maps.ControlPosition.TOP_RIGHT].push(FullScreenControl(map));
  var directionsDisplay = new google.maps.DirectionsRenderer();
  directionsDisplay.setMap(map);


  var inputOrigin = document.getElementById('origin');
  var autocomplete = new google.maps.places.Autocomplete(inputOrigin);

  var inputDst = document.getElementById('destination');
  var autocomplete = new google.maps.places.Autocomplete(inputDst);


  // Create the search box and link it to the UI element.
  var input = document.getElementById('pac-input');
  var searchBox = new google.maps.places.SearchBox(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  // Bias the SearchBox results towards current map's viewport.
  map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
  });

  var markers = [];
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }

    // Clear out the old markers.
    markers.forEach(function(marker) {
      marker.setMap(null);
    });
    markers = [];

    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {
      var icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      markers.push(new google.maps.Marker({
        map: map,
        icon: icon,
        title: place.name,
        position: place.geometry.location
      }));

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });



};

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
 infoWindow.setPosition(pos);
 infoWindow.setContent(browserHasGeolocation ?
   'ERREUR: La Géolocalisation à échoué.' :
   'ERREUR: Your browser doesn\'t support geolocation.');
}

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}

function callback(results, status) {
  if (status == google.maps.places.PlacesServiceStatus.OK) {
    for (var i = 0; i < results.length; i++) {
      var place = results[i];
      createMarker(results[i]);
    }
  }
}

calculate = function(){
  var origin      = document.getElementById('origin').value; // Le point départ
  var destination = document.getElementById('destination').value; // Le point d'arrivé
  if(origin && destination){
    var request = {
      origin      : origin,
      destination : destination,
        travelMode  : google.maps.DirectionsTravelMode.DRIVING // Mode de conduite
      };
    var directionsService = new google.maps.DirectionsService(); // Service de calcul d'itinéraire
    directionsService.route(request, function(response, status){ // Envoie de la requéte pour calculer le parcours
      //console.log(response);
      if(status == google.maps.DirectionsStatus.OK){
            direction.setDirections(response); // Trace l'itinéraire sur la carte et les différentes étapes du parcours
          }
        });
  }
};

initMap();