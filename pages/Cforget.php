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
if (isset($_POST["btnSubmit"])){
                  
    $resetPassLink = "localhost/salon1/pages/Creset.php";
    $subject = "Password Update Request";
    $mailContent = "Dear Customer, <br/>Recently a request was submitted to reset a password for your account. If this was a mistake, just ignore this email and nothing will happen.<br/>To reset your password, visit the following link: <a href='".$resetPassLink."'>".$resetPassLink."</a><br/><br/>Regards,<br/>Salon Dark&Shine.";
                    
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'salonEmail@gmail.com';                     // SMTP username
    $mail->Password   = '';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('salondarknshine@gmail.com', 'Salon Dark&Shine');
    $mail->addAddress($_POST["txtEmail"]);     // Add a recipient
   // $mail->addAddress('ellen@example.com');               // Name is optional
   // $mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $mailContent;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo"<script type='text/javascript'> alert ('Please check your e-mail, we have sent a password reset link to your registered email.');</script>";
    header("location:Clogin.php");
} catch (Exception $e) {
    echo"<script type='text/javascript'> alert ('Error! Email could not be sent');</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Customer Password Reset.</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/font-awesome.min.css">
     
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/Creset.css">
    <script type="text/javascript" src="../js/reset.js"> </script>
    
    

     <!-- MAIN CSS -->
     
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





     </style>
</head>
<body  data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            

            <a class="navbar-brand" href="../index.php">SALON DARK&SHINE</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="../index.php#home" class="nav-link smoothScroll">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="../index.php#about" class="nav-link smoothScroll">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="../index.php#service" class="nav-link smoothScroll">Services</a>
                    </li>

                    <li class="nav-item">
                        <a href="../index.php#contact" class="nav-link smoothScroll">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a href="Clogin.php" class="nav-link smoothScroll">Login</i></a>
                        
                    </li>
                </ul>

               
            </div>

        </div>
    </nav>
	
	

	


<form class="box2" name="reset"  method="post" onsubmit="return (RESETvalidateData());">
  <h1>Password Recovery</h1>
  <br>
  <input type="text" name="txtEmail" placeholder=" Enter Email" value="">
  
  
<br>
  <input type="submit" name="btnSubmit" value="Reset">
  <span style="color:blue; size:15;"><center><u><a href= "Clogin.php">LOGIN</a></u></center> </span>
</form>


	 <!-- FOOTER -->
     <div class="main"></div>
     <footer class="footer-distributed">
 
		<div class="footer-left">
 
		<h3>Salon<span>DARK&SHINE</span></h3>
 
		<p class="footer-links">
		<a href="../index.php#home">Home</a>
	·
		<a href="../index.php#about">About us</a>
	·
		<a href="../index.php#service">Services</a>
	·
		<a href="../index.php#contact">Contact</a>
	.
		<a href="Clogin.php">Login</a>
	
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

</body>
</html>
