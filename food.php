<?php
/* Connected to the database */
$dbcon = mysqli_connect("localhost", "williamsonph", "spicyhall22", "williamsonph_canteen");
if($dbcon == NULL){
    echo "Failed to connect to MySQL:".mysqli_connect_error();
    die();}
else {
    echo "connected to database";}

/*SQL query to return all drinks */

$all_food_query = "SELECT FoodID, food, cost from food";
$all_food_result = mysqli_query($dbcon, $all_food_query);
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
        <a href="home.php">
            <img src="Images/wgclogo.png" width="121.5" height="121.5">
        </a>
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
    <div class="weeklyspecial">
        hamburger
    </div>
    <div class="food">
        chicken nuggets
    </div>
    <div class="drinks">
        nachos
    </div>
</div>
</body>
</html>