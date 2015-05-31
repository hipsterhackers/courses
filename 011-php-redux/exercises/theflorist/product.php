<?php require("shared/header.php") ?>
<?php $product = find_product(products(), $_GET["id"]) ?>

<div class="container product">
  <h2><?php echo $product->name ?></h2>

  <div class="row">
    <div class="col-md-4">
    <img src="images/products/<?php echo $product->image ?>" class="img-rounded">
    </div>

    <div class="col-md-8">
      <h3>Product Description</h3>
      <p><?php echo $product->description ?></p>
      <p class="categories">
        Categories: 
        <?php foreach ($product->categories as $category) { ?>
          <?php echo $category ?>
        <?php } ?>
      </p>
      <a href="cart.php?id=<?php echo $product->id ?>" class="btn btn-primary">Add to Cart</a>
    </div>
  </div>
</div>

<?php require("shared/footer.php") ?>
