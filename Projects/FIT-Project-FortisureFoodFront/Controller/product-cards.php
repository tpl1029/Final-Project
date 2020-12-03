<?php

    //loop to print each coupon in array
function makeProductCard($prodID, $prodType, $prodName,  $prodDesc,  $prodPrice, $prodImage, $colNum)
    {
        echo "
        <!-- Internal Style -->
        <style> .product-card-price{             
            grid-row: 3;            
            color: green;  
            }
        </style>
    <!-- Internal Style -->
    
    <div class='product-card-grid' 
    style='grid-column: {$colNum}; grid-row: 2;'>
        <img src='./View/Public/Images/{$prodImage}.jpg'>
        <p class = 'product-card-desc'>{$prodName}</p>
        <p class = 'product-card-price'>Price: \${$prodPrice}</p>
        </button>
    </div>
";
    }
    
?>