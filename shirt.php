<?php
include('includes/products.php');

if (isset($_GET)) {
  $product_id = $_GET["id"];
  if (isset($products[$product_id])) {
   $product = $products[$product_id];
  }
}

if (!isset($product)) {
    header("Location: shirts.php");
}

$section = "shirts";
$pageTitle = $product["name"];

include('includes/header.php'); ?>

  <div class="section page">
    <div class="wrapper">
      <div class="breadcrumb"><a href="shirts.php">Shirts</a> &gt <?php echo $product["name"]; ?> </div>
      <div class="shirt-picture">
        <span>
          <img src=" <?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
        </span>
      </div>

      <div class="shirt-details">

        <h1><span class="price"><?php echo $product["price"]; ?>$</span></h1> <?php echo $product["name"] ?>

      </div>
    </div>
  </div>

<?php include('includes/footer.php'); ?>
