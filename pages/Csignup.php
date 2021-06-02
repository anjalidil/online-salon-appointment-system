<?php include "connection.php"; 
 include "Csignup-process.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>Create Account</title>

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
    <link rel="stylesheet" href="../css/Csignup.css">
    <script type="text/javascript" src="../js/Csignup.js"> </script>
    

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
                        <a href="../index.php#class" class="nav-link smoothScroll">Services</a>
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
	
	

	


<form class="box2" name = "signup"  method="post" autocomplete="autocomplete" onsubmit="return (validateData());">
  <h1>Create  Account</h1>
  <br>
  <input type="text"  placeholder="First Name" name="txtFName" required>
  <input type="text"  placeholder="Last Name" name="txtLName" >
  <input type="text"  placeholder="Email" name="txtEmail" required>
  <input type="text"  placeholder="Telephone Number" name="txtTPNum" >
  
  <input type="password"  placeholder="Password" name="txtPassword" required>
  <input type="password"  placeholder="Re-enter Password" name="txtRePassword" required >
  

  <input type="submit" name="btnSubmit" value="Create Account">
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