<?php

function productListView($product, $product_id) {
    $output = "<li>";
    $output = $output . '<a href="shirt.php?id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . "<p>View details.</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";

    return $output;
}

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
