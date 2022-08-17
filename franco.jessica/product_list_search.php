<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	
	<meta name="viewport" content="width=device-width">

	<base href="http://jessicafranco.co/aau/wnm608/franco.jessica/">

	
	<link rel="stylesheet" type="text/css" href="lib/css/styleguide.css">
	<link rel="stylesheet" type="text/css" href="lib/css/gridsystem.css">
	<link rel="stylesheet" type="text/css" href="css/storetheme.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins:wght@200&family=Roboto:ital@1&display=swap" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>	
	<script src="lib/js/functions.js"></script>
	
	<script>
	query({type:'products_all'});
	</script>

</head>
<body>	
	
    

<header class="navbar">
		<div class= "container display-flex">
			<div class= "flex-none">		
				<h1>Jessica's Indoor Houseplants</h1>
			</div>


			<div class= "flex-stretch"></div>	
			<nav class= "flex-none nav">

			
				<ul class="container display-flex">
					<li> <a href="index.php">Home</a> </li>
					<li> <a href="product_list.php">Shop</a> </li>
					<li> <a href="product_list_search.php">Search</a> </li>
					<li> <a href="about.php">About</a> </li>
					<li> <a href="product_cart.php">
					<span>Cart</span>
					<span class="badge"></span>
					</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="container">
		
			<h2>Product List</h2>
		
		
			<div class="form-control">
				<form class="hotdog light" id="product-search">
				<input type="search" placeholder="Search Products">
			</form>
		</div>
		
		
		<div class="form-control">
			<div class="card soft">
		<div class= "display-flex">
			
			<div class = "flex-stretch display-flex">
				 
			 <div class = "flex-none">
				<button data-filter= "category" data-value="" type="button" class="form-button">All</button>
			</div>
		
			 <div class = "flex-none">
				<button data-filter= "category" data-value="frame" type="button" class="form-button">Plants</button>
			</div>
		
			 <div class = "flex-none">
				<button data-filter= "category" data-value="vase" type="button" class="form-button">Pet Friendly</button>
				 
				 </div>
				</div>
	
					<div class = "flex-none">
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