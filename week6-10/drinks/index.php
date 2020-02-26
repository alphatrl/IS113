<?php

// By importing this file, we can access $drinks (Array of 5 Drink objects)
// Relative path (drinks.php is in the same directory as this file)
require_once 'drinks.php';


/*
Using the $drinks array, display the information as a table.
For the images, specify the thumbnail image.
When the user clicks on the thumbnail image, the full image will load in a new browser window/tab.
Quantity is an input of type number.
+-----+--------+-----------+-------+----------+
| S/N | Name   | Picture   | Price | Quantity |
+-----+--------+-----------+-------+----------+ 
| 1   | <name> | <Picture> | <$$$> |   <num>  |
+-----+--------+-----------+-------+----------+
| 2   | <name> | <Picture> | <$$$> |   <num>  |
+-----+--------+-----------+-------+----------+ 
| ..  | ..     | ....      | ...   | ...      |
+-----+--------+-----------+-------+----------+ 
| n   | <name> | <Picture> | <$$$> |   <num>  |
+-----+--------+-----------+-------+----------+ 
| [Purchase ]                                 |
+-----+--------+-----------+-------+----------+ 


The "Purchase" button will send users to the purchase.php page.

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

?>
<html>
<head>
    <title>Korean Drinks Shop</title>
</head>
<body>

<form action='purchase.php' method='POST'>
    <table border='1'>
        <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Picture</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
        
        <?php
            // YOUR CODE GOES HERE
            // print_r($drinks);

            for ($i = 0; $i < count($drinks); $i++) {
                $drink = $drinks[$i];
                $name = $drink->getName();
                $imgURL = $drink->getImage();
                $price = $drink->getPrice();

                echo("
                <tr>
                    <td>" . ($i + 1 ). "</td>" . "
                    <td>$name</td>
                    <td><a href='./images/$imgURL'>
                            <img src='./images/thumbnail/$imgURL'>
                        </a>
                    </td>
                    <td>$price</td>
                    <td>
                        <input type='text' value='0' name='quantity[]'/>
                    </td>
                </tr>
                ");
            }

            echo("<tr><td colspan='5'><input type='submit'/></td></tr>");

        ?>
    </table>
        
</form>
</body>
<html>