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
            $sql = "SELECT username, password FROM users WHERE username = '$userName' AND password = '$password'";

            $results = $this->conn->prepare($query);
            
            $results->execute();       
    
    
}

// Close connection



?>