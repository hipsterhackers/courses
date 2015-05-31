<?php session_start() ?>
<?php require("database.php") ?>

<!DOCTYPE html>
<html>
  <head>
    <title>The Florist</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheets/styles.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-default navbar-custom">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">The Florist</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li id="cart-count"><a href="cart.php">Items in Your Cart <span><?php echo count($_SESSION["cart"]) ?></span></a></li>
          </ul>
        </div>
      </div>
    </nav>

