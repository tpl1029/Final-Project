<?php
session_start();
session_unset();
session_destroy();
$_POST = array(); 

echo"
    <script>
    function login() {

        var x = document.getElementById('logout');
      if (x.style.display === 'block') {
        x.style.display = 'none';
      }
    }
      function logout() {

        var x = document.getElementById('login');
      if (x.style.display === 'none') {
        x.style.display = 'block';
      }
    }  
     login();
     logout();
      </script>";

header("Location:http://localhost/FIT-Web-Course/FIT-Project-FortisureFoodFront/index.php");
?>