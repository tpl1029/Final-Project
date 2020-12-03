<?php
session_unset();
session_destroy();
$_POST = array(); 

header("Location: ./index2.php");
?>