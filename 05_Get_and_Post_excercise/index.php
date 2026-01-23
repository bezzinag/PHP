<html>
    <head>
        <title>Get and Post example</title>
    </head>

    <body>
        <form action="index.php" method="post">
            <label for="quantity">Quantity: </label>
            <input type="text" name="quantity" id="quantity">
            <br>
            <label>Price: 9.99</label>
            <br>
            <input type="submit" name="total">     
        </form>
    </body>
</html>

<?php

    $item = "Pizza";
    $price = '9.99';
    $quantity = $_POST ['quantity'];
    $total = null;

    echo "You have ordered {$item} at {$price}e each <br>";

    $total = $quantity * $price;

    echo "Your total is {$total}euro.";
?>