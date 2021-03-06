<?php

    include './View/header.php';
    include './Controller/db_conn.php';

        $database = new Database();
        $db = $database->connect();

    include './Controller/user_submit.php';
?>
    <div class="form-grid">

        <div class="form-message">
            <h2>Sign Up</h2>
            <p>Please fill out this form to create an account.</p>
        </div>

        <div class="form-content">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label>Username</label>
                    <input type="text" name="username" id="username" class="form-control" value="<?php echo $username; ?>">
                    <span class="help-block"><?php echo $username_err; ?></span>
                </div>    
                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label>Password</label>
                    <input type="password" name="password" id="password" class="form-control" value="<?php echo $password; ?>">
                    <span class="help-block"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                    <span class="help-block"><?php echo $confirm_password_err; ?></span>
                </div>
                <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6Lc7GfcZAAAAAI0r5pEroYDjS_3YatQ2M8f8qZZA" id="captcha" style="display:visible"></div>
                <br>
                    <input type="submit" class="btn btn-primary" value="Submit" name="submit" id="submit">                    
                    <br> <span class="help-block"><?php echo $welcome; ?></span>
                </div>
                <p> Already have an account? <a href="login.php">Login here</a>.</p>
            </form>
        </div>

    </div>
<?php
    
    include './View/footer.php';

?>



