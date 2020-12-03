   <?php
   
    include './View/header.php';
    include './View/navbar.php';
     
   
   ?>


        <!-- Informational Section - Internal styles -->
            <div class='our-info-grid'>
                <!-- Left Text -->
                    <div class="info-text-left">
                        <p>Reasons to Choose FortisureMart:</p>

                        <!-- Un-ordered List -->
                            <ul>
                                <li>
                                    Provides quality goods at affordable prices
                                </li>
                                <li>
                                    We internally train our employees so they are the highest quality
                                </li>
                                <li>
                                    We use the latest technologies to surpass the competition
                                </li>
                            </ul>
                        <!-- Un-ordered List -->
                    </div>
                <!-- Left Text -->
                
                <!-- Right Text -->
                    <div class="info-text-right">
                        <h4>Mission Statement:</h4>
                        <p>To build a nationally respected marketplace that utilizes the latest technologies to add great value to our customers</p>
                    </div>
                <!-- Right Text -->
            </div>
        <!-- Informational Section -->

        <!-- Trending Section - External Styles -->
            <div class='trending-container-grid'>
                <h2>Trending Products</h2>

                <?php 
                    //creating array for the coupon loop
                    $productInfo = array (

                        array("Shoes", "shoes-white", "The best shoes around", 64.99),

                        array("Shirt", "t-shirt-black", "A nice fitting shirt", 14.99),

                        array("Jeans", "jeans-black", "Water Resistant Pant For Every Occassion", 19.99)

                    );

                    include './Controller/product-cards.php';               
                
                
                
                
                ?>







            </div>
        <!-- Trending Section -->

<?php
   
       include './View/footer.php';
       include './Controller/form-submit.php'       
  
?>



<!-- Product Card Code -->

<?php

    //setting the column variable as the first column is 2
    $colNum = 2;

    //loop to print each coupon in array
    for($index = 0; $index < count($productInfo); $index++)
    {

        echo "
            <div class='product-card-grid' 
            style='grid-column: {$colNum}; grid-row: 1;'>
                <p class = 'product-header-text'>
                
                <span> Fortisure</span>
                <span>{$productInfo[$index][0]}</span>

                </p>
                <img src='./View/Public/Images/Products/{$productInfo[$index][1]}.jpg'>
                <p class = 'product-card-desc'>{$productInfo[$index][2]}</p>
                <button class='btn-add-to-cart btn btn-success'>
                Add to Cart | <span>\${$productInfo[$index][3]}</span>
                </button>
            </div>
        ";
        // increment column num
        $colNum++;
    }



?>

<?php

//check that post items are set
if(isset($_POST['cusName']))

{

    //display alert to thank customer
    echo "
    
        <script>
        
          alert('Thank you {$_POST['cusName']} for submitting your message.' +
                'We will review it shortly!');

        </script>   

        ";


        //database interaction


        //finally we clear out data in post
        unset($_POST['cusName']);
        unset($_POST['cusEmail']);
        unset($_POST['cusMessage']);

} 



?>