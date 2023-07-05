<?php
function is_even($number){
  $result=$number%2;
  if($result=0){
    echo "{$number} is even";
  }
  else{
    return "{$number} is odd";
  }
}

echo is_even(11) . "<br>";

function hypotenuse(float $a, float $b){
  $c= sqrt($a**2 + $b**2);
  return $c;

}

echo hypotenuse(4, 5);
?>