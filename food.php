<?php
/* Conetect to the database */
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
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="grid">
    <div class="header">
        <h1>Wellington Girls' College Canteen</h1>
    </div>







</div>
</body>
</html>
