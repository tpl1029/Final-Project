<?php

class Login {
    public function __construct($db){
        $this->conn = $db;
    }

    public function loginUser($data)
        {
            // variables
            $userName = $data["username"];
            $password = $data ["password"];

            // Prepare a select statement
            $query = "SELECT username, password FROM users WHERE username = '$userName' AND password = '$password'";

            $results = $this->conn->prepare($query);
            
            $results->execute();
            echo $results->rowCount();      
    
            if($results->rowCount() == 1){
                // session_start();
                            
                // Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $userName;                            
                            
                // Redirect user to welcome page
                // header("location: welcome.php");
            }
            
            else{
                // Display an error message if username doesn't exist
                $username_err = " That account was not found";
                }
                
            } 
}

// Close connection



?>