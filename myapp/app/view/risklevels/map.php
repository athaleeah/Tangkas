<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tangkas - Tangkap Kekerasan Seksual</title>
    <link rel="shortcut icon" href="<?php echo APP_PATH; ?>images/Tangkas_logo.png" />
    <link rel="stylesheet" href="<?php echo APP_PATH; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo APP_PATH; ?>/css/typography.css">
    <link rel="stylesheet" href="<?php echo APP_PATH; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo APP_PATH; ?>/css/responsive.css">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" />
<script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
    <style>
        .leaflet-right .leaflet-control {
            right: 10px;
            left: auto;
        }

        .leaflet-control-container .leaflet-control-attribution {
            display: none;
        }

        .popup-container {
            max-width: 250px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 15px;
        }

        .popup-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333; /* Change to your desired color */
        }

        .popup-date {
            font-size: 12px;
            color: #333;
            margin-bottom: 5px;
        }

        .popup-time {
            font-size: 12px;
            color: #333;
            text-align: right;
            margin-bottom: 5px;
        }

        .table {
            width: 100%;
            margin-bottom: 0;
        }

        .table td {
            border: none;
            padding: 5px;
            color: #333; /* Change to your desired color */
        }

        .popup-close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            font-size: 18px;
            color: #333; /* Change to your desired color */
            cursor: pointer;
        }

        .level-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .level-label {
            margin-left: 10px;
        }

        .level-circle {
            width: 20px;
            height: 20px;
            border-radius: 50%;
        }

        .level-1 {
            background-color: #4CAF50;
        }

        .level-2 {
            background-color: #FFC107;
        }

        .level-3 {
            background-color: #F44336;
        }
        .level-container-map {
  background-color: #fff;
  padding: 10px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  z-index: 900;
  position: relative;
  top: 50%; /* adjust to 50% to center vertically */
  left: 50%; /* adjust to 50% to center horizontally */
  transform: translate(81%, -40%); /* adjust to center */
  margin-top: 100px; /* adjust to move down */
}
.iq-search-bar {
    margin-top: 7px; /* add this line to move the search bar down */
  }

  .iq-search-bar input[type="text"] {
  background-color: #F7F7F7; /* light gray color */
}
.iq-search-bar .search-link i {
  color: #9BA4B5; /* dark gray color */
}


  .iq-navbar-logo {
    margin-top: -5px; /* add this line to move the logo and text down */
  }
  
  .navbar-list {
    margin-top: 5px; /* add this line to move the profile picture and text down */
  }
 
  body {
  background-color: #ECF9FF; /* light blue color */
}
.iq-sidebar::before {
    content: "";
    display: block;
    background-image: inherit;
    transform: scaleX(-1);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}
  
.iq-sidebar .header-logo span {

  font-weight: bold;
}

.iq-sidebar {

  background-color: #FFFFFF; /* change to white */

}

.iq-top-navbar {
  width: 130vw; /* or a specific width value, e.g., 1200px */
  background-color: #FFFFFF; /* light blue color */
  padding: -20px 50px;
top: -10px;}

 
.header-logo span {
  font-family: 'MyCustomFont', sans-serif; /* replace with your custom font name */
  font-size: 1.8em; /* increase font size for better visibility */
  font-weight: bold; /* add boldness for extra emphasis */
  text-transform: uppercase; /* convert text to uppercase for a stronger look */
  letter-spacing: 3px; /* add some space between letters for a more dramatic effect */
  color: #03457C; /* use a vibrant, bold orange-red color to convey energy and passion */
  text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5); /* add a subtle shadow to give the text some depth */
  border-bottom: 2px solid #03457C; /* add a thin border to create a sense of movement */
  padding-bottom: 5px; /* add some space between the text and the border */
  transition: all 0.3s ease-in-out; /* add a smooth transition effect on hover */
}

.header-logo span:hover {
  color: #03457C; /* change the text color to a deep blue on hover */
  border-bottom-color: #03457C; /* change the border color to match the text color on hover */
  transform: translateY(-2px); /* add a slight upward movement on hover */
}

  /* New CSS class for smaller image */
  .profile-img {
            width: 30px; /* Adjust the width as needed */
            height: auto; /* Maintain aspect ratio */
         }

         .navbar-nav .line-height .caption h6 {
  margin-top: 5px; /* Sesuaikan nilai margin-top sesuai kebutuhan */}

  .navbar-nav .line-height a {
  padding-top: 10px; /* Sesuaikan nilai ini untuk posisi yang diinginkan */
}

.iq-search-bar .logo {
  margin-right: 10px;
}

.iq-search-bar .logo img {
    width: 45px;
  height: 35px;
  object-fit: cover;
  border-radius: 50%;
}

