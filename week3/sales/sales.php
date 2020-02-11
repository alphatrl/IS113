<!DOCTYPE html>
<html>
<body>
<?php
    $sales_arr = array(
        1 => array(1000, 750, 500, 900),
        2 => array(200, 600, 700, 800),
        3 => array(300, 650, 780, 890),
        4 => array(600, 700, 800, 900),
        5 => array(670, 550, 500, 700)
    );

    foreach ($sales_arr as $year => $sales_array) {
        $sum = 0.0;

        foreach($sales_array as $sale) {
            $sum += $sale;
        }

        $average = $sum / count($sales_array);

        echo("Average Sales in Year $year: $average<br>");
    }
?>
</body>
</html>
