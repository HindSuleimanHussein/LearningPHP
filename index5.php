<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form action="index.php" method="post">
  <label>quantity: </label><br>
  <input type="text" name="quantity">
  <input type="submit" value="total">
</form>
<br>


</body>
</html>
<?php
$item="pizza";
$price=5.99;
$quantity= $_POST["quantity"];
$total= $quantity*$price;
echo "You have ordered {$quantity} x {$item}/s";
echo "Your total is: \${$total}";




//$_GET = Data is appended to the URL
// 1) Not secure
// 2) char limit 
// 3) bookmark is possible w/ values
// 4) GET requests can be cached
// 5) Better for a search page


//$_POST = Data is appended to the URL
// 1) MORE secure
// 2) no data limit 
// 3) cannot bookmark
// 4) requests are not cached
// 5) Better for submitting credentials

?>