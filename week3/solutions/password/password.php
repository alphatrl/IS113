<!DOCTYPE html>
<html>
<body>
<?php
    $password  = "abcdefgh";
    $confirmPassword = "abcdefgh";

    //write your codes here, change the value of the $password and $confirmPassword fields to test for the rules accordingly.
    
    // condition 1:
    // $password == $confirmPassword
    $condition1 = $password === $confirmPassword;

    // condition 2:
    // first char must not be the same as last char
    // we will just have to check the $password only
    $first_char = $password[0];
    $last_char = substr($password, -1);
    $condition2 = ($first_char !== $last_char);


    // condition 3:
    // must not contain the same character more than 3 times
    // we will create an associative array which stores the character and the count
    // a for loop will loop through the password string and save the character and count into the array
    // break if count is > 3
    $char_count = array();
    $condition3 = True;

    for ($i = 0; $i < strlen($password); $i++) {
        $char = $password[$i];
        $count = 0;

        // If found, update count to what is stored inside
        if(array_search($char, $char_count) !== False) {
            $count = $char_count[$char];
        }

        $count ++;
        $char_count[$char] = $count;

        // If $count > 3, break loop, change $condition3 to False
        if ($count > 3) {
            $condition3 = False;
            break;
        }
    }

    // If all conditions are true, password is valid
    if ($condition1 && $condition2 && $condition3) {
        echo("The password is valid");
    }
    else {
        echo("The password is not valid<br>");
    }
    
?>