<?php
class Customer {
    public function __construct($db){
        $this->conn = $db;
    }

    public function addCustomer($data){
        // variables
            $firstName = $data['firstName'];
            $lastName = $data['lastName'];
            $address = $data['address'];
            $city = $data['city'];
            $postalCode = $data['zip'];
            $phone = $data['phone']; 
            $email = $data['email']; 
                                  
        // variables

        $query = "INSERT INTO customers
                  (FirstName, LastName, Address, City, ZIP, Phone, Email)
        VALUES('$firstName', '$lastName', '$address', '$city', '$postalCode', '$phone', '$email');
                   ";

        $results = $this->conn->prepare($query);

        // executes statement
        $results->execute();

        // grabs the last id created (last row inserted)
        return $this->conn->lastInsertId();
        
    }

    public function addRewards($data){
        $level = $data['level'];

        $query = "INSERT INTO rewardsprogram (CustomerID, Tier)
                  VALUES ((SELECT CustomerID FROM customers
							ORDER BY CustomerID DESC
							LIMIT 1), '$level'); ";

        $results = $this->conn->prepare($query);

        // executes statement
        $results->execute();

        // grabs the last id created (last row inserted)
        return $this->conn->lastInsertId();

    }

    public function addState($data){
        $state = $data['state'];
        $phone = $data['phone']; 
        
        $query = "UPDATE Customers
                  SET StateID = (                    
                  SELECT StateID FROM States
                  WHERE StateName = '$state')
                  WHERE Phone = '$phone'; ";

        $results = $this->conn->prepare($query);

        // executes statement
        $results->execute();

        // grabs the last id created (last row inserted)
        return $this->conn->lastInsertId();

    }
}










?>