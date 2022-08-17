<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins:wght@200&family=Roboto:ital@1&display=swap" rel="stylesheet">

    <?php include "parts/meta.php"; ?>

    <script src="lib/js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/product_list.js"></script>
</head>
<body>

    <?php include "parts/navbar.php"; ?>

    <div class="container">
        <h2>Product List</h2>

        <div class="form-control">
            <form class="hotdog light" id="product_search">
                <input type="search" placeholder="Search Products">
            </form>
        </div>
        <div class="form-control">
            <div class="card soft">
            <div class="display-flex flex-wrap">
                <div class="flex-stretch display-flex">
                    <div class="flex-none">
                        <button data-filter="style" data-value="all" type="button" class="form-button">All</button>
                    </div>
                    <div class="flex-none">
                        <button data-filter="style" data-value="trailing plants" type="button" class="form-button"></button>
                    </div>
                    <div class="flex-none">
                        <button data-filter="style" data-value="pet friendly" type="button" class="form-button">Pet Friendly</button>
                    </div>
                    <div class="flex-none">
                        <button data-filter="style" data-value="tropical plants" type="button" class="form-button">Tropical Plants</button>
                    </div>
                    <div class="flex-none">
                        <button data-filter="style" data-value="new arrivals" type="button" class="form-button">New Arrivals</button>
                    </div>
                </div>
                <div class="flex-none">
                    <div class="form-select">
                        <select class="js-sort">
                            <option value="1">Newest</option>
                            <option value="2">Oldest</option>
                            <option value="3">Least Expensive</option>
                            <option value="4">Most Expensive</option>
                        </select>
                    </div>
                </div>
            </div>
            </div>
        </div>


        <div class='productlist grid gap'></div>
    </div>
    
</body>
</html>