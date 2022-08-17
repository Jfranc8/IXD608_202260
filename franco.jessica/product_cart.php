sc<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = getCart();

// $cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN(4,7,5)");

// $cart_items = getCartItems();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins:wght@200&family=Roboto:ital@1&display=swap" rel="stylesheet">

    <?php include "parts/meta.php"; ?>
</head>
<body>

    <?php include "parts/navbar.php"; ?>

    <div class="container">
        <h2>In Your Cart</h2>
        <?php 

        if(count($cart)) {
            ?>
            <div class="grid gap">
                <div class="col-xs-12 col-md-7">
                    <div class="card soft">
                        <?= array_reduce(getCartItems(),'cartListTemplate') ?>
                    </div>
                </div>
                <div class="col-xs-12 col-md-5">
                    <div class="card soft flat">
                        <?= cartTotals() ?>
                    </div>
                </div>
            </div>
            <?php
        }else{
            ?>
            <div class="card soft">
                <p>No items in cart</p>
            </div>

            <h3>Other Recommendations</h3>
            <?php recommendedAnything(6); ?>
        
            <?php 
             
        }
        ?>
    </div>
    
</body>
</html>