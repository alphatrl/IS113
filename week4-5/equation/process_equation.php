<!DOCTYPE html>
<html>
    <head>
        <title>Equation</title>
    </head>
    <body>
        <?php


            // Please enter code here
            
            // If values are not set
            if ($_GET['valX'] == "" || $_GET['valY'] == ""){
                echo("Do not leave X or Y empty");
            } 
            
            // If value is set 
            else {
                $x = $_GET['valX'];
                $y = $_GET['valY'];

                $z = $x ** 2 + $y;

                echo("The value of Z is $z");
            }

            // End of code
        ?>

    </body>
</html>