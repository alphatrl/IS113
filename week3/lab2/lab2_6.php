<?php
    $amount = $_GET["amount"];
    # Write code here

    $amount_cents = (float) $amount * 100;
    $coins_array_cents = array(100, 50, 20, 10, 5);
    $coins_string_array = array("1$", "50c", "20c", "10c", "5c");   

    echo("Entered amount: $amount <br>");

    for ($i = 0; $i < count($coins_array_cents); $i++) {

        $coins = $coins_array_cents[$i];

        $num =  intdiv($amount_cents,  $coins);

        # rounded up because of getting a weird round off error
        $amount_cents = round($amount_cents - ($num * $coins));

        if ($num != 0) {
            echo("Number of $coins_string_array[$i]: $num <br>");
        }
    }
    # End of code
    
?>