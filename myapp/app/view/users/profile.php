<style>
.iq-footer{
    margin: 0; /* Reset margin */
    
    text-align: left; /* Atur teks ke kiri */
    width: 100%; /* Pastikan footer mengambil lebar penuh */
}

.tab-pane {
    padding-bottom: 50px; /* Tambahkan padding bawah untuk memberikan ruang */
}

.edit-button {
    margin-right: 10px; /* Tambahkan margin kanan jika diperlukan */
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
                              <h5 class="mb-0 text-white line-height">Hello,<?php echo $data ["full_name"]; ?></h5>
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
         <!-- SALES TODAY GRAPH, 4 COL -->
         <div class="col-lg-12" style="margin-bottom: -15px;">
            <div class="iq-card">
               <div class="iq-card-body p-0">
                  <div class="iq-edit-list">
                     <ul class="iq-edit-profile d-flex nav nav-pills">
                        <li class="col-md-6 p-0">
                           <a class="nav-link active" data-toggle="pill" href="#personal-information">
                              Personal Information
                           </a>
                        </li>
                        <li class="col-md-6 p-0">
                           <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                              Password
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-lg-12">
            <div class="iq-edit-list-data">
               <div class="tab-content">
                  <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Personal Information</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
						   
                           <form method= action="" enctype="multipart/form-data">
						

                              <div class="form-group row align-items-center">
                                 <div class="col-md-12">
								 
								 
                                    <div class="profile-img-edit">
                                       <img class="profile-pic" src="<?php echo APP_PATH; ?>/images/user/1.1.png" alt="profile-pic">
                                       <div class="p-image">
                                          <i class="ri-pencil-line upload-button"></i>
                                          <input class="file-upload" type="file" name="report-file" accept=".jpg,.jpeg,.png,.gif"/>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <div class="row align-items-center">
                                 <!-- Input fields -->
                                 <div class="form-group col-sm-6">	             						<!--  $fullname = $data['input-fullname']; -->
                                    <input type="text" class="form-control" name="input-fullname" id="input-fullname" value="<?php echo $data['full_name']; ?>" required>
                                 </div>
                                 <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" name="input-nik" id="input-nik" value="<?php echo $data['nik']; ?>" required>
                                 </div>
								 <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" name="input-address" id="input-address" value="<?php echo $data["alamat"]; ?>" required>
                                </div>
                                
								<div class="form-group col-sm-6">
                                    <input type="email" class="form-control" name="input-gender" id="input-gender" value="<?php echo $data["gender"]; ?>" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="email" class="form-control" name="input-email" id="input-email" value="<?php echo $data["email"]; ?>" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" name="input-phone" id="input-phone" value="<?php echo $data["no_hp"]; ?>" required>
                                </div>
                                 <!-- Other input fields... -->

                                 <!-- Edit button -->
<div class="d-flex justify-content-start">
   <button type="button" class="btn btn-primary ml-3" id="btn-edit-profile">Edit</button>
</div>

                              </div>
                           </form>
					
                        </div>
                     </div>
                  </div>

                  <!-- Tab for Change Password -->
               <!-- Tab for Change Password -->
<div class="tab-pane fade" id="chang-pwd" role="tabpanel">
   <div class="iq-card">
      <div class="iq-card-header d-flex justify-content-between">
         <div class="iq-header-title">
            <h4 class="card-title">Change Password</h4>
         </div>
      </div>
      <div class="iq-card-body">
         <form method="POST" action="" enctype="multipart/form-data" class="text-center">
            <img src="<?php echo APP_PATH; ?>/images/Privacy-Policy.gif" class="img-fluid rounded mb-3" alt="">
            <h2>Hello, <?php echo $data["full_name"]; ?>!</h2>
            <p>Are you sure to change your password?</p>
            <button type="button" class="btn btn-primary mr-2 mb-3" id="btn-change-password">Change Password</button>
         </form>
      </div>
   </div>
</div>


               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<!-- UPDATE Modal -->
<div class="modal" id="FormUpdateBox">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header" style="background-color: #0d47a1;">
		  <h4 class="modal-title w-100 text-center text-white">Update Selected Data</h4>
		</div>

      <!--  Modal body -->
      <div class="modal-body">
        <form action="<?php echo APP_PATH; ?>/profile_ctrl/updateProfile" method="post">
		<div class="mb-3 mt-3">
				<input type="file" class="form-control" id="user_pict" name="user_pict" accept=".jpg,.jpeg,.png,.gif" capture>
			</div>
			<div class="mb-3 mt-3"> 
				<input type="text" class="form-control" id="user_id" name="user_id" style="display: none;">
				<input type="text" class="form-control" id="user_name" placeholder="Enter Full Name" name="user_name" >
			</div>
			
			<div class="mb-3 mt-3">  
				<input type="number" class="form-control" id="user_phone" placeholder="Enter Phone Number" name="user_phone" >
			</div>
			<div class="mb-3 mt-3"> 
				<input type="text" class="form-control" id="user_email" placeholder="Enter Email" name="user_email">
			</div>
			<div class="mb-3 mt-3"> 
				<input type="text" class="form-control" id="user_address" placeholder="Enter Address" name="user_address">
			</div>
			<div class="mb-3 mt-3">  
				<input type="text" class="form-control" id="user_gender" placeholder="Enter Gender" name="user_gender" >
			</div>
			<div class="mb-3 mt-3"> 
				<input type="text" class="form-control" id="user_nik" placeholder="Enter NIK" name="user_nik" >
			</div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer" style="background-color: #0d47a1;">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
		<button type="submit" class="btn btn-info" >Update Data</button> 
      </div>
	  </form>
    </div>
  </div>
</div>    
<!-- Modal for Change Password -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header" style="background-color: #0d47a1;">
        <h4 class="modal-title w-100 text-center text-white">Change Password</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="<?php echo APP_PATH; ?>/profile_ctrl/changePassword" method="post">
          
          <!-- Old Password --> 
          <div class="mb-3 mt-3">
            <label for="old_password" class="form-label">Current Password</label>
            <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Enter current password" required>
          </div>

          <!-- New Password -->
          <div class="mb-3 mt-3">
            <label for="new_password" class="form-label">New Password</label>
            <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Enter new password" required>
          </div>

          <!-- Confirm New Password -->
          <div class="mb-3 mt-3">
            <label for="confirm_password" class="form-label">Confirm New Password</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Re-type new password" required>
          </div>
          
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer" style="background-color: #0d47a1;">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">Update Password</button> 
      </div>
      </form>
    </div>
  </div>
</div>

<script src="<?php echo APP_PATH; ?>/js/profilehandleaction.js"></script>