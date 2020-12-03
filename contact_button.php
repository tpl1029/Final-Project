<?php
include './View/header.php';

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {   
    include './contact_logged_in.php';    
    }

    else{
        include './contact_logged_out.php';
    }

?>  