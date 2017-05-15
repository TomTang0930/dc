<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>All Products</title>

</head>
<body>
	<div class="container">
		<h2>Find all your product here!</h2>

		<?php foreach ($products as $product_item): ?>
		<div class="product_item">
			<h3 class="product_name">
				<?php echo $product_item['product_name'] ?>
			</h3>
			<div class="product_detail">
				<?php echo $product_item['product_detail'] ?>
			</div>
		</div>

		<?php endforeach ?>





	</div><!-- end .contaienr -->

</body>
</html>