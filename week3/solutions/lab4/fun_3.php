<?php

if(isset($_GET["min"]) && isset($_GET["max"])) {

    $min = $_GET["min"];
    $max = $_GET["max"];


    $result = print_squares($min, $max);

    // print_squares_2 and print_squares_3 are also solutions you can experiment with
    //  $result = print_squares_2($min, $max);
    //  $result = print_squares_3($min, $max);

    echo($result);

}

    // Uses function floor(), pow(), sqrt()
    function print_squares ($min, $max) {

       // sqrt $max and get the floor of the number ($n)
       // square of $n to get perfect sq ($per_sq)
       // $per_sq - 1 and use it for step 1 
       // repeat step 1 - 3 until < $min

        $result = "";
        $num = $max;

        while ($num >= $min) {
            $floor = floor(sqrt($num));
            $perfect_sq = pow($floor, 2);
            $num = $perfect_sq - 1;

            if ($perfect_sq <= $max && $perfect_sq >= $min) {
                // We add the number discovered to the back to ensure
                // that the results are in ascending order
                // uncomment the 2nd $result line to see the difference
                $result = "$perfect_sq " . $result;
                // $result = $result . "$perfect_sq ";
            }
        }

        return $result . "<br><br>";
    }

    // Uses function ceil(), pow(), sqrt()
    function print_squares_2 ($min, $max) {
        // sqrt $min and get the ceil() of the number ($n)
        // square of $n to get perfect sq ($per_sq)
        // $per_sq + 1 and use it for step 1 
        // repeat step 1 - 3 until > $max

        $result = "";
        $num = $min;

        while($num <= $max) {
            $ceiling = ceil(sqrt($num));
            $perfect_sq = pow($ceiling, 2);
            $num = $perfect_sq + 1;

            if ($perfect_sq <= $max && $perfect_sq >= $min) {
                $result = $result . "$perfect_sq ";
            }

            return $result . "<br><br>";
        }
    }

    // Uses while loop and pow()
    function print_squares_3 ($min, $max) {
        $result = "";
        $square = 0;
        $index = 0;

        while ($square <= $max) {
            $square = pow($index, 2);
            $index ++;

            if ($square >= $min && $square <= $max) {
                $result .= "$square ";
            }
        }

        return $result . "<br><br>";
    }

?>


<form>

Enter an integer min: <input name="min" type="text">
<br/>
Enter another integer max: <input name="max" type="text">
<br/>

<input type="submit">

</form>