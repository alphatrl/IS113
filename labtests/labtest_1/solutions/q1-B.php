<?php

function is_divisible_by($num, $n) {
    if ($num % $n == 0) {return True;}
    return False;
}

if (isset($_GET['check'])) {
    $number_list = explode(',', $_GET['numbers']);
    $divisor = $_GET['divisor'];

    echo("<ul>");
    foreach ($number_list as $num) {
        $is_divisble = is_divisible_by($num, $divisor);

        echo("<li>$num is divisible by $divisor: ");

        if ($is_divisble) {echo("YES");}
        else {echo("NO");}

        echo("</li>");
    }
    echo("</ul>");
}

?>