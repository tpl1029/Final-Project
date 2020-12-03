<?php

class Product{

    public function __construct($db){
        $this->conn = $db;
    }

    function prodRead(){
        // selects all products from db
        $query = "SELECT * FROM products
                    WHERE  ProductID = 1 OR ProductID = 3 OR ProductID = 4";

        // prepares query statement
        $stmt = $this->conn->prepare($query);

        //execute query
        $stmt->execute();

        // return values
        return $stmt;
    }
}




?>