<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Confirmation Page</title>
	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="css/storetheme.css">

	
<meta name="viewport" content="width=device-width">

<base href="http://jessicafranco.co/aau/wnm608/franco.jessica/">

<link rel="stylesheet" href="./lib/css/styleguide.css">
<link rel="stylesheet" href="./lib/css/gridsystem.css">
<link rel="stylesheet" href="./css/storetheme.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins:wght@200&family=Roboto:ital@1&display=swap" rel="stylesheet">

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
				<li><a href="product_list.php">Shop</a></li>
				<li> <a href="product_list_search.php">Search</a> </li>
				<li><a href="about.php">About</a></li>
				<li><a href="product_cart.php">
					<span>Cart</span>
	    			<span class="badge">(2)</span>
	    		</a></li>
			</ul>
		</nav>
	</div>
</header>
	
	<div class="container">
		<article id="article1" class="article card soft">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
		      		<h2>You added plant1 to your cart</h2>
		      		<p>There are now 2 plants1 in your cart.</p>

                    <div class="display-flex">
                    	<div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
                    	<div class="flex-stretch"></div>
                    	<div class="flex-none"><a href="product_cart.php">Go To Cart</a></div>
		      		</div>
		    	</div>
			</div>
		</article>
	</div>
	
</body>
</html>