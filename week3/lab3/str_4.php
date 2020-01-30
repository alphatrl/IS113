<?php

// add your code here
if (isset($_GET['submit'])) {
    $string = $_GET['string'];
    $regex_string = "/[^a-zA-Z]/"; // inverse everything but alphabets ignoring case

    // replace char with nothing and convert to lower case
    $replace_string = strtolower(preg_replace($regex_string, "", $string));

    // reverse a string
    $reverse_string = strrev($replace_string);

    if ($replace_string == $reverse_string) {
        echo("The string in $string is a palindrome<br><br>");
    }else {
        echo("The string in $string is not a palindrome<br><br>");
    }
}
 
?>


<form>

    Enter the string : <input name="string" type="text">
    <br/>
    
    <input type="submit" name="submit">
    
</form>