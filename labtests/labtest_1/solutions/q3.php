<?php
// $students is an Array of:
//    Associative Arrays, where each Associative Array contains:
//        key (name) => value (string)
//        key (courses) => value (Array of Arrays)
$students = [
    [
        "name"    => 'Jong Un Kim',
        "courses" => [
            ['IS111', 'Intro Programming', 'MON', '1000', 1],
            ['CS102', 'Discrete Mathematics', 'TUE', '0830', 2],
            ['EE200', 'Intro to Circuits', 'TUE', '1330', 1],
            ['WRIT100', 'Writing and Reasoning', 'WED', '1000', 1],
            ['LIT380', 'Intro to Korean Literature', 'FRI', '1630', 1]
        ]
    ],
    [
        "name"    => 'Donald Trump',
        "courses" => [
            ['IS112', 'Data Management', 'TUE', '0830', 2],
            ['WRIT100', 'Writing and Reasoning', 'WED', '1000', 1],
            ['OBHR101', 'Leadership Team Building', 'WED', '1200', 2],
            ['IS113', 'Web Application Development', 'THU', '1500', 2],
            ['STAT202', 'Bayesian Logics', 'FRI', '1000', 1]
        ]
    ],
    [
        "name"    => 'Hugo Chavez',
        "courses" => [
            ['IS111', 'Intro Programming', 'MON', '1000', 1],
            ['IS112', 'Data Management', 'TUE', '0830', 2],            
            ['EE200', 'Intro to Circuits', 'TUE', '1330', 1],
            ['OBHR101', 'Leadership Team Building', 'WED', '1200', 2],
            ['STAT202', 'Bayesian Logics', 'FRI', '1500', 1]
        ]
    ]
];

// INPUT  : $students Array
// OUTPUT : Return an Array of student names (String)
function getStudentNames($students) {
    $arr = [];
    // Part A
    // YOUR CODE GOES HERE
    foreach ($students as $student) {
        $arr[] = $student['name'];
    }
    return($arr);
}

?>
<html>
<body>
    <form action='q3.php' method='POST'>
        Name:
        <select name='student_name'>
            <?php
                // Part A
                // YOUR CODE GOES HERE
                $student_names = getStudentNames($students); // DO NOT MODIFY THIS LINE
                // YOUR CODE CONTINUES HERE

                foreach($student_names as $name) {

                    // if name is selected before, keep the option shown
                    if (isset($_POST['student_name']) && $name == $_POST['student_name']) {
                        echo("<option selected value='$name'>$name</option>");
                    } else {
                        echo("<option value='$name'>$name</option>");
                    }
                }
            ?>
        </select>
        <input type='submit' value='Show Timetable' />
    </form>

    <?php
        // Part B
        if (isset($_POST['student_name'])) {
            $name = $_POST['student_name'];
        } else {
            $name = $student_names[0];
        }
            $days_of_week = ['MON', 'TUE', 'WED', 'THU', 'FRI'];
            $timings = [
                "0830" => "08.30am - 10:00am",
                "1000" => "10:00am - 11:30am",
                "1200" => "12:00nn - 1:30pm",
                "1330" => "1:30pm - 3:00pm",
                "1500" => "3:00pm - 4:30pm",
                "1630" => "4:30pm - 6:00pm"
            ];

            // get courses of selected student
            foreach($students as $student) {
                if ($student['name'] == $name) {$courses = $student['courses'];}
            }

            echo("<table border='1'>");

            // Settle timings
            echo("<tr><td></td>");
            foreach ($timings as $start => $time_string) {
                echo("<th>$time_string</th>");
            }
            echo("</tr>");

            // Settle courses
            foreach ($days_of_week as $day) {
                echo("<tr><td>$day</td>");
                
                $count = 0;

                foreach ($timings as $time => $value) {

                    $table_data = "";
                    $col_span = 1;
                    // check if any course exists within the timeslot
                    foreach ($courses as $course){
                        if ($course[2] == $day && $course[3] == $time) {
                            $table_data = $course[0] . '<br>' . $course[1];
                            $col_span = $course[4];
                        }
                    }

                    // to ensure that number of cols in table will be no more than 5
                    $count += $col_span; 

                    // if > 6, don't print a <td>
                    if ($count <= 6 ) {
                        echo("<td align='center' colspan='$col_span'>$table_data</td>");
                    }
                    
                }

                echo("</tr>");
            }

            echo("</table>");
    ?>
</body>
</html>