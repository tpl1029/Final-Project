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
            // $query = "SELECT username FROM users WHERE username = '$userName' ";

            // $results = $this->conn->prepare($query);
            
            // $results->execute();



            //$password = password_hash($password, PASSWORD_DEFAULT);

            $hashed_query = "SELECT password FROM users WHERE username = '$userName' ";

            $results = $this->conn->prepare($hashed_query);
            
            $results->execute();
                       
            $row = $results->fetch(PDO::FETCH_ASSOC);
    
            if($results->rowCount() == 1 && password_verify($password, $row['password'])){
                // session_start();
                            
                // Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $userName;                            
                            
                // Redirect user to welcome page
                // header("location: welcome.php");
            }
            
            else{
                // Display an error message if username doesn't exist
                $_SESSION["loggedin"] = false;
                $username_err = " That account was not found";
                }
                
            } 
}

// Close connection



?>