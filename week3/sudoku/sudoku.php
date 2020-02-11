<!DOCTYPE html>
<html>
<head>
    <style>
        table,th,td{
            border: 1px solid black; 
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<?php
    $sudoku_box = array(
        array(1, 4, 5),
        array(6, 3, 9),
        array(8, 2, 7),
    );
    
    echo "The following sudoku box <br/>";
    printBox($sudoku_box);
                    
    if (isValid($sudoku_box)){
        echo "is <strong>valid</strong>";
    }
    else {
        echo "is <strong>Invalid</strong>";
    }

    function printBox($sudoku_box){
        echo("<table>");
        foreach($sudoku_box as $row){
            echo("<tr>");
            foreach($row as $data){
                echo("<td>$data</td>");
            }
            echo("<tr>");
        }
        echo("</table>");
    }

    function isValid($sudoku_box){
        // a sudoku is valid if all boxes are filled with 1 to 9 once
        $sudoku_array = array();

        foreach($sudoku_box as $row) {
            foreach($row as $data){
                $sudoku_array[] = $data;
            }
        }

        sort($sudoku_array);

        // print_r($sudoku_array);

        $check = 1;
        // check that each array element is 
        //  - in order ( 1 to 9 )
        //  - and exist
        //  - if it does not exist $num and $check will not be the same
        foreach($sudoku_array as $num){
            if ($num != $check) {
                return False;
                break;
            }

            $check++;
        }

        return True;

    }
?>
</body>
</html>