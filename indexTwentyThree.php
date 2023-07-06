<?php

setcookie("fav_food", "pizza", time()-0, "/");
setcookie("fav_drink", "Arizona", time()+(86400*4), "/");
//setcookie("fav_snack", "Chips", time()+(86400*6), "/");
setcookie("fav_snack", "Chips", time()-0, "/");

foreach($_COOKIE as $key=>$value){
  echo "{$key} = {$value} <br>";
}

if(isset($_COOKIE["fav_food"])){
  echo "BUY SOME {$_COOKIE["fav_food"]} !!!";
}
else{
  echo "IDK your fav food";
}

?>
