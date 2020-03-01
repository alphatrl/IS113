<?php

function is_divisible_by($num, $n) {
    if ($num % $n == 0) {return True;}
    return False;
}

// Main method
if (isset($_POST['check'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $div = $_POST['divisor'];

    $check_divisble = array($num1, $num2, $num3);

    echo("<ul>");
    foreach($check_divisble as $num) {
        $is_divisible = is_divisible_by($num, $div);

        echo("<li>$num is divisible by $div: ");

        if($is_divisible) {
            echo ("YES");
        } else {
            echo("NO");
        }

        echo("</li>");
    }
    echo("</ul>");
}

?>
