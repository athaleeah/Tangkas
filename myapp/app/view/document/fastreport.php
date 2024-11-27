<!doctype html>
<html lang="en">
   <head>
   
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
		<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>



     <style>
      
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

}

.small-text {
  font-size: 1.2em; /* Ubah ukuran font menjadi 1.2em */
}

.bold-text {
  font-weight: bold; /* Buat font menjadi bold */
}

.iq-search-bar {
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
        
#modalopenstreetmap .modal-body {
  padding: 0;
}

#map {
  width: 100%;
  height: 400px;
  border: none;
}

.leaflet-container .leaflet-control-attribution {
  display: none;
}

.leaflet-control-container .leaflet-control-zoom {
  bottom: 10px;
  right: 10px;
  position: absolute;
}

.modal-body .form-group {
  display: flex;
  align-items: center;
}

.modal-body #search-box {
  flex: 1;
}

.modal-body #search-btn {
  margin-left: 10px;
}

.modal-body .form-group {
  display: flex;
  align-items: center;
  padding: 10px;
}

.modal-body #search-box {
  flex: 1;
  padding: 5px;
}

.modal-body #search-btn {
  margin-left: 10px;
  padding: 5px 10px;
}

#map {
  padding: 10px;
  height: 400px;
}

.container-fluid {
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
}

.iq-card-header {
            background-color: #283c74; /* #52bac9 logo color Mengatur warna background header menjadi biru muda */
            
        }
.iq-card-header h3{
  color:white;
}

.iq-card-header h4{
  color:white;
}

#modalopenstreetmap .modal-body {
  padding: 0;
}

#modalopenstreetmap .modal-dialog {
  max-width: 800px;
}

#modalopenstreetmap .modal-content {
  border-radius: 0;
}

#modalopenstreetmap #map {
  border: 1px solid #ddd;
  padding: 10px;
}

/*  ... Your existing styles */

/* Styling for the extended search bar */
#modalopenstreetmap .modal-body .form-group {
  display: flex;
  align-items: center;
  padding: 10px;
}

#modalopenstreetmap .modal-body #search-box {
  flex: 1; /* Allows the search box to grow */
  padding: 5px;
  border-top-right-radius: 0; /* Removes top-right corner rounding */
  border-bottom-right-radius: 0; /* Removes bottom-right corner rounding */
}

#modalopenstreetmap .modal-body #search-btn {
  margin-left: 0;  /* Removes default margin */
  padding: 5px 10px;
  border-top-left-radius: 0;  /* Removes top-left corner rounding */
  border-bottom-left-radius: 0; /* Removes bottom-left corner rounding */

}

.input-group {
  width: 100%;
}

.input-group .form-control {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 14px;
}

.input-group-append {
  width: 30%;
}

.input-group-append button {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 12px;
}

       </style>

<div class="iq-top-navbar">
 <div class="iq-navbar-custom">
   <nav class="navbar navbar-expand-lg navbar-light p-0">
     <div class="iq-menu-bt d-flex align-items-center">
       <div class="wrapper-menu">
         <div class="main-circle"><i class="ri-menu-line"></i></div>
         <div class="hover-circle"><i class="ri-close-fill"></i></div> 
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
                <!-- ... (rest of the HTML remains the same) ... -->
        
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
        <i class="ri-menu-3-line"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto navbar-list">
          <li class="line-height">
            <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
              <div class="caption">
                <h6 class="mb-0 line-height"><b><?php echo $data ["full_name"]; ?></b></h6>
              </div>
              <img src="<?php echo APP_PATH; ?>/images/user/1.1.png" class="img-fluid rounded ml-3" alt="user">
            </a>
            <div class="iq-sub-dropdown iq-user-dropdown">
              <div class="iq-card shadow-none m-0">
                <div class="iq-card-body p-0 ">
                  <div class="bg-primary p-3">
                    <h5 class="mb-0 text-white line-height">Hello,  <?php echo $data ["full_name"]; ?></h5>
                    <span class="text-white font-size-12"></span> 
                  </div>
                  <a href="<?php echo APP_PATH; ?>/home/profile" class="iq-sub-card iq-bg-primary-hover">
                    <div class="media align-items-center">
                      <div class="rounded iq-card-icon iq-bg-primary">
                        <i class="ri-profile-line"></i>
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="mb-0 ">My Profile</h6>
                        <p class="mb-0 font-size-12">View and modify your personal details.</p>
                      </div>
                    </div>
                  </a>
                  <div class="d-inline-block w-100 text-center p-3">
                    <a class="bg-primary iq-sign-btn" href="<?php echo APP_PATH; ?>/login/logout" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
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
   <!-- TOP Nav Bar END -->
   
         <!-- Page Content  -->
    <!-- Page Content  -->
