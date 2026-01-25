<html>
    <head>
        <title>Circle Calculator</title>
    </head>

    <body>
        <form action="index.php" method="post">
            <label for="radius">Radius:</label>
            <input type="text" name="radius" id="radius">
            <br>
            <input type="submit" value="Calculate">
        </form>
    </body>
</html>

<?php
  
$radius = $_POST['radius'];
$circumference = null;
$area = null;

$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);

$area = 4 * pi() * pow($radius, 2);
$area = round($area, 2);

echo "The Circumference of a circle with radius {$radius} is: {$circumference}<br>";
echo "The Area of a sphere with radius {$radius} is: {$area}";


?>

