<?php
include('ADsession.php'); // Includes Login Script
if(isset($_SESSION['login_admin'])){
header("location: ADindex.php"); // Redirecting To Profile home Page
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
  <script type="text/javascript" src="../js/ADlogin.js"> </script>
  
  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/demo/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../assets/images/dashboard/BB.bmp.png" />
   <style>
      .dropdwn{
	margin: 0 auto;
}
nav{
	height: 60px;
	background:linear-gradient(90deg, rgba(6,1,99,1) 0%, rgba(181,29,218,1) 100%, rgba(88,138,255,1) 100%);
	box-shadow: 0 10px 15px rgba(0,0,0,.1);
	

}
.logo{
	padding: 5px 0 0 40px;
	width: 240px;
	height: 60px;
	margin-top: -5px;
	margin-left:6px;
  font-weight: bold;
  color:white ;
  font-size: x-large;
}


   </style>
</head>
<body>
<script src="../assets/js/preloader.js"></script>
  
<div class="dropdwn">
	<nav>
		<img class="logo" src="../assets/images/dashboard/logo1.PNG" alt="" width="80" height="40">
          
	
		
	
	</nav>
  </div>
  

  <div class="body-wrapper">
    <div class="main-wrapper">
      <div class="page-wrapper full-page-wrapper d-flex align-items-center justify-content-center">
        <main class="auth-page">
          <center><p class="w3-xxlarge">ADMIN LOGIN</p></center> <br> <br>
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-6-tablet">
                <div class="mdc-card">
                  <form name = "ADlogin"  method="post" onsubmit="return (validateData());">
                    <div class="mdc-layout-grid">
                      <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" id="text-field-hero-input" name="txtUsername">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label" >Username</label>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" type="password" id="text-field-hero-input" name="txtPassword">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label" >Password</label>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                          <div class="mdc-form-field">
                            <div class="mdc-checkbox">
                              </div>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex align-items-center justify-content-end">
                          <U><a href="ADreset.php">Forgot Password</a></U>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <input type="submit" class="mdc-button mdc-button--raised w-100" value="Login" name="btnSubmit">
                            
                          
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>
  <!-- plugins:js -->
  <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../assets/js/material.js"></script>
  <script src="../assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>
</html>