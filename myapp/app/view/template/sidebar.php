 

	  <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
			 </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
	  
	  
         <!-- Sidebar  -->
         <div class="iq-sidebar" id="sidebar">
            <div class="iq-navbar-logo d-flex justify-content-between">
               <a href="<?php echo APP_PATH; ?>/home/dashboard" class="header-logo"> 
               <img src="<?php echo APP_PATH; ?>/images/Tangkas_logo.png" class="img-fluid rounded" alt="">
               <span >Tangkas</span>
               </a>
               <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="ri-menu-line"></i></div>
                     <div class="hover-circle"><i class="ri-close-fill"></i></div>
                  </div>
               </div>
            </div>
            <div id="sidebar-scrollbar"> 
               <nav class="iq-sidebar-menu">
			   <?php 
					//var_dump($data);
						
				?>	
				
			<?php 
				if($data['role'] === 'Admin'){
					
			?>	
			   
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="active">
                        <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                           <li class="active"><a href="<?php echo APP_PATH; ?>/home/dashboard"><i class="las la-laptop-code"></i>Account Dashboard</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-user-tie iq-arrow-left"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style=""> 
                         <!--  <li><a href="profile.html"><i class="las la-id-card-alt"></i>User Profile</a></li> --> 
                           <li><a href="<?php echo APP_PATH; ?>/profile_ctrl/profile"><i class="las la-edit"></i>User Profile</a></li>
                           <li><a href="<?php echo APP_PATH; ?>/addprofile_ctrl/addprofile"><i class="las la-plus-circle"></i>Add User</a></li>
                           <li><a href="<?php echo APP_PATH; ?>/users/userlist"><i class="las la-th-list"></i>User List</a></li>
																<!-- controller / fungsi-->
                        </ul> 
                     </li> 	 
                     <li>
                        <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-table-line iq-arrow-left"></i><span>Document</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="tables" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <!--<li><a href="tables-basic.html"><i class="ri-table-line"></i>Basic Tables</a></li> -->
						   <!--<li><a href="<?php echo APP_PATH; ?>/home/fastreport""><i class="ri-file-warning-line"></i>Report</a></li>-->
                           <li><a href="<?php echo APP_PATH; ?>/report/report"><i class="ri-refund-line"></i>Data Report</a></li> 
                           <li><a href="<?php echo APP_PATH; ?>/history/history"><i class="ri-database-line"></i>History</a></li>
						   
                        </ul>
                     </li>

                     
  
                     <li>
                        <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-error-warning-line iq-arrow-left"></i><span>Report Map</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="extra-pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        
                           <li><a href="<?php echo APP_PATH; ?>/map_ctrl/map"><i class="ri-map-line"></i>Map</a></li> 
                        </ul>
                     </li>
                  </ul>
				  
			<?php 
				}
			?>
			
				
			<?php 
				if($data['role'] === 'masyarakat'){
					
			?>
			   
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="active">
                        <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                           <li class="active"><a href="<?php echo APP_PATH; ?>/home/dashboard"><i class="las la-laptop-code"></i>Account Dashboard</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-user-tie iq-arrow-left"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style=""> 
                         <!--  <li><a href="profile.html"><i class="las la-id-card-alt"></i>User Profile</a></li> --> 
                           <li><a href="<?php echo APP_PATH; ?>/profile_ctrl/profile"><i class="las la-edit"></i>User Profile</a></li>
                        </ul>
                     </li> 	
                    
                     <li>
                        <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-alert-line iq-arrow-left"></i><span> Fast Report</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="<?php echo APP_PATH; ?>/home/fastreport""><i class="ri-file-warning-line"></i>Report</a></li>
						   <li><a href="<?php echo APP_PATH; ?>/history_user/history_user"><i class="ri-database-line"></i>Users History</a></li>
                          <!-- <li><a href="form-validation.html"><i class="las la-edit"></i>Form Validation</a></li>
                           <li><a href="form-switch.html"><i class="las la-toggle-off"></i>Form Switch</a></li>
                           <li><a href="form-chechbox.html"><i class="las la-check-square"></i>Form Checkbox</a></li>
                           <li><a href="form-radio.html"><i class="ri-radio-button-line"></i>Form Radio</a></li>-->
                        </ul>
                     </li>
  
                     <li>
                        <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-error-warning-line iq-arrow-left"></i><span>Report Map</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="extra-pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        
                           <li><a href="<?php echo APP_PATH; ?>/home/map"><i class="ri-map-line"></i>Map</a></li> 
                        </ul>
                     </li>
                  </ul>
				  
			<?php 
				}
			?>
			
			<?php 
				if($data['role'] === 'pihak terkait'){
					
			?>	
			   
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="active">
                        <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                           <li class="active"><a href="<?php echo APP_PATH; ?>/home/dashboard"><i class="las la-laptop-code"></i>Account Dashboard</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-user-tie iq-arrow-left"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style=""> 
                         <!--  <li><a href="profile.html"><i class="las la-id-card-alt"></i>User Profile</a></li> --> 
                           <li><a href="<?php echo APP_PATH; ?>/profile_ctrl/profile"><i class="las la-edit"></i>User Profile</a></li>
                           
																<!-- controller / fungsi-->
                        </ul>
                     </li> 	
                     <li>
                        <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-table-line iq-arrow-left"></i><span>Document</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="tables" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <!--<li><a href="tables-basic.html"><i class="ri-table-line"></i>Basic Tables</a></li> -->
                           <li><a href="<?php echo APP_PATH; ?>/report/report_pihak"><i class="ri-refund-line"></i>Data Report</a></li> 
                 
						   
                        </ul>
                     </li>

                 
  
                     <li>
                        <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-error-warning-line iq-arrow-left"></i><span>Report Map</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="extra-pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        
                           <li><a href="<?php echo APP_PATH; ?>/map_ctrl/map"><i class="ri-map-line"></i>Map</a></li> 
                        </ul>
                     </li>
                  </ul>
				  
			<?php 
				}
			?>
			
			
               </nav>
               <div class="p-3"></div>
            </div>
         </div>