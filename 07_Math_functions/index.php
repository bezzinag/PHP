<html>
    <head>
        <title>Get and Post Exercise</title>

    </head>

    <body>
        <form action = "index.php" method="post"> 
            <label for="x">X:</label> 
            <input type="text" name="x" id="x">
            <br><br>
            
            <input type="submit" value="Total">
        </form>

    </body>
</html>

<?php
    $x = $_POST['x'];
    $total = null;
    
    //$total = abs($x); absolute
    //$total = round($x);
    //$total = floor($x);
    //$total = ceil($x);
    //$total = sqrt($x);
    //$total = pow($x, 3);
    //$total = pi();
    //$total = rand(1, 100);

    echo "{$total}";

?>