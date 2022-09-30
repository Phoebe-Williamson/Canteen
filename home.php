<?php
/* Connected to the database */
$dbcon = mysqli_connect("localhost", "williamsonph", "spicyhall22", "williamsonph_canteen");
if($dbcon == NULL){
    echo "Failed to connect to MySQL:".mysqli_connect_error();
    die();}
else{
    $database_connection = TRUE;}

/* Dairy free special */
$dairy_free_query ="SELECT weeks_specials.WeeklySPecialID, food.food, weeks_specials.Cost 
                    FROM food, weeks_specials 
                    WHERE WeeklySpecialID = 'DairyFreeSpecial' 
                    AND weeks_specials.FoodID = food.FoodID";
$dairy_free_result = mysqli_query($dbcon, $dairy_free_query);

/* gluten free special */
$gluten_free_query = "SELECT weeks_specials.WeeklySPecialID, food.food, weeks_specials.Cost 
                      FROM food, weeks_specials 
                      WHERE WeeklySpecialID = 'GlutenFreeSpecial' 
                      AND weeks_specials.FoodID = food.FoodID";
$gluten_free_result = mysqli_query($dbcon, $gluten_free_query);

/* meat special */
$meat_special_query = "SELECT weeks_specials.WeeklySPecialID, food.food, weeks_specials.Cost 
                       FROM food, weeks_specials 
                       WHERE WeeklySpecialID = 'MeatSpecial' 
                       AND weeks_specials.FoodID = food.FoodID";
$meat_special_result = mysqli_query($dbcon, $meat_special_query);

/* vegeterian special */
$vegeterian_special_query = "SELECT weeks_specials.WeeklySPecialID, food.food, weeks_specials.Cost 
                             FROM food, weeks_specials 
                             WHERE WeeklySpecialID = 'Vegeterianspecial' 
                             AND weeks_specials.FoodID = food.FoodID";
$vegeterian_special_result = mysqli_query($dbcon, $vegeterian_special_query);

/* Drink special */
$drink_special_query = "SELECT weeks_specials.WeeklySPecialID, drinks.drink, weeks_specials.Cost 
                        FROM drinks, weeks_specials 
                        WHERE WeeklySpecialID = 'DrinksSpecial' 
                        AND weeks_specials.DrinkID = drinks.DrinkID";
$drink_special_result = mysqli_query($dbcon, $drink_special_query)

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
    <div class="special">
        <h2>Weekly specials:</h2>
        <?php
        /* Dairy free query being shown on website*/
        while($dairy_free_record = mysqli_fetch_assoc($dairy_free_result)){
            echo "Dairy Free Special:<br>";
            echo $dairy_free_record['food'] . "<br>";
            echo "Price: $" .$dairy_free_record['Cost'] . "<br>";
        }
        /* Gluten-free query being shown on website*/
        while($gluten_free_record = mysqli_fetch_assoc($gluten_free_result)){
            echo "<p> Gluten Free Special:<br>";
            echo  $gluten_free_record['food'] . "<br>";
            echo "Price: $" .$gluten_free_record['Cost'] . "<br>";
        }
        /* Meat query being shown on website*/
        while($meat_special_record = mysqli_fetch_assoc($meat_special_result)){
            echo "<p> Meat Special:<br>";
            echo $meat_special_record['food'] . "<br>";
            echo "Price: $" .$meat_special_record['Cost'] . "<br>";
        }

        /* Vegeterian special */
        while($vegeterian_special_record = mysqli_fetch_assoc($vegeterian_special_result)){
            echo "<p> Vegetarian Special: <br>";
            echo $vegeterian_special_record['food'] . "<br>";
            echo "Price: $" . $vegeterian_special_record['Cost'] . "<br>";
        }

        /* Drinks special */
        while($drink_special_record = mysqli_fetch_assoc($drink_special_result)){
            echo "<p> Drink Special: <br>";
            echo $drink_special_record['drink'] . "<br>";
            echo "Price: $" . $drink_special_record['Cost'] . "<br>";
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