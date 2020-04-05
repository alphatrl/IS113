<?php

/*
    Name:

    Email:
*/

require_once 'include/common.php';

$errors = [];

if( $_POST['person_name'] == '' ) {
  $errors[] = 'Name on your credit card - this field is empty';
}

if( $_POST['card_number'] == '' ) {
  $errors[] = 'Credit card number - this field is empty';
}

if( strlen($_POST['card_number']) != 16 || !is_numeric($_POST['card_number']) ) {
  $errors[] = 'Credit card number must be 16-digit numeric';
}

if( strlen($_POST['card_month']) != 2 || !is_numeric($_POST['card_month']) ) {
  $errors[] = 'Expiration month must be 2-digit (e.g. 08 for August, 11 for November)';
}

if( strlen($_POST['card_year']) != 4 || !is_numeric($_POST['card_year']) ) {
  $errors[] = 'Expiration year must be 4-digit (e.g. 2021)';
}

if( count($errors) > 0 ) {
  $_SESSION['errors'] = $errors;
  header('Location: cart.php');
  exit;
}

$purchased_items = $_SESSION['cart'];
$dao = new InventoryItemDAO();
$dao->updateInventory($purchased_items);
unset($_SESSION);

?>
<html>
<head><title>Purchase Summary</title></head>
<body>

<h2>Thank you for purchasing!</h2>

<?php
$total_price = $_POST['total_price'];
echo("Amount of $total_price has been charged to your credit card.");

?>
<br>
Thank you.

<hr>
<a href='store.php'>Back to Store</a>

</body>
</html>
