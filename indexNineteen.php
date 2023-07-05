<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <input type="radio" name="credit_card" value="Visa">
    Visa
    <input type="radio" name="credit_card" value="Mastercard">
    Mastercard
    <input type="radio" name="credit_card" value="American Express">
    American Express
    <input type="submit" value="confirm" name="confirm">

  </form>
</body>
</html>

<?php

if(isset($_POST["confirm"])){
if(isset($_POST["credit_card"])){
  $credit_card=$_POST["credit_card"];
  echo "You selected {$credit_card}";

}else{
  echo "Please make a selection";
}
}


?>