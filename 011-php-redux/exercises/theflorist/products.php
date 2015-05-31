<?php require("shared/header.php") ?>

<div class="container product-list text-center">
  <h2>Our Products</h2>

  <div class="row">
    <?php foreach(products() as $product) { ?>
      <div class="col-md-4">
        <a href="product.php?id=<?php echo $product->id ?>">
          <img src="images/products/<?php echo $product->image ?>" class="img-rounded">
          <p class="name"><?php echo $product->name ?></p>
          <p class="price"><?php echo $product->price ?></p>
        </a>
      </div>
    <?php } ?>
  </div>
</div>

<?php require("shared/footer.php") ?>
