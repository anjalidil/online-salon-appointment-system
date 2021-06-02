<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=salondb", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo"<script type='text/javascript'>alert ('Connection success);</script>";
}
catch(PDOException $e) {
    echo"<script type='text/javascript'>alert ('Connection Failed : .$e');</script>";
}

session_start();

?>