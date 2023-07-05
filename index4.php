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
  <label>username:</label>
  <input type="text" name="username"><br>

  <br>

  <label>password:</label>
  <input type="text" name="password"><br>

  <br>
  <input type="submit" value="Log in">
</form>
<br>


</body>
</html>
<?php
   echo "{$_POST["username"]}<br>";
   echo $_POST["password"]."<br>";
   echo "Hello There";

?>