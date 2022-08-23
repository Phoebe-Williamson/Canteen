<?php
/* Connect to the database */
$dbcon = mysqli_connect("localhost", "williamsonph", "spicyhall22", "williamsonph_canteen");
if($dbcon == NULL){
    echo "Failed to connect to MySQL:".mysqli_connect_error();
    die();}
else {
    echo "connected to database";}


$all_food_query = "SELECT SUM(food.food)from food where avalible = 'yes'";
$all_food_result = mysqli_query($dbcon, $all_food_query);
?>
<!DOCTYPE html>
<!-- -->
<!--Html code -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home Page - WGC Canteen</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="grid">
    <div class="header">
        <h1>Wellington Girls' College Canteen</h1>
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
        <p>Weekly special:</p>
        <img src="Images/Burger.jpg" width="180" height="120" alt="burger">
        <img src="Images/Water.jpg" width="112.5" height="112.5">
    </div>
    <div class="food">
        <nav>
            <a href="food.php"> Food </a>
        </nav>
    </div>
    <div class="drinks">
        <a href="drinks.php"> Drinks </a>
    </div>
    <div class="footer">
        footer
    </div>
</div>
</body>
</html>