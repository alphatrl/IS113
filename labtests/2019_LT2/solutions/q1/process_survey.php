<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';

?>

<!DOCTYPE html>
<html>
    <body>

		<img src="images/sis.png">

		<h1>Survey: Summary</h1>

        <?php
            
            # Ensure that survey must always be taken from the beginning
            if (!isset($_POST['page2'])) {
                header("Location: survey1.php");
                exit;
            }
            #===

            # == Part B (Display student name and preferences): ENTER CODE HERE ==

            $name = $_SESSION['name'];
            $class = $_POST['class_length'];
            $sem = $_POST['sem_length'];

            echo("
                You entered: </br></br>

                <table border='1'>
                    <tr>
                        <th>Name:</th>
                        <td>$name</td>
                    </tr>
                    <tr>
                        <th>Class Length:</th>
                        <td>$class</td>
                    </tr>
                    <tr>
                        <th>Semester Length:</th>
                        <td>$sem</td>
                    </tr>
                </table>

                </br></br>
            ");

            # ===
            
            # == Part B (Add a new response to the database and display status): ENTER CODE HERE ==
            
            $responseDOA = new ResponseDAO();
            $isSuccess = $responseDOA->addResponse($name, $class, $sem);

            if ($isSuccess) {
                echo("<strong>Response saved successfully</strong>");
            } else {
                echo("<strong>Response was not saved successfully</strong>");
            }


            # ====
  
        ?>

</body>
</html>