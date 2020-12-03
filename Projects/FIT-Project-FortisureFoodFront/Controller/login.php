<?php
session_start();
 $mypass = '123';

//  echo " <script>
//             function logout(){
//                 session_unset();
//                 document.getElementById('form-sub-message').innerHTML= 'Come Back Soon!';
//             }
 
//         </script>";

 if(isset($_POST['usernameInput']) && isset($_POST['passwordInput'])){
    $_SESSION["user_name"] = trim(htmlentities($_POST['usernameInput']));
    $_SESSION["user_password"] = trim(htmlentities($_POST['passwordInput']));
    $_POST = array();
    if ($_SESSION['user_password'] == $mypass){
        echo "<script>
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
                document.getElementById('form-sub-message').innerHTML= 'Hello: {$_SESSION['user_name']}'; 
            </script>";
        // $_SESSION['loggedIn'] = true;
        }
        else{ echo " <script>
                document.getElementById('form-sub-message').innerHTML= 'There was a problem. Please Try Again.';
                session_unset();
            </script>";
        }

}
else{ echo " <script>
                document.getElementById('form-sub-message').innerHTML= 'Please Login'; 
                session_unset();
            </script>";
        }
?>
