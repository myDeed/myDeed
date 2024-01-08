<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Mydeed</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta http-equiv="x-ua-compatible" content="IE=10">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/bootstrap_theme.min.css">
      <link rel="stylesheet" href="css/layout.min.css">
      <link rel="stylesheet" href="css/theme-components.min.css">
      <link rel="stylesheet" href="css/font/fontawesome/styles.min.css">
      <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="css/font/flaticons/flaticon.css">
      <link rel="stylesheet" href="css/custom.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <!-- page animation section css start -->
      <link rel="stylesheet" href="css/animation.css">
      <link rel='stylesheet' href='css/aos.css'>
      <!-- page animation section css end -->
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/blockui.min.js"></script>
      <script type="text/javascript" src="js/uniform.min.js"></script>
      <script type="text/javascript" src="js/jquery.ui.min.js"></script>
      <script type="text/javascript" src="js/validate.min.js"></script>
      <script type="text/javascript" src="js/owl.carousel.min.js"></script>  
      <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>         
      <link rel="stylesheet" href="css/w3.css">
   </head>
   <body id="body" class="home_full_bg">
      <header class="custom-header" id="custom-header">
         <div class="navbar navbar-expand-lg navbar-sticky fixed-top border-0">
            <div class="container">
               <div class="navbar-brand">
                  <a href="index.html" class="d-inline-block">
                  <img src="images/logo01.png" alt="logo">
                  </a>
               </div>
               <div class="d-lg-none">
                  <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-navigation" aria-expanded="false">
                  <img src="images/Menu.png">
                  </button>
               </div>
               <div class="navbar-collapse collapse" id="navbar-navigation">
                  <div class="d-lg-none d-lg-block jb_front_nav_close">
                     <button type="button" class="navbar-toggler collapsed jb_front_nav_close">
                     <i class="flaticon-close-1"></i>
                     </button>
                  </div>
                  <ul class="center-menu d-inline-block mx-auto ml-auto non-tranparent nav navbar-nav ">
                     <li class="nav-item float-left"><a href="Main.html" class="navbar-nav-link jb_underline nav_post_job" style="color: lightcoral;">Home</a></li>
                     <li class="nav-item float-left"><a href="AboutUs.html" class="navbar-nav-link jb_underline" style="color: lightcoral;">About Us </a></li>
                     <li class="nav-item float-left"><a href="Portfolio.html" class="navbar-nav-link jb_underline" style="color: lightcoral;">Profile</a></li>
                     <li class="nav-item float-left"><a href="contact.html" class="navbar-nav-link jb_underline" style="color: lightcoral;">Contact us</a></li>
                  </ul>
                  <div class="float-right">
                     <div class="main-menuright d-flex align-items-center">
                        <ul class="navbar-nav language">
                           <li class="nav-item">
                              <a class="btn-quote wgl-button btn-size-lg" role="button" href="login.php">
                                 <div class="button-content-wrapper d-flex align-items-center justify-content-center"><span class="wgl-button-text">LogOut</span></div>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div class="main_page" id="dashboard-page">
         <!-- main content -->
         <div class="page-content">
            <div class="content-wrapper">
               <div class="breadcrumbs">
                  <div id="top-image" class="breadcrumbs-inner-block section-spacer">
                     <div class="row h-100 align-items-center">
                        <div class="col-md-12">
                           <div class="heading-text">
                              <h5 class="text-center font-bold ">Profile</h5>
                           </div>
                           <div class="back-menu d-flex justify-content-center align-items-center">
                              <a href="Main.html"><i class="fa fa-home" aria-hidden="true"></i></a>
                              <i class="fa fa-chevron-right mx-2 center-icon" aria-hidden="true"></i>
                              <span class="font-small">View Your Profile</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>                
            </div>
         </div>
      </div>
      
      
      <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo $_SESSION['username']; ?></span><span class="text-black-50"><?php echo $_SESSION['email']; ?></span><span> </span></div>
        </div>
        <div class="col-md-9 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><br><?php echo $_SESSION['Fname']; ?></div>
                    <div class="col-md-6"><label class="labels">Surname</label><br><?php echo $_SESSION['Lname']; ?></div>
                </div><br>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Age</label><br><?php echo $_SESSION['age']; ?></div>
                    <div class="col-md-6"><label class="labels">Mobile No</label><br><?php echo $_SESSION['mno']; ?></div>
                </div><br>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Address</label><br><?php echo $_SESSION['address']; ?></div>
                    <div class="col-md-6"><label class="labels">Email</label><br><?php echo $_SESSION['email']; ?></div>
                </div><br>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">State</label><br><?php echo $_SESSION['state']; ?></div>
                    <div class="col-md-6"><label class="labels">Country</label><br><?php echo $_SESSION['country']; ?></div>      
                </div><br>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Username</label><br><?php echo $_SESSION['username']; ?></div>
                    <div class="col-md-6">
                        <label class="labels">Password</label><br>
                        <span id="passwordField" style="display: none;"><?php echo $_SESSION['password']; ?></span>
                        <input type="password" id="passwordInput" style="display: inline-block;">
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="button" onclick="togglePassword()"><b>Show password</b></button>
                </div>
                
            </div>
        </div>
        <!--
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>-->
    </div>
