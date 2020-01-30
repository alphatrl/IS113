<?php
    $prev_balance = $_GET['prev_balance'];
    $paid_amount = $_GET['paid_amount'];
    $day_payment_made = $_GET['day_payment_made'];
    $interest_rate = $_GET['interest_rate'];

    # Write code here
    $DAYS_IN_MONTH = 31;

    # Step 1
    $totalNet = $prev_balance * $DAYS_IN_MONTH;
    
    # Step 2
    $paymentCal = $paid_amount * ($DAYS_IN_MONTH - $day_payment_made);

    # Step 3
    $diff = $totalNet - $paymentCal;

    # Step 4
    $aveDailyBalance = $diff / $DAYS_IN_MONTH;

    # Step 5
    $interestCharge = $aveDailyBalance * ($interest_rate / 100);

    echo("Previous balance is $prev_balance <br>");
    echo("Payment of $$paid_amount was made on 
            day $day_payment_made of the billing cycle<br>");
    echo("Interest on outstanding amount is $$interestCharge")

    # End of code

?>