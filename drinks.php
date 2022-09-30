<?php
/* Connected to the database */
$dbcon = mysqli_connect("localhost", "williamsonph", "spicyhall22", "williamsonph_canteen");
if($dbcon == NULL){
    echo "Failed to connect to MySQL:".mysqli_connect_error();
    die();}
else{
    $database_connection = TRUE;}

/* Available drink query */
$available_drink_query = "SELECT drink, cost, description, df 
                          FROM drinks
                          WHERE avalible = 'yes'";
$available_drink_result = mysqli_query($dbcon, $available_drink_query);

/* Not available drink query */
$not_available_drink_query = "SELECT drink, cost, description, df 
                              FROM drinks 
                              WHERE avalible = 'no'";
$not_available_drink_result = mysqli_query($dbcon, $not_available_drink_query)
?>
<!DOCTYPE html>
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
    </div>
    <div class="logo">
        <a class="two" href="home.php">
            <img src="Images/wgclogo.png" alt="wellington girls college logo" width="122" height="122">
        </a>
    </div>
    <div class="nav">
        <!-- image class link -->
        <br>
        <nav>
            <a class ="one" href="home.php"> Home </a>
            <a class ="one" href="drinks.php"> Drinks </a>
            <a class ="one" href="food.php"> Food </a>
            <a class ="one" href="diets.php"> Diets</a>
        </nav>
    </div>
    <div class="special">
        <h2> Drinks </h2>
        <h3>Available:</h3>
        <?php
        while($available_drink_record = mysqli_fetch_assoc($available_drink_result)){
            echo $available_drink_record['drink'] . "<br>";
            echo "Price: $" . $available_drink_record['cost'] . "<br>" ;
            if($available_drink_record['df'] == 'no') { /* checks if the product contain dairy*/
                echo "--- Dairy product ---" . "<br>" . "<br>";
            }
            else{
                echo "<br>";
            }
        }
        ?>
        <h3>Out of Stock:</h3>
        <?php
        while($not_available_drink_record = mysqli_fetch_assoc($not_available_drink_result)){
            echo "<br>" . $not_available_drink_record['drink'] . "<br>";
            echo "Price: $" . $not_available_drink_record['cost'] . "<br>";
            if($not_available_drink_record['df'] == 'no'){ /* checks if the product contains dairy*/
                echo "--- Dairy product ---" . "<br>";
            }
        }
        ?>
    </div>
    <div class="footer">
        <!-- footer which displays database connection and copyright -->
        <?php
        if($database_connection == TRUE){
            echo "Connected to database";}
        ?>
        <p>Wellington Girls' College Canteen - All Rights Reserved Ⓒ</p>
    </div>
</div>
</body>
</html>