<div id="content-page" class="content-page">
  <div class="container-fluid">
      <div class="row d-flex align-items-stretch">
          <!-- Fast Report Form -->
          <div class="col-lg-8">
              <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                          <h4 class="card-title"><strong>Fast Report</strong></h4>
                      </div>
                  </div>
                  <div class="iq-card-body">
                      <p>Setiap laporan adalah langkah kecil menuju perubahan besar. Pastikan laporan Anda akurat untuk membantu kita melindungi masyarakat dari bahaya.</p>
                      <form  class="mt-4" action="<?=APP_PATH;?>/home/fastreported" method="post"> 
                          <div class="form-group">
                              <label for="input-judul"><b>Judul Laporan</b> </label>
                              <input type="text" class="form-control" name="input-judul" value="Kekerasan seksual oleh orang tak dikenal" placeholder="Berikan judul" required>
                          </div>
                          <div class="form-group">
                            <label for="input-deskripsi"><b>Deskripsi Singkat dan Spesifik tentang Lokasi dan Kejadian</b></label>
                            <textarea class="form-control" name="input-deskripsi" rows="8" placeholder="Pada tanggal _____ sekitar pukul ___ WITA, saya mengalami pelecehan dari seorang pria tak dikenal di ____. Pelaku meneriakkan kata-kata tidak senonoh ketika saya sedang berbelanja. Saya merasa sangat terganggu dan tidak nyaman." required></textarea>
                        </div>
                        
                          <div class="form-group">
							<div class="mb-3">
								<label for="category" class="form-label"><b>Cari Lokasi Kejadian dengan Map</b></label>
								<div class="input-group">
								
								<input type="text" name="input-longitude" id="input-longitude" class="form-control" placeholder="Longitude" style="background-color: lightgray;" readonly required ">
								<input type="text" name="input-latitude" id="input-latitude" class="form-control" placeholder="Latitude" style="background-color: lightgray;" readonly required ">
								
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalopenstreetmap"><i class="ri-map-pin-2-line" style="font-size: 20px;"></i> </button>
								</div>
								<input type="text" name="input-lokasi-bencana" id="input-lokasi-bencana" class="form-control mt-2" placeholder="Lokasi kejadian bencana." style="background-color: lightgray;" readonly required>
							</div>
							</div>
<!-- Modal for Open StreetMap -->
<!-- Modal -->
<div class="modal fade" id="modalopenstreetmap" tabindex="-1" aria-labelledby="modalopenstreetmapLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalopenstreetmapLabel">Pilih Lokasi</h5>
        <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
      </div>
	  <div class="input-group mt-3">
          <input type="text" id="search-input" class="form-control" placeholder="Cari Lokasi">
          <button class="btn btn-primary" id="get-location-btn">Cari</button>
        </div>
      <div class="modal-body">
        <div id="map" style="width: 100%; height: 400px;"></div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" id="submit-location-btn">Simpan</button>
      </div>
    </div>
  </div>
</div>

