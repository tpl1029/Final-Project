<?php

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: './index2.php'");
    exit;
 
// Processing form data when form is submitted
if(isset($_POST['submit'])){
    require './Model/query-login.php';
}
    // Check if username is empty
    if(empty(trim($_POST["username"]))){

        $username_err = "Please enter username.";
    } 

    // Check if the password is empty
    elseif(empty(trim($_POST["password"]))){

        $password_err = "Please enter your password.";
    }

    else{
        echo "<p>Success!</p>";
    }
}

 else {
    echo "<p>There was a problem</p>";
    }


?>