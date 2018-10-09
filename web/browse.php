<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>Shopping</title>
    <link rel="stylesheet" type="text/css" href="shoppingcart.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8"/>
  </head>
  
  <body>
    <div class="header">
      <h1>Games for Purchase</h1>
    </div>
    <div class="box">
      <form method="POST" action="test.php">
        <input type="checkbox" name="selections[]" value="SMO">Super Mario Odyssey<br>
        <input type="checkbox" name="selections[]" value="BOTW">The Legend of Zelda: Breath of the Wild<br>
        <input type="checkbox" name="selections[]" value="HIT">A Hat in Time<br>
        <input type="checkbox" name="selections[]" value="SK">Shovel Knight<br>
        <input type="submit" name="submit" value="Add Selected Items to Cart"><br><br>
        <a class="button" href="cart.php">View Cart</a>
      </form>
    </div>
  </body>
</html>