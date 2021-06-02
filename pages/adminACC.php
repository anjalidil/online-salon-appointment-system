<?php
    include('ADsessionConfig.php');
    if(!isset($_SESSION['login_admin'])){
    header("location:ADlogin.php"); // Redirecting To Home Page
    }
    

 ?> 


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Profile</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/demo/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../assets/images/dashboard/BB.bmp.png" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
</head>
<body>
<script src="../assets/js/preloader.js"></script>
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
        <a href="ADindex.php" class="brand-logo">
          <img src="../assets/images/dashboard/BB.bmp.png" alt="" width="60" height="60">
          <font style="color:white; font-size:16px; font-weight: bold;">DARK&SHINE  </font>
        </a>
      </div>
      <div class="mdc-drawer__content">
        
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="ADindex.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                Home
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="ADcustomer-details.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                Customer Details
              </a>
            </div>
            
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="ADassistant-details.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
               Assistant Details
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="services.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                Services
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="confirmed-appointments.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">description</i>
                Confirmed Appo.
              </a>
            </div>
            
          </nav>
        </div>
        <div class="profile-actions">
          <a href="ADlogout.php">Logout</a>
        </div>
        
      </div>
    </aside>
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.html -->
      <header class="mdc-top-app-bar">
        <div class="mdc-top-app-bar__row">
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
            <span class="mdc-top-app-bar__title">ADMIN PANEL</span>
           
          </div>
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
            <div class="menu-button-container menu-profile d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
                <span class="d-flex align-items-center">
                  <span class="figure">
                    <img src="../assets/images/faces/face1.jpg" alt="user" class="user">
                  </span>
                  <span class="user-name">Administrator</span>
                </span>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-account-edit-outline text-primary"></i>
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                     <a href="adminACC.php"><h6 class="item-subject font-weight-normal">Reset Password</h6></a> 
                    </div>
                  </li>
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-settings-outline text-primary"></i>                      
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <a href="ADlogout.php"><h6 class="item-subject font-weight-normal">Logout</h6></a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
      
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                  <h6 class="card-title card-padding pb-0">Admin Password Reset</h6>
                  <div class="table-responsive">
                  <form method="post" onsubmit="return (REvalidateData());">
                    <table class="table table-hoverable"  >
                      <thead>
                        <tr>
                          <th></th>
                          <th></th>
                          <th></th>
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        
                          <td class="text-left"> <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field mdc-text-field--outlined">
                              <input class="mdc-text-field__input" id="text-field-hero-input" name="txtPassword">
                              <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                  <label for="text-field-hero-input" class="mdc-floating-label" >New Password</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                              </div>
                            </div>
                          </div></td> 
                          <td class="text-left"> <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field mdc-text-field--outlined">
                              <input class="mdc-text-field__input" id="text-field-hero-input" name="txtRePassword">
                              <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                  <label for="text-field-hero-input" class="mdc-floating-label" >Confirm New Password</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                              </div>
                            </div>
                          </div></td> 
                          <td></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td height="70"><input type="submit"  value="Reset" name="reset" class="mdc-button mdc-button--raised filled-button--success">
                            
                          </td>
                        </tr>
                     
                      </tbody>
                    </table>
                    <?php
                      $conn = mysqli_connect("localhost","root","","salondb");
                      // Check connection
                      if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                      
                        }
                      if (isset($_POST["reset"])) {
                
                        $username = $_SESSION['login_admin'];
                        $password = $_POST["txtPassword"];
                        $new_password = $_POST["txtRePassword"];
                        //echo"<script type='text/javascript'>alert ('Connection success');</script>";
                        
                
                        $user_update_query ="UPDATE `admin` SET `ad_password`='$password' WHERE `ad_username`='$username'";
                        $update = $conn->prepare($user_update_query);
                        $update->execute();
                        echo"<script type='text/javascript'> alert ('Your Password has Successfully updated.');</script>";
                        
                    }
                    
                    ?>
                    </form>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </main>
        <!-- partial:../../partials/_footer.html -->
        <footer>
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <span class="tx-14">Copyright © 2020 Salon Dark&Shine. All rights reserved.</span>
              </div>
              
            </div>
          </div>
        </footer>
        <!-- partial -->
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
   <script src="../assets/js/dashboard.js"></script>
   <!-- End custom js for this page-->
 </body>
</html>