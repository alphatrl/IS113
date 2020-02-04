<?php

/*
Define two functions called encode and decode. 
The function encode takes in a string and returns the encoded string in hexadecimal format. 
The function decode, on the other hand takes in the encoded string in hexadecimal format and returns the original string. 

You can assume that the string passed into the function encode contains 
only valid characters from a-z or A-Z and punctuation symbols. 
You can also assume that a valid encoded string is passed into the function decode, i.e. every 2 characters represent the hexadecimal form corresponding to the original character. 
*/

// Add your code here

// When encode button is pressed
if(isset($_GET['encode'])) {
    $string = $_GET['string'];
    $encode = encode($string);
    echo("Encoded string for $string: $encode<br>");
}

// When decode button is pressed
if(isset($_GET['decode'])) {
    $string = $_GET['string'];
    $decode = decode($string);
    echo("Decoded string for $string: $decode<br>");
}

function encode($string) {
    //base64
    return base64_encode($string);
}

function decode($string) {
    return base64_decode($string);
}
    
?>


<form>

 <!-- Add your code here -->
 Enter a string: <input type="text" name="string">

 <br>
 
 <input type="submit" name="encode" value="Encode">
 <input type="submit" name="decode" value="Decode">

</form>