<?php
    $name = "Hind";
    $food="sushi";
    $email="fake123@gmail.com";

    $age=20;
    $users=2;
    $quantity=3;

    $gpa=2.3;
    $price=5.66;
    $tax_rate=5.1;

    $employed=true;
    $online=false;
    $for_sale=true;

    $total=null;

    echo "Hello {$name}<br>";
    echo "You like {$food}<br>";
    echo "Your email is {$email}<br>";

    echo "You are {$age} years old<br>";
    echo "There are {$users} users online<br>";
    echo "You would like to buy {$quantity} items<br>";

    echo "Your gpa is: {$gpa}<br>";
    echo "Your pizza is \${$price} <br>";
    echo "The sales tax rate is: {$tax_rate}%<br>";
    echo "Online status: {$online}<br>"; //this gives 1 if online=true;

    echo "You have ordered {$quantity}x {$food}s<br>";
    $total=$quantity*$price;
    echo "Your total is: \${$total}";

    

?>
