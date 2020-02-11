<?php
// key: vegetable,  value: type
$vegTypeArr = [ 
    'asparagus' => 'stem',
    'cabbage'   => 'leafy', 
    'celery'    => 'stem',
    'lettuce'   => 'leafy', 
    'potato'    => 'root', 
    'spinach'   => 'leafy',
    'yam'       => 'root', 
];
?>

<html>
<body>
    <form action='process.php'>
        Leafy Vegetable 

        <select name='vegetable'>
            
            <?php
                // loop through the array
                foreach ($vegTypeArr as $vegetable => $type) {

                    // only get the leafy vegetables 
                    if ($type == 'leafy') {
                        echo("<option value=$vegetable>$vegetable</option>");
                    }
                }
            ?>

        </select>
        
        <input type='submit' />
    </form>
</body>
</html>