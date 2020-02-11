<?php
// key: vegetable,  value: quantity
$vegQtyArr = [ 
    'cabbage'   => 3, 
    'lettuce'   => 3,
    'spinach'   => 2,
];

// get submitted value of form field 'vegetable'
$veg = $_GET['vegetable'];
?>

<html>
<body>
    <?php
        // get veg count from array
        $veggie_count = $vegQtyArr[$veg];
        echo "
            <h1>$veg</h1>
        ";

        // loop through the veggie_count to print the image out
        for ($i = 0; $i < $veggie_count; $i++) {
            echo("
                <img src='./img/$veg.jpg'>
            ");
        }

    ?>
</body>
</html>