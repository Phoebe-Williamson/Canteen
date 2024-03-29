<?php
/* Connected to the database */
$dbcon = mysqli_connect("localhost", "williamsonph", "spicyhall22", "williamsonph_canteen");
if($dbcon == NULL){
    echo "Failed to connect to MySQL:".mysqli_connect_error();
    die();}
else{
    $database_connection = TRUE;}

/* gluten free query*/
$gluten_free_query = "SELECT food, cost, df, gf, v, avalible
                      FROM food
                      WHERE gf = 'yes'";
$gluten_free_result = mysqli_query($dbcon, $gluten_free_query);

/*dairy free query*/
$dairy_free_query = "SELECT food, cost, df, gf, v, avalible
                     FROM food
                     WHERE df = 'yes'";
$dairy_free_result = mysqli_query($dbcon, $dairy_free_query);

/* vegetarian query*/
$vegetarian_query = "SELECT food, cost, df, gf, v, avalible
                     FROM food
                     WHERE v = 'yes'";
$vegetarian_result = mysqli_query($dbcon, $vegetarian_query);
?>
<!DOCTYPE html>
<!-- -->
<!--Html code -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Diets Page - WGC Canteen</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="grid">
    <div class="header">
        <h1>Wellington Girls' College Canteen</h1>
    </div>
    <div class="logo">
        <!-- image class link -->
        <a class="two" href="home.php">
            <img src="Images/wgclogo.png" alt="wellington girls college logo" width="122" height="122">
        </a>
    </div>
    <div class="nav">
        <br>
        <nav>
            <a class ="one" href="home.php"> Home </a>
            <a class ="one" href="drinks.php"> Drinks </a>
            <a class ="one" href="food.php"> Food </a>
            <a class ="one" href="diets.php"> Diets</a>
        </nav>
    </div>
    <div class="special">
        <h2>Diets</h2>
        <!-- Info so that the end users know what to do when they go on the diets page -->
        <p>Click the links below to get options for your dietary requirements</p>
        <!-- I have gotten the information for the buttons from  geeksforgeeks, the link being:
             https://www.geeksforgeeks.org/how-to-call-php-function-on-the-click-of-a-button/ -->
        <form method="post">
            <!-- Makes the buttons -->
            <input type="submit" name="Gluten"
                   value="Gluten-Free"/>
            <input type="submit" name="Dairy"
                   value="Dairy-Free"/>
            <input type="submit" name="Vegetarian"
                   value="Vegetarian"/>
        </form>
        <p>------------------------------------------------</p>
        <?php
        if(isset($_POST['Gluten'])) {
            echo "<h3>Gluten-Free Food </h3>";
            while ($gluten_free_record = mysqli_fetch_assoc($gluten_free_result)) {
                echo "<br>" . $gluten_free_record['food'] . ":<br>";
                echo "Price: $" . $gluten_free_record['cost'] . "<br>";
                if ($gluten_free_record['avalible'] == 'no') { /* checks if it is out of stock*/
                    echo "--- Out of Stock ---" . "<br>";
                }
                if ($gluten_free_record['avalible'] == 'yes') { /* checks if it is available */
                    echo "--- Available ---" . "<br>";
                }
            }
            echo "<h3>All drinks are Gluten-Free</h3>";
        }
        if(isset($_POST['Dairy'])) { /* checks is it is dairy free*/
            echo "<h3>Dairy Free products:</h3>";
            while ($dairy_free_record = mysqli_fetch_assoc($dairy_free_result)) {
                echo "<br>" . $dairy_free_record['food'] . ":<br>";
                echo "Price: $" . $dairy_free_record['cost'] . "<br>";
                if ($dairy_free_record['avalible'] == 'no') { /* checks if it is out of stock*/
                    echo "--- Out of Stock ---" . "<br>";
                }
                if ($dairy_free_record['avalible'] == 'yes') { /* checks if it is available */
                    echo "--- Available ---" . "<br>";
                }
            }
        }
        if(isset($_POST['Vegetarian'])){
            echo "<h3>Vegetarian Food:</h3>";
            while($vegetarian_record = mysqli_fetch_assoc($vegetarian_result)) {
                echo "<br>" . $vegetarian_record['food'] . ":<br>";
                echo "Price: $" . $vegetarian_record['cost'] . "<br>";
                if($vegetarian_record['avalible'] == 'no'){ /* checks if it is out of stock*/
                    echo "--- Out of Stock ---" . "<br>";
                }
                if($vegetarian_record['avalible'] == 'yes'){ /* checks if it is available */
                    echo "--- Available ---" . "<br>";
                }
            }
            echo "<h3>All drinks are vegetarian</h3>";
        }
        ?>
    </div>
    <div class="footer">
        <!-- footer which displays database connection and copyright -->
        <?php
        if($database_connection == TRUE){
            echo "connected to database";}

        ?>
        <p>Wellington Girls' College Canteen - All Rights Reserved Ⓒ</p>
    </div>
</div>
</body>
</html>
