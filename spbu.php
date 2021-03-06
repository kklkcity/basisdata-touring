<!DOCTYPE html>
<html>
<head><title>Touring</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
		  width:1010px;
        height: 460px;
        float: right;
      }
#floating-panel {
  position: absolute;
  top: 10px;
  left: 25%;
  z-index: 5;
  background-color: #fff;
  padding: 5px;
  border: 1px solid #999;
  text-align: center;
  font-family: 'Roboto','sans-serif';
  line-height: 30px;
  padding-left: 10px;
}
.controls {
  margin-top: 10px;
  border: 1px solid transparent;
  border-radius: 2px 0 0 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  height: 32px;
  outline: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}

#pac-input {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 300px;
}

#pac-input:focus {
  border-color: #4d90fe;
}

.pac-container {
  font-family: Roboto;
}

#type-selector {
  color: #fff;
  background-color: #4d90fe;
  padding: 5px 11px 0px 11px;
}

#type-selector label {
  font-family: Roboto;
  font-size: 13px;
  font-weight: 300;
}


    </style>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link href="css/jumbotron.css" rel="stylesheet" type="text/css">
<link href="css/aha.css" rel="stylesheet" type="text/css">
<script src="js/ie-emulation-modes-warning.js"></script>
</head>

<body>
<!--
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img alt="MOTORAN.com" >
      </a>
    </div>
  </div>
</nav>
-->
<!-- main content -->

<div class="jumbotron">
      <div class="konten">
      <input id="pac-input" class="controls" type="text" placeholder="Search Box">
    <div id="map"></div>
    <script> 
// This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.
function initAutocomplete() {
  var loc = {lat: -7.8, lng: 110.38};
  var map = new google.maps.Map(document.getElementById('map'), {
    center: loc,
    zoom: 16,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  
  var marker = new google.maps.Marker({
    position: loc,
    map: map
  });

  // Create the search box and link it to the UI element.
  var input = document.getElementById('pac-input');
  var searchBox = new google.maps.places.SearchBox(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  // Bias the SearchBox results towards current map's viewport.
  map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
  });
  
  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<p>deskripsi</p>'+
      '<p>latitude : '+loc.lat +'</p>'+
      '<p>longitude : '+loc.lng +'</p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
  
  var markers = [];
  // [START region_getplaces]
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
  marker.setMap(null);

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
  var listener = google.maps.event.addListener(map, "idle", function() { 
  if (map.getZoom() > 16) map.setZoom(16); 
  google.maps.event.removeListener(listener); 
  });

  });
  // [END region_getplaces]
}


    </script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initAutocomplete" async defer></script>
 
<!-- akhir dari peta -->
