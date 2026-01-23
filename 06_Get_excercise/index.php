<html>
    <head>
        <title>Math Functions</title>
    </head>
    <body>
        <form action="index.php" method="get">
        <label>Enter 2 numbers and an operator</label>
        <br>
        <br>
        <label for="number1">Number 1</label>
        <input type="text" name="number1" id="number1">
        <br>
        <br>
        <label for="operator">Operator</label>
        <input type="text" name="operator" id="operator">
        <br>
        <br>
        <label for="number2">Number 2</label>
        <input type="text" name="number2" id="number2">
        <br>
        <br>
        <input type="submit" value="Calculate">
        <br>
        </form>
    </body>
</html>

<?php

    $num1 =  $_GET['number1'];  
    $num2 =  $_GET['number2']; 
    $op = $_GET['operator']; 
    $result = null;

    if ($op == "+") 
        {
            $result = $num1 + $num2;
        } 
    elseif ($op == "-") 
        {
            $result = $num1 - $num2;
        } 
    elseif ($op == "*") 
        {
            $result = $num1 * $num2;
        } 
    elseif ($op == "/") 
        {
            if ($num2 != 0) {
                $result = $num1 / $num2;
        } else {
            echo "Error: Division by zero is not allowed.";
            exit;
        }
    } else {
        echo "Error: Invalid operator. Please use +, -, *, or /.";
        exit;
    }
    
    

    
    echo "{$num1} {$op} {$num2} = {$result}";

 
    

?>