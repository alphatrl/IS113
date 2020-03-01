<?php
    $count = $_GET["count"];
    $start = $_GET["start"];
    # Write code here

    echo("Entered count of ascending sequence: $count<br>");
    echo("Enter starting digit: $start<br>");

    // Convert to integer
    $count = (int) $count;
    $start = (int) $start;
    $index = 0;

    $print_string = "";

    // String = start, and print the string
    // +1 to start and add to string
    // repeat till condition is met

    while ($index < $count) {
        $print_string .= $start;
        echo("$print_string ");

        $index ++;
        $start ++;
    }

    # End of code
?>
