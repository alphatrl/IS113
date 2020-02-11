<!DOCTYPE html>
<html>
<body>
<?php
    $course_registration = array(
        "Course1" => array('Bob', 'Ann', 'Anothony', 'Andrew'),
        "Course2" => array("Bob", "John", "Cain"),
        "Course3" => array("John", "Jill", "Cain"),
        "Course4" => array("Bob", "Jane")
    );

    $class_register_count = array();

    foreach ($course_registration as $course => $class_list) {
        foreach ($class_list as $student) {
            $count = 0;

            // if student is inside $class_register_count, update $count
            if(array_key_exists($student, $class_register_count)) {
                $count = $class_register_count[$student];
            }

            // update class count by 1 and save
            $count ++;
            $class_register_count[$student] = $count;
        }
    }

    foreach ($class_register_count as $name => $count) {
        echo("$name registers for $count courses<br>");
    }
?>
</body>
</html>
