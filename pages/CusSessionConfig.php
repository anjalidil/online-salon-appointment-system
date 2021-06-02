<?php
    // mysqli_connect() function opens a new connection to the MySQL server.
    $conn = mysqli_connect("localhost", "root", "", "salondb");
    session_start();// Starting Session
    // Storing Session
    $user_check = $_SESSION['login_user'];
    // SQL Query To Fetch Complete Information Of User
    $query = "SELECT cus_email from customer where cus_email = '$user_check'";
    $ses_sql = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($ses_sql);
    $login_session = $row['cus_email'];
    