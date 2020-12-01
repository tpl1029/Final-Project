<?php
if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        
        // Set parameters
        $param_username = $username;
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Store result
            mysqli_stmt_store_result($stmt);
            
            // Check if username exists, if yes then verify password
            if(mysqli_stmt_num_rows($stmt) == 1){                    
                // Bind result variables
                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($password, $hashed_password)){
                        // Password is correct, so start a new session
                        session_start();
                        
                        // Store data in session variables
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["username"] = $username;                            
                        
                        // Redirect user to welcome page
                        header("location: welcome.php");
                    } else{
                        // Display an error message if password is not valid
                        $password_err = "The password you entered was not valid.";
                    }
                }
            } else{
                // Display an error message if username doesn't exist
                $username_err = "No account found with that username.";
            }
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close statement
       
    }

?>


<?php
// if($_SERVER["REQUEST_METHOD"] == "POST"){
 
//  // Validate username
//  if(empty(trim($_POST["username"]))){
//      $username_err = "Please enter a username.";
//  } else{
//      // Prepare a select statement
//      $sql = "SELECT id FROM users WHERE username = ?";
     
//      if($stmt = mysqli_prepare($db, $sql)){
//          // Bind variables to the prepared statement as parameters
//          mysqli_stmt_bind_param($stmt, "s", $param_username);
         
//          // Set parameters
//          $param_username = trim($_POST["username"]);
         
//          // Attempt to execute the prepared statement
//          if(mysqli_stmt_execute($stmt)){
//              /* store result */
//              mysqli_stmt_store_result($stmt);
             
//              if(mysqli_stmt_num_rows($stmt) == 1){
//                  $username_err = "This username is already taken.";
//              } else{
//                  $username = trim($_POST["username"]);
//              }
//          } else{
//              echo "Oops! Something went wrong. Please try again later.";
//          }

//          // Close statement
//          mysqli_stmt_close($stmt);
//      }
//  }
 
//  // Validate password
//  if(empty(trim($_POST["password"]))){
//      $password_err = "Please enter a password.";     
//  } elseif(strlen(trim($_POST["password"])) < 6){
//      $password_err = "Password must have atleast 6 characters.";
//  } else{
//      $password = trim($_POST["password"]);
//  }
 
//  // Validate confirm password
//  if(empty(trim($_POST["confirm_password"]))){
//      $confirm_password_err = "Please confirm password.";     
//  } else{
//      $confirm_password = trim($_POST["confirm_password"]);
//      if(empty($password_err) && ($password != $confirm_password)){
//          $confirm_password_err = "Password did not match.";
//      }
//  }
 
//  // Check input errors before inserting in database
//  if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
     
//      // Prepare an insert statement
//      $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
      
//      if($stmt = mysqli_prepare($db, $sql)){
//          // Bind variables to the prepared statement as parameters
//          mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
         
//          // Set parameters
//          $param_username = $username;
//          $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
         
//          // Attempt to execute the prepared statement
//          if(mysqli_stmt_execute($stmt)){
//              // Redirect to login page
//              header("location: login.php");
//          } else{
//              echo "Something went wrong. Please try again later.";
//          }

//          // Close statement
//          mysqli_stmt_close($stmt);
//      }
//  }
 
//  // Close connection
//  mysqli_close($db);
// }
?>