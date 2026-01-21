<?php
    $name = "Name Surname";
    $activity = "coding";
    $email = "fake123@yahoo.com";

    $age = 41;
    $users = 2;
    $quantity = 4;

    $average = 2.5;
    $price = 20.45;

    $employed = true;
    $engaged = false;

    $total = null;


    echo $name;
    
    echo "<br>Hello {$name}<br>";
    echo " You like {$activity}<br>";
    echo "You're email is {$email}<br>";

    echo "You are {$age} years old<br>";
    echo "There are currently {$users} users online <br>";
    echo "You ordered {$quantity} eggs <br>";

    echo "Your average is {$average} <br>";
    echo "The cost of your order is {$price} euro <br>";

    echo "{$employed} <br>";
    echo "{$engaged} <br>";

    echo "Hello {$name}. You ordered {$quantity} pizzas at {$price} euro each <br>";
    $total = $quantity * $price;
    echo "The total bill is of {$total} <br>";



?>