.iq-search-bar .container {
    background-color: #FFFFFF; /* Tambahkan ini */
  display: flex;
  align-items: center;
}

.small-text {
  font-size: 1.2em; /* Ubah ukuran font menjadi 1.2em */
}

.bold-text {
  font-weight: bold; /* Buat font menjadi bold */
}

.iq-search-bar {
    display: flex;
  align-items: center;
  justify-content: space-between;
  position: absolute;
  top: 6%;
  transform: translateY(30%);
  transition: transform 0.3s ease-in-out;
  right: 50%; /* ubah nilai ini menjadi 20% */
}

.iq-search-bar.expanded {
  transform: translateX(85%); /* tambahkan ini */
  right: 60%; /* ubah nilai ini menjadi 50% */
}
.iq-navbar-logo a span {
  margin-left: 10px; /* add this line to move the text to the right */
}

#content-page {
  margin-top: -30px; /* adjust the value to your liking */

}

.map-info-box {
  background-color: rgba(255, 255, 255, 0.8); /* slightly transparent background */
  border: 1px solid #ddd; /* thin border */
  padding: 20px; /* add some padding */
  border-radius: 5px; /* rounded corners */
}

.level-container {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.level-circle {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 18px; /* adjust font size for icons */
}

.level-circle.level-1 {
  background-color: #4CAF50;
}

.level-circle.level-2 {
  background-color: #FFC107;
}

.level-circle.level-3 {
  background-color: #F44336;
}

.level-label {
  margin-left: 10px;
}

.map-title {
  font-weight: bold;
  margin-bottom: 10px;
}

.container-fluid {
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
}

.iq-card-header {
            background-color: #283c74; /* Mengatur warna background header menjadi biru muda */
            
        }
.iq-card-header h3{
  color:white;
}

.iq-card-header h4{
  color:white;
}

#id-map-view {
    max-width: 100%;
    width: 100%;
    height: 600px;
    border: 1px solid #ddd;
    padding: 10px;
    overflow: hidden;
	margin-right: 20px; 
	
}

