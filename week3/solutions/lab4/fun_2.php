<?php

function sum_of_powers($num, $condition) {
    $sum = 0;

    // we have to calculate this power: $num ** $condition
    // thus, int the loop, we use 
    // $i <= $condition and not $i < $condition
    for ($i = 0; $i <= $condition; $i++) {
        $sum += $num ** $i;
    }

    return $sum;
}

// add your code here
if (isset($_GET['m']) && isset($_GET['n'])) {
    $num = (int) $_GET['m'];
    $condition = (int) $_GET['n'];

    $sum = sum_of_powers($num, $condition);

    echo("Sum of all powers is $sum<br><br>");
}
    
?>


<form>

Enter an integer m: <input name="m" type="text">
<br/>
Enter another integer n: <input name="n" type="text">
<br/>

<input type="submit">

</form>