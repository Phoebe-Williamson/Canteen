<?php
/* Connected to the database */
$dbcon = mysqli_connect("localhost", "williamsonph", "spicyhall22", "williamsonph_canteen");
if($dbcon == NULL){
    echo "Failed to connect to MySQL:".mysqli_connect_error();
    die();}
else{
    $database_connection = TRUE;}

$food_query = "SELECT food, cost, description, df, gf, v 
               FROM food 
               WHERE avalible = 'yes'";
$food_result = mysqli_query($dbcon, $food_query);
$not_availabale_food_query ="SELECT food, cost, df, gf, v 
                             FROM food 
                             WHERE avalible = 'no'";
$not_availabale_food_result = mysqli_query($dbcon, $not_availabale_food_query)
?>


<!DOCTYPE html>
<!-- -->
<!--Html code -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Food Page - WGC Canteen</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="grid">
    <div class="header">
        <h1>Wellington Girls' College Canteen</h1>
        <h2> Foods </h2>
    </div>
    <div class="logo">
        <a class="two" href="home.php">
            <img src="Images/wgclogo.png" width="121.5" height="121.5">
        </a>
    </div>
    <div class="nav">
        <nav>
            <a class ="one" href="home.php"> Home </a>
            <a class ="one" href="drinks.php"> Drinks </a>
            <a class ="one" href="food.php"> Food </a>
            <a class ="one" href="diets.php"> Diets</a>
        </nav>
    </div>
    <div class="foodleft">
        <h2> Available</h2>
        <?php
        while($food_record = mysqli_fetch_assoc($food_result)){
            echo "<br>" . $food_record['food'] . ":<br>";
            echo "Price :$". $food_record['cost'] . "<br>";
            if($food_record['df'] == 'yes') {
                echo "--- Dairy Free ---" . "<br>";
            }
            if($food_record['gf'] == 'yes'){
                echo "--- Gluten Free ---" . "<br>";
            }
            if($food_record['v'] == 'yes'){
                echo "--- Vegetarian ---" . "<br>";
            }
        }
        ?>
    </div>
    <div class="foodright">
        <h2>Not Available:</h2>
        <?php
        while($not_availabale_food_record = mysqli_fetch_assoc($not_availabale_food_result)){
            echo "<br>" . $not_availabale_food_record['food'] . ":<br>";
            echo "Price :$". $not_availabale_food_record['cost'] . "<br>";
            /* echo "Desrciption: " . $not_available_food_record['description'] . "<br>"; */
            if($not_availabale_food_record['df'] == 'yes') {
                echo "--- Dairy Free ---" . "<br>";
            }
            if($not_availabale_food_record['gf'] == 'yes'){
                echo "--- Gluten Free ---" . "<br>";
            }
            if($not_availabale_food_record['v'] == 'yes'){
                echo "--- Vegetarian ---" . "<br>";
            }
        }
        ?>
    </div>
    <div class="footer">
        <?php
        if($database_connection == TRUE){
            echo "connected to database";}
        ?>
    </div>
</div>
</body>
</html>
