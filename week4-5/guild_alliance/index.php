<?php

// *** Do NOT change: start ***
// key: name of alliance.  value: list of member guilds' name
$alliances = [
    'All Stars' => ['Black Star'],
    'Iconic' => ['Voice', 'Rapper', 'Serious'],
    'Duel' => ['Ak Family', 'Ukulele'],
];

// key: name of guild.  value: list of members aka heroes' name
$guilds = [ 
    'Serious'       => ['Yun', '15 cm'],
    'Ukulele'       => ['Terry', 'Lee Chi'],
    'Rapper'        => ['Rain', 'Bob'],
    'Ak Family'     => ['Ak Hyuk', 'Ak Hyun', 'Ak Pa', 'Ak Ma'],
    'Voice'         => ['June', 'Chan', 'Dong'],
    'Black Star'    => ['Jam', 'Ni Sa', 'Rose', 'Soo Ya'],
];


// key: member's name.  value: dictionary of member's attributes
$heroes = [
    'Chan'      => [ 'Strength' => 2, 'Magic' => 4 ],
    'June'      => [ 'Strength' => 5, 'Magic' => 0 ],
    'Ak Hyun'   => [ 'Strength' => 1, 'Magic' => 5 ],
    'Terry'     => [ 'Strength' => 3, 'Magic' => 5 ],
    'Rain'      => [ 'Strength' => 2, 'Magic' => 4 ],
    'Ak Pa'     => [ 'Strength' => 3, 'Magic' => 5 ],
    'Bob'       => [ 'Strength' => 5, 'Magic' => 2 ],
    '15 cm'     => [ 'Strength' => 2, 'Magic' => 3 ],
    'Lee Chi'   => [ 'Strength' => 4, 'Magic' => 4 ],
    'Jam'       => [ 'Strength' => 4, 'Magic' => 1 ],
    'Ak Ma'     => [ 'Strength' => 5, 'Magic' => 5 ],
    'Ni Sa'     => [ 'Strength' => 3, 'Magic' => 3 ],
    'Rose'      => [ 'Strength' => 4, 'Magic' => 2 ],
    'Soo Ya'    => [ 'Strength' => 1, 'Magic' => 5 ],
    'Dong'      => [ 'Strength' => 3, 'Magic' => 1 ],
    'Ak Hyuk'   => [ 'Strength' => 2, 'Magic' => 4 ],
    'Yun'       => [ 'Strength' => 3, 'Magic' => 3 ],
];
// *** Do NOT change: end ***


function genGuildStats($heroes, $guild_heroes) {
    /**
     *  This function finds the minimum and maximum stats 
     *  for the strength and magic 
     * 
     *  It returns a nested array representing the stats
     *  [
     *      Min => [Strength => int, Magic => int],
     *      Max => [Strength => int, Magic => int]
     *  ]
     */
    
    // Set the variables to the first hero stats
    $min_mag = $heroes[$guild_heroes[0]]['Magic'];
    $min_str = $heroes[$guild_heroes[0]]['Strength'];
    $max_mag = $heroes[$guild_heroes[0]]['Magic'];
    $max_str = $heroes[$guild_heroes[0]]['Strength'];
    
    foreach ($guild_heroes as $hero) {
        $stats = $heroes[$hero];
        $magic = $stats["Magic"];
        $strength = $stats["Strength"];

        // Update min and max values
        if ($min_mag > $magic) {$min_mag = $magic;}
        if ($max_mag < $magic) {$max_mag = $magic;}
        if ($min_str > $strength) {$min_str = $strength;}
        if ($max_str < $strength) {$max_str = $strength;}
    }

    return [
        'Min' => ["Strength" => $min_str, "Magic" => $min_mag],
        'Max' => ["Strength" => $max_str, "Magic" => $max_mag]
    ];
}

function getAllianceRowspan($guilds, $member_guilds) {
    /**
     * Find the number of rowspan required for an alliance
     * Get the size of the guilds in the alliance
     * Add +2 row per guild to account for the min and max
     * 
     * Return an int
     */
    
    $count = 0;
    
    foreach ($member_guilds as $member) {
        $count += count($guilds[$member]) + 2;
    }

    return $count;
}

?>

<html>
<body>
    <form method='post'>
        Alliances 

        <?php 
        // Display Checkboxes
        foreach ($alliances as $alliance => $guild) {
            echo("
                <input type='checkbox' value='$alliance' name='alliances[]'> $alliance </input>
            ");
        }
        ?>

        <input type='submit' name='btnGet' value='Get'/>
    </form>

    <?php
    if(isset($_POST["btnGet"])) {
        if (!isset($_POST["alliances"])) {
            echo ("
                <p>No alliance selected</p>
            ");
        }

        else {

            $alliance_list = $_POST['alliances'];

            echo("
            <table border='1'>
            <tr>
                <th> Alliance </th>
                <th> Guild </th>
                <th> Hero </th>
                <th> Strength </th>
                <th> Magic </th>
            </tr>       
            ");

            foreach ($alliance_list as $allianceName) {

                $allianceMember = $alliances[$allianceName];

                $rowCount = getAllianceRowspan($guilds, $allianceMember);

                echo("<tr><td rowspan='$rowCount'>$allianceName</td>");

                for ($i = 0; $i < count($allianceMember) ; $i++) {
                    $guildName = $allianceMember[$i];
                    $guildMembers = $guilds[$guildName];
                    $guildSize = count($guildMembers);
                    $guildRows = $guildSize + 2;

                    // if first element, do not use a tr tag because it comes
                    // immediately after <tr>$allianceName
                    if ($i == 0) {echo("<td rowspan='$guildRows'>$guildName</td>");}
                    else {echo("<tr><td rowspan='$guildRows'>$guildName</td>");}

                    // Iterate through the members in the guild
                    foreach ($guildMembers as $hero) {
                        $stats = $heroes[$hero];
                        $str = $stats["Strength"];
                        $mag = $stats["Magic"];

                        echo("<td>$hero</td>");
                        echo("<td>" . str_repeat("<img src='./star.jpg'>", $str) . "</td>");
                        echo("<td>" . str_repeat("<img src='./star.jpg'>", $mag) . "</td>");
                        echo("</tr>");
                    }

                    // Showcase MIN & MAX stats
                    $stats = genGuildStats($heroes, $guildMembers);
                    foreach ($stats as $header => $data) {
                        $str = $data['Strength'];
                        $mag = $data['Magic'];
                        echo("
                        <tr>
                            <th>$header</th>
                            <th>$str</th>
                            <th>$mag</th>
                        </tr>
                        ");
                    }
                }
            }

            echo("</table>");
        }
    }
    
    ?>
        

</body>
</html>