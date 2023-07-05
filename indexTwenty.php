<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <input type="checkbox" name="foods[]" value="Pizza">
    Pizza
    <br>
    <input type="checkbox" name="foods[]" value="Burger">
    Burger
    <br>
    <input type="checkbox" name="foods[]" value="Taco">
    Taco
    <br>
    <input type="submit" name="submit">

  </form>
</body>
</html>

<?php
if(isset($_POST["submit"])){
  $foods=$_POST["foods"];
  foreach($foods as $food){
    echo "You like {$food} <br>";
  }
  
  /*if(isset($_POST["Pizza"])){
    echo "You like pizza<br>";

  }
  if(isset($_POST["Burger"])){
    echo "You like burger<br>";

  }
  if(isset($_POST["Taco"])){
    echo "You like taco<br>";

  }
  if(empty($_POST["Pizza"])){
    echo "You dont like pizza<br>";

  }
  if(empty($_POST["Burger"])){
    echo "You dont like burger<br>";

  }
  if(empty($_POST["Taco"])){
    echo "You dont like taco<br>";

  }*/

}




?>