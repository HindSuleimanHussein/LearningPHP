<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    Username:<br>
    <input type="text" name="username">
    <input type="submit">
  </form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
  echo "Hello";
}

?>