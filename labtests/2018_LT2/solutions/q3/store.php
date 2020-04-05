<?php

/*
    Name:

    Email:
*/

require_once 'include/common.php';

// Clear previously stored cart
if( isset ($_SESSION['cart']) ) {
  unset($_SESSION['cart']);
}

?>

<html>
<head>
  <title>Show All Items in Current Inventory</title>
</head>
<body>

  <h2>All Available Items</h2>

  <form method='POST' action='cart.php'>

    <table border='1'>
      <tr>
        <th>Item ID</th>
        <th>Item Name</th>
        <th>Quantity</th>
        <th>Price (per item)</th>
      </tr>

      <?php 
      $dao = new InventoryItemDAO();
      $inventory = $dao->getAll();

      foreach ($inventory as $item) {
        if ($item->quantity > 0) {
          echo("<tr>
            <td>{$item->item_id}</td>
            <td>{$item->item_name}</td>
         ");

          // settle quantity
          echo("<td><select name='quantity[]'>");
          for($i = 0; $i <= $item->quantity; $i++) {
            echo("<option value='{$item->item_id}_$i'>$i</option>");
          }
          echo("</select>");

          echo("<td>{$item->price}</td>");
          echo("</tr>");
          
        }
        
      }
      
      ?>

    </table>
    <br>
    <input type='submit' value='Add Items to Cart'>

  </form>


</body>
</html>
