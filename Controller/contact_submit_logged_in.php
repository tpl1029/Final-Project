<?php   
        $message = " ";
        $name;$email;$comment;$captcha;

        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comments'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $comment=$_POST['comments'];        
            $message = "Thank you" . " " . $name . " " . "for contacting me!";
        }
                  
          
?>