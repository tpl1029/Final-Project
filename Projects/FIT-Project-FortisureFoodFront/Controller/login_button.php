<?php
include './View/header.php';

if (isset($_SESSION['user_password']) ){
    echo"
    <script>
    function login() {

        var x = document.getElementById('logout');
      if (x.style.display === 'none') {
        x.style.display = 'block';
      }
    }
      function logout() {

        var x = document.getElementById('login');
      if (x.style.display === 'visible') {
        x.style.display = 'none';
      }
    }  
     login();
     logout();
      </script>";
} else{
    echo"

    <script>
    function logout() {

        var x = document.getElementById('login');
      if (x.style.display === 'visible') {
        x.style.display = 'visible';
      }else (x.style.display === 'none') {
        x.style.display = 'visible';
      }
    }

     logout();
    
    </script>
    ";
}

?>