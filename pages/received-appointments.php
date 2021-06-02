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
  <title>Customer Appointments</title>
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
  <link rel="stylesheet" href="../css/style.css">
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

                  <div>
                  <h6 class="card-title card-padding pb-0">Received Appointments</h6>
                  <form method="post" >

                  <table align="right" >
                  <tr>
                  <td><div class='mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop'>
                          <div class='mdc-text-field mdc-text-field--outlined'>
                            <input class='mdc-text-field__input' id='text-field-hero-input'  name="appo_id">
                            <div class='mdc-notched-outline'>
                              <div class='mdc-notched-outline__leading'></div>
                              <div class='mdc-notched-outline__notch'>
                                <label for='text-field-hero-input' class='mdc-floating-label' >Appo. ID </label>
                              </div>
                              <div class='mdc-notched-outline__trailing'></div>
                            </div>
                          </div>
                        </div></td>
                        <td><div class='mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop'>
                          <div class='mdc-text-field mdc-text-field--outlined'>
                            <input class='mdc-text-field__input' id='text-field-hero-input'  name="cus_email">
                            <div class='mdc-notched-outline'>
                              <div class='mdc-notched-outline__leading'></div>
                              <div class='mdc-notched-outline__notch'>
                                <label for='text-field-hero-input' class='mdc-floating-label' >Customer Email </label>
                              </div>
                              <div class='mdc-notched-outline__trailing'></div>
                            </div>
                          </div>
                        </div></td>
                        <td></td>
                        <td> 
                         <select name ='time_period' id='time_period' class='mdc-select' >
                              <ul class='mdc-list' >
                                <option class='mdc-list-item mdc-list-item--selected'  aria-selected='true' >Select Time
                                </option>
                                <option class ='mdc-list-item' >
                                  7.00 - 8.00
                                </option>
                                <option class='mdc-list-item' >
                                8.00 - 9.00
                                </option>
                                <option class='mdc-list-item' >
                                9.00 - 10.00
                                </option>
                                <option class='mdc-list-item' >
                                10.00 - 11.00
                                </option>
                                <option class='mdc-list-item' >
                                11.00 - 12.00
                                </option>
                                <option class='mdc-list-item' >
                                13.00 - 14.00
                                </option>
                                <option class='mdc-list-item' >
                                14.00 - 15.00
                                </option>
                                <option class='mdc-list-item' >
                                15.00 - 16.00
                                </option>
                                <option class='mdc-list-item' >
                                16.00 - 17.00
                                </option>
                                <option class='mdc-list-item' >
                                17.00 - 18.00
                                </option>
                                </ul>
                              </select>
                         </td>
                        <td></td>
                        <td> 
                          <button class='mdc-button mdc-button--raised icon-button filled-button--warning' name="btnADD">
                            <i class='material-icons mdc-button__icon'>add</i>
                          </button>
                          <td></td>
                          <td><button class='mdc-button mdc-button--raised icon-button filled-button--secondary' name="btnCAN">
                            <i class='material-icons mdc-button__icon'>delete</i>
                          </button></div></td>
                          <td></td>
                  </tr>
                  </table>

                  <?php
                  // Import PHPMailer classes into the global namespace
                  // These must be at the top of your script, not inside a function
                    use PHPMailer\PHPMailer\PHPMailer;
                    use PHPMailer\PHPMailer\SMTP;
                    use PHPMailer\PHPMailer\Exception;

                  // Load Composer's autoloader
                          require '../vendor/autoload.php';

                  // Instantiation and passing `true` enables exceptions
                    $mail = new PHPMailer(true);
                  if (isset($_POST["btnADD"])){

                    $appo_id = $_POST["appo_id"];
                    $time = $_POST["time_period"];
                    
                    $subject = "Appointment Confirmation";
                    $mailContent = "Dear Customer,<br> <br/> You have made an Appointment Request at Salon Dark&Shine.We have accepted your appointment request.
                    This is the Scheduled time for your appointment request. Visit us on the appointed day.<br> Scheduled Time: ".$time." <br><br/><br/>Regards,<br/>Salon Dark&Shine.";
     
                    $queryup ="UPDATE `appointment` SET `time_period`='$time' WHERE `appo_id` = '$appo_id'";
                    $stmt = $conn->prepare($queryup);
                    $stmt->execute();

                    try {
                      //Server settings
                      $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
                      $mail->isSMTP();                                            // Send using SMTP
                      $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                      $mail->Username   = 'salondarknshine@gmail.com';                     // SMTP username
                      $mail->Password   = '10darknshine10';                               // SMTP password
                      $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                      $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                  
                      //Recipients
                      $mail->setFrom('salondarknshine@gmail.com', 'Salon Dark&Shine');
                      $mail->addAddress($_POST["cus_email"]);     // Add a recipient
                     
                  
                      // Content
                      $mail->isHTML(true);                                  // Set email format to HTML
                      $mail->Subject = $subject;
                      $mail->Body    = $mailContent;
                      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                  
                      $mail->send();
                      echo"<script type='text/javascript'> alert ('Email has been sent to the Customer.');</script>";
   
                  } catch (Exception $e) {
                      echo"<script type='text/javascript'> alert ('Error! Email could not be sent');</script>";
                  }
                  

                    $query =" INSERT INTO confirmed_appointments (appo_id, date, time, cus_email, ser_name)SELECT appo_id, date, time_period, cus_email, ser_name FROM appointment WHERE appo_id = '$appo_id';";
                     $stmtp = $conn->prepare($query);
                     if ($stmtp->execute() == TRUE) {
                        $queryDel = "DELETE FROM `appointment` WHERE appo_id='$appo_id' ";
                        $stmtss = $conn->prepare($queryDel);
                        $stmtss->execute();
                      }
                  }
                  if (isset($_POST["btnCAN"])){
                  
                    $appo_id = $_POST["appo_id"];
                    
                    $subject = "Appointment Disapproval";
                    $mailContent = "Dear Customer,<br> <br> You have made an Appointment Request at Salon Dark&Shine.<br>We Cannot accept your appointment request due to some scheduled appointments on the day that you requested an appointment.
                     <br>Please make an appointment again as you wish.<br><br><br>Regards,<br>Salon Dark&Shine.";
     
                    try {
                      //Server settings
                      $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
                      $mail->isSMTP();                                            // Send using SMTP
                      $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                      $mail->Username   = 'salondarknshine@gmail.com';                     // SMTP username
                      $mail->Password   = '10darknshine10';                               // SMTP password
                      $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                      $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                  
                      //Recipients
                      $mail->setFrom('salondarknshine@gmail.com', 'Salon Dark&Shine');
                      $mail->addAddress($_POST["cus_email"]);     // Add a recipient
                     
                  
                      // Content
                      $mail->isHTML(true);                                  // Set email format to HTML
                      $mail->Subject = $subject;
                      $mail->Body    = $mailContent;
                      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                  
                      $mail->send();
                      echo"<script type='text/javascript'> alert ('Email has been sent to the Customer.');</script>";
   
                  } catch (Exception $e) {
                      echo"<script type='text/javascript'> alert ('Error! Email could not be sent');</script>";
                  }
                  
                    $query ="INSERT INTO canceled_appointments (appo_id, date, cus_email, ser_name) SELECT appo_id, date, cus_email, ser_name FROM appointment WHERE appo_id = '$appo_id';";
                    $stmt = $conn->prepare($query);
                    if ($stmt->execute() == TRUE) {
                      $queryDel = "DELETE FROM `appointment` WHERE appo_id='$appo_id' ";
                      $stmtss = $conn->prepare($queryDel);
                      $stmtss->execute();

                      
                    }
                  }

                  ?>
                  </form>
                  </div>
                  <br>
                  <div class="table-responsive">
                   <?php 

                    $conn = mysqli_connect("localhost","root","","salondb");
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                      }

                    $sql = "SELECT appo_id, date, time_period, cus_email, ser_name FROM appointment";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                   
                   echo "<form method='get'> <table class='table table-hoverable' >
                      <thead>
                        <tr>
                          <th class='text-left'>Appointment ID</th>
                          <th>Date</th>
                          <th>Time </th>
                          
                          <th>Customer Email</th>
                          <th>Service</th>
                          <th></th>
                        </tr>
                      </thead>";
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        echo "<tbody>
                        <tr>
                          <td class='text-left'>" . $row["appo_id"]. "</td>
                          <td><label name='date'>" . $row["date"]. "</label></td>
                          <td>" . $row["time_period"]. "</td>
                          <td><label name='cus_id'>" . $row["cus_email"]. "</label></td>
                          <td><label name='service'>" . $row["ser_name"]. "</label></td> 
                          
                        </tr>
                        
                      </tbody>";
                      }
                      echo "</table> </form>";
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