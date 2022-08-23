<?php
/* Conetect to the database */
$dbcon = mysqli_connect("localhost", "williamsonph", "spicyhall22", "williamsonph_canteen");
if($dbcon == NULL){
    echo "Failed to connect to MySQL:".mysqli_connect_error();
    die();}
else {
    echo "connected to database";}
?>
<!DOCTYPE html>
<!-- -->
<!--Html code -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Drinks Page - WGC Canteen</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="grid">
    <div class="header">
        <h1>Wellington Girls' College Canteen</h1>
        <h2> Drinks </h2>
    </div>
    <div class="nav">
        <nav>
            <ul>
                <li> <a href="home.php"> Home </a> </li>
                <li> <a href="drinks.php"> Drinks </a> </li>
                <li> <a href="food.php"> Food </a> </li>
            </ul>
        </nav>
    </div>
    <div class="drink1">
        milkshke
    </div>
    <div class="drink2">
        sprite
    </div>
    <div class="drink3">
        coke
    </div>
    <div class="drink4">
        water
    </div>
</div>

<?php
Echo "fuck you";
?>



</div>
</body>
</html>
