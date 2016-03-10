<?php
  $money = $_POST["getal1"];
  $getal2 = $_POST["getal2"] / 100;
  $realPercentage = $getal2 + 1; // I know it could be more compact
  $time = $_POST["getal3"];
  echo 'Uw Start geld '. $money. " Uw interest " . $realPercentage . " ammount of years ". $time;
  while ($i <= $time) {
    echo "<li> Jaar ". $i . " geld is " . $money;
    $money = $money * $realPercentage;
    $i++;
  }
?>
