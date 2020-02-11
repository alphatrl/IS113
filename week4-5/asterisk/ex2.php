<?php

// Create a script to construct the following pattern, using nested for loop.

// Complete this function
function create_shape($num) {
    $shape_array = [];
    
    // YOUR CODE GOES HERE
    $asterick_string = "* ";

    if ($num != 0) {
        for ($i = 1; $i <= (int) $num ; $i ++) {
            $shape_array[] = str_repeat($asterick_string, $i);
        }

        // reverse of the for loop above
        for ($i = (int) $num; $i > 0; $i --) {
            $shape_array[] = str_repeat($asterick_string, $i);
        }
    }

    return $shape_array;
}

/* Example

Given Form Input 5, below code must print:

* 
* * 
* * * 
* * * * 
* * * * * 
* * * * * 
* * * * 
* * * 
* * 
* 

*/

$num = $_GET['num'];
$arr = create_shape($num);

foreach($arr as $item) {
    echo "$item<br>";
}

?>