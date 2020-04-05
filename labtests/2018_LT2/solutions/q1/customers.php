<?php
/*
    Name:

    Email:
*/
?>

<?php 
require_once("./include/common.php");

$customerDAO = new CustomerDAO();
$customers = $customerDAO->getAll();

?>

<html>
<head>
  <title>Customer Search All</title>
</head>
<body>
  <h2>All Customers</h2>

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
