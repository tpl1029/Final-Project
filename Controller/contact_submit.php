<?php
        $name;$email;$comment;$captcha;
        if(isset($_POST['name'])){
            $name=$_POST['name'];
          }
        if(isset($_POST['email'])){
          $email=$_POST['email'];
        }
        if(isset($_POST['comments'])){
          $comment=$_POST['comments'];
        }
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          header("Location:../contact.php");
          echo '<h2>Please check the captcha form.</h2>';
          exit;
        }
        $secretKey = "6Lc7GfcZAAAAAHWpadMMNcGCS5Hat6Gl9RU__QfY";
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        // should return JSON with success as true
        if($responseKeys["success"]) {
            header("Location:../contact.php");
                echo ' <script>
                document.getElementById("message").innerHTML = "Thanks for contacting me!";
                </script>
                ';
        } else {
                header("Location:../contact.php");
                echo '<h2>You are a spammer ! </h2>';
        }
?>