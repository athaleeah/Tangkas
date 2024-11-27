
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?=$data['title'];?></title>
      <link rel="shortcut icon" href="<?php echo APP_PATH; ?>/images/Tangkas_logo.png" />
      <link rel="stylesheet" href="<?php echo APP_PATH; ?>/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo APP_PATH; ?>/css/typography.css">
      <link rel="stylesheet" href="<?php echo APP_PATH; ?>/css/style.css">
      <link rel="stylesheet" href="<?php echo APP_PATH; ?>/css/responsive.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

      <style>
       .sign-in-from {
    margin-top: -10px; /* adjust the value to your liking */
  }

 .sign-in-from h1 {
    margin-top: -30px; /* adjust the value to your liking */
  }

 .form-group {
    margin-bottom: 20px; /* adjust the value to your liking */
  }

  .sign-info {
    margin-top: -20px; /* adjust the value to your liking */
  }

  .form-group {
            margin-bottom: 0px; /* reduce the value to decrease spacing */
        }
        .sign-in-from {
          margin-top: 50px; 
        }

        .sign-in-from h1 {
          margin-top: 20px;
        }
  
      </style>
   </head>
   
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
        <!-- Sign in Start -->
        <section class="sign-in-page">
          <div id="container-inside">
              <div class="cube"></div>
              <div class="cube"></div>
              <div class="cube"></div>
              <div class="cube"></div>
              <div class="cube"></div>
          </div>
            <div class="container p-0">
  <div class="row no-gutters height-self-center">
    <div class="col-sm-12 align-self-center bg-primary rounded">
      <div class="row m-0">
        <div class="col-md-5 bg-white sign-in-page-data">
          <div class="sign-in-from">
            <h1 class="mb-0 text-center" style="margin-top: -20px;">Sign Up</h1>
            <form class="mt-4" action="<?=APP_PATH;?>/login/signup" method="post">
								
                                <div class="form-group">
								  <div class="input-group mb-3">
									<div class="input-group-prepend">
									  <span class="input-group-text"><i class="bi bi-person"></i></span>
									</div>
									<select class="form-control" name="input-role">
									  
									  <option value="masyarakat" >Masyarakat</option>
                                     
                                      
									  
									</select>
								  </div>
								</div>
                                  <div class="form-group">
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-person-check"></i></span>
                                      </div>
                                      <input type="text"  class="form-control" name="input-fullname" placeholder="Your Full Name">
                                    </div>
                                  </div>

                                
                                  <div class="form-group">
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-map"></i></span>
                                      </div>
                                      <input type="address" class="form-control" name="input-address" placeholder="Adress">
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                      </div>
                                      <input type="phoneNumber" class="form-control" name="input-phone-number" placeholder="Phone Number">
                                    </div>
                                  </div> 										<!--TYPE ID BUKAN name UTK DATABASE-->

                                  <div class="form-group">
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                      </div>
                                      <input type="email" class="form-control" name="input-email" placeholder="Your Email">
                                    </div>       
                                  </div>
								  
								  <div class="form-group">
								  <div class="input-group mb-3">
									<div class="input-group-prepend">
									  <span class="input-group-text"><i class="bi bi-person"></i></span>
									</div>
									<select class="form-control" name="input-gender">
									  
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
                                      <input type="text" class="form-control"  name="input-nik" placeholder="Your NIK">
                                    </div>
                                  </div>
								  
                                  <!-- <div class="form-group">
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                      </div>
                                      <input type="password" class="form-control" name="input-password" placeholder="Your password">
                                    </div>                                 
                                   </div>-->
								   
								   <div class="form-group">
									  <div class="input-group mb-3">
										<div class="input-group-prepend">
										  <span class="input-group-text"><i class="bi bi-lock"></i></span>
										</div>
										<input type="password" class="form-control" name="input-password" id="input-password" placeholder="Your password">
										<div class="input-group-append">
										  <span class="input-group-text" onclick="togglePassword(event)">
											<i class="ri-eye-line" id="eye1-icon"></i>
										  </span>
										</div>
									  </div>
									</div>

									<div class="form-group">
									  <div class="input-group mb-3">
										<div class="input-group-prepend">
										  <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
										</div>
										<input type="password" class="form-control" name="input-retype-password" id="input-retype-password" placeholder="Re-enter password">
										<div class="input-group-append">
										  <span class="input-group-text" onclick="togglePassword(event)">
											<i class="ri-eye-line" id="eye2-icon"></i>
										  </span>
										</div>
									  </div>
									</div>

                                  <!-- <div class="form-group">
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                      </div>
                                      <input type="password" class="form-control" name="input-retype-password" placeholder="Re-enter password">
                                    </div>                                 
                                   </div>-->

                                  <div class="sign-info text-center">
                                      <button type="submit" class="btn btn-primary d-block w-100 mb-2">Create New User</button>
                                      <span class="text-dark d-inline-block line-height-2">Already Have Account ? <a href="<?php echo APP_PATH; ?>/login/user">Log In</a></span>
                                  </div>
                                  
                              </form>
                          </div> 
                      </div> 
                      <div class="col-md-7 text-center sign-in-page-image"> 
                          <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#"><img src="<?php echo APP_PATH; ?>/images/logo-full4.png" class="img-fluid" alt="logo"></a>
                              <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                  <div class="item">
									<img src="<?php echo APP_PATH; ?>/images/login/report.png" class="img-fluid mb-4" alt="logo" style="width: 400px; height: auto; margin-left: 115px; margin-top: 20px;">
									<h4 class="mb-1 text-white" style="margin-top: 30px;">Report and Stand Together Against Sexual Violence</h4>
									<p style="margin-top: 10px;">Sexual violence is a serious crime that must not be tolerated. We invite you to take an active role in combating it by reporting any suspicious or harmful actions you witness. By bravely speaking out and acting, you play a vital role in protecting yourself and those around you.</p>
								</div>

                                  <div class="item">
                                      <img src="<?php echo APP_PATH; ?>/images/login/family_love_2.png" class="img-fluid mb-4" alt="logo" style="width: 400px; height: auto;  margin-left: 115px; margin-top: 20px;">
                                      <h4 class="mb-1 text-white" style="margin-top: 30px;">Commitment to Protect the Community from Sexual Violence</h4>
                                      <p> We are committed to protecting every community member from sexual violence. This app is designed to empower you with information, reporting options, and the support you need. Together, we can create a safe and violence-free environment. Let’s join hands to safeguard our community.</p>
                                  </div>
                                  <div class="item">
                                      <img src="<?php echo APP_PATH; ?>/images/login/community_happy.png" class="img-fluid mb-4" alt="logo" style="width: 400px; height: auto;	  margin-left: 115px; margin-top: 20px;">
                                      <h4 class="mb-1 text-white" style="margin-top: 30px;">Safe Community, Happy Community</h4>
                                      <p>A safe community is a place where everyone can feel comfortable and protected. Through this app, we support you in reporting violence and building a community that cares for one another. Remember, safety is everyone’s right, and together we can create an environment filled with happiness and security.</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </section>
        <!-- Sign in END -->
       
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="<?php echo APP_PATH; ?>/js/jquery.min.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/popper.min.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/bootstrap.min.js"></script>
      <script src="<?php echo APP_PATH; ?>js/jquery.appear.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/countdown.min.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/waypoints.min.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/jquery.counterup.min.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/wow.min.js"></script>
      <script src="<?php echo APP_PATH; ?>js/lottie.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/apexcharts.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/slick.min.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/select2.min.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/owl.carousel.min.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/jquery.magnific-popup.min.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/smooth-scrollbar.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/style-customizer.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/chart-custom.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/custom.js"></script>
	  <script>
function togglePassword(event) {
  console.log('togglePassword function executed');
  console.log(event);
  var targetId = event.target.id;
  console.log('targetId:', targetId);
  var passwordId;
  var eyeIcon;
  
  if (targetId === "eye1-icon") {
    passwordId = "input-password";
    eyeIcon = document.getElementById("eye1-icon");
  } else if (targetId === "eye2-icon") {
    passwordId = "input-retype-password";
    eyeIcon = document.getElementById("eye2-icon");
  }
  
  var x = document.getElementById(passwordId);
  
  if (x.type === "password") {
    x.type = "text";
    eyeIcon.classList.add("ri-eye-off-line");
    eyeIcon.classList.remove("ri-eye-line");
  } else {
    x.type = "password";
    eyeIcon.classList.add("ri-eye-line");
    eyeIcon.classList.remove("ri-eye-off-line");
  }
}




</script>
   </body>
</html>
