$(document).ready(function() {
  $(".product-thumb").hover(
    function() {
      $(this).find("a.view-product-button").show();
    },
    function() {
      $(this).find("a.view-product-button").hide();
    }
  );

  $(".quick-view-product").on("click", function() {
    $("#product-modal").modal("toggle");
  });


  var cartCount = 0;
  $("#add-to-cart").on("click", function() {
    cartCount += 1;
    $("#cart-count span").html(cartCount);
  });
});
