<html>
    <head>
        <title>Logical Operators</title>
    </head>

    <body>
        <form action="index.php" method="post" >
            <Label for="temperature">Temperature</Label> 
            <input type="text" name="temperature" id="temperature">
            <br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>

<?php

/* Logical Operators: AND, OR, NOT
  - > Used to combine conditional statements
    - > && - > AND
    - > || - > OR
    - > ! - > NOT
*/
$temperature = $_POST['temperature'];

if ($temperature >= 0 && $temperature <= 30)
    {
        echo "The temperature is good";
    }

    else 
        {
            echo "The temperature is bad";
        }


?>