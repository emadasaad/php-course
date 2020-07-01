<!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
  </head>
  <body>
    <?php
    // Using two forward slashes we create comments in php.
    // Within the php tag, we can insert values into our HTML.
    $name = "PHP Store";
    $credit = 1000;

    echo "<h1>Welcome to ".$name."!</h1>";
    echo "<h2>you have $".$credit." in your wallet.</h2>";
    $products['computer']=750;
    $products['car']=15000;
    $products['iphone']=1000;
    $products['toaster']=75;
    echo "<p>A car costs $".$products['car']."</p>";
    echo "<p>A coputre cost $".$products['computer']."</p>";
    ?>
  </body>
</html>