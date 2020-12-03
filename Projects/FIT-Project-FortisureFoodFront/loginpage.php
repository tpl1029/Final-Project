<?php    
    include './View/header.php';
    include './View/navbar.php';
    include './Controller/db_conn.php';
?>

<div class='form-container'>

<form method="post" action="" >
    <!-- Username and Password inputs -->
        <label for="usernameInput">Username</label> 
        <input id="usernameInput" name="usernameInput" class='form-control'/><br>

        <label for="passwordInput">Password</label> 
        <input id="passwordInput" name="passwordInput" class='form-control' type="password"/><br>
    <!-- Username and Password inputs -->

    <!-- Login and Logout buttons -->
        <button class='btn btn-primary' type="submit" >Login</button>
    <!-- Login and Logout buttons -->

    <!-- Message Display (For showing if login was successful/error if not/perhaps even if a page was denied)-->
        <p id='form-sub-message'></p>
    <!-- Message Display -->
</form> 
</div>  

<!-- Footer -->
<?php
    include "./Controller/login.php";    
    include './View/footer.php';
?>
<!-- Footer -->

    </div>
</body>
    
</html>