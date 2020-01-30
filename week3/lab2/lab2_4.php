<?php
    $binary_num = $_GET["binary_num"];
    # Write code here

    for ($i = 0; $i < strlen($binary_num); $i++) {
        $char = (int) $binary_num[$i];

        if ($char == 0) echo("False<br>");
        if ($char == 1) echo("True<br>");  
    }

    # End of code
?>