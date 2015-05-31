<?php require("shared/header.php") ?>

<div class="jumbotron text-center">
  <div class="container">
    <h1>20% off on every item</h1>
    <p>Florem ipsum columbine speedwell waratah monkshood floss flower. Snapdragon orchid alpine thistle saxifrage. Love lies bleeding prairie gentian kangaroo paw ox-eye daisy. Feverfew amazon lily masterwort eustoma montbretia floris's nighmare red rose. Safflower golden rod, gillyflower sword lily, buttercup.</p>
  </div>
</div>

<div class="container product-list text-center">
  <h2>Featured Products</h2>

  <div class="row">
    <?php foreach(featured_products(products()) as $product) { ?>
      <div class="col-md-4">
        <div class="product-thumb">
          <img src="images/products/<?php echo $product->image ?>" class="img-rounded">
          <a href="product.php?id=<?php echo $product->id ?>" class="view-product-button">View Product</a>
        </div>
        <p class="name"><?php echo $product->name ?></p>
        <p class="price"><?php echo $product->price ?></p>
        <a href="" data-product-id="<?php echo $product->id ?>" class="quick-view-product">Quick View</a>
      </div>

      <div class="modal fade product-modal" data-product-id="<?php echo $product->id ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><?php echo $product->name ?></h4>
            </div>
            <div class="modal-body">
              <img src="images/products/<?php echo $product->image ?>" class="img-rounded product-thumb">
              <p><?php echo $product->description ?></p>
            </div>
            <div class="modal-footer">
              <a href="product.php?id=<?php echo $product->id ?>" class="btn btn-primary">View Product</a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<?php require("shared/footer.php") ?>
