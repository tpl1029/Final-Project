<?php
include './db_conn.php';
include '../Model/query-customer.php';
       
$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);  
  $firstname = trim(htmlentities($POST['firstName']));
  $lastname = trim(htmlentities($POST['lastName']));
  $address = trim(htmlentities($POST['address']));
  $city = trim(htmlentities($POST['city']));
  $state = trim(htmlentities($POST['state']));
  $zip = trim(htmlentities($POST['zip']));
  $phone = trim(htmlentities($POST['phone']));
  $email = trim(htmlentities($POST['email']));
  $level = trim(htmlentities($POST['level']));

  $customerData = [
    "firstName" => $firstname,
    "lastName" => $lastname,
    "address" => $address,
    "city" => $city,
    "state" => $state,
    "zip" => $zip,
    "phone" => $phone,
    "email" => $email,
    "level" => $level
  ];

  $database = new Database();
  $db = $database->connect();
  
  $customer = new Customer($db);
  $customerPurchaseId = $customer->addCustomer($customerData);
  $customerReward =$customer->addRewards($customerData);
  $customerState =$customer->addState($customerData);

    echo "
  <script>        
      alert('Thank You {$firstname} {$lastname} For Joining The Fortisure Food Front Rewards Program! You have selected the {$level} level. You will receive an email shortly at: {$email} ');
      history.pushState({}, '', '');
  </script>";

  $_POST = array();
?>