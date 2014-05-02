<?php
include('includes/products.php');
?>


<?php
$pageTitle = "Shirts";
$section = "shirts";
include('includes/header.php'); ?>

  <div class="section shirts page">
    <div class="wrapper">
        <h1> Ola&rsquo;s Full Catalog Of Shirts </h1>

        <ul class="products">

            <?php foreach ($products as $product_id => $product) {

                echo productListView($product, $product_id);

         } ?>
        </ul>
    </div>
  </div>

<?php include('includes/footer.php'); ?>
