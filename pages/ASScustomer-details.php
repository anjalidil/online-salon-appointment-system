<?php
    include('ASSsessionConfig.php');
    if(!isset($_SESSION['login_assistant'])){
    header("location:ASSlogin.php"); // Redirecting To Home Page
    }
 ?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Customer Details</title>
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
        <a href="ASSindex.php" class="brand-logo">
          <img src="../assets/images/dashboard/BB.bmp.png" alt="" width="60" height="60">
          <font style="color:white; font-size:16px; font-weight: bold;">DARK&SHINE  </font>
        </a>
      </div>
      <div class="mdc-drawer__content">
        
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="ASSindex.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                Home
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="ASScustomer-details.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                Customer Details
              </a>
            </div>
            
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="received-appointments.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">description</i>
               Received Appo.
              </a>
            </div>
            
            
          </nav>
        </div>
        
        <div class="profile-actions">
          <a href="ASSlogout.php">Logout</a>
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
            <span class="mdc-top-app-bar__title">ASSISTANT AREA</span>
           
          </div>
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
            <div class="menu-button-container menu-profile d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
                <span class="d-flex align-items-center">
                  <span class="figure">
                    <img src="../assets/images/faces/face10.jpg" alt="user" class="user">
                  </span>
                  <span class="user-name">Assistant</span>
                </span>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                      <i class="mdi mdi-settings-outline text-primary"></i>                      
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                      <a href="ASSlogout.php"><h6 class="item-subject font-weight-normal">Logout</h6></a>
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
                  <h6 class="card-title card-padding pb-0">Customer Details</h6>
                  <div class="table-responsive">
                  <?php 

                    $conn = mysqli_connect("localhost","root","","salondb");
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                      }

                    $sql = "SELECT cus_id, cus_Fname, cus_Lname, cus_email, cus_tp FROM customer";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                   
                   echo " <table class='table table-hoverable'>
                      <thead>
                        <tr>
                          <th class='text-left'>Customer ID</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Telephone(+94)</th>
                        </tr>
                      </thead>";
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        echo "<tbody>
                        <tr>
                          <td class='text-left'>" . $row["cus_id"]. "</td>
                          <td>" . $row["cus_Fname"]. "</td>
                          <td>" . $row["cus_Lname"]. "</td>
                          <td>" . $row["cus_email"]. "</td>
                          <td>" . $row["cus_tp"]. "</td> 
                        </tr>
                        
                      </tbody>";
                      }
                      echo "</table>";
                    } else {
                      echo "0 results";
                    }
                  
                      $conn->close();
                    ?>
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