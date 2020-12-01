<?php

//check to see if the customer creation from was just submitted
if (isset($_POST['submit'])) {
    require './Model/query-customer.php';

  // Used to remove special encoded characters
  // https://www.w3schools.com/php/filter_sanitize_string.asp
  $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

  // Variables
    // Customer Contact Info
      // Trim removes spaces around data example: ' nameHere ' TO-> 'nameHere'
      // htmlentities changes special character like: 
        // '&' TO '&amp;'
        // '<' TO '&lt;'
        // '"' TO '&quot;'
      // and by adding single quotes around the entire string
      // which this helps protect against SQL injection attacks
      $firstName = trim(htmlentities($POST['firstName']));
      $lastName = trim(htmlentities($POST['lastName']));
      $address = trim(htmlentities($POST['address']));
      $city = trim(htmlentities($POST['city']));
      $state = trim(htmlentities($POST['state']));
      $postalCode = trim(htmlentities($POST['zip']));
      $phone = trim(htmlentities($POST['phone']));
      $email = trim(htmlentities($POST['email']));
      $level = trim(htmlentities($POST['level']));
      // $comments = trim(htmlentities($POST['comments']));
    // Customer Contact Info
  // Variables
  
  // Customer array & db insert
    /* 
      Creates an array that stores gathered information from the form
      and send that array to the query-customer.php page to insert to db
    */
      $customerData = [
        "firstName" => $firstName,
        "lastName" => $lastName,
        "address" => $address,
        "city" => $city,
        "state" => $state,
        "postalCode" => $postalCode,
        "phone" => $phone,
        "email" => $email,
        "level" => $level,
          // "comments" => $comments
      ];
    // Customer Info Array

    // Insert info to db
      $customer = new Customer($db);
      $customerPurchaseId = $customer->addCustomer($customerData);
      $customerReward =$customer->addRewards($customerData);
      $customerState =$customer->addState($customerData);
    // Insert info to db
  // Customer array & db insert  

  //display an alert thanking the customer for their account creations
  echo "
  <script>       
      
  alert('Thank you {$firstName} {$lastName} for signing up. You selected the {$level} level. You will recieve an email confirmation shortly! ');
  history.pushState({}, '', '');
  </script>";

   
}

?>

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