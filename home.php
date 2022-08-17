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
        <title>Home Page - WGC Canteen</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="grid">
            <div class="header">
               <h1>Wellington Girls' College Canteen</h1>
            </div>

        </div>

       <?php
       Echo "fuck you";
       ?>



        </div>
    </body>
</html>