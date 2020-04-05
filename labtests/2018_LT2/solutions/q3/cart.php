<?php

/*
    Name:

    Email:
*/

require_once 'include/common.php';

$selected_items = []; // associative array, key = item_id, value = quantity

if( !isset($_SESSION['cart']) && isset($_POST['quantity'])) {
  $items_array = $_POST['quantity']; // array

  foreach($items_array as $item) {
    $parts = explode('_', $item);
    $item_id = $parts[0];
    $quantity = $parts[1];
    if($quantity > 0) {
      $selected_items[$item_id] = $quantity;
    }
  }
  // Save this cart as a Session variable
  $_SESSION['cart'] = $selected_items;
}
else {
  $selected_items = $_SESSION['cart'];
}
?>

<html>
<head><title>Purchase Page</title></head>
<body>

  <h1>Shopping Cart</h1>

  <?php
    printErrors();
  ?>

  <form method='POST' action='purchase.php'>
    <table border='1'>
      <tr>
        <th>Item ID</th>
        <th>Item Name</th>
        <th>Quantity Selected</th>
        <th>Price (per unit)</th>
        <th>Total</th>
      </tr>

      <?php
        $dao = new InventoryItemDAO();
        $cart_total_price = 0;

        // Code here
        $cart = $_SESSION['cart'];

        foreach ($cart as $item_id => $qty) {
          $name = $dao->getItemName($item_id);
          $price = $dao->getItemPrice($item_id);
          $total = $price * $qty;
          $cart_total_price += $total;

          echo("
            <tr>
              <td>$item_id</td>
              <td>$name</td>
              <td>$price</td>
              <td>$qty</td>
              <td>$total</td>
            </tr>
          ");
        }

        echo "<tr>
               <td colspan='4'><b>Total</b></td>
               <td>$cart_total_price</td>
             </tr>";
      ?>
    </table>


    <?php
      if( $cart_total_price > 0 ) {
        echo("<form action='purchase.php' method='POST'>");
        echo("<input type='hidden' value='$cart_total_price' name='total_price'");
    ?>
        <hr>
        <h2>Payment Details</h2>
        Name on Credit Card: <input type='text' size='30' name='person_name' value='Kim Jong Un'>
        <br>
        Credit Card Number: <input type='text' size='30' name='card_number' value='1234555577778899'>
        <br>
        Expiration Date: <input type='text' name='card_month' size='2' value='05'> / <input type='text' name='card_year' size='4' value='2020'> MM / YYYY (e.g. 08/2020)
        <br><br>
        <input type='submit' value='Click to Confirm Purchase'>
    <?php
      echo("</form>");
      }
    ?>
  </form>
<hr>
<a href='store.php'>Back to Store</a>

</body>
</html>