<script>
// Tambahkan event listener pada icon ri-map-pin-2-line
$('[data-bs-toggle="modal"][data-bs-target="#modalopenstreetmap"]').on('click', function() {
  // Munculkan modal #modalopenstreetmap
  $('#modalopenstreetmap').modal('show');
  
  // Initialize the map when the modal is shown
  $('#modalopenstreetmap').on('shown.bs.modal', function () {
    // Initialize the map
    var map = L.map('map').setView([-1.462, 125.152], 9); // Centered on Sulawesi Utara

    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
    }).addTo(map);

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
          .bindPopup("<div class='popup-container'><div class ='popup-title'>You Are Here!</div></div>").openPopup();
        map.setView([lat, lng], 13); // Adjust zoom level as needed
      }, function () {
        alert("Geolocation is not supported by this browser.");
      });
    } else {
      alert("Geolocation is not supported by this browser.");
    }

    // Search functionality
    $('#get-location-btn').on('click', function() {
      var searchInput = $('#search-input').val();
      if (searchInput !== '') {
        // Use Nominatim API to convert location text to coordinates
        $.ajax({
          type: 'GET',
          url: 'https://nominatim.openstreetmap.org/search',
          data: {
            q: searchInput,
            format: 'json',
            limit: 1
          },
          success: function(data) {
            if (data.length > 0) {
              var lat = data[0].lat;
              var lng = data[0].lon;
              map.setView([lat, lng], 17); // Adjust zoom level as needed
              // Add marker at searched location
              var marker = L.marker([lat, lng]).addTo(map);
              marker.bindPopup("<div class='popup-container'><div class ='popup-title'>Searched Location</div></div>").openPopup();
            } else {
              alert('Location not found');
            }
          },
          error: function() {
            alert('Failed to retrieve location');
          }
        });
      } else {
        alert('Please enter a location');
      }
    });

    // Capture current map view coordinates when get-location-btn is clicked
    $('#get-location-btn').on('click', function() {
      var center = map.getCenter();
      var lat = center.lat;
      var lng = center.lng;
      
      // Update the map view to center on the selected location
      map.setView([lat, lng], 17); // Adjust zoom level as needed
      
      // Add a marker at the selected location
      var marker = L.marker([lat, lng]).addTo(map);
      marker.bindPopup("<div class='popup-container'><div class ='popup-title'>Selected Location</div></div>").openPopup();
      
      // Update the hidden input fields with the selected coordinates
      $('#input-longitude').val(lng);
      $('#input-latitude').val(lat);
      
      // Get the address of the selected location using reverse geocoding
      $.ajax({
        type: 'GET',
        url: 'https://nominatim.openstreetmap.org/reverse',
        data: {
          lat: lat,
          lon: lng,
          format: 'json'
        },
        success: function(data) {
          var lokasi = data.display_name;
          $('#input-lokasi-bencana').val(lokasi);
        },
        error: function() {
          alert('Failed to retrieve location');
        }
      });
    });
  });
});
</script>
							  <div class="form-group">
							   <label for="tanggal_kejadian"><b>Tanggal Kejadian:</b></label>
							   <input type="date" class="form-control" id="tanggal-kejadian" name="tanggal-kejadian"  required>
							</div>
							<div class="form-group">
							   <label for="waktu_kejadian"><b>Waktu Kejadian:</b></label>
							   <input type="time" class="form-control" id="waktu-kejadian" name="waktu-kejadian"  required>
							</div>

							   <div class="form-group">
								   <label for="input-lapor-pihak" style="margin-bottom: -2px;"><b>Lapor ke Pihak Terkait Lainnya</b></label>
								   <p style="margin-bottom: 0px;">(Kepolisian)</p>
								   <select class="form-control mb-0" name="input-lapor-pihak"  required>
									   <option value="">Klik untuk memilih</option> 
									   <option value="ya">Ya</option>
									   <option value="tidak">Tidak</option>
								   </select> 
							   </div>
							   <div>
								  
								   <div class="form-group">
									 <label for="input-status-pelapor" style="margin-top: 13px;"><b>Hubungan Pelapor dengan Korban</b></label>
									 <select class="form-control mb-0" name="input-status-pelapor"  required>
										<option selected disabled="">Klik untuk memilih</option>
										<option value="diri">Diri Sendiri</option>
										<option value="keluarga">Keluarga</option>
										<option value="teman">Teman</option>
										<option value="warga">Warga Sekitar</option>
										<option value="lainnya">Lainnya</option>
									 </select>
								  </div>
								   <button type="submit" class="btn btn-primary" style="margin-top: 20px; margin-bottom: 10px;">Submit</button>
							   </div>
							  
						   </form>
					   </div>
				   </div>
			   </div>
           <!-- Image Section -->
            
					   <div class="col-lg-4">
						<div class="iq-card-header d-flex justify-content-between">
						   <div class="iq-card-body text-center">
							   <img src="<?php echo APP_PATH; ?>/images/bentuk_kekerasan.png" alt="Tangkas Dashboard Logo" class="img-fluid">
						   </div>
					   </div>
						<div class="iq-card">
						   <div class="iq-card-header d-flex justify-content-between">
							  <div class="iq-header-title">
								 <h4 class="card-title">Petunjuk Penggunaan</h4>
							  </div>
						   </div>
						   <div class="iq-card-body">
							  <p class="mb-0">1. Isi semua data pengaduan dengan benar dan lengkap.</p>
							  <p class="mb-0">2. Pastikan lokasi, tanggal, dan waktu kejadian diisi sesuai dengan yang terjadi.</p>
							  <p class="mb-0">3. Jika memiliki bukti foto, silakan upload pada bagian yang disediakan.</p>
							  <p class="mb-0">4. Setelah mengisi semua data, klik tombol submit untuk mengirimkan laporan Anda.</p>
						   </div>
								 
						<div class="iq-card">
						   <div class="iq-card-header d-flex justify-content-between">
							  <div class="iq-header-title">
								 <h4 class="card-title">Lapor Terkait Lainnya</h4>
							  </div>
						   </div>
						   <div class="iq-card-body">
							  <p class="mb-0">Jika Anda ingin melaporkan kejadian ini ke pihak terkait lainnya, mohon masukkan detail informasi mereka di sini.</p>
						   </div>
						</div>
						   
						</div>
					 </div>
				  </div>
			   </div>
			</div>
			</div>
           </div>
       </div>
   </div>
</div>
 <!-- Include Bootstrap and Leaflet JS  -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/leaflet@1 .7.1/dist/leaflet.js"></script>

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
      <script>

		
		
</script>