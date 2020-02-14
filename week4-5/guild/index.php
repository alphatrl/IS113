<?php

// *** Do NOT change: start ***
// key: name of guild.  value: list of members aka heroes' name
$guilds = [ 
    'Black Star' => ['Jam', 'Nisa', 'Rose'],
    'Iconic' => ['Soo', 'Nisa'],
    'Crazy World' => ['Jam', 'Soo', 'Nisa'],
];


// key: member's name.  value: dictionary of member's attributes
$heroes = [
    'Jam'  => [ 'Strength' => 4, 'Magic' => 1 ],
    'Nisa' => [ 'Strength' => 3, 'Magic' => 3 ],
    'Rose' => [ 'Strength' => 4, 'Magic' => 2 ],
    'Soo'  => [ 'Strength' => 1, 'Magic' => 5 ],
];
// *** Do NOT change: end ***

?>

<html>
<body>
    <form method='post'>
        Guilds 

        <?php 

        // Display checkboxes

        foreach ($guilds as $guild => $members ) {
            $size = count($members);
            echo("
                <input type='checkbox' value='$guild' name='guilds[]'> $guild ($size) </input>
            ");
        }
        
        
        ?>

        <input type='submit' value='Get' name='submit'/>

        
    </form>

    <?php 
    // Part A
    // if (isset($_POST['submit'])) {

    //     // If no guild is selected
    //     if (!isset($_POST['guilds'])) {echo("<p>No guild selected</p>");}   
        
    //     else {
    //         $guild_selected = $_POST['guilds'];
            
    //         foreach ($guild_selected as $guild) {
    //             $member_list = $guilds[$guild];

    //             echo("$guild<br>");
    //             echo("<ol>");

    //             foreach ($member_list as $member) {
    //                 echo("<li>$member</li>");
    //             }
    //             echo("</ol><br>");
    //         }
            
    //     }
    // }
    ?>

    <?php 
    // Part B
    // if (isset($_POST['submit'])) {

    //     // If no guild is selected
    //     if (!isset($_POST['guilds'])) {echo("<p>No guild selected</p>");}   
        
    //     else {
    //         $guild_selected = $_POST['guilds'];
            
    //         foreach ($guild_selected as $guild) {
    //             $member_list = $guilds[$guild];

    //             echo("$guild<br>");
    //             echo("<ol>");

    //             foreach ($member_list as $member) {
    //                 // get attributes and display
    //                 $attributes = $heroes[$member];
                    
    //                 echo ("<li>$member : ");

    //                 foreach ($attributes as $type => $power) {
    //                     echo("$type $power ");
    //                 }

    //                 echo("</li>");
    //             }
    //             echo("</ol><br>");
    //         }
            
    //     }
    // }
    ?>

    <?php 
    // Part C
    if (isset($_POST['submit'])) {

        // If no guild is selected
        if (!isset($_POST['guilds'])) {echo("<p>No guild selected</p>");}   
        
        else {
            $guild_selected = $_POST['guilds'];

            echo ("
                <body>
                    <styles
                </body>
                <table border='1'>
                    <tr>
                        <th>Guild</th>
                        <th>Hero</th>
                        <th>Strength</th>
                        <th>Magic</th>
                    </tr>
            ");
            
            foreach ($guild_selected as $guild) {
                $member_list = $guilds[$guild];
                $guild_size = count($member_list);
                $guild_strength = 0;
                $guild_magic = 0;

                for ($i = 0; $i < $guild_size; $i ++) {
                    
                    $member = $member_list[$i];

                    // Add guild name before the first member name
                    if ($i == 0) {
                        $rowspan = $guild_size + 1; // to include the total
                        echo ("
                        <tr>
                            <td rowspan='$rowspan'>$guild</td>
                        ");
                    } else {
                        // else just add a <tr> 
                        echo("<tr>");
                    }

                    echo("<td>$member</td>");

                    // get attributes and display
                    $strength = $heroes[$member]['Strength'];
                    $magic = $heroes[$member]['Magic'];

                    // calculate total attributes
                    $guild_strength += $strength;
                    $guild_magic += $magic;

                    // display <img> muliplied by the value in $strength or $magic 
                    echo("<td>" . str_repeat("<img src='./star.jpg'>", $strength). "</td>");
                    echo("<td>" . str_repeat("<img src='./star.jpg'>", $magic). "</td>");

                    echo("</td></tr>");
                }

                // Display Guild Attributes
                echo("<tr>
                    <th>Total</th>
                    <th>$guild_strength</th>
                    <th>$guild_magic</th>
                </tr>");
            }

            echo ("</table>");
            
        }
    }
    ?>


</body>
</html>