<?php

require_once 'common.php';
// What is 'common.php'? Open and see what's inside!
// Reference: https://www.w3resource.com/php/classes-objects/php-object-oriented-programming.php#splautoload



$dao = new StarDAO();
$stars = $dao->getAll(); // Get an Indexed Array of Star objects

?>
<html>
<body>

    <?php
        // YOUR CODE GOES HERE

        echo("
            <table border='1'>
            <tr>
                <th>Photo</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Headline</th>
                <th>Edit Link</th>
            </tr>

        ");

        foreach ($stars as $star) {
            echo("
            <tr>
                <td><img src='./images/{$star->getPhoto()}'/></td>
                <td>{$star->getName()}</td>
                <td>{$star->getGender()}</td>
                <td>{$star->getHeadline()}</td>
                <td><a href='./edit.php?id={$star->getID()}'>Edit</a></td>
            </tr>
            ");
        }
    ?>
    
</body>
</html>