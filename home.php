<?php
/* Connected to the database */
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
            <a href="home.php"> Home </a>
            <a href="drinks.php"> Drinks </a>
            <a href="food.php"> Food </a>
        </nav>
    </div>
    <div class="special">
        <p>Weekly special:</p>
    </div>
    <div class="footer">
        footer
    </div>
</div>
</body>
</html>