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

  <a href="index.php" >Back to Top</a>
</div>

<section id="spbu">
    <div class="konten1">
          <!-- <table border = 1>
            <td>
              <a href="https://www.google.co.id/maps/place/Ayam+Goreng+Mbok+Berek/@-7.7626411,110.4729115,17z/data=!3m1!4b1!4m2!3m1!1s0x2e7a5a5f1f634475:0x8b337b493173ac8a?hl=en">
                Ayam Goreng “MBOK BEREK KALASAN"
              </a>
            </td>
              <br>
              
              <a href="https://www.google.co.id/maps/place/Caesar+Lounge+%26+Cafe/@-7.7823783,110.3990578,17z/data=!3m1!4b1!4m2!3m1!1s0x2e7a59c293ff767d:0xef978131fc937d3b?hl=en">
                CAESAR coffee and lounge
              </a>
              
              <br>
              <a href="https://www.google.co.id/maps/place/Bu+Yati/@-7.5682761,110.789366,17z/data=!3m1!4b1!4m2!3m1!1s0x2e7a143315e531c9:0x3c7a8981491ae133?hl=en">
                Gudeg Bu Yati
              </a>
              
              <br>
              
              <a href="https://www.google.co.id/maps/place/Ayam+Goreng+Mbok+Berek/@-7.7626411,110.4729115,17z/data=!3m1!4b1!4m2!3m1!1s0x2e7a5a5f1f634475:0x8b337b493173ac8a?hl=en">
                QUA-LI Noodle&Rice
              </a>
              
              <br>
              
              <a href="https://www.google.co.id/maps/place/Soto+Ayam+Miroso/@-7.7831087,110.3965593,17z/data=!3m1!4b1!4m2!3m1!1s0x2e7a59c4c1ce3f8b:0xf889c9a04a13c306?hl=en">
                Soto Ayam MIROSO
              </a>
              
              <br>
              
              <a href="https://www.google.co.id/maps/place/Sate+Mbah+Darmo/@-7.9722435,110.5679373,13z/data=!3m1!4b1!4m2!3m1!1s0x2e7bb368f1245019:0x90a0c830dd83572e?hl=en">
                Sate & Tongseng Mbah Darmo
              </a>
              
              <br>
              <div class="ic">
              <a href="index.php" >Back to Top</a>
            </div>
          </table> -->

          <table class="table table-striped">
              
              <td>

              </td>
              <td>
                
              </td>
              <td>
                
              </td>
              <td>
                
              </td>
              <td>
                
              </td>
              <td>
                
              </td>

          </table>
    </div>
  </section>

