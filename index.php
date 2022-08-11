<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jessica's Indoor Houseplants</title>

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" type="text/css" href="lib/css/styleguide.css">
	<link rel="stylesheet" type="text/css" href="lib/css/gridsystem.css">
	<link rel="stylesheet" type="text/css" href="css/storetheme.css">
</head>
<body class="flush">
	
	<!-- header>h1+p -->
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none font">
				<h1>Jessica's Indoor Houseplants</h1>
			</div>
		<div class="flex-stretch"></div>
			<nav class="flex-none nav">
				<ul class="container display-flex">
					<li><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Shop</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="product_cart.php">Cart</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<section class="jessica's indoor houseplants-web-title">
		<div class="title ">
			<h3>WELCOME</h3>
			<h1>Jessica's Indoor Houseplants</h1>
		</div>
	</section>
	<div class="view-window" style="background-image: url(img/plants.jpg);">
		<h2>Plants</h2>
	</div>
	<div class="container">
		<article id="article1" class="article card soft">
			<div class="article-body">
				<p>
					If you are looking for indoor houseplants, we have a grown collection that provides the perfect plant for anyone and everyone. Check out our wide selection of indoor plants and make your next occassion memorable.

				</p>
			</div>
		</article>
	<div class="view-window" style="background-image: url(img/background.jpg);" width="100%">
		<h2>DESIGNED  FOR YOUR HOME</h2>
	</div>

	<div class="container">
		<article id="article1" class="article card soft">
			<div class="article-body">
				<p>
					The perfect plant for your own living space. 
			</div>
		</article>
	</div>
	<div class="container">
		<h2>Latest Abstract</h2>
		<?php recommendedCategory("abstract"); ?>
		<h2>Latest Digital</h2>
		<?php recommendedCategory("digital"); ?>
	</div>

</body>
</html>
