<style>
.iq-footer {
    margin: 0; /* Reset margin */
    padding: 20px 0; /* Tambahkan padding atas dan bawah untuk memberi ruang */
    
    text-align: center; /* Atur teks ke tengah */
    width: 100%; /* Pastikan footer mengambil lebar penuh */
    position: relative; /* Pastikan posisi footer relatif */
    bottom: 0; /* Atur posisi footer agar tidak terbenam */
    left: 0; /* Atur posisi footer ke kiri */
    right: 0; /* Atur posisi footer ke kanan */
    background-color: #f8f9fa; /* Tambahkan warna latar belakang jika perlu */
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
       
       <!-- ... (rest of the HTML remains the same) ... --> 
        
               <!--<form action="#" class="searchbox">
                 <input type="text" class="text search-input" placeholder="Type here to search..." style="color = #9DB2BF">
                 <a class="search-link" href="#"><i class="ri-search-line"></i></a>
               </form>-->
            
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
                         <a href="<?php echo APP_PATH; ?>/profile_ctrl/profile" class="iq-sub-card iq-bg-primary-hover">
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
                           <a class="bg-primary iq-sign-btn" href="<?php echo APP_PATH; ?>/login/user" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
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
         <div class="col-lg-3">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Add New User</h4>
                  </div> 
               </div>
               <div class="iq-card-body">
                  <!-- Mulai Form -->
                  <form method="POST" action="<?php echo APP_PATH; ?>/addprofile_ctrl/addNewUserProfile" enctype="multipart/form-data">
                     <div class="form-group">
                        <div class="add-img-user profile-img-edit">
                           <img class="profile-pic img-fluid" style="margin-left: 64px" margin-top="-20px" src="<?php echo APP_PATH; ?>/images/user/1.1.png" alt="profile-pic">
                           <div style="margin-left: 70px" margin-top="-20px" class="p-image">
                              <a href="javascript:void();" class="upload-button btn iq-bg-primary" style="width: 135px; padding: 10px; text-align: center;">File Upload</a>
                              <input class="file-upload" type="file" name="report-file" accept=".jpg,.jpeg,.png,.gif">
                           </div>
                        </div>
                        <div class="img-extension mt-3">
                           <div style="margin-left: 40px; margin-top: 60px;" class="d-inline-block align-items-center">
                              <span>Only</span>
                              <a href="javascript:void();">.jpg</a>
                              <a href="javascript:void();">.png</a>
                              <a href="javascript:void();">.jpeg</a>
                              <span>allowed</span>
                           </div>
                        </div>
                     </div>
                     <div class="form-group" style="margin-top: 30px;">
                        <select class="form-control" id="input-role" name="input-role">
                           <option value="select-role" selected>Select Role</option>
                           <option value="admin">Admin</option>
                           
                           <option value="pihak terkait">Pihak Terkait</option>
                           <option value="masyarakat">Masyarakat</option>
                        </select>
                     </div>
               </div>
            </div>
         </div>
         <div class="col-lg-9">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">New User Information</h4>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div class="new-user-info">
                     <!-- Form Input -->
                     <div class="row">
                        <div class="form-group col-md-6">
                           <input type="text" class="form-control" name="input-fullname" id="input-fullname" placeholder="Full Name" required>
                        </div>
                        <div class="form-group col-md-12">
                           <input type="email" class="form-control" name="input-email" id="input-email" placeholder="Email" required>
                        </div>
                        <div class="form-group col-md-6">
                           <input type="text" class="form-control" name="input-phone-number" id="input-phone-number" placeholder="Mobile Number" required>
                        </div>
                        <div class="form-group col-md-12">
                           <input type="text" class="form-control" name="input-address" id="input-address" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="bi bi-person"></i></span>
                              </div>
                              <select class="form-control" name="input-gender" required>
                                 <option value="">Select Gender</option>
                                 <option value="Female">Female</option>
                                 <option value="Male">Male</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="bi bi-123"></i></span>
                              </div>
                              <input type="text"  pattern="^\d{16}$" class="form-control" name="input-nik" placeholder="Your NIK" required>
                           </div>
                        </div>
                     </div>
                     <hr>
                     <h5 class="mb-3">Security</h5>
                     <div class="row">
                        <div class="form-group col-md-6">
                           <div class="input-group">
                              <input type="password" class="form-control" name="input-password" id="input-password" placeholder="Password" required>
                              <div class="input-group-append">
                                 <span class="input-group-text" id="toggle-pass">
                                    <i class="ri-eye-line"></i>
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="form-group col-md-6">
                           <div class="input-group">
                              <input type="password" class="form-control" name="input-retype-password" id="input-retype-password" placeholder="Repeat Password" required>
                              <div class="input-group-append">
                                 <span class="input-group-text" id="toggle-rpass">
                                    <i class="ri-eye-line"></i>
                                 </span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary">Add New User</button>
                  </form>
                  <!-- Akhir Form -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

   
   <!-- Wrapper END -->
      <script src="src="<?php echo APP_PATH; ?>/js/jquery.min.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/popper.min.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/bootstrap.min.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/jquery.appear.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/countdown.min.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/waypoints.min.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/jquery.counterup.min.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/wow.min.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/apexcharts.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/slick.min.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/select2.min.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/owl.carousel.min.js"></script> 
      <script src="src="<?php echo APP_PATH; ?>/js/jquery.magnific-popup.min.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/smooth-scrollbar.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/lottie.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/core.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/charts.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/animated.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/kelly.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/maps.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/worldLow.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/style-customizer.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/chart-custom.js"></script>
      <script src="src="<?php echo APP_PATH; ?>/js/custom.js"></script>
      <script>function togglePasswordVisibility(toggleId, inputId) {
    const toggleElement = document.getElementById(toggleId);
    const passwordField = document.getElementById(inputId);
    const icon = toggleElement.querySelector('i');

    toggleElement.addEventListener('click', function () {
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            icon.classList.remove('ri-eye-line');
            icon.classList.add('ri-eye-off-line');
        } else {
            passwordField.type = 'password';
            icon.classList.remove('ri-eye-off-line');
            icon.classList.add('ri-eye-line');
        }
    });
}

// Apply the function to each password field
togglePasswordVisibility('toggle-pass', 'input-password');
togglePasswordVisibility('toggle-rpass', 'input-retype-password');

     </script>