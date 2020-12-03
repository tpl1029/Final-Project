<?php
$captcha = $welcome = $username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if(isset($_POST['submit']) && isset($_POST['g-recaptcha-response'])){
    require './Model/query-newuser.php';

    $captcha=$_POST['g-recaptcha-response'];

    // Validate username
    if(empty(trim($_POST["username"])) ){
        $username_err = "Please enter a username.";
    } 
    
    elseif (empty(trim($_POST["password"]))) {      
    
        $password_err = "Please enter a password.";
    }
    
    elseif(trim($_POST["password"])!=trim($_POST["confirm_password"]) ){
        $confirm_password_err = "Passwords did not match.";
    }

    elseif(!$captcha){          
        $welcome = "Please check the CAPTCHA!";
        
      }
    
    else{
        $secretKey = "6Lc7GfcZAAAAAHWpadMMNcGCS5Hat6Gl9RU__QfY";
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        // should return JSON with success as true
        if($responseKeys["success"]) {
        $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
        $username = trim(htmlentities($POST["username"]));
        $password = trim(htmlentities($POST["password"]));

        $userData = [
            "username" => $username,
            "password" => $password
          ];

        $user = new User($db);

        if($user->checkUser($userData))
        {
           $welcome = "Thank you" . " " . $username . " " . "for signing up!";
        }
        else
        {
            $username_err = "This username is already taken.";
        }      
        
     }
    }
}




