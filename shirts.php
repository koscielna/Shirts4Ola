<?php

$products = array();

$products[106] = array(
  "name" => "Logo Shirt, Red",
  "price" => 20,
  "img" => "img/shirts/shirt-106.jpg"
);

$products[107] = array(
  "name" => "Mike the Frog Shirt, Black",
  "price" => 20,
  "img" => "img/shirts/shirt-107.jpg"
);

$products[108] = array(
  "name" => "Mike the Frog Shirt, Blue",
  "price" => 20,
  "img" => "img/shirts/shirt-108.jpg"
);

$products[101] = array(
  "name" => "Logo Shirt, Red",
  "price" => 20,
  "img" => "img/shirts/shirt-101.jpg"
);

$products[102] = array(
  "name" => "Mike the Frog Shirt, Black",
  "price" => 20,
  "img" => "img/shirts/shirt-102.jpg"
);

$products[103] = array(
  "name" => "Mike the Frog Shirt, Blue",
  "price" => 20,
  "img" => "img/shirts/shirt-103.jpg"
);


?>
<?php
$pageTitle = "Shirts";
$section = "shirts";
include('includes/header.php'); ?>

  <div class="section shirts page">
    <div class="wrapper">
        <h1> Ola&rsquo;s Full Catalog Of Shirts </h1>

        <ul class="products">

            <?php foreach ($products as $product) {

                echo "<li>";
                echo '<a href="#">';
                echo '<img src="' . $product["img"] . '", alt="' . $product["name"] . '">';
                echo "<p>View details.</p>";
                echo "</a>";
                echo "</li>";

         } ?>
        </ul>
    </div>
  </div>

<?php include('includes/footer.php'); ?>
