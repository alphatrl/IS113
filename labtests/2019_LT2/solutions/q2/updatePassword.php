<?php
/*
    Name:

    Email:
*/

require_once 'model/common.php';
require_once 'model/protect.php';

# == Part C : ENTER CODE HERE == 
if (isset($_GET['empId'])) {
    $empId = $_GET['empId'];
    $employeeDAO = new EmployeeDAO();
    $employee = $employeeDAO->getEmployee($empId);
    $newPassword = generateRandomPassword();

    echo("EmployeeID: $empId </br>");
    echo("Name: {$employee->getName()} </br>");
    echo("Current Password: {$employee->getPassword()} </br>");

    echo("
        <form action='process.php'>
            <input type='hidden' value='$empId' name='empId'>
            
            New Password: 
            <input type='text' value='$newPassword' name='newPassword'>

            </br>

            <input type='submit' value='Update'/>
        </form>
    ");
}


function generateRandomPassword() {
# == Part C : ENTER CODE HERE == 
    $alphabet = "abcdefghijklmnopqrstuvwxyz";
    $numbers = "0123456789";
    $maxLen = 8;
    $newPassword = "";

    // Random generate character and add to string
    for ($i = 0; $i <= $maxLen; $i ++) {
        // Determine if lowerAlpha, upperAlpha or numbers
        $randomCharType = random_int(1, 3);

        // I will use 1 for lowercase,
        // 2 for uppercase and 3 for numbers
        // Why? BECAUSE I FUCKING CAN
        if ($randomCharType === 1) {
            // random find a lowerAlpha Char
            $len = random_int(0, strlen($alphabet) - 1);
            $char = $alphabet[$len];

        } elseif ($randomCharType === 2 ) {
            // random find a upperAlpha Char
            $len = random_int(0, strlen($alphabet) - 1);
            $char = strtoupper($alphabet[$len]);

        } else {
            // random find a number
            $len = random_int(0, strlen($numbers) - 1);
            $char = $numbers[$len];

        }
        $newPassword .= $char;
    }

    return $newPassword;
}

?>