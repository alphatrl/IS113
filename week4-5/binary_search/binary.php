<?php
   if
 (isset($_GET["submit"]) && $_GET["submit"]=="BinarySearch!") {
        // predefine the search range [1, 100]
        $hi = 100;
        $lo = 1;

        /* add your code that performs binary search to find the length of       
        password string here. [Hint: You have to invoke the provided 
        isEqual() and/or isLess() in a loop.]
        */
        $exit = False;
        while (!$exit) {
            $temp = round(($hi + $lo) / 2);

            /**
             * Read up binary search
             * 
             * $temp is the middle number between $lo and $hi
             * 
             * Check if $temp isEqual()
             *      IF YES, save $lo = $temp (because of the echo at the end of loop)
             *          BREAK LOOP
             * 
             * Check if $temp isLower() : $temp < strlen($password)
             *      IF YES, save $lo = $temp
             *      REPEAT
             * 
             * Else, $temp > strlen($password)
             *      SAVE $hi = $temp
             *      REPEAT
             */


            if(isEqual($temp)) {
                $lo = $temp;
                break;
            }

            elseif(isLess($temp)) {
                $lo = $temp;

                echo("Guess is too low! ");
            }

            else {
                $hi = $temp;
                echo("Guess is too high! ");
            }

            echo("$temp<br>");

        }

        /* end of code */
        echo "<p> Length of the password is: " . $lo . "</p>";
    }

    //------ Do not modify the following two functions ---------------
    function isEqual($length) {
        $password = "This is a secret password!";
        if(strlen($password) == $length) {
            return true;
        } else {
            return false;
        }
    }

    function isLess($length) {
        $password = "This is a secret password!";
        if($length < strlen($password)) {
            return true;
        } else {
            return false;
        }
    } 
?>
<form>
   <input type="submit" name="submit" value="BinarySearch!">
</form>
