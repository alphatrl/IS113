<?php

/*
purchase.php must display the following table with user input:

Your Purchase
+-----+--------+-------+----------+-----------+
| S/N | Name   | Price | Quantity | Sub-Total |
+-----+--------+-------+----------+-----------+ 
| 1   | <name> | <$$$> |   <num>  | <$$$>     |
+-----+--------+-------+----------+-----------+ 
| 2   | <name> | <$$$> |   <num>  | <$$$>     |
+-----+--------+-------+----------+-----------+ 
| ..  | ..     | ...   | ...      | ...       |
+-----+--------+-------+----------+-----------+ 
| n   | <name> | <$$$> |   <num>  | <$$$>     |
+-----+--------+-------+----------+-----------+ 
|                          Total: | <$$$>     |
+-----+--------+-------+----------+-----------+ 

*/


// By importing this file, we can access $drinks (Array of 5 Drink objects)
// Relative path (drinks.php is in the same directory as this file)
require_once 'drinks.php';


?>
<html>
<head>
    <title>Korean Drinks Shop - Purchase Summary</title>
</head>
<body>

    <table border='1'>
        <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Sub-Total</th>
        </tr>
        
        <?php
            // YOUR CODE GOES HERE
            $quantity = $_POST['quantity'];

            $total = 0.0;

            for ($i = 0; $i < count($drinks); $i++) {
                $drink = $drinks[$i];
                $sub = $quantity[$i] * $drink->getPrice();
                $total += $sub;

                echo("<tr>");
                echo("<td>". ($i + 1) ."</td>");
                echo("<td>". $drink->getName() ."</td>");
                echo("<td>". $drink->getPrice()."</td>");
                echo("<td>". $quantity[$i]. "</td>");
                echo("<td>$sub</td>");
                echo("</tr>");
            }

            echo("
            <tr>
                <td colspan='4' align='right'>Total</td>
                <td>$total</td>
            </tr>
            ");

        ?>

    </table>
</form>
</body>
<html>