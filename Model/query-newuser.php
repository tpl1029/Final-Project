<?php
    class User {
        public function __construct($db){
            $this->conn = $db;
        }

        public function checkUser($data)
        {
            // variables
            $userName = $data["username"];

            // Prepare a select statement
            $query = "SELECT username FROM users WHERE username = '$userName'";
            
            $results = $this->conn->prepare($query);
            
            $results->execute();       
        
                       
            if($results->rowCount() >= 1){
                return false;
            } 
            
            else
            { 
                $query = "INSERT INTO users (username) VALUES ('$userName')";
    
                $results = $this->conn->prepare($query);
                
                $results->execute();
                
                return true;
                
            }

        }

    }
?>