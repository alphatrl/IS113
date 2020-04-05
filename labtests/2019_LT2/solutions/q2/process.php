<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';
require_once 'model/protect.php';

# == Part D : ENTER CODE HERE == 
if (isset($_GET['empId'], $_GET['newPassword'])) {
    // Update password
    $employeeDAO = new EmployeeDAO();
    $status = $employeeDAO->updatePassword($_GET['empId'], $_GET['newPassword']);

    if ($status) {
        echo("Password updated. You are logged out");
        $_SESSION = [];
    } else {
        echo("Password not updated");
    }
}

else {
    header("Location: login-view.html");
}
?>