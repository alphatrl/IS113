<?php
// ?
include_once 'cars.php';
?>
<html>
<body>

    <ul>
    <?php
        // YOUR CODE GOES HERE
        // Display Car objects

        // print_r($cars);
        // $cars is already declared in cars.php
        
        foreach ($cars as $car) {

            $year = $car->getYear();
            $make = $car->getMake();
            $model = $car->getModel();
            $rating = $car->getRating();

            echo ("
                <li>
                    $year $make $model
                    <ul><li>Rating: $rating</li></ul>
                </li>");
        }
    ?>
    </ul>

</body>
</html>