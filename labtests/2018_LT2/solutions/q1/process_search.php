<?php

/*
    Name:

    Email:
*/

// Form Input Fields
require_once("./include/common.php");

// Redirect if nothing is set
if (!isset($_POST['gender'], $_POST['age_range'], $_POST['interests'])) {
  header("Location: ./search.html");
}

$gender = $_POST['gender'];
$age_range = $_POST['age_range'];
$interests = $_POST['interests'];

$min_age = '';
$max_age = '';
if($age_range == 1) {
  $min_age = 13;
  $max_age = 17;
}
else if($age_range == 2) {
  $min_age = 18;
  $max_age = 30;
}
else if($age_range == 3) {
  $min_age = 31;
  $max_age = 40;
}
else if($age_range == 4) {
  $min_age = 41;
  $max_age = 55;
}
else {
  $min_age = 56;
  $max_age = 99;
}

$dao = new CustomerDAO();
$customers = $dao->getCustomers($gender, $min_age, $max_age, $interests);

?>

<html>
<head>
  <title>Customer Search</title>
</head>
<body>
  <h2>Search Results</h2>

  <table border='1'>
    <tr>
      <th>ID</th>
      <th>Gender</th>
      <th>Age</th>
      <th>Music</th>
      <th>Fashion</th>
      <th>Sports</th>
      <th>Electronics</th>
    </tr>

    <?php
      foreach($customers as $customer) {

        $interests = $customer->interests;
        echo("
          <tr>
            <td>{$customer->id}</td>
            <td>{$customer->gender}</td>
            <td>{$customer->age}</td>
        ");

        foreach ($interests as $interest=>$type) {
          if ($type) {
            echo '<td>Yes</td>';
          } else {
            echo '<td>No</td>';
          }
        }
      }
    
    ?>

  </table>

</body>
</html>
