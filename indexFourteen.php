<?php

$foods=array("apple",  "orange", "banana", "coconut");

//$foods[0]="pineapple";
array_push($foods, "pineapple", "kiwi"); // pushing pineapple and kiwi at the end of the foods array

array_pop($foods); // popping the last element inside the foods array

array_shift($foods); // shifting the array causing the first element in the array to be removed

$foods = array_reverse($foods);

echo count($foods) . "<br>";

foreach($foods as $food){
  echo "$food <br>";
}


?>