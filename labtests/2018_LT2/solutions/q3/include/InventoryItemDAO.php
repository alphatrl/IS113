<?php

/*
    Name:

    Email:
*/

require_once 'common.php';

class InventoryItemDAO {

  // This method returns all items currently in inventory.
  // Returns an array of Item objects.
  function getAll() {
    $conn_manager = new ConnectionManager();
    $conn = $conn_manager->getConnection();

    $sql = "SELECT A.item_id as item_id,
                   B.item_name as item_name,
                   A.quantity as quantity,
                   B.item_price as price
            FROM inventory as A, item as B
            WHERE A.item_id = B.id";

    $stmt = $conn->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    $inventory_items = [];
    while( $row = $stmt->fetch() ) {
      $inventory_items[] = new InventoryItem(
        $row['item_id'],
        $row['item_name'],
        $row['quantity'],
        $row['price']
      );
    }

    $stmt->closeCursor();
    $conn = null;

    return $inventory_items; // Return an array of InventoryItem objects (if found any)
  }

  // This method returns 'item name' (string) given an item's ID.
  function getItemName($item_id) {
    $conn_manager = new ConnectionManager();
    $conn = $conn_manager->getConnection();

    $sql = "SELECT item_name FROM item WHERE id = :item_id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':item_id', $item_id, PDO::PARAM_INT);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    $row = $stmt->fetch();
    $return = $row['item_name'];

    $stmt->closeCursor();
    $conn = null;

    return $return; // Return a string (item's name if it's found)
  }

  // This method returns 'item price' (decimal) given an item's ID.
  function getItemPrice($item_id) {
    $conn_manager = new ConnectionManager();
    $conn = $conn_manager->getConnection();

    $sql = "SELECT item_price FROM item WHERE id = :item_id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':item_id', $item_id, PDO::PARAM_INT);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    $row = $stmt->fetch();
    $return = $row['item_price'];

    $stmt->closeCursor();
    $conn = null;

    return $return; // Return a string (item's name if it's found)
  }

  // Code here to update inventory.
  // Input: Associative array (key: item_id, value: quantity purchased)
  function updateInventory($purchased_items) {

    $connMgr = new ConnectionManager();
    $conn = $connMgr->getConnection();

    // This SQL query will be useful.
    $sql = 'UPDATE inventory SET quantity = (quantity - :purchase_quantity) WHERE item_id = :item_id';

    // Code here

    $stmt = $conn->prepare($sql);
    foreach ($purchased_items as $item_id => $qty) {
      $stmt->bindParam(':purchase_quantity', $qty, PDO::PARAM_INT);
      $stmt->bindParam(':item_id', $item_id, PDO::PARAM_INT);

      $stmt->execute();
    }


    $conn = null;
  }

}

?>
