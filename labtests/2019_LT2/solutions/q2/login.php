<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';

# == Part A : ENTER CODE HERE ==

// If user input something
if (isset($_POST['empId'], $_POST['password'])) {
    $empID = $_POST['empId'];
    $password = $_POST['password'];

    $employeeDAO = new EmployeeDAO();
    $role = $employeeDAO->authenticate($empID, $password);

    if (!is_null($role)) {
        $_SESSION['empId'] = $empID;
        $_SESSION['role'] = $role;

        unset($_SESSION['countUnsuccessful']);

        header("Location: viewDetails.php");

    } else {
        // If countUnsuccessful is not set, set it
        if (!isset($_SESSION['countUnsuccessful'])) {
            $_SESSION['countUnsuccessful'] = 0;
        }

        $_SESSION['countUnsuccessful'] ++;
    }
}
 
?>

<html>
<body>

    <?php
        echo "<h1>Number of unsuccessful consecutive logins : {$_SESSION['countUnsuccessful']} </h1>";
        echo "<a href='login-view.html'>Back to Login";
    ?>

</body>
</html>
