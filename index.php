<?php
$pageTitle = "Home Page";
include('includes/header.php');
include('includes/products.php'); ?>

		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="img/mike-the-frog.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="#">
						<h2>Hey, I&rsquo;m Mike!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Mike&rsquo;s Latest Shirts</h2>

				<ul class="products">
						<?php

							$pos = 0;

							foreach ($products as $product_id => $product) {
								if ($pos > (count($products) - 5)) {
									echo productListView($product, $product_id);
								}

								$pos = $pos + 1;
						} ?>
				</ul>

			</div>

		</div>
		<?php include('includes/footer.php'); ?>
