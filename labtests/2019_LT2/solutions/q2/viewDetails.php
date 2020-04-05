<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';
require_once 'model/protect.php';

# == Part B : ENTER CODE HERE == 

// get childrenList
// returns a string containing children names and age to display in HTML data
// or return None
function childrenTableData($childrenList) {
    if (empty($childrenList)) {
        return "None";
    }

    $tableData = "";

    foreach ($childrenList as $name => $age) {
        $tableData .= "$name : $age <br>";
    }
    return $tableData;
}

// get spouseName
function getSpouseName($spouse) {
    if ($spouse != null) {
        return $spouse->getSpouseName();
    }

    return "None";
}

$employeeDAO = new EmployeeDAO();
$role = $_SESSION['role'];
$empId = $_SESSION['empId'];

$employee = $employeeDAO->getEmployee($empId);

if ($role == "Admin"){
    // Admin Table

    $employeeList = $employeeDAO->getAllEmployees();

    echo("
        <table border='1'>
        <tr>
            <th>Employee ID</th>
            <th>Name</th>
            <th>Spouse</th>
            <th>Child</th>
            <th>Password</th>
        </tr>
    ");

    foreach($employeeList as $employee) {
        $tempId = $employee->getEmpId();
        
        // Get spouse and children
        $spouse = $employeeDAO->getSpouse($tempId);
        $childrenList = $employeeDAO->getChildren($tempId);

        $spouseName = getSpouseName($spouse);
        $childrenData = childrenTableData($childrenList);

        echo("
            <tr>
                <td>$tempId</td>
                <td>{$employee->getName()}</td>
                <td>$spouseName</td>
                <td>$childrenData</td>
                <td>
                    <a href='./updatePassword.php?empId=$tempId'>
                        {$employee->getPassword()}
                    </a>
                </td>
            </tr>
        ");
    }

    echo("</table>");

} elseif ($role == "User") {
    // Employee table
    
    // Get spouse and children 
    $spouse = $employeeDAO->getSpouse($empId);
    $childrenList = $employeeDAO->getChildren($empId);

    $spouseName = getSpouseName($spouse);
    $childrenData = childrenTableData($childrenList);
    
    echo("
        <table border='1'>
            <tr>
                <th>Employee ID</th>
                <th>Name</th>
                <th>Spouse</th>
                <th>Child</th>
            </tr>
            <tr>
                <td>$empId</td>
                <td>{$employee->getName()}</td>
                <td>$spouseName</td>
                <td>$childrenData</td>
            </tr>
        </table>


        You are logged out
    ");

    $_SESSION = [];
}

?>
