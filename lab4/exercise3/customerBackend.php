<html>
<head>
  <title>Your Receipt</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
</body>

<?php
  echo "Thank your for your purchase, ".$_POST["email"].".<br>";
  echo "Here is your receipt:<br>";
  echo "<table border='1'><tbody>";  //open table
  //each line here is a row in the table
  echo "<tr><td></td><td>Quantity</td><td>Cost Per Item</td><td>Subtotal</td></tr>";
  echo "<tr><td>Fresh Water</td><td>".$_POST["water"]."</td><td>$1.00</td><td>$".$_POST["water"]*1.00.".00</td>";
  echo "<tr><td>Soda Pop</td><td>".$_POST["soda"]."</td><td>$2.00</td><td>$".$_POST["soda"]*2.00.".00</td>";
  echo "<tr><td>Lemonade</td><td>".$_POST["lemonade"]."</td><td>$3.00</td><td>$".$_POST["lemonade"]*3.00.".00</td>";
  //the $_POST for shipping is set very specifically to use it as an index into a type array and a price array
  echo "<tr><td>Shipping</td><td colspan='2'>".['7-Day', '3-Day', 'Overnight'][$_POST["shipping"]]."</td><td>$".[0 ,5, 50][$_POST['shipping']].".00</td>";
  echo "<tr><td colspan='3'>Total Cost</td><td>$".($_POST["water"]+($_POST["soda"]*2)+($_POST["lemonade"]*3)+[0, 5, 50][$_POST["shipping"]]).".00</td>";
  echo "</tbody></table>";  //close table
  echo "I know your password now. >:) It's ".$_POST["password"].".<br>";
?>

</html>
