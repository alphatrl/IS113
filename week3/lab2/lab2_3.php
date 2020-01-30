<?php
    $n = $_GET["number"];
      
    # Write code here
    $index = 1;
    $sum_of_factors = 0;
    $factor_array = array();

    # find all factors
    while ($index < $n) {
        # if is factor, add into array
        if ($n % $index == 0) {
            $factor_array[] = $index;
    
        }
        $index ++;
    }

    # add factors up together

    foreach ($factor_array as $factor) {
        if ($factor != $n) {
            $sum_of_factors += $factor;
        }
    }

    if ($sum_of_factors == $n) {
        echo("Yes, $n is a perfect number");
    } else {
        echo("$n is not a perfect number");
    }

    # End of code

?>