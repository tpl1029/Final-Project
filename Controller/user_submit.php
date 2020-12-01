<?php
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    require './Model/query-newuser.php';
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        $username = trim(htmlentities($POST['username']));

        $userData = [
            "username" => $userName
          ];

        $user = new User($db);
        $checkuser = $user->checkUser($userData);
       
    }






















}