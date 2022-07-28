<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Item</title>

	
<meta name="viewport" content="width=device-width">

<base href="http://jessicafranco.co/aau/wnm608/franco.jessica/">

<link rel="stylesheet" href="./lib/css/styleguide.css">
<link rel="stylesheet" href="./lib/css/gridsystem.css">
<link rel="stylesheet" href="./css/storetheme.css">

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js/product_thumbs.js"></script>
</head>
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
				<li><a href="about.php">About</a></li>
				<li><a href="product_cart.php">
					<span>Cart</span>
	    			<span class="badge">(1)</span>
	    		</a></li>
			</ul>
		</nav>
	</div>
</header>
<div class="container">
	<div class="grid gap">
		<div class=".col-xs-12 col-md-7">
			<div class="card soft">
				<div class="images-main">
				    <img src="img/1.jpg" alt="">
			    </div>
				<div class="images-thumbs">
					<img src='img/9.jpg'><img src='img/2.jpg'><img src='img/7.jpg'>				</div>
	        </div>
	    </div>

		
	    <div class="col-xs-12 col-md-5">
	    	<form class="card soft flat" method="post" action="cart_actions.php?action=add-to-cart">

				<input type="hidden" name="product-id" value="2">

	    		<div class="card-section">
	    		    <h2 class="product-title">plant1</h2>
	    		     <div class="product-price">&dollar;55.00</div>
	    	    </div>


				<div class="card-section">
	    	    	<div>
	    	    	    <label for="product-amount" class="form-label">Amount</label>
	    	    	    <div class="form-select">
	    	              <select id="product-amount" name="product-amount">
	    	                <option>1</option>
	    	                <option>2</option>  
	    	                <option>3</option>  
	    	                <option>4</option>
	    	                <option>5</option>
	    	                <option>6</option>
	    	                <option>7</option>
	    	                <option>8</option>
	    	                <option>9</option>
	    	                <option>10</option>
	    	              </select>
	    	            </div>
	    	        </div> 

		    	    <div class="form-control">
		    	        <label for="product-color" class="form-label">Color</label>
		    	        <div class="form-select">
		    	    	    <select id="product-color" name="product-color">
		    	    		    <option>Yellow</option>
		    	                <option>Pink</option>
		    	            </select>
		    	        </div>
		    	    </div>
	    	    </div>
	    	    
	    	    <div class="card-section">
	    			<input type="submit" class="form-button" value="Add To Cart">
	    		</div>
			</form>
		</div>
	</div>
	<div class="card soft light">
		<p>A fascinating tropical plant.</p>
	</div>

</div>
	

	
	
</body>
</html>