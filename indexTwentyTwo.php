<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">


    <label>Email:</label>
    <input type="text" name="email"> <br>

    <label>Username:</label>
    <input type="text" name="username"> <br>

    <label>Age:</label>
    <input type="text" name="age"> <br>


    <input type="submit" name="login" value="login"><br>

  </form>
</body>
</html>
<?php
if(isset($_POST["login"])){

  $age=filter_input(INPUT_POST, "age", 
                          FILTER_VALIDATE_INT); 
                          
  $email=filter_input(INPUT_POST, "email", 
                           FILTER_VALIDATE_EMAIL);  
                              
                  
  if(empty($email)){
    echo "This email was not valid";
  }  
  else{
    echo "Your email is: {$email}";
  }             
                           
                           
  // $username=filter_input(INPUT_POST, "username", 
  //                         FILTER_SANITIZE_SPECIAL_CHARS);

  // $age=filter_input(INPUT_POST, "age", 
  //                         FILTER_SANITIZE_NUMBER_INT);   
                          
  // $email=filter_input(INPUT_POST, "email", 
  //                         FILTER_SANITIZE_EMAIL);  
  
  

}

?>