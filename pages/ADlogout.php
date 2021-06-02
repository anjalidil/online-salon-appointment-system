<?php
    session_start();
    if(session_destroy()) // Destroying All Sessions {
    header("Location: ADlogin.php"); // Redirecting To Home Page
    
    ?>