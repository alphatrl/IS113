<?php

    /*
   
    1.	Examine arr_1.php given to you. Complete the function get_numbers 
    to return a new array that contains only integers 
    between min and max parameters. Your code should not modify 
    the original array. 

    */

    $numbers = [4,10,12,28,24,18,5,20,15,21,30,22,21,14,17,28,26,24,6,8,15];
    $min = 10;
    $max = 20;

    // add your code here
    function get_numbers($numbers, $min, $max) {

        $sorted_list = array();

        foreach ($numbers as $num) {
            // if $num is within range, add to $sorted_list
            if ($num >= $min && $num <= $max) {
                $sorted_list[] = $num;
            }
        }
        return $sorted_list;
    }
    
?>

<html>

<?php
$sorted = get_numbers($numbers, $min, $max);

echo("After function is called: [ ");
foreach ($sorted as $num) {
    echo("$num ");
}
echo(" ]<br>");

?>

</html>