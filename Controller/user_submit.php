<?php
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if(isset($_POST['submit'])){
    require './Model/query-newuser.php';
    
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
    
    else{
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
            echo "
                <script>       
                    
                alert('Thank you {$username} for signing up.');
                history.pushState({}, '', '');
                
                </script>";
        }
        else
        {
            $username_err = "This username is already taken.";
        }

        
        
        
    }
}

else{
    echo
    "
    <p>There was a problem</p>";
}



