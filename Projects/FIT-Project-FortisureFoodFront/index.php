<!-- Header and Navbar -->
<?php
    include './Controller/login.php';    
    include './Controller/login_button.php';
    include './View/navbar.php';
    include './Controller/db_conn.php';
    include './Controller/product-cards.php';
    include './Model/query-products.php';

    $database = new Database();
    $db = $database->connect();
    
    $product = new Product($db);

    $productGet = $product->prodRead();
?>
<!-- Header and Navbar -->

        <!-- Welcome -->
            <div class="welcome-grid">

                <p class="welcome-text">
                    Welcome to Fortisure Food Front! For over fifty years, <br>
                    Fortisure Food Front has been delivering quality goods <br>
                    to the midwest area. On this site, you can place online <br>
                    orders, sign up for our rewards program, and view <br>
                    information about each of our stores.
                </p>

                <img src="./View/Public/Images/store.jpg" class="welcome-image" >

            </div>


        <!-- Welcome -->

        <!-- Products -->
            <div class="trending-container-grid">
             <h1> Best Sellers: </h1>
             
             
             <?php 

                $colNum = 1;

                    while ($row = $productGet->fetch(PDO::FETCH_ASSOC)) {
                        // variables
                        $prodID = $row['ProductID'];
                        $prodType = $row['ProductType'];
                        $prodName = $row['ProductName'];
                        $prodDesc = $row['ProductDescription'];
                        $prodPrice = $row['UnitPrice'];     
                        $prodImage = $row['ProductImage'];                    
                        // variables

                        makeProductCard($prodID, $prodType, $prodName,  $prodDesc,  $prodPrice, $prodImage, $colNum);
                        $colNum++;
                    }
            ?>
            

                <div class="deal-card">
                    <p class="deal-header"> Deal of the Week</p>
                    <img src="./View/Public/Images/ground-beef.jpeg">
                    <p class="deal-details">Enjoy a 15% discount off of all Ground Beef.</p>
                </div>

            </div>
        <!-- Products -->



<!-- Footer -->
<?php
    include './View/footer.php';
?>
<!-- Footer -->

    </div>
</body>
    
</html>