footer {
    background-color: #f1f1f1; /* Ganti sesuai warna footer kamu */
    padding-top:  0px 0; /* Atur padding sesuai kebutuhan */
    text-align: center; /* Tengah */
    position: relative; /* Pastikan posisinya relatif */
    margin-top: auto; /* Jika menggunakan flexbox */
}





    </style>

 <!-- TOP Nav Bar HOME -->
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-menu-bt d-flex align-items-center">
                <div class="wrapper-menu">
                    <div class="main-circle">
                        <i class="ri-menu-line"></i>
                    </div>
                    <div class="hover-circle">
                        <i class="ri-close-fill"></i>
                    </div>
                </div>
                <div class="iq-navbar-logo d-flex justify-content-between ml-3">
                    <a href="index.php" class="header-logo">
                        <img src="<?php echo APP_PATH; ?>/images/Tangkas_logo.png" class="img-fluid rounded" alt="">
                        <span>Tangkas</span>
                    </a>
                </div>
            </div>

            <div class="iq-search-bar" id="search-bar-text">
                <div class="container">
                    <div class="logo">
                        <img src="<?php echo APP_PATH; ?>/images/Tangkas_logo.png" alt="Tangkas Logo" width="30" height="30">
                    </div>
                    <h6 class="small-text bold-text">Tangkap Kekerasan Seksual</h6>
                </div>
            </div>

            <!-- Search form (commented out) -->
            <!--<form action="#" class="searchbox">
                <input type="text" class="text search-input" placeholder="Type here to search..." style="color: #9DB2BF;">
                <a class="search-link" href="#"><i class="ri-search-line"></i></a>
            </form>-->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                <i class="ri-menu-3-line"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-list">
                    <li class="line-height">
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                            <div class="caption">
                                <h6 class="mb-0 line-height">
                                    <b><?php echo $data['datalogin']["full_name"]; ?></b>
                                </h6>
                            </div>
                            <img src="<?php echo APP_PATH; ?>/images/user/1.1.png" class="img-fluid rounded ml-3" alt="user">
                        </a>

                        <div class="iq-sub-dropdown iq-user-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white line-height">Hello, <?php echo $data['datalogin']["full_name"]; ?></h5>
                                    </div>
                                    <a href="<?php echo APP_PATH; ?>/profile_ctrl/profile" class="iq-sub-card iq-bg-primary-hover">
                                        <div class="media align-items-center">
                                            <div class="rounded iq-card-icon iq-bg-primary">
                                                <i class="ri-profile-line"></i>
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0">My Profile</h6>
                                                <p class="mb-0 font-size-12">View and modify your personal details.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="d-inline-block w-100 text-center p-3">
                                        <a class="bg-primary iq-sign-btn" href="<?php echo APP_PATH; ?>/login/user" role="button">
                                            Sign out
                                            <i class="ri-login-box-line ml-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
        <!-- Page Content  -->
       <div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Map Lokasi Terjadi Kekerasan Seksual</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="id-map-view" style="height: 800px; border: 1px solid #ddd; padding: 10px;"></div>
                            </div>
										
									</div>
								</div>
							</div>
                                        <!-- Level Container -->
                                       

                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                
        <!-- Wrapper END -->
    
        <!-- Footer END -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?php echo APP_PATH; ?>/js/jquery.min.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/popper.min.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/jquery.appear.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/countdown.min.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/waypoints.min.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/jquery.counterup.min.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/wow.min.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/apexcharts.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/slick.min.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/select2.min.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/owl.carousel.min.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/smooth-scrollbar.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/lottie.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/core.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/charts.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/animated.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/kelly.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/maps.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/worldLow.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/style-customizer.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/chart-custom.js"></script>
        <script src="<?php echo APP_PATH; ?>/js/custom.js"></script>
		<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.js"></script>
		
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo APP_PATH; ?>/js/jquery.min.js"></script>
<script src="<?php echo APP_PATH; ?>/js/popper.min.js"></script>
<script src="<?php echo APP_PATH; ?>/js/bootstrap.min.js"></script>
<!-- ... (rest of the JavaScript remains the same) ... -->


        <style>
        
        .leaflet-right .leaflet-control {
            right: 10px;
            left: auto;
        }

        .leaflet-control-container .leaflet-control-attribution {
            display: none;
        }

        .popup-container {
            max-width: 250px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 15px;
        }

        .popup-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333; /* Change to your desired color */
        }

        .popup-date {
            font-size: 12px;
            color: #333;
            margin-bottom: 5px;
        }

        .popup-time {
            font-size: 12px;
            color: #333;
            text-align: right;
            margin-bottom: 5px;
        }

        .table {
            width: 100%;
            margin-bottom: 0;
        }

        .table td {
            border: none;
            padding: 5px;
            color: #333; /* Change to your desired color */
        }

        .popup-close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            font-size: 18px;
            color: #333; /* Change to your desired color */
            cursor: pointer;
        }

        .level-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .level-label {
            margin-left: 10px;
        }

        .level-circle {
            width: 20px;
            height: 20px;
            border-radius: 50%;
        }

        .level-1 {
            background-color: #4CAF50;
        }

        .level-2 {
            background-color: #FFC107;
        }

        .level-3 {
            background-color: #F44336;
        }
		
		 #popup-content table {
        width: 100%;
        border-collapse: collapse;
    }
    #popup-content td {
        padding: 5px;
        vertical-align: top;
    }
    </style>
          </style>
          
        <script>
<!-- Add Leaflet CSS and JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<!-- Add Leaflet MarkerCluster CSS and JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" />
<script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>


