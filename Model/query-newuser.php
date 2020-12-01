<?php
    class User {
        public function __construct($db){
            $this->conn = $db;
        }

        public function checkUser($data){
            // variables
                $userName = $data['username'];

        // Prepare a select statement
        $query = "SELECT id FROM users WHERE username = $userName";
        
        $results = $this->conn->prepare($query);
        
        $results->execute();
        
        return $this->conn->lastInsertId();
                
                if(mysqli_stmt_num_rows($results) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($results);
        }
    }
    
    
?>