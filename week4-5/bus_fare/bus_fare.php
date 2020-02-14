<!DOCTYPE html>
<html>
    <head>
        <title>Compute Bus Fare in Far Far Away Land</title>
    </head>
    <body>
        <?php 
            $fare = 0.0;

            // Please enter code here

            // All text field are already filled up
            // because of the required at the distance input
            // no need to validate for empty string

            $distance = (float) $_POST['distance'];
            $age = $_POST['age_group'];
            $time = $_POST['time'];

            $fare_per_km = 0.1; // default non peak
            if ($time == 'Peak') {$fare_per_km = 0.15;}

            $discount = 0; // default discount = adult
            if ($age = "children") {$discount = 0.5;}
            if ($age = "senior") {$discount = 0.25;}

            // do math
            $fare = $distance * $fare_per_km * (1 - $discount);

            // End of code

            echo "Fare is $" . $fare;
        ?>
    </body>
</html>