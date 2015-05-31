<?php

function products() {
  return json_decode(file_get_contents("shared/products.json"));
}

function find_product($products, $id) {
  foreach ($products as $product) {
    if ($product->id == $id) {
      return $product;
    }
  }
}

function featured_products($products) {
  $featured = array();
  foreach ($products as $product) {
    if ($product->featured) {
      array_push($featured, $product);
    }
  }
  return $featured;
}

?>
