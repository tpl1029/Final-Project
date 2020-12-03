<?php

if($_SESSION['user_password'] !== $mypass){
    header("Location:http://localhost/FIT-Web-Course/FIT-Project-FortisureFoodFront/loginpage.php");
    session_unset(); 
}
?>