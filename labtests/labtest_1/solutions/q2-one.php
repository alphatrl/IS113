<?php

?>
<html>
<body>
    <?php
    // PART B
    // If button is clicked without selecting fruits
    if (isset($_POST['send']) && !isset($_POST['fruit'])) {
        echo ("<h1>Please select a fruit</h1>");
    }

    elseif (isset($_POST['fruit'])) {
        $fruit_list = $_POST['fruit'];
        $fruit_count = count($fruit_list);
        
        // Fruit Count
        if ($fruit_count > 1) {
            echo("<h1>You selected " . count($fruit_list) . " fruits</h1>");
        } else {
            echo("<h1>You selected " . count($fruit_list) . " fruit</h1>");
        }

        // Get fruit images
        echo("<table border='1'>");
        
        foreach($fruit_list as $fruit) {
            echo("
            <tr><td>
                <img src='./$fruit.jpg'>
            </td></tr>
            ");
        }

        echo("</table>");
    }


    ?>
    <form method='post' action='q2-one.php'>
        <input type="checkbox" value="apple" name="fruit[]">Apple
        <input type="checkbox" value="orange" name="fruit[]">Orange
        <input type="checkbox" value="pear" name="fruit[]">Pear
        <br>
        <input type='submit' name='send'>
    </form>
</body>
</html>