<?php
    $income = $_GET["income"];
    $income_above_base = 0;
    $tax_payable = 0;

    # Write code here
    $income = (float) $income;

    if ($income < 30000) {
        // first 20000
        $min_tax = 0;
        $min_income = 20000;
        $tax_rate = 2;

    } elseif ($income < 40000) {
        // first 30000
        $min_tax = 200;
        $min_income = 30000;
        $tax_rate = 3.5;

    } elseif ($income < 80000) {
        // first 40000
        $min_tax = 550;
        $min_income = 40000;
        $tax_rate = 7;

    } elseif ($income < 120000) {
        // first 80000
        $min_tax = 3350;
        $min_income = 80000;
        $tax_rate = 11.5;

    } elseif ($income < 160000) {
        // first 120000
        $min_tax = 7950;
        $min_income = 12000;
        $tax_rate = 15;

    } elseif ($income < 200000) {
        // first 160000
        $min_tax = 13950;
        $min_income = 160000;
        $tax_rate = 18;

    } else {
        // more than 200000
        $min_tax = 21150;
        $min_income = 200000;
        $tax_rate = 20;

    }

    if ($income > $min_income) 
        $income_above_base = $income - $min_income;

    $tax_payable = $min_tax + ($income_above_base * ($tax_rate / 100));

    echo("Input personal income: $income<br>");
    echo("Tax payable: $$tax_payable<br>");

    # End of code
?>