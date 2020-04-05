<?php

/*
    Name:

    Email:
*/

require_once 'include/common.php';

// an array of error messages (if any)
$errors = [];

// Get username and password from FORM submission
$username = $_POST['username'];
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];

// Code here

// Check if any input is empty
if (empty($username)) { $errors[] = "Username field is empty"; }
if (empty($current_password)) { $errors[] = "Current password field is empty"; }
if (empty($new_password[0])) {$errors[] = "New password is empty";}
if (empty($new_password[1])) {$errors[] = "Verify new password is empty";}

if (!empty($errors)) {
  $_SESSION['my-errors'] = $errors;
  header('Location: reset-view.php');
}

$accountDAO = new AccountDAO();

// At this point, we assume that everything is input into the fields
// We will authenticate user and password
if (!$accountDAO->authenticate($username, $current_password)) {
  $errors[] = "Wrong username/password";
  $_SESSION['my-errors'] = $errors;
  header('Location: reset-view.php');
}

// Validate that the 2 password are the same
if ($new_password[0] !== $new_password[1]) {
  $errors[] = "Your new passwords do not match";
  $_SESSION['my-errors'] = $errors;
  header('Location: reset-view.php');
}

// At this point, the passwords are validated
$hashed = password_hash($new_password[0], PASSWORD_DEFAULT);
$user = $accountDAO->retrieve($username);
$accountDAO->reset_password($user->id, $hashed);


?>
<html>
<head>
  <title>Reset</title>
</head>
<body>
Success!
</body>
</html>
