<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>Checkout</title>
    <link rel="stylesheet" type="text/css" href="shoppingcart.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8"/>
  </head>
  
  <body>
    <div class="header">
      <h1>Checkout</h1>
    </div>
    <div class="box">
      <form method="POST" action="confirmation.php">
        <input type="text" id="street" name="street" placeholder="Street">
        <input type="text" id="apartment" name="apartment" placeholder="APT #"><br>
        <input type="text" id="city" name="city" placeholder="City, State">
        <input type="text" id="zip" name="zip" placeholder="Zip Code"><br>
        <input type="submit" name="submit" value="Submit Shipping Address"><br>
        <a class="button" href="cart.php">Back to Cart</a>
      </form>
    </div>
  </body>
</html>