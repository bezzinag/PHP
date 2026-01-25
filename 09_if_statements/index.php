<html>
    <head>
        <title>If Statments</title>

    </head>

    <body>
        <form action="index.php" method="post">
            <label for="age">Please enter your age: </label>
            <input type="text" name="age" id="age">
            <br>
            <input type="submit" value="Enter Website">
        </form>
    </body>
</html>

<?php

    $age = $_POST['age'];

    if ($age >= 18)
        {
            echo "You may  enter";
        }

    else if ($age == 0)
        {
            echo "You are not born yet";
        }
    
    else if ($age < 0 )
        {
            echo "That is impossible";
        }
    else 
        {
            echo "YOU MAY NOT ENTER";
        }
    

?>