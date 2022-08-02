<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cart Page</title>
	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="css/storetheme.css">

	<?php include "parts/meta.php"; ?>
</head>
@@ -28,14 +26,14 @@
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?= array_reduce($cart_items,'cartListTemplate') ?>
					<?= array_reduce(getCartItems(),'cartListTemplate') ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
            	<div class="card soft flat">
            	<?= cartTotals() ?>
            	</div>
            </div>
	        	<div class="card soft flat">
	        		<?= cartTotals() ?>
	        	</div>
	        </div>
		</div>
	</div>
	        </div>
		</div>
	</div>
	
</body>
</html>
