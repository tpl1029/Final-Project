<?php   
        $message = "";
        $name;$email;$comment;$captcha;

        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comments']) && isset($_POST['g-recaptcha-response'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $comment=$_POST['comments'];
            $captcha=$_POST['g-recaptcha-response'];
            

        if(!$captcha){          
          $message = "Please check the CAPTCHA!";
          exit;
        } else{
          $secretKey = "6Lc7GfcZAAAAAHWpadMMNcGCS5Hat6Gl9RU__QfY";
          $ip = $_SERVER['REMOTE_ADDR'];
          // post request to server
          $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
          $response = file_get_contents($url);
          $responseKeys = json_decode($response,true);
          // should return JSON with success as true
          if($responseKeys["success"]) {
              $message = "Thank you" . " " . $name . " " . "for contacting me!";                  
                  
          } else {
                  
                  $message = "You are a spammer!";
          }
        }
      } 
?>