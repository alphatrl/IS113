<?php

?>
<html>
<body>
    <?php

    // print_r($_POST);

    // Fruits not selected
    if (!isset($_POST['fruit'])) {
        echo("<h1>Please select a fruit</h1>");
    }
    
    else {
        $fruit_lists = $_POST['fruit'];
        // print_r($fruit_lists);

        echo("<table border='1'>");

        foreach ($fruit_lists as $fruit) {
            // print fruit pictures
            echo("<tr><td><img src='./$fruit.jpg'> </td></tr>");
        }

        echo("</table>");

    }




    ?>
</body>
</html>