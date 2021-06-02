<?php
    include('CusSessionConfig.php');
    if(!isset($_SESSION['login_user'])){
    header("location:Clogin.php"); // Redirecting To Home Page
    }

    
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
if (isset($_POST["submit"])){
    $date = $_POST["cf-date"];              
    
    $subject = "Appointment Request";
    $mailContent = "Dear Customer, <br/><br>You have now made an Appointment at Salon Dark&Shine.<br>Appointment Date: ".$date." <br>We will inform you the time of the Appointment as soon as possible.<br/><br/>Regards,<br/>Salon Dark&Shine.";
                    
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
    $mail->addAddress($_POST["cf-name"]);     // Add a recipient
   

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $mailContent;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
} catch (Exception $e) {
    echo"<script type='text/javascript'> alert ('Error! Email could not be sent');</script>";
}

}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Salon Dark&Shine</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/font-awesome.min.css">
     <link rel="stylesheet" href="../css/aos.css">
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../css/style.css">
     <link rel="shortcut icon" href="../assets/images/dashboard/BB.bmp.png" />
     <style>
         nav ul ul{
	position: absolute;
	top: 60px;
	line-height: 20px ;
	display: none;
    
}
nav ul :hover{
    display: block;
    color: blue;
}
nav ul ul li{
	width: 150px;
	float: none;
	display: inline-item;
	position: relative;
	line-height: 40px !important;
    
}
nav ul ul ul li{
	position: absolute;
	top: -60px;
	left: 150px;
}



