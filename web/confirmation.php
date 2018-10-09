<?php
session_start();

$street = "";
if (!empty($POST_['apartment']))
{
  $street = $_POST['street'] . " #" . $_POST['apartment'] . " ";
}
else
{
  $street = $_POST['street'] . " "; 
}

$address = $street . $_POST['city'] . ", " . $_POST['zip'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>Confirmation</title>
    <link rel="stylesheet" type="text/css" href="shoppingcart.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8"/>
  </head>
  
  <body>
    <div class="header">
      <h1>Purchase Confirmation</h1>
    </div>
    <div class="box">
    <?php
    $games = $_SESSION['games'];
          $possibleGames =
          array(
            "SMO"=>"Super Mario Odyssey",
            "BOTW"=>"The Legend of Zelda: Breath of the Wild",
            "HIT"=>"A Hat in Time",
            "SK"=>"Shovel Knight",
          );

          echo "<h1>Selected Games:</h1><br>";


          if(empty($games) )
            {
                echo "You did not select any games for purchase.<br>";
            }

            foreach($games as $selected) {
                echo $possibleGames[$selected] . "<br>";
            }
    ?>
      <br><br>
      <div class="header">Thanks for purchasing!</div><br>
    <?php
    echo "Your products will be sent to:<br>";
    echo $address;
    ?><br>
      
      <a class="button" href="browse.php">Shop Again</a>
    </div>
  </body>
</html>