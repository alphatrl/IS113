<?php


// Given this associative array, complete Parts A, B, C
$student_grades = [
    'Kee Hock' => ['A+', 'A', 'B+', 'A-'],
    'Debbie' => ['A', 'B+', 'A-', 'A'],
    'Patrick' => ['B', 'C', 'F', 'B-']
];

// stylesheet to look nice
echo("
<head>
    <style>
        table{border: 1px solid black;}
        th,td{border: 1px solid black;}
    </style>
</head>
");


//========================================
// Part A
// Your code goes here
echo("<h1>Part A</h1>");

echo("<table>");
echo("
    <tr>
        <th>Name</th>
        <th>Grades</th>
    </tr>
");
foreach ($student_grades as $name => $grades) {
    foreach($grades as $letter) {
        echo("
            <tr>
                <td>$name</td>
                <td>$letter</td>
            </tr>
        ");
    }
}

echo("</table>");


//========================================
// Part B
// Your code goes here

echo("<h1>Part B</h1>");
echo("<table>");
echo("<tr>
        <th>Name</th>
        <th>Grades</th>
    </tr>");

foreach ($student_grades as $name => $grades) {
    foreach($grades as $letter) {
        // if conditions are met, change accordingly using if - else       
        // A for ASIAN

        if ($letter == "A+" or $letter == "A") {
            $font_color = "blue";
            $font_size = 6;
        } else if ($letter == "A-") {
            $font_color = "green";
            $font_size = 5;
        } else {
            $font_color = "red";
            $font_size = 4;
        }

        echo("<tr>
                <td>$name</td>
                <td>
                    <font color='$font_color' size='$font_size'>$letter</font>
                </td>
            </tr>");
    }
    
}

echo '</table>';


//========================================
// Part C
// Your code goes here
echo("<h1>Part C</h1>");
echo("<table>");
echo("<tr>
        <th>Name</th>
        <th>Grades</th>
    </tr>");

foreach ($student_grades as $name => $grades){
    $no_of_grades = count($grades);
    $count = 0;

    foreach ($grades as $letter) {
        echo("<tr>");

        // only print the name once
        if ($count == 0)
            echo("<td rowspan='$no_of_grades'>$name</td>");

        // insert grades
        echo("<td>$letter</td>");

        echo("</tr>");
        $count ++;
    }
}

/** See the similarities if we hardcode the values
 *  <table>
 *      <tr>
 *          <td rowspan="4">Kee Hock</td>
 *          <td>A+</td>
 *      </tr>
 *      <tr><td>A</tr></td>
 *      <tr><td>B+</tr></td>
 *      <tr><td>A-</tr></td>
 *  </table>
 * 
 *  See the similarities between the hardcoded version and the foreach loop version
 *  The $count ensures the the name will be printed once
 */


echo '</table>';


?>