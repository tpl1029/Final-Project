
             <!-- <div class="product-card-one-grid">
                <img src="./View/Public/Images/milk.jpeg">                   
                <p class="card-text">Whole Milk</p>
                <p class="card-price">See Price</p>
            </div>

               <div class="product-card-two-grid">
                <img src="./View/Public/Images/bread.jpg">                   
                <p class="card-text">Italian Bread</p>
                <p class="card-price">See Price</p>
               </div>

               <div class="product-card-three-grid">
                <img src="./View/Public/Images/carrots.jpg">                   
                <p class="card-text">Bag of Carrots</p>
                <p class="card-price">See Price</p> -->
               

            <!-- <div class="deal-card">
               <p class="deal-text"> Deal of the Week</p>
               <img src="./View/Public/Images/ground-beef.jpeg">
               <p class="deal-text">Enjoy a 15% discount off of all Ground Beef.</p>

            </div> -->
            <?php 
                    //creating array for the coupon loop
                    // $bestSellers = array (

                    //     array("milk", "Whole Milk", "See Price"),

                    //     array("bread", "Italian Bread", "See Price"),

                    //     array("carrots", "Bag of Carrots", "See Price")                       
                    // );

                    // include './Controller/product-cards.php';          
                // ?>

            

    <!-- //setting the column variable as the first column is 2
    $colNum = 1;

    //loop to print each coupon in array
    for($index = 0; $index < count($bestSellers); $index++)
    {

        echo "
                Internal Style
                <style> .product-card-price{             
                    grid-row: 3;
                    margin-left: 55px;
                    color: green;  
                    }
                </style>
            Internal Style
            
            <div class='product-card-grid' 
            style='grid-column: {$colNum}; grid-row: 2;'>
                <img src='./View/Public/Images/{$bestSellers[$index][0]}.jpg'>
                <p class = 'product-card-desc'>{$bestSellers[$index][1]}</p>
                <p class = 'product-card-price'>{$bestSellers[$index][2]}</p>
                </button>
            </div>
        ";
        // increment column num
        $colNum++;
    }
 -->


            .sellers-grid {
            grid-column: 1;
            grid-row: 4;
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: auto auto auto auto;
        }


        .sellers-text {
            grid-column: 1;
            grid-row: 1;
            
        }
        /* Product Cards */
            .product-card-one-grid,
            .product-card-two-grid,
            .product-card-three-grid {
                grid-row: 1;
                display: grid;
                grid-template-columns: 1fr;
                grid-template-rows: 164px 20px 20px ;
                width: 200px;
                height: 220px;
                box-shadow: 5px 4px 10px 0px rgba(0,0,0,0,45);
                background-color: white;
                margin-top: 150px;
                margin-bottom: 10px;
                margin-left: 5px;
                border: 1px solid black;
            }

            .card-text {
                text-align: center;
                padding-top: 5px;
            }

            .product-card-one-grid >img,
            .product-card-two-grid >img,
            .product-card-three-grid >img {
                height: 75px;
                margin: auto;
                margin-top: 25px;
            }

            .product-card-one-grid{
                grid-column: 1;
                grid-row: 1;
            }

            .product-card-two-grid{
                grid-column: 2;
                grid-row: 1;
            }

            .product-card-three-grid{
                grid-column: 3;
                grid-row: 1;
            }
        /* Product Cards */
        
        /* Deal Card */
            .deal-card {
                grid-row: 1;
                grid-column: 4;
                display: grid;
                grid-template-columns: 1fr;
                grid-template-rows:  20px 164px 20px ;
                width: 400px;
                height: 250px;
                box-shadow: 5px 4px 10px 0px rgba(0,0,0,0,45);
                background-color: white;    
                margin-top: 25px;
                margin-bottom: 10px;
                margin-right: 200px;
                border: 1px solid black;
            }

            .deal-card >img {
                height: 175px;
                width: 200px;
                padding-top: 15px;
                margin-left: 100px;
            }

            .deal-text {
                text-align: center;
                padding-top: 15px;
                font-weight: bold;
            }