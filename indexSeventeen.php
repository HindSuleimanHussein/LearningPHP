<?php

$username=false;
$username2=false; // if false the variable is empty but set

if(isset($username)){
  echo "This variable is set <br>";
}
else{
  echo "This variable is NOT set <br>";
}

if(empty($username2)){
  echo "This variable is empty <br>";
}
else{
  echo "This variable is NOT empty <br>";
}



?>