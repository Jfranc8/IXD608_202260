
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jessica's Store Front</title>

	<link rel="stylesheet" type="text/css" href="lib/css/styleguide.css">
	<link rel="stylesheet" type="text/css" href="css/storetheme.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins:wght@200&family=Roboto:ital@1&display=swap" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script></head>

<body>
	
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
					<li> <a href="product_list_search.php">Search</a> </li>
					<li><a href="about.php">About</a></li>
					<li><a href="product_cart.php">
						<span>Cart</span>
						<span class="badge"></span>
					</a></li>
				</ul>
			</nav>
		</nav>
		</div>
	</header>

	<!-- .container>article#article$.article*4>h2{Article $}+div.article-body>p*3>lorem40 --> 
	<section class="Jessica-web-title">
		<div class="title ">
			<h1>WELCOME</h1>
			<h3>Jessica's Indoor Houseplants</h3>
		</div>
	</section>
	<div class="view-window" style="background-image: url(img/plant.jpg);">
		<h2>INDOOR HOUSEPLANTS</h2>
	</div>
	<div class="container">
		<article id="article1" class="article card soft">
			<div class="article-body">
				<p>
					If you are looking for indoor houseplants, we have a grown collection that provides the perfect plant for anyone and everyone. Check out our wide selection of indoor plants and make your next occassion memorable.<p>

					<p>Shop now and get the plants delivered that you want for your home. We got them all!<p>


				</p>
			</div>
		</article>
	<div class="view-window" style="background-image: url(img/background.jpg);" width="100%">
		<h2>DESIGNED FOR YOUR HOME</h2>
	</div>

	<div class="container">
		<article id="article1" class="article card soft">
			<div class="article-body">
				<p>
					The perfect plant for your own living space. 
				</p>
			</div>
		</article>
	</div>
	<div class="container">
<h2>Latest Plants</h2>
<div class="grid gap productlist"><a class="col-xs-12 col-md-4" href="product_item.php?id=3">
    <figure class="figure product display-flex flex-column">
        <div class="flex-stretch">
             <img src="img/1.jpg" alt="">
        </div>
        <figcaption class="flex-none">
            <div>Monstera Deliciosa</div>
            <div>&dollar;60.97</div>
        </figcaption>
    </figure>
</a><a class="col-xs-12 col-md-4" href="product_item.php?id=2">
    <figure class="figure product display-flex flex-column">
        <div class="flex-stretch">
             <img src="img/2.jpg" alt="">
        </div>
        <figcaption class="flex-none">
            <div>Little Yellow Fiddle</div>
            <div>&dollar;55.98</div>
        </figcaption>
    </figure>
</a><a class="col-xs-12 col-md-4" href="product_item.php?id=1">
    <figure class="figure product display-flex flex-column">
        <div class="flex-stretch">
             <img src="img/3.jpg" alt="">
        </div>
        <figcaption class="flex-none">
            <div>Stromanthe Triostar</div>
            <div>&dollar;45.71</div>
        </figcaption>
    </figure>
</a></div> <h2>Best-Selling Favorites</h2>
<div class="grid gap productlist"><a class="col-xs-12 col-md-4" href="product_item.php?id=11">
    <figure class="figure product display-flex flex-column">
        <div class="flex-stretch">
             <img src="img/4.jpg" alt="">
        </div>
        <figcaption class="flex-none">
            <div>Zz Green Plant</div>
            <div>&dollar;69.32</div>
        </figcaption>
    </figure>
</a><a class="col-xs-12 col-md-4" href="product_item.php?id=12">
    <figure class="figure product display-flex flex-column">
        <div class="flex-stretch">
             <img src="img/5.jpg" alt="">
        </div>
        <figcaption class="flex-none">
            <div>Calathea Orbifolia</div>
            <div>&dollar;84.65</div>
        </figcaption>
    </figure>
</a><a class="col-xs-12 col-md-4" href="product_item.php?id=10">
    <figure class="figure product display-flex flex-column">
        <div class="flex-stretch">
             <img src="img/6.jpg" alt="">
        </div>
        <figcaption class="flex-none">
            <div>Bromeliad Pineapple</div>
            <div>&dollar;38.57</div>
        </figcaption>
    </figure>
</a></div> </div>

</body>
</html>
