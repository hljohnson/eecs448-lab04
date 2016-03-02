<?php

echo '<link href="style.css" rel = "stylesheet" type = "text/css"/>';

$email = $_POST['email'];
$password = $_POST['password'];
$goat1 = $_POST['goat1'];
$goat2 = $_POST['goat2'];
$goat3 = $_POST['goat3'];
$shipping = $_POST['shipping'];
$shippingCost = 0;
if($shipping == "Free 7 day") { $shippingCost = 0;}
else if($shipping == "$50.00 over night") { $shippingCost = 50; }
else if($shipping == "$5.00 three day") { $shippingCost = 5; }

$totalCost = ($goat1 * 45) + ($goat2 * 50) + ($goat3 * 65) + ($shippingCost);

if(isset($_POST['submit'])) {
  echo "Welcome,".$email."!"."<br>";
  echo "Here is your password: ".$password."<br>";

  echo "<table border = '1'>";

  echo "<tr>";
    echo "<th>"." "."</th>";
    echo "<th>"."Quantity"."</th>";
    echo "<th>"."Cost Per Item"."</th>";
    echo "<th>"."Sub Total"."</th>";
  echo "</tr>";

  echo "<tr>";
    echo "<th>"."Item 1"."</th>";
    echo "<td>".$goat1."</td>";
    echo "<td>"."$45.00"."</td>";
    echo "<td>"."$". $_POST['goat1']*45.00 ."</td>";
  echo "</tr>";

  echo "<tr>";
    echo "<th>"."Item 2"."</th>";
    echo "<td>".$goat2."</td>";
    echo "<td>"."$50.00"."</td>";
    echo "<td>"."$". $_POST['goat2']*50.00 ."</td>";
  echo "</tr>";

  echo "<tr>";
    echo "<th>"."Item3"."</th>";
    echo "<td>".$goat3."</td>";
    echo "<td>"."$65.00"."</td>";
    echo "<td>"."$". $_POST['goat3']*65.00."</td>";
  echo "</tr>";

  echo "<tr>";
    echo "<th>"."Shipping"."</th>";
    echo "<td colspan = '2'>".$shipping."</td>";
    echo "<td>"."$".$shippingCost."</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<th colspan = '3'>"."Total Cost"."</th>";
  echo "<th>"."$".$totalCost."</th>";
  echo "</tr>";

  echo "</table>";
}
?>
