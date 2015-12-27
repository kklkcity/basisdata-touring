<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Info</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 460px;
        width: 1310px;
      }
    </style>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link href="css/jumbotron.css" rel="stylesheet" type="text/css">
    <link href="css/aha.css" rel="stylesheet" type="text/css">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>

<div class="jumbotron">
    <div class="konten">
    <div id="map"></div>
    <script>

// This example displays a marker at the center of Australia.
// When the user clicks the marker, an info window opens.
// The maximum width of the info window is set to 200 pixels.

function initMap() {
  var uluru = {lat:-7.7626464, lng: 110.4729115};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: uluru
  });

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h4 id="firstHeading" class="firstHeading">Ayam Goreng Mbok Berek Kalasan</h4>'+
      '<div id="bodyContent">'+
      '<p><b>Ayam Goreng Mbok Berek Kalasan</b></p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
    content: contentString,
    maxWidth: 200
  });

  var marker = new google.maps.Marker({
    position: uluru,
    map: map,
    title: 'Ayam Goreng Mbok Berek Kalasan'
  });
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
}

    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
      </div>
    </div>
<?php require_once("connection.php"); //konek ?>
<div class="container">
<?php 
        $result = mysqli_query($conn,"SELECT * FROM info where id_info='i001'");
        while($data = mysqli_fetch_object($result) ):
        ?>
<table>
  <tr>
    <td>
        <h2><?php 
         echo $data->nama
       ?></h2>
    </td>
  </tr>
  <tr>
    <td>
      <?php 
        echo $data->informasi
        /* require_once("connection.php");
         $result = mysqli_query($conn,"SELECT * FROM info where id_info='i001' ");
         while($data = mysqli_fetch_object($result) ):
         echo $data->informasi;
         endwhile;
         */
       ?>
      </td>
    </tr>
    <tr>
      <td>
        <label>Alamat : </label>
      <?php
       echo $data->alamat
      /* 
         require_once("connection.php");
         $result = mysqli_query($conn,"SELECT * FROM info where id_info='i001' ");
         while($data = mysqli_fetch_object($result) ):
         echo $data->alamat;
         endwhile; */

       ?>        
      </td>
    </tr>
        <tr>
      <td>
        <a href="ikih.php">
            <button class="btn btn-info"> Back to Home </button>
          </a>
      </td>
    </tr>
    <tr>
      <td>
          <a href="update.php?id_info=<?php echo $data->id_info ?>">
            <button class="btn btn-info"> Edit </button>
          </a>
      </td>
    </tr>
    <?php
      endwhile;
    ?>
</table>

</div>

  </body>
</html>