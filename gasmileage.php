<!DOCTYPE html>
<!--
Jessica L. Craw
DWD 272 Dynamic Web Language II (PHP & MySQL)
Lab01
Gas Mileage
29 March 2018
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="post">
        <fieldset>
            <legend>Please enter the information bellow:</legend>
            <label>Distance:<input type="float" name="distance" required></label><br>
            <label>Number of Gallons:<input type="float" name="numGallons" required></label><br>
            <label>Price per Gallon:<input type="float" name="price" required></label><br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
        </form>
        <?php
        if(isset($_POST['submit'])){
            echo("Distance: " . $_POST['distance'] . "<br>\n");
            echo("Number of Gallons: " . $_POST['numGallons'] . "<br>\n");
            echo("Price per Gallon: " . $_POST['price'] . "<br>\n");
            echo ("Average miles per gallon : " . ($_POST['distance'] / $_POST['numGallons']) . "<br>\n");
            echo ("Total price paid for gas: " . ($_POST['price'] * $_POST['numGallons']) . "<br>\n");
        }
        ?>
    </body>
</html>