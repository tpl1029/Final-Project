<?php

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
$welcome = "";

// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//     header("Location:http://localhost/FIT-Web-Course/Final-Project/index.php");
//     echo   
//     "
//     <script>
//     document.getElementById('message').innerHTML = 'You are already logged in!'    
//     </script>
//     ";
//     exit;
// } 
// Processing form data when form is submitted
if(isset($_POST["login"])){
     require './Model/query-login.php';

    // Check if username is empty
    if(empty(trim($_POST["username"]))){

        $username_err = "Please enter username.";
    } 

    // Check if the password is empty
    elseif(empty(trim($_POST["password"]))){

        $password_err = "Please enter your password.";
    }

    else{
        $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
        $username = trim(htmlentities($POST["username"]));
        $password = trim(htmlentities($POST["password"]));

        $userData = [
            "username" => $username,
            "password" => $password
          ];

        $login = new Login($db);
        $login->loginUser($userData);

        if($_SESSION["loggedin"] = true && isset ($_SESSION["username"])) 
        {   
            $welcome = "Hello" . " " .  $username . "!";

            echo "          
                <script> history.pushState({}, '', ''); </script>";           

              }

        else
        {
            $username_err = "That account could not be located.";
        }
    }
}

 else {
    echo "<p>There was a problem</p>";
    }


?>