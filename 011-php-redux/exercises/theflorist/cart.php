<?php

session_start();

if ($_SESSION["cart"] == null) {
  $_SESSION["cart"] = array();
}

if ($_GET["action"] == "empty") {
  $_SESSION["cart"] = array();
  header("Location: /cart.php");
  exit();
}

if ($_GET["id"]) {
  $_SESSION["cart"][] = $_GET["id"];
  header("Location: /product.php?id={$_GET["id"]}");
  exit();
}

?>

<?php require("shared/header.php") ?>

<div class="container product">
  <h2>Your Cart</h2>
  <ul>
    <?php foreach ($_SESSION["cart"] as $id) { ?>
      <?php $product = find_product(products(), $id) ?>
      <li><?php echo $product->name ?></li>
    <?php } ?>
  </ul>

  <a href="cart.php?action=empty" class="btn btn-danger">Empty Cart</a>
</div>

<?php require("shared/footer.php") ?>
