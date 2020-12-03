<?php


include './Controller/contact_submit_logged_in.php';

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
            <input type="submit" class="btn btn-primary" value="Submit" name="submit" id="submit">
            <br> <span class="help-block"><?php echo $message; ?></span>
            </form>        
    </div>

</div>

    <?php    
    include './View/footer.php';

?>