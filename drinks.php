<?php
/* Connected to the database */
$dbcon = mysqli_connect("localhost", "williamsonph", "spicyhall22", "williamsonph_canteen");
if($dbcon == NULL){
    echo "Failed to connect to MySQL:".mysqli_connect_error();
    die();}
else{
    $database_connection = TRUE;}

/* Available food query */
$available_drink_query = "SELECT drink, cost, description, df 
                          FROM drinks
                          WHERE avalible = 'yes'";
$available_drink_result = mysqli_query($dbcon, $available_drink_query);

/* Not available query */
$not_available_drink_query = "SELECT drink, cost, description, df 
                              FROM drinks 
                              WHERE avalible = 'no'";
$not_available_drink_result = mysqli_query($dbcon, $not_available_drink_query)
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
    </div>
    <div class="logo">
        <aone href="home.php">
            <img src="Images/wgclogo.png" width="121.5" height="121.5">
        </aone>
    </div>
    <div class="nav">
        <nav>
            <a href="home.php"> Home </a>
            <a href="drinks.php"> Drinks </a>
            <a href="food.php"> Food </a>
        </nav>
    </div>
    <div class="special">
        <h2> Drinks </h2>
        <h3>Available:</h3>
        <?php
        while($available_drink_record = mysqli_fetch_assoc($available_drink_result)){
            echo "<br>" . $available_drink_record['drink'] . "<br>";
            if($available_drink_record['df'] == 'no') {
                echo "--- Dairy product ---" . "<br>";
            }
        }

        ?>
        <h3>Not available:</h3>
        <?php
        while($not_available_drink_record = mysqli_fetch_assoc($not_available_drink_result)){
            echo "<br>" . $not_available_drink_record['drink'] . "<br>";
            if($not_available_drink_record['df'] == 'no'){
                echo "--- Dairy product ---" . "<br>";
            }
        }

        ?>

    </div>
    <div class="footer">
        <?php
        if($database_connection == TRUE){
            echo "connected to database";}
        ?>
        Ⓒ
    </div>
</div>
</body>
</html>