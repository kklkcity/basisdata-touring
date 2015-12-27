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
		  width:1310px;
        height: 460px;
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
<link rel="stylesheet" href="back-to-top/css/reset.css"> 
  <link rel="stylesheet" href="back-to-top/css/style.css"> 
  <script src="back-to-top/js/modernizr.js"></script> 
 <script src="js/ie-emulation-modes-warning.js"></script>
 <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

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
        <b>Start: </b>
    <select id="start" onchange="calcRoute();">
      <option >Universitas Gadjah Mada</option>
      <option >Yogyakarta</option>
      <option >UMY</option>
    </select>
    <b>End: </b>
    <select id="end" onchange="calcRoute();">
      <option >Universitas Negeri Surakarta</option>
      <option >Solo</option>
      <option >UMS</option></select>
    
    <div id="map"></div>
    <script>
function initMap() {
  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: {lat: -7.8, lng: 110.38}
  });
  directionsDisplay.setMap(map);

  var onChangeHandler = function() {
    calculateAndDisplayRoute(directionsService, directionsDisplay);
  };
  document.getElementById('start').addEventListener('change', onChangeHandler);
  document.getElementById('end').addEventListener('change', onChangeHandler);
}

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
  directionsService.route({
    origin: document.getElementById('start').value,
    destination: document.getElementById('end').value,
    travelMode: google.maps.TravelMode.DRIVING
  }, function(response, status) {
    if (status === google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
      </div>
    </div>
<!-- akhir dari peta -->

<!-- menu nya yaa-->    
<div class="container container-fluid">	

	<div class="row">
		<div class="col-sm-3 ">

			<div class="thumbnail">

				<div class="caption">
				<div class="jd1">
					<a href ="#spbu">SPBU</a>
				</div>	
				</div>
			</div>
		</div>
	
		<div class="col-sm-3 ">
			<div class="thumbnail">

				<div class="caption">
				<div class="jd2">
					<a href ="#rm">Rumah Makan</a>
					</div>
				</div>
			</div>
		</div>
	<div class="col-sm-3 ">
			<div class="thumbnail">

				<div class="caption">
				<div class="jd3">
					<a href ="#ti">Tempat Ibadah</a>
				</div>
				</div>
			</div>
		</div>
<div class="col-sm-3 ">
			<div class="thumbnail">

				<div class="caption">
				<div class="jd4">	
					<a href ="#ra">Rest Area</a>	
					
				</div>
				</div>
			</div>
		</div>
</div>

</div>

<section id="spbu" class="success">
  <div class="container">
    <h2>List SPBU</h2>
          <table class="table table-striped">
              
              <tr>
              <td>
                <a href="#adis" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        SPBU Bandara Adisucipto
                        </a>


              <tr>
              <td>
                   <a href="#sawit" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        SPBU Sawit, Boyolali
                        </a>
              </td>
            </tr>

            <tr>
              <td>
                   <a href="#duren" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        SPBU Karang Duren, Salakan
                        </a>
              </td>
            </tr>            

            <tr>
              <td>
                   <a href="#cae" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        SPBU Kali Tirto
                        </a>
              </td>
              </tr>

              <tr>
              <td>
                   <a href="#cae" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        SPBU Sanggrahan, Prambanan
                        </a>
              </td>
            </tr>

            <tr>
              <td>
                   <a href="#cae" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        SPBU Delanggu, Klaten
                        </a>
              </td>
              </tr>

            </tr>

          </table>
          <a href="ikih.php">
           <button class="btn btn-info" title="Back to Top"> Back to Top </button>
          </a>
    </div>
  </section>

<section class="konten2" id="rm">
  <div class="container">
    <h2>List Rumah Makan</h2>
          <table class="table table-striped">
              
              <tr>
              <td>
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        Ayam Goreng “MBOK BEREK KALASAN"
                        </a>
                <!--  <a href="https://www.google.co.id/maps/place/Ayam+Goreng+Mbok+Berek/@-7.7626411,110.4729115,17z/data=!3m1!4b1!4m2!3m1!1s0x2e7a5a5f1f634475:0x8b337b493173ac8a?hl=en">
              </a>  -->
              
              </td>
            </tr>

            <tr>
              <td>
                   <a href="#cae" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        Caesar Lounge & Cafe
                        </a>
              </td>
              </tr>

              <tr>
              <td>
                 <a href="#gudeg" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        Gudeg Bu Yati
                        </a>
              </td>
            </tr>

            <tr>
              <td>
                      <a href="#cae" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        Ayam Goreng Candisari Kalasan
                      </a>
              </td>
              </tr>

              <tr>
              <td>
                   <a href="#cae" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        Soto Ayam Miroso
                      </a>
              </td>
            </tr>

            <tr>
              <td>
                    <a href="#cae" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        Sate & Tongseng Mbah Darmo
                      </a>
              </td>
            </tr>
          </table>
    </div>
  </section>

  <section id="ti" class="konten3">
    <div class="container">
       <h2>List Tempat Ibadah</h2>
          <table class="table table-striped">
              
              <tr>
              <td>
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        Masjid Kota Delanggu
                        </a>
              </td>
            </tr>

            <tr>
              <td>
                   <a href="#cae" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        Masjid Agung Klaten
                        </a>
              </td>
              </tr>

              <tr>
              <td>
                   <a href="#cae" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        Masjid Al A’raaf Kauman
                        </a>
              </td>
            </tr>

            <tr>
              <td>
                   <a href="#cae" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        Masjid Raya Al Muttaquun
                        </a>
              </td>
              </tr>
          </table>
    </div>
  </section>

   <section id="ra" class="konten4">
    <div class="container">
       <h2>List Rest Area</h2>
          <table class="table table-striped">
              
              <tr>
              <td>
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        Masjid Kota Delanggu
                        </a>
              </td>
            </tr>

            <tr>
              <td>
                   <a href="#cae" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        Masjid Agung Klaten
                        </a>
              </td>
              </tr>

              <tr>
              <td>
                   <a href="#cae" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        Masjid Al A’raaf Kauman
                        </a>
              </td>
            </tr>

            <tr>
              <td>
                   <a href="#cae" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        Masjid Raya Al Muttaquun
                        </a>
              </td>
              </tr>
          </table>
    </div>
  </section>

<!-- Describe RM -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Ayam Goreng “MBOK BEREK KALASAN”</h2>
                            <hr class="star-primary">
                            <img src="img/ayam.png" class="img-responsive img-centered" alt="">
                            <p>                                        
                                <?php 
                                require_once("connection.php");
                                $result = mysqli_query($conn,"SELECT * FROM info where id_info='i001' ");
                                while($data = mysqli_fetch_object($result) ):
                                echo $data->informasi;
                                endwhile;
                                ?>             
                            </p>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            <a href="ag.php">
                              <button class="btn btn-info" title="Read More"> More </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="portfolio-modal modal fade" id="cae" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Caesar Lounge & Cafe</h2>
                            <hr class="star-primary">
                            <img src="img/cae.jpg" class="img-responsive img-centered" alt="">
                            <p>                                        
                                <?php 
                                require_once("connection.php");
                                $result = mysqli_query($conn,"SELECT * FROM info where id_info='i003' ");
                                while($data = mysqli_fetch_object($result) ):
                                echo $data->informasi;
                                endwhile;
                                ?>             
                            </p>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            <a href="caesar.php">
                              <button class="btn btn-info" title="Read More"> More </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="gudeg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Gudeg Bu Yati</h2>
                            <hr class="star-primary">
                            <img src="img/gudeg.jpg" class="img-responsive img-centered" alt="">
                            <p>                                        
                                <?php 
                                require_once("connection.php");
                                $result = mysqli_query($conn,"SELECT * FROM info where id_info='i002' ");
                                while($data = mysqli_fetch_object($result) ):
                                echo $data->informasi;
                                echo $data->alamat;
                                endwhile;
                                ?>             
                            </p>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            <a href="gudeg.php">
                              <button class="btn btn-info" title="Read More"> More </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Describe SPBU -->
    <div class="portfolio-modal modal fade" id="adis" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>SPBU Bandara Adisucipto</h2>
                            <hr class="star-primary">
                            <img src="img/adis.png" class="img-responsive img-centered" alt="">
                            <p>                                        
                                <?php 
                                require_once("connection.php");
                                $result = mysqli_query($conn,"SELECT * FROM info where id_info='i008' ");
                                while($data = mysqli_fetch_object($result) ):
                                echo $data->informasi;
                                echo $data->alamat;
                                endwhile;
                                ?>             
                            </p>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            <a href="adis.php">
                              <button class="btn btn-info" title="Read More"> More </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="portfolio-modal modal fade" id="sawit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>SPBU Sawit, Boyolali</h2>
                            <hr class="star-primary">
                            <img src="img/sawit.png" class="img-responsive img-centered" alt="">
                            <p>                                        
                                <?php 
                                require_once("connection.php");
                                $result = mysqli_query($conn,"SELECT * FROM info where id_info='i009' ");
                                while($data = mysqli_fetch_object($result) ):
                                echo $data->informasi;
                                echo $data->alamat;
                                endwhile;
                                ?>             
                            </p>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            <a href="sawit.php">
                              <button class="btn btn-info" title="Read More"> More </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="portfolio-modal modal fade" id="duren" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>SPBU Karang Duren (Salakan)</h2>
                            <hr class="star-primary">
                            <img src="img/sawit.png" class="img-responsive img-centered" alt="">
                            <p>                                        
                                <?php 
                                require_once("connection.php");
                                $result = mysqli_query($conn,"SELECT * FROM info where id_info='i010' ");
                                while($data = mysqli_fetch_object($result) ):
                                echo $data->informasi;
                                echo $data->alamat;
                                endwhile;
                                ?>             
                            </p>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            <a href="duren.php">
                              <button class="btn btn-info" title="Read More"> More </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<a href="#0" class="cd-top">Top</a>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="back-to-top/js/main.js"></script>
   <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
  <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>

  <!-- Load Booststrap -->
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script type="text/javascript" src="js/smooth-scroll.js"></script>

  <!-- Load custom js for theme -->
  <script type="text/javascript" src="js/app.js"></script>
</body>
</html>
