<?php

    /*
        arr_2.py contains a form that gets 10 integer inputs from the user. 
        It should then display the minimum, maximum and median of all numbers entered. 
    */

    // add your code here

    // split string into array
    $input_string = explode(" ", $_GET['numbers']);
    $input = array();

    // convert array string to int
    foreach($input_string as $n) {
        $input[] = intval($n);
    }

    // sort the array
    sort($input);

    echo("Sorted numbers: ");
    foreach($input as $n) {
        echo($n . " ");
    }

    // get first value in sorted array
    $min = $input[0];
    
    // get last value in sorted array
    $max = end($input);
    
    // get median
    if (count($input) % 2 == 0) {
        $mid_index = intdiv(count($input), 2);
        $median = ($input[$mid_index] + $input[$mid_index + 1]) / 2;
    } else {
        $mid_index = ceil(count($input), 2);
        $median = $input[$mid_index];
    }

    echo("<br>");
    echo("Mimimum of numbers: $min<br>");
    echo("Maximum of numbers: $max<br>");
    echo("Median of numbers: $median<br><br>");

?>


    <form>

    Enter 10 integers (separate each integer with a space): 
    <input name="numbers" type="text" placeholder="6 4 1 11 21 34 5 9 81 12">
    <br/>
   
    <input type="submit" value="Compute Stat">

    </form>