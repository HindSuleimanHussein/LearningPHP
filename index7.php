<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="index.php" method=post>
    <label>x:</label>
    <input type="text" name="x">
    <br><br>

    <label>y:</label>
    <input type="text" name="y">
    <br><br>

    <label>z:</label>
    <input type="text" name="z">
    <br><br>

    <input type="submit" value="total">
    <br><br>

  </form>

</body>

</html>
<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;

//$total = abs($x);
//$total=round($x);
//$total=floor($x);
//$total=ceil($x);
//$total=pow($x,$y);
//$total=sqrt($x);
//$total=max($x, $y, $z);
//$total=min($x, $y, $z);
//$total=pi(); <-this is for pi
//$total=rand(); <-from 1 to 1 billion
//$total=rand(1, 9); <-from 1 to 9


echo $total;


?>