.struct
{
	border:2px gold;
	color:  white;
	width: 100%;
	height: 500px;
	padding:0;
	margin: 0;

	
}
.Gallery
{
	margin: 10px 90px;
}
.Gallery img
{
	transition: 1s;
	padding: 15px;
	width: 300px;
	filter: grayscale(100%);
}
.Gallery img:hover
{
	filter: contrast(100%);
	transform: scale(1.1);
}

     </style>
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            

            <a class="navbar-brand" href="SESSIONindex.php">SALON DARK&SHINE</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="#service" class="nav-link smoothScroll">Services</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a href="CusLogout.php" class="nav-link smoothScroll">Logout</i></a>
                        
                    </li>
                </ul>

               
            </div>

        </div>
    </nav>


     
     <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                             
                              <div class="hero-text mt-5 text-center">

                                    <h6 data-aos="fade-up" data-aos-delay="300">Life Changing Experience!</h6>

                                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Expand your beauty at salon dark&shine</h1>

                                    <a href="#feature" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600">Make an Appointment now</a>

                                    <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700">learn more</a>
                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>


     <section class="feature" id="feature">
        <div class="container">
            <div class="row">

                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-3 text-white" data-aos="fade-up">New to the DARK&SHINE?</h2>

                    <h6 class="mb-4 text-white" data-aos="fade-up">Salon DARK&SHINE is open 6 days a week.</h6>

                    <p data-aos="fade-up" data-aos-delay="200"> </p>

                    <a href="#" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#appointmentForm">MAKE AN APPOINTMENT   </a>
                </div>

                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                     <div class="about-working-hours">
                          <div>

                                <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Working hours</h2>

                               

                               <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Monday - Friday</strong>

                                <p data-aos="fade-up" data-aos-delay="800">7:00 AM - 10:00 PM</p>

                                <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Saturday</strong>

                                <p data-aos="fade-up" data-aos-delay="800">7:00 AM - 5:00 PM</p>
                               </div>
                          </div>
                     </div>
                </div>

            </div>
        </div>
    </section>


     <!-- ABOUT -->
     <section class="about section" id="about">
               <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Hello, we are Salon Dark&Shine</h2>

                                <p data-aos="fade-up" data-aos-delay="400">Salon Dark&Shine commenced its journey on the 15<sup>th</sup> of December 2019. Dark&shine is passionately dedicated to being recognized as one of the best boutique style hair & beauty salons in Kandy. We ensuring our clients feel good about their hair & body. </p>

                                <p data-aos="fade-up" data-aos-delay="500">Salon Dark&Shine surrounded with a friendly and professional environment to make sure a calming and enriched salon experience with a personal touch.</p>

                            </div>

                            <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                                
                                    <div class="struct">
                                        <div class="Gallery">
                                             <img src="../images/img1.jpg"></a>
                                             
                                    </div>
                                </div>
                            </div>

                            <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="800">
                                <div class="team-thumb">
                                    <div class="struct">
                                        <div class="Gallery">
                                             <img src="../images/img3.jpg"></a>
                                             
                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>


     <!-- CLASS -->
     <section class="class section" id="service">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center mb-5">
                                <h6 data-aos="fade-up">Get A Glamorous Look</h6>

                                <h2 data-aos="fade-up" data-aos-delay="200">Our Services</h2>
                             </div>

                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="../images/g5.jpg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Manicure & Pedicure</h3>

                                        <span><strong>Price:</strong> Rs.1000.00 - 1500.00</span>

                                        

                                        <p class="mt-3">There’s nothing a fresh manicure can’t fix.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                                <div class="class-thumb">
                                    <img src="../images/1.jpeg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Facial</h3>

                                        <span><strong>Price:</strong> Rs.2500.00 - 3500.00</span>

                                        

                                        <p class="mt-3">Less stress more Facials.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                                <div class="class-thumb">
                                    <img src="../images/wax1.jpg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Waxing</h3>

                                        <span><strong>Price:</strong> Rs.500.00 - 5000.00</span>

                                        

                                        <p class="mt-3">Waxing is not a luxury, It is a necessity.</p>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <br><br>

                    <div class="row">


                        <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                            <div class="class-thumb">
                                <img src="../images/ll.jpg" class="img-fluid" alt="Class">

                                <div class="class-info">
                                    <h3 class="mb-1">Long Layer</h3>

                                    <span><strong>Price:</strong> Rs.1500.00</span>

                                    

                                    <p class="mt-3">Hairstyling is a craft, not a job.</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                            <div class="class-thumb">
                                <img src="../images/re4.jpg" class="img-fluid" alt="Class">

                                <div class="class-info">
                                    <h3 class="mb-1">Rebonding</h3>

                                    <span><strong>Price:</strong> Rs.9000.00 - 20000.00</span>

                                    

                                    <p class="mt-3">Hair is the crown you never take off.</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                            <div class="class-thumb">
                                <img src="../images/c1.jpg" class="img-fluid" alt="Class">

                                <div class="class-info">
                                    <h3 class="mb-1">Hair Colour</h3>

                                    <span><strong>Price:</strong> Rs.2000.00 - 8000.00</span>

                                    

                                    <p class="mt-3">Everything looks better in colour.</p>
                                </div>
                            </div>
                        </div>

                </div>
               </div>
     </section>


     <!-- SCHEDULE -->
     

     <!-- CONTACT -->
     <section class="contact section" id="contact">
          <div class="container">
               <div class="row">

                <div class="ml-auto col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h2> 
                    <br><br>
                <div class="contact-info" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                <i class="card-icon far fa-envelope"></i>
                <p><a href="mailto:salondarknshine@gmail.com">salondarknshine@gmail.com</a></p>
                </div>
        
                <div class="card">
                <i class="card-icon fas fa-phone"></i>
                <p>+94813785648</p>
                </div>
        
                
        
                
            </div>
                </div>
                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Where you can <span>find us</span></h2>

                        <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i> 120/A, Yatinuwara street, kandy, Sri lanka</p>

                        <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                           <iframe src=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1978.741836510386!2d80.63659761787267!3d7.299428773837434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae367d4df73b075%3A0xdf626097a147a111!2sNIBM%20Kandy%20Centre!5e0!3m2!1sen!2slk!4v1588878171585!5m2!1sen!2slk"  width="1920" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- FOOTER -->
     <div class="main"></div>
     <footer class="footer-distributed">
 
		<div class="footer-left">
 
		<h3>Salon<span>DARK&SHINE</span></h3>
 
		<p class="footer-links">
		<a href="#home">Home</a>
	·
		<a href="#about">About us</a>
	·
		<a href="#service">Services</a>
	·
        <a href="#contact">Contact</a>
    ·
		<a href="CusLogout.php">Logout</a>
	
		</p>
 
		<p class="footer-company-name">DARK&SHINE &copy; 2020</p>
		</div>
 
		<div class="footer-center">
 
		<div>
		<i class="fa fa-map-marker"></i>
		<p><span>120/A, Yatinuwara street, </span>  kandy, Sri lanka</p>
		</div>
 
		<div>
		<i class="fa fa-phone"></i>
		<p>+94 813785648</p>
		</div>
 
		<div>
		<i class="fa fa-envelope"></i>
		<p><a href="mailto:salondarknshine@gmail.com">salondarknshine@gmail.com</a></p>
		</div>
 
		</div>
 
		<div class="footer-right">
 
		<p class="footer-company-about">
		<span>About the company</span>
	Salon Dark&Shine is a web for any user who wants to inspire our services.
		</p>
 
		
 
		</div>
 
		</footer>

    <!-- Modal -->
    <div class="modal fade" id="appointmentForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">

        <div class="modal-content">
          <div class="modal-header">

            <h2 class="modal-title" id="membershipFormLabel">Appointment Form</h2>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form class="membership-form webform" role="form" method="POST">
                <input type="email" class="form-control" name="cf-name" placeholder="Email" required>
                <input type="date" class="form-control" name="cf-date" placeholder="Date" required> 
                <select id="time" class="form-control" name="time_period">
                <option >Select Time-period</option>
                 <option value="Morning">Morning</option>
                <option value="Evening">Evening</option>
                </select>
                <select id="cars" class="form-control" name="service">
                <option >Select Service</option>
                <option value="Clean up">Clean up</option>
                <option value="Jovees Facial">Jovees Facial</option>
                 <option value="Gold Facial">Gold Facial</option>
                 <option value="Hair Wash">Hair Wash</option>
                 <option value="Hair Trimmimg">Hair Trimmimg</option>
                 <option value="Long Layer">Long Layer</option>
                 <option value="Hair Relaxing">Hair Relaxing</option>
                 <option value="Hair Rebonding">Hair Rebonding</option>
                 <option value="Hair Colour">Hair Colour</option>
                 <option value="Full Face Treading">Full Face Treading</option>
                 <option value="Eyebrow Treading">Eyebrow Treading</option>

                </select>  

                <button type="submit" class="form-control" id="submit-button" name="submit">Submit Button</button>
       <center> <u><a href="mailto:salondarknshine@gmail.com?subject=Cancel an Appointment">Cancel Appointment</a></u></center>
                
            </form>
                <?php
                  if (isset($_POST["submit"])){

                    $email = $_POST["cf-name"];
                    $date = $_POST["cf-date"];
                    $time = $_POST["time_period"];
                    $service = $_POST["service"];
                    
                    $query =" INSERT INTO appointment (cus_email, date, time_period,ser_name)VALUES ('$email', '$date', '$time', '$service');";
                     $stmtp = $conn->prepare($query);
                     $stmtp->execute();
                     echo"<script type='text/javascript'> alert ('You have successfully made an Appointment!');</script>";

                  }
                ?>
          </div>
          
          <div class="modal-footer"></div>

        </div>
      </div>
    </div>

     <!-- SCRIPTS -->
     <script src="../js/jquery.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>
     <script src="../js/aos.js"></script>
     <script src="../js/smoothscroll.js"></script>
     <script src="../js/custom.js"></script>

</body>
</html>