<section id="rm">
    <div class="konten2">
      <div class="row">
       <!--<div class="samping">
              
        </div>-->
      
      </div>
      <div class="col-sm-4 portfolio-item">
        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
          <!-- <a href="https://www.google.co.id/maps/place/Ayam+Goreng+Mbok+Berek/@-7.7626411,110.4729115,17z/data=!3m1!4b1!4m2!3m1!1s0x2e7a5a5f1f634475:0x8b337b493173ac8a?hl=en">
          "Ayam Goreng “MBOK BEREK KALASAN"</a> -->
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                Ayam Goreng “MBOK BEREK KALASAN”
                    </a>
              <br>
                    <a href="https://www.google.co.id/maps/place/Caesar+Lounge+%26+Cafe/@-7.7823783,110.3990578,17z/data=!3m1!4b1!4m2!3m1!1s0x2e7a59c293ff767d:0xef978131fc937d3b?hl=en">
                "CAESAR coffee and lounge"
              </a>
              <br>
                    <a href="https://www.google.co.id/maps/place/Bu+Yati/@-7.5682761,110.789366,17z/data=!3m1!4b1!4m2!3m1!1s0x2e7a143315e531c9:0x3c7a8981491ae133?hl=en">
                "Gudeg Bu Yati"
              </a>
              <br>
                    <a href="https://www.google.co.id/maps/place/Ayam+Goreng+Mbok+Berek/@-7.7626411,110.4729115,17z/data=!3m1!4b1!4m2!3m1!1s0x2e7a5a5f1f634475:0x8b337b493173ac8a?hl=en">
                "QUA-LI Noodle&Rice "
              </a>
              <br>
                    <a href="https://www.google.co.id/maps/place/Soto+Ayam+Miroso/@-7.7831087,110.3965593,17z/data=!3m1!4b1!4m2!3m1!1s0x2e7a59c4c1ce3f8b:0xf889c9a04a13c306?hl=en">
                "Soto Ayam MIROSO"
              </a>
              <br>
                    <a href="https://www.google.co.id/maps/place/Sate+Mbah+Darmo/@-7.9722435,110.5679373,13z/data=!3m1!4b1!4m2!3m1!1s0x2e7bb368f1245019:0x90a0c830dd83572e?hl=en">
                "Sate & Tongseng Mbah Darmo "
              </a>
              <br>
                <div class="ic">
              <a href="index.php" >Back to Top</a>
            </div>
    </div>
  </section>

  <section id="ti">
    <div class="konten3">
      <div class="row">
       <!--<div class="samping">
              
        </div>-->
      
      </div>
      <a href="https://www.google.co.id/maps/place/Ayam+Goreng+Mbok+Berek/@-7.7626411,110.4729115,17z/data=!3m1!4b1!4m2!3m1!1s0x2e7a5a5f1f634475:0x8b337b493173ac8a?hl=en">
                "1. Masjid Kota Delanggu"
              </a>
              <br>
                    <a href="https://www.google.co.id/maps/place/Caesar+Lounge+%26+Cafe/@-7.7823783,110.3990578,17z/data=!3m1!4b1!4m2!3m1!1s0x2e7a59c293ff767d:0xef978131fc937d3b?hl=en">
                "2. Masjid Agung Klaten"
              </a>
              <br>

              <br>
                    <a href="https://www.google.co.id/maps/place/Ayam+Goreng+Mbok+Berek/@-7.7626411,110.4729115,17z/data=!3m1!4b1!4m2!3m1!1s0x2e7a5a5f1f634475:0x8b337b493173ac8a?hl=en">
                "3. Masjid Al A’raaf Kauman "
              </a>
              <br>
                    <a href="https://www.google.co.id/maps/place/Soto+Ayam+Miroso/@-7.7831087,110.3965593,17z/data=!3m1!4b1!4m2!3m1!1s0x2e7a59c4c1ce3f8b:0xf889c9a04a13c306?hl=en">
                "4. Masjid Raya Al Muttaquun"
              </a>
                <div class="ic">
              <a href="index.php" >Back to Top</a>
            </div>
    </div>
  </section>

  <section id="ra">
    <div class="konten4">
      <div class="row">
       <!--<div class="samping">
              
        </div>-->
      
      </div>
      <a href="https://www.google.co.id/maps/place/Ayam+Goreng+Mbok+Berek/@-7.7626411,110.4729115,17z/data=!3m1!4b1!4m2!3m1!1s0x2e7a5a5f1f634475:0x8b337b493173ac8a?hl=en">
                "Ayam Goreng “MBOK BEREK KALASAN"
              </a>
              <br>
                    <a href="https://www.google.co.id/maps/place/Caesar+Lounge+%26+Cafe/@-7.7823783,110.3990578,17z/data=!3m1!4b1!4m2!3m1!1s0x2e7a59c293ff767d:0xef978131fc937d3b?hl=en">
                "CAESAR coffee and lounge"
              </a>
              <br>
                    <a href="https://www.google.co.id/maps/place/Bu+Yati/@-7.5682761,110.789366,17z/data=!3m1!4b1!4m2!3m1!1s0x2e7a143315e531c9:0x3c7a8981491ae133?hl=en">
                "Gudeg Bu Yati"
              </a>
              <br>
                    <a href="https://www.google.co.id/maps/place/Ayam+Goreng+Mbok+Berek/@-7.7626411,110.4729115,17z/data=!3m1!4b1!4m2!3m1!1s0x2e7a5a5f1f634475:0x8b337b493173ac8a?hl=en">
                "QUA-LI Noodle&Rice "
              </a>
              <br>
                    <a href="https://www.google.co.id/maps/place/Soto+Ayam+Miroso/@-7.7831087,110.3965593,17z/data=!3m1!4b1!4m2!3m1!1s0x2e7a59c4c1ce3f8b:0xf889c9a04a13c306?hl=en">
                "Soto Ayam MIROSO"
              </a>
              <br>
                    <a href="https://www.google.co.id/maps/place/Sate+Mbah+Darmo/@-7.9722435,110.5679373,13z/data=!3m1!4b1!4m2!3m1!1s0x2e7bb368f1245019:0x90a0c830dd83572e?hl=en">
                "Sate & Tongseng Mbah Darmo "
              </a>
              <br>
                <div class="ic">
              <a href="index.php" >Back to Top</a>
            </div>
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
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>                                        
                                <?php 
                                require_once("connection.php");
                                $result = mysqli_query($conn,"SELECT * FROM info");
                                while($data = mysqli_fetch_object($result) ):
                                echo $data->informasi;
                                endwhile;
                                ?>             
                            </p>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Portfolio Modal 1 -->
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
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p>
                                <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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