<script>$(document).ready(function () {
    // Initialize the map with options to disable certain interactions
    var map = L.map('id-map-view', {
        center: [1.462, 125.152],
        zoom: 9,
        scrollWheelZoom: false,  // Disable zoom on scroll for a stable view
        dragging: true,          // Enable dragging only when needed
        tap: false                // Disable tap for touch devices
    });

    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(map);

    // Function to format date as 'dd/mm/yyyy'
    function formatDate(date) {
        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();
        return `${day}/${month}/${year}`;
    }

    // Function to format time as 'hh:mm:ss'
    function formatTime(date) {
        var hours = date.getHours();
        var minutes = date.getMinutes();
        var seconds = date.getSeconds();
        return `${hours}:${minutes}:${seconds}`;
    }

    // Function to get coordinates from location name
    function getCoordinates(location) {
        return $.getJSON(`https://nominatim.openstreetmap.org/search?format=json&q=${location}`)
            .then(function (response) {
                if (response.length > 0) {
                    var lat = parseFloat(response[0].lat);
                    var lng = parseFloat(response[0].lon);
                    return { lat, lng };
                } else {
                    console.warn("Location not found:", location);
                    return null;
                }
            });
    }

    // Store reports by location
    var reportsByLocation = {};

    // Fetch data from API
    $.getJSON('https://tangkas.web.id/myapp/public/home/datalaporanweb')
        .done(function (data) {
            console.log("Total data received:", data.length); // For debugging purposes
            data.forEach(function (item) {
                // Check if status_laporan is NOT 'selesai' before processing the item
                if (item.status_laporan !== 'selesai') {
                    var location = item.lokasi;

                    // Get coordinates from location name
                    getCoordinates(location).then(function (coordinates) {
                        if (coordinates) {
                            // Initialize location array if not exists
                            if (!reportsByLocation[location]) {
                                reportsByLocation[location] = [];
                            }
                            // Push the current item into the array for that location
                            reportsByLocation[location].push(item);

                            // Create marker
                            var marker = L.marker([coordinates.lat, coordinates.lng]).addTo(map);
                            
                            // Customize popup content
                            var currentDate = new Date();
                            var formattedDate = formatDate(currentDate);
                            var formattedTime = formatTime(currentDate);
                            
                            // Create popup content with multiple reports if available
                            var popupContent = `
                                <div class="popup-container">
                                    <div class="popup-date-time" style="color: #C80036;">
                                        <span style="font-weight: bold;">
                                            <i class="ri-calendar-line"></i> ${formattedDate}
                                            <span style="margin-left: 70px; font-weight: bold;">
                                                <i class="ri-time-line"></i> ${formattedTime}
                                            </span>
                                        </span>
                                    </div>
                                    <div class="popup-title" style="color: #982E41; font-size: 24px; margin-top: 10px;">Pelaporan</div>
                                    <table class="table">
                                        <tbody>
                            `;
								// Tambahkan pembungkus untuk laporan dengan scroll
							popupContent += `
								<div style="max-height: 300px; overflow-y: auto; border: 1px solid #ddd; padding: 10px; margin-top: 10px; position: relative;">
									<table style="width: 100%; border-collapse: collapse;">
										<tbody>
							`;

							// Loop through reports at this location
							reportsByLocation[location].forEach(function (report, index) {
								// Tambahkan garis pemisah jika bukan item pertama
								if (index > 0) {
									popupContent += `
										<tr>
											<td colspan="2"><hr style="border: 1px solid #ddd; margin: 10px 0;"></td>
										</tr>
									`;
								}

								// Tambahkan konten laporan
								popupContent += `
									<tr>
										<td style="font-weight: bold; padding-right: 10px;">Deskripsi:</td>
										<td>${report.deskripsi_pengaduan}</td>
									</tr>
									<tr>
										<td style="font-weight: bold; padding-right: 10px;">Lokasi:</td>
										<td>${report.lokasi}</td>
									</tr>
									<tr>
										<td style="font-weight: bold; padding-right: 10px;">Tanggal Kejadian:</td>
										<td>${report.tanggal_kejadian}</td>
									</tr>
									<tr>
										<td style="font-weight: bold; padding-right: 10px;">Waktu Kejadian:</td>
										<td>${report.waktu_kejadian}</td>
									</tr>
								`;
							});

							popupContent += `
										</tbody>
									</table>
								</div>
							</div>
							`;

							
							const popupContainer = document.querySelector('#id-map-view');
							popupContainer.addEventListener('mouseenter', function() {
								this.style.pointerEvents = 'auto'; // Aktifkan interaksi mouse
							});
							popupContainer.addEventListener('mouseleave', function() {
								this.style.pointerEvents = 'none'; // Nonaktifkan interaksi mouse ketika mouse meninggalkan kontainer
							});



                            marker.bindPopup(popupContent, {
                                closeButton: false,
                                autoClose: false,
                                closeOnEscapeKey: false,
                                closeOnClick: false,
                                autoPan: false    // Prevent panning when popup opens
                            });

                            // Open popup on hover without moving map
                            marker.on('mouseover', function () {
                                marker.openPopup();
                            });

                            // Close popup on mouseout
                            marker.on('mouseout', function () {
                                marker.closePopup();
                            });
                        }
                    });
                }
            });
        })
        .fail(function (jqxhr, textStatus, error) {
            console.error("Request Failed: " + textStatus + ", " + error);
        });

    // Custom zoom control position
    map.zoomControl.setPosition('bottomright');

    // Geolocation to find current location
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var lat = position.coords.latitude;
            var lng = position.coords.longitude;

            // Custom red icon for current location with text
            var redIcon = L.divIcon({
                html: '<div style="position: relative; font-size: 17px; color: red; text-align: center;"></div><img src="https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png" style="width: 30px; height: 51px;">',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            // Add marker with custom red icon
            var currentLocationMarker = L.marker([lat, lng], { icon: redIcon }).addTo(map)
                .bindPopup("<div class='popup-container'><div class='popup-title'>You Are Here!</div></div>").openPopup();
            map.setView([lat, lng], 13); // Adjust zoom level as needed
        }, function () {
            alert("Geolocation is not supported by this browser.");
        });
    } else {
        alert("Geolocation is not supported by this browser.");
    }
});

</script>

    </body>
</html>