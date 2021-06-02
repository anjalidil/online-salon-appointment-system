<?php


   session_start();
   $error = '';

   if (isset($_POST["btnSubmit"]))
   {
   	if (empty($_POST["txtEmail"]) || empty($_POST["txtPassword"]))
   	{
   		$error = "Enter login details";
   	}
   	else
   	{
   		$userEmail = $_POST["txtEmail"];
   		$password = $_POST["txtPassword"];
         $hashed_password = md5($password);

   		$conn = mysqli_connect("localhost","root","","salondb");
   		$query = "select cus_email, cus_password from customer where cus_email ='$userEmail' and cus_password ='$hashed_password' limit 1";

   			$stmt = $conn->prepare($query);
   			//$stmt->bind_param("ss", $userEmail, $password);
   			$stmt->execute();
   			$stmt->bind_result($userEmail, $password);
   			$stmt->store_result();

   		if($stmt->fetch())
   		{
   			$_SESSION['login_user'] = $userEmail;
   			header("location:SESSIONindex.php");
   		}
         else
         {
			$error = "userEmail or Password is Invalid!";
			echo"<script type='text/javascript'> alert ('UserEmail or Password is Invalid!');</script>";
         }
   		
		mysqli_close($conn); 
   	}
   } 
 ?>