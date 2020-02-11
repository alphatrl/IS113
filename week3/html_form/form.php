<!DOCTYPE html>
<html>
<body>
<form>
<?php
    $numUsers  = 2;
    
    //write your codes here, change the value of the $numUsers to test

    // PART A
    // for ($i = 0; $i < $numUsers; $i ++){
    //   $num = $i + 1;
    //   echo("<font size=3>
    //           <u><b>User $num</b></u>
    //         </font><br>");

    //   echo("Name: <input type='text' placeholder='<Please enter name for User $num>' size='25'><br>");
    //   echo("Password: <input type='text'> <br><br>");
    // }

    // PART B
    for ($i = 0; $i < $numUsers; $i ++){
        $num = $i + 1;
        echo("<font size=3>
                <u><b>User $num</b></u>
                </font><br>");

        // 'Size' set the length of the textbox
        echo("Name: <input type='text' placeholder='<Please enter name for User $num>' size='25'><br>");
        echo("Password: <input type='text'> <br>");

        if ($num % 2 == 0) {
            echo("Age: <input type='text')> <br>");
        }

        echo("<br>");
    }
    

    $numUsers = 4;

?>
</form>
</body>
</html>