</div>
</div>
</div>
<style>
body {
    background: rgb(18, 243, 243)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(0, 230, 230);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #bfbfbf
}

.profile-button:focus {
    background: #6df8f8;
    box-shadow: none
}

.profile-button:active {
    background: #6df8f8;
    box-shadow: none
}

.back:hover {
    color: #6df8f8;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}

</style>
<script>
    function togglePassword() {
        var passwordInput = document.getElementById('passwordInput');
        var passwordField = document.getElementById('passwordField');

        if (passwordInput.style.display === 'none') {
            passwordInput.value = passwordField.innerText;
            passwordField.style.display = 'none';
            passwordInput.style.display = 'inline-block';
        } else {
            passwordInput.value = '';
            passwordInput.style.display = 'none';
            passwordField.style.display = 'inline-block';
        }
    }
</script>









      



      <!-- main content -->    
      <!-- footer section -->
      <div class="custom-footer text-center text-md-left text-lg-left section-spacer bg-black  position-relative bg-moving">
         <div class="footer-widget">
            <div class="container">
               <div class="log-icon text-center">
                  <img src="images/footer-logo.png">
               </div>
               <div class="row justify-content-center mt-4">
                  <div class="col-md-10">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="footer-block d-flex align-items-center">
                              <div class="btn-quote wgl-button btn-size-lg r-icon" role="button" href="/contacts/">
                                 <div class="button-content-wrapper "><span class="wgl-button-text text-white"><i class="flaticon-location"></i></span></div>
                              </div>
                              <div class="footer-content ml-md-4">
                                 <p class="font-extra-small text-white"><a href="https://www.google.com/maps/place/Presidency+University/@13.1717796,77.5335846,17z/data=!3m1!4b1!4m6!3m5!1s0x3bae21be4ad63a55:0x1008adb771c3d236!8m2!3d13.1717796!4d77.5361595!16s%2Fg%2F11bwkdmrq0?entry=ttu" style="color: white;">Presidency University <br> 
                                    Rajankunte, Yelhenka
                                    Bangalore-560013</a>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="footer-block d-flex align-items-center">
                              <div class="btn-quote wgl-button btn-size-lg r-icon" role="button" href="/contacts/">
                                 <div class="button-content-wrapper "><span class="wgl-button-text text-white"><i class="flaticon-message"></i></span></div>
                              </div>
                              <div class="footer-content ml-md-4">
                                 <p class="m-0"> <a href = "mailto:mydeed@gmail.com" class="font-extra-small text-white text-lowercase">mydeed@gmail.com</a></p>
                                 <p class="m-0"> <a href = "mailto:faultymug@gmail.com" class="font-extra-small text-white text-lowercase">faultymug@gmail.com</a></p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="footer-block d-flex align-items-center">
                              <div class="btn-quote wgl-button btn-size-lg r-icon" role="button" href="/contacts/">
                                 <div class="button-content-wrapper "><span class="wgl-button-text text-white"><i class="flaticon-phone-call"></i></span></div>
                              </div>
                              <div class="footer-content ml-md-4">
                                 <p class="m-0"> <a href = "tel:+91 08618300483" class="font-extra-small text-white text-lowercase">+91 8618300483</a></p>
                                 <p class="m-0"> <a href = "tel:+91 9483014950" class="font-extra-small text-white text-lowercase">+91 9483014950</a></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <br><br>
               <div class="coyright-text text-center mt-3">
                  <p class="text-white font-extra-small font-light">
                     Copyright © 2023 Mydeed
                  </p>
               </div>
            </div>
         </div>
         <img src="images/footer_shapes_01.png" class="footer-shape-left position-absolute">
         <img src="images/footer_shapes_03.png" class="footer-shape-right position-absolute">
      </div>
      <div class="cursor"></div>
      <a id="button" class="btn-quote wgl-button btn-size-lg team-icon mx-2 d-flex align-items-center justify-content-center btn-top" role="button" href="/contacts/">
         <div class="button-content-wrapper d-flex align-items-center justify-content-center"><span class="wgl-button-text">Top</span></div>
      </a>
      <!-- footer section -->
      <script src='js/cursor.js'></script>
      <script type="text/javascript" src="js/custom.js"></script>
      <!-- page animation section js start -->
      <script type="text/javascript" src="js/animation.js"></script>
      <!-- page animation section js end -->
      <script>
         $(document).ready(function () {
         
             AOS.init({
             duration: 1200,
             })
          });
      </script>
   </body>
</html>