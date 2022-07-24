


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cart Page</title>

	
<meta name="viewport" conttent="width=device-width">

<base href="http://jessicafranco.co/aau/wnm608/franco.jessica/">

<link rel="stylesheet" href="./lib/css/styleguide.css">
<link rel="stylesheet" href="./lib/css/gridsystem.css">
<link rel="stylesheet" href="./css/storetheme.css">

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script></head>
<body>

	<header class="navbar">
	<div class="container display-flex">
 		<div class="flex-none">
			<h1>Jessica's Indoor Houseplants</h1>
		</div>
		<div class="flex-stretch"></div>
		<nav class="nav nav-flex flex-none">
			<ul>
				<!-- li*3>a[href=#]>{Link $} -->
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="product_list.php">Shop</a></li>
				<li><a href="product_cart.php">Cart</a></li>
			</ul>
		</nav>
	</div>
</header>
	<div class="container">
		<h2>In Your Cart</h2>
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="display-flex">
    <div class="flex-none images-thumbs">
        <img src="img/1.jpg">
    </div>
    <div class="flex-stretch">
        <strong>Monstera Deliciosa</strong>
        <div>Delete</div>
    </div>
    <div class="flex-none">
         &dollar;60.00
    </div>
</div><div class="display-flex">
    <div class="flex-none images-thumbs">
        <img src="img/2.jpg">
    </div>
    <div class="flex-stretch">
        <strong>Little Yellow Fiddle</strong>
        <div>Delete</div>
    </div>
    <div class="flex-none">
         &dollar;55.00
    </div>
</div><div class="display-flex">
    <div class="flex-none images-thumbs">
        <img src="img/4.jpg">
    </div>
    <div class="flex-stretch">
        <strong>ZZ Green Plant</strong>
        <div>Delete</div>
    </div>
    <div class="flex-none">
         &dollar;69.00
    </div>
</div>				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
            		<div class="card-section display-flex">
            			<div class="flex-stretch"><strong>Sub Total</strong></div>
            			<div class="flex-none">&dollar;184.00</div>
            		</div>
            		<div class="card-section display-flex">
            			<div class="flex-stretch"><strong>Taxes</strong></div>
            			<div class="flex-none">&dollar;184.00</div>
            		</div>
            		<div class="card-section display-flex">
            			<div class="flex-stretch"><strong>Total</strong></div>
            			<div class="flex-none">&dollar;184.00</div>
            		</div>
            		<div class="card-section">
            			<a href="product_checkout.php"class="form-button">Checkout</a>
            		</div>
    
            	</div>
			</div>
		</div>
	</div>
	
</body>
</html>
