<?php


   session_start();
   $error = '';

   if (isset($_POST["btnSubmit"]))
   {
   	if (empty($_POST["txtUsername"]) || empty($_POST["txtPassword"]))
   	{
   		$error = "Enter login details";
   	}
   	else
   	{
   		$username = $_POST["txtUsername"];
   		$password = $_POST["txtPassword"];

   		$conn = mysqli_connect("localhost","root","","salondb");
   		$query = "select ad_username, ad_password from admin where ad_username ='$username' and ad_password ='$password' limit 1";

   			$stmt = $conn->prepare($query);
   			//$stmt->bind_param("ss", $username, $password);
   			$stmt->execute();
   			$stmt->bind_result($username, $password);
   			$stmt->store_result();

   		if($stmt->fetch())
   		{
   			$_SESSION['login_admin'] = $username;
   			header("location:ADindex.php");
   		}
         else
         {
			$error = "username or Password is Invalid!";
			echo"<script type='text/javascript'>alert ('username or Password is Invalid!');</script>";
         }
   		
		mysqli_close($conn); 
   	}
   } 
 