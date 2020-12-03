<?php

include './View/header.php';
include './Controller/contact_submit.php';

?>  
<div class="form-grid">

    <div class="form-message">
        <h1>Please fill out this form to contact me!</h1>
    </div>

    <div class="form-content">
        <form action="" method="post">

            <label>Name:</label><br>
            <input type="text" class="form-control" name="name" id="name" >            
            <label>Email:</label><br>
            <input type="text" class="form-control"  name="email" id="email">
            <label>Comments:</label><br>
            <input type="textarea" class="form-control" name="comments" id="comments">
            <br>
            <div class="g-recaptcha" data-sitekey="6Lc7GfcZAAAAAI0r5pEroYDjS_3YatQ2M8f8qZZA" id="captcha" style="display:visible"></div>
            <br>
            <input type="submit" class="btn btn-primary" value="Submit" name="submit" id="submit">
            <br> <span class="help-block"><?php echo $message; ?></span>
            </form>        
    </div>

</div>

    <?php    
    include './View/footer.php';

?>