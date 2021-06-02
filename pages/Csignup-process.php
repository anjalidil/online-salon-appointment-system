<?php
    $fname = "";
    $lname = "";
    $email = "";
    $contact = "";
    $name_existed_error = " ";
    $email_existed_error = " ";
    $contact_existed_error = " ";

  
    if (!empty($_POST)) {
        $signup_password = "";
        $errors = array();
        
        $fname = $_POST["txtFName"];
        $lname = $_POST["txtLName"];
        $email = $_POST["txtEmail"];
        $contact = $_POST["txtTPNum"];
        $signup_password = $_POST["txtPassword"];
        
        // Trim the data
        $fname = trim($fname);
        $lname = trim($lname);
        $email = trim($email);
        $contact = trim($contact);
        
        
        $user_check_query = "SELECT * FROM customer WHERE cus_email = '$email' LIMIT 1";

        $result = $conn->prepare($user_check_query);
        
        $result->execute();
        
        $user = $result->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if ($user["cus_email"] === $email) {
                array_push($errors, "Email already exists");
                $email_existed_error = "Email already taken";
                echo"<script type='text/javascript'>alert ('This Email already exists.');</script>";
            }
        }

        if (count($errors) == 0) {
            // Encrypt password
            $password_encrypted = md5($signup_password);
           
            

            $query = "INSERT INTO customer (cus_Fname, cus_Lname, cus_email, cus_tp, cus_password) VALUES ('$fname', '$lname', '$email', '$contact', '$password_encrypted');";
            
            // Insert the user
            $result = $conn->prepare($query);
           
            $result->execute();
            echo"<script type='text/javascript'>alert ('You have now Successfully Registered.');</script>";
            header("location: Clogin.php");
        }
        
            
         
        
    }
?>