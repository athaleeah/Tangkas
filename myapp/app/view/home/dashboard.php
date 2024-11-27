
<!-- TOP Nav Bar HOME -->
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
                    <h5 class="mb-0 text-white line-height">Hello, <?php echo $data ["full_name"]; ?></h5>
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
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
			   
				  
				  <!-- Tangkas Dashboard W-->
				 <div class="col-lg-8">
   <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
      <div class="iq-card-header d-flex justify-content-between align-items-center">
         <div class="iq-header-title">
            <h4>Welcome to Tangkas Dashboard</h4>
         </div>
      </div>
	  
	  
      <div class="iq-card-body">
         <div class="row align-items-center">
            <div class="col-md-12">
               <p><b>Tangkas (Tangkap Kekerasan Seksual)</b> merupakan platform digital yang didedikasikan 
               untuk mendukung upaya dinas Pemberdayaan Perempuan dan Perlindungan Anak dan pihak terkait dalam menangani dan mengelola laporan kekerasan seksual. 
               Dengan menyediakan alat dan fitur yang komprehensif, Tangkas bertujuan untuk mempercepat 
               dan mempermudah proses administrasi, analisis, dan pemantauan secara Real Time kasus kekerasan seksual</p>
            </div>
			
           <div class="col-md-12 text-center mt-4">
            <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Jumlah Kasus Kekerasan Seksual per Bulan </h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div id="apex-basic"></div>
                        </div>
                     </div>            
					 </div>
					</div>
				</div>
			</div>
			</div>
			<div class="col-lg-4 ">
			<div class="iq-card iq-card-block iq-card-stretch iq-card-height">
				<div class="iq-card-body text-center">
					<img src="<?php echo APP_PATH; ?>/images/pic_side.png" alt="Tangkas Dashboard Logo" class="img-fluid">
				</div>
			</div>
			</div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->