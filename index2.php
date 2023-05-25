<?php
    $x=10;
    $y=2;
    $z=null;

    $z=$x+$y;
    echo "{$x} + {$y} = {$z}<br>";

    $z=$x-$y;
    echo "{$x} - {$y} = {$z}<br>";

    $z=$x/$y;
    echo "{$x} / {$y} = {$z}<br>";

    $z=$x*$y;
    echo "{$x} * {$y} = {$z}<br>";

    $z=$x%$y;
    echo "{$x} % {$y} = {$z}<br>";

    $z=$x**$y;
    echo "{$x} ** {$y} = {$z}<br>"; // this is like x^(y)

    //increment and decrement operators
    $counter=12;
    $counter++;
    echo "The counter is: {$counter}<br>";

    $counter--;
    echo "The counter is: {$counter}<br>";

    $counter+=2;
    echo "The counter is: {$counter}<br>";

    $counter-=3;
    echo "The counter is: {$counter}<br>";

    $total=null;
    $total=1+2-3*(4/5)**6;
    echo "The total is: {$total}<br>";
    

    

?>
