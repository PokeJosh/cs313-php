<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>View Cart</title>
    <link rel="stylesheet" type="text/css" href="shoppingcart.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8"/>
  </head>
  <body>
    <div class="box">
      <?php
      $games = $_SESSION['games'];
//      $game0 = $games[0];
//      $game1 = $games[1];
//      $game2 = $games[2];
//      $game3 = $games[3];
//      
//      if(!empty(game0))
//      {
//        echo $game0 . "<br>";
//      }
//      if(!empty(game1))
//      {
//        echo $game1 . "<br>";
//      }
//      if(!empty(game2))
//      {
//        echo $game2 . "<br>";
//      }
//      if(!empty(game3))
//      {
//        echo $game3 . "<br>";
//      }
      $possibleGames =
      array(
        "SMO"=>"Super Mario Odyssey",
        "BOTW"=>"The Legend of Zelda: Breath of the Wild",
        "HIT"=>"A Hat in Time",
        "SK"=>"Shovel Knight",
      );
      
      echo "<b>Selected Games:</b><br>";
      

      if(empty($games) )
        {
            echo "You did not select any games for purchase.<br>";
        }

        foreach($games as $selected) {
            echo $possibleGames[$selected] . "<br>";
        }
      ?>
      <br>
      <a class="button" href="browse.php">Return to Shopping</a>
      <a class="button" href="checkout.php">Continue to Checkout</a>
      
    </div>
  </body>
</html>