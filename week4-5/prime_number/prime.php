<!DOCTYPE html>
<html>
<head>
    <title>Check Prime</title>
</head>
<body>
    <p>Please enter a whole number.</p>
    <form> <!-- If action is unspecified, form submits to itself -->
       <input name="number" type="text">
       <input type="submit" value="Go!"> 
    </form>

<?php
   if (isset($_GET['number'])){ // Loaded for first time?
        if(isValid($_GET['number'])){    
            $isPrime = true;

            // Please enter code here

            /**
             * A prime no. can only be divided by 1 or itself ($n)
             * If it can be divided by other numbers, it is not a factor
             * 
             * Without caring about the program execution timing,
             * we will just use a loop and divide it by numbers between 1 < $i < $n
             * if there is a $n % $i == 0, it is a factor and thus not a prime no.
             * switch $isPrime to False, and break out of loop
             * 
             * 1 and $n are ignored because those are confirmed factors
             * Since 1 is not a prime number (only 1 factor) if will have an ifelse to check
             */

            $i = (int) $_GET['number'];
            $check = 2;

            if ($i == 1) {
                $isPrime = False;
            } else {
                while ($check < $i) {
                    if ($i % $check == 0) {
                        $isPrime = False;
                        break;
                    }
                    $check++;
                }
            }
             

            // End of code

            if ($isPrime) {      
                echo "<p>".$i." is a prime number!</p>";        
            } else {
                echo "<p>".$i." is not prime.</p>";
            } 
            
        } else{
            // User submitted something which is not a positive whole number 
            echo "<p>Please enter a positive whole number.</p>";    
        }
   }
   
   // check if the given number is a valid numeric value
   // round() rounds a floating point value
   function isValid($number) {
       if(is_numeric($number) && $number > 0
               && $number == round($number, 0)) {
           return true;
       } else {
           return false;
       }
   }
?>

</body>
</html>