

<!doctype html>
<html lang="en">
   <head>
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
                              <h1 class="mb-0 text-center">Sign in</h1>
                              <form class="mt-4" action="<?=APP_PATH;?>/login/process" method="post">
                                <div class="form-group">
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="bi bi-people-fill"></i></span>
									  <!-- ROLE-->
                                    </div>
                                    <select class="form-control" name="input-role">
									  <option value="masyarakat" selected>Masyarakat</option> 
									  <option value="pihak terkait">Pihak Terkait</option>
                                      <option value="admin">Admin</option>
                                      
                                      
                                    </select>
                                  </div>
                                </div>
                                  <div class="form-group">
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-person-check"></i></span>
                                      </div>
                                      <input type="text" class="form-control" name="Input-email" placeholder="Enter email">
                                    </div>
                                  </div>
                                 
								<div class="form-group">
								  <div class="input-group mb-3"> 
									<div class="input-group-prepend">
									  <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
									</div>
									<input type="password" class="form-control" name="input-password" placeholder="Password">
									<div class="input-group-append">
									  <span class="input-group-text" id="toggle-pass">
										<i class="ri-eye-off-line"></i>
									  </span>
									</div>
								  </div>
								</div>
								  
                                  <div class="sign-info text-center">
									
										<button type="submit" class="btn btn-primary d-block w-100 mb-2">Sign in</button>
									                                     
									<span class="text-dark dark-color d-inline-block line-height-2">Don't have an account? <a href="<?php echo APP_PATH; ?>/login/register">Sign up</a></span>
                                  </div>
                              </form>
                          </div>
                      </div>
                      
                      <div class="col-md-7 text-center sign-in-page-image">
                          <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#; ?>"><img src="<?php echo APP_PATH; ?>/images/logo-full4.png" class="img-fluid" alt="logo"></a>                              <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                   <div class="item">
                                      <img src="<?php echo APP_PATH; ?>/images/login/report.png" class="img-fluid mb-4" alt="logo" style="width: 400px; height: auto;  margin-left: 115px;">

                                      <h4 class="mb-1 text-white"> Report and Stand Together Against Sexual Violence</h4>
                                      <p>Sexual violence is a serious crime that must not be tolerated. We invite you to tae an active role in combating it by reporting any suspicious or harmful actions you witness. By bravely speaking out and acting, you play a vital role in protecting yourself and those around you.</p>
                                  </div>
                                  <div class="item">
                                      <img src="<?php echo APP_PATH; ?>/images/login/family_love_2.png" class="img-fluid mb-4" alt="logo" style="width: 400px; height: auto;  margin-left: 115px;">
                                      <h4 class="mb-1 text-white">Commitment to Protect the Community from Sexual Violence</h4>
                                      <p> We are committed to protecting every community member from sexual violence. This app is designed to empower you with information, reporting options, and the support you need. Together, we can create a safe and violence-free environment. Let’s join hands to safeguard our community.</p>
                                  </div>
                                  <div class="item">
                                      <img src="<?php echo APP_PATH; ?>/images/login/community_happy.png" class="img-fluid mb-4" alt="logo" style="width: 400px; height: auto;	  margin-left: 115px;">
                                      <h4 class="mb-1 text-white">Safe Community, Happy Community</h4>
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
      <script src="<?php echo APP_PATH; ?>/js/jquery.min.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/popper.min.js"></script> 
      <script src="<?php echo APP_PATH; ?>/js/bootstrap.min.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/jquery.appear.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/countdown.min.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/waypoints.min.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/jquery.counterup.min.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/wow.min.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/apexcharts.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/lottie.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/slick.min.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/select2.min.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/owl.carousel.min.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/jquery.magnific-popup.min.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/smooth-scrollbar.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/style-customizer.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/chart-custom.js"></script>
      <script src="<?php echo APP_PATH; ?>/js/custom.js"></script>
	  <script>const togglePass = document.getElementById('toggle-pass');
const passwordInput = document.querySelector('input[name="input-password"]');

togglePass.addEventListener('click', function() {
  const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
  passwordInput.setAttribute('type', type);
  this.querySelector('i').classList.toggle('ri-eye-line');
  this.querySelector('i').classList.toggle('ri-eye-off-line');
});
</script>
   </body>
</html>
