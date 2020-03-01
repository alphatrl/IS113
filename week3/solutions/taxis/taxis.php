<!DOCTYPE html>
<html>
<body>
<?php
    $taxis = array(
        array(
            "Taxi1" => 50,
            "Taxi2" => 25,
            "Taxi3" => 27,
        ),
        array(
            "Taxi1" => 40,
            "Taxi2" => 34,
            "Taxi3" => 17,
        ),
        array(
            "Taxi1" => 60,
            "Taxi2" => 25,
        ),
        array(
            "Taxi1" => 10,
            "Taxi3" => 47,
        ),
    );

    $taxi_trips = array();

    foreach($taxis as $taxi_list) {
        foreach ($taxi_list as $car => $trips) {
            $count = 0;
            
            // if taxi in complete, update list 
            if (array_key_exists($car, $taxi_trips)) {
                $count = $taxi_trips[$car];
            }

            $count += $trips;
            $taxi_trips[$car] = $count;
        }
    }

    foreach ($taxi_trips as $car => $trips) {
        echo("$car made $trips trips<br>");
    }
?>
</body>
</html>
