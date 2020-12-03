<?php

session_start();

if(isset($_POST['logoutClick']))
{
    session_unset();
    session_destroy();
    $_POST = array(); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- meta tags -->

    <!-- Links -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href= "./View/Public/CSS/Scripts.css">
    
    <!-- Links -->

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <!-- Scripts -->


    <title>My Website</title>
</head>
    
<body>


<div class="page-grid" >


            <div class="header-grid">
            
                <div class = "title">
                    <h1>Thomas Lewis</h1>
                </div>

                <div class = "home">
                    <a href="./index.php"> <span class="home-text">Home </span></a>
                </div>

                <div class = "projects">
                    <a href="./index2.php"> <span class="projects-text">My Projects </span></a>
                </div>                

                <div class = "login">
                    <a href="./login.php" style="display:visible" id="logintext"> <span class="login-text" style="display:visible" id="login" >Login</span></a>
                </div>
                                
                <form method="post" action="" class = "logout">
                    <button href="" style="display:none" id="logouttext" name="logoutClick" type="submit" class="btn btn-success"> <span style="display:none" id="logout" class="logout-text">Logout</span></button>
                </form>

            </div>

<?php
                   
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) 
    {   
        echo " <script>
            document.getElementById('logout').style.display = 'block';     
            document.getElementById('logouttext').style.display = 'block';
            document.getElementById('login').style.display = 'none';
            document.getElementById('logintext').style.display = 'none';                             
        </script>
            ";
        
    }
    else {
        
        echo " <script>
            document.getElementById('logout').style.display = 'none';     
            document.getElementById('logouttext').style.display = 'none';
            document.getElementById('login').style.display = 'visible';
            document.getElementById('logintext').style.display = 'visible';                               
        </script>";
        
    }

?>
            