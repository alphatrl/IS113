<?php

class InventoryItem {

  public $item_id;    // integer
  public $item_name;  // string
  public $quantity;   // integer
  public $price;      // item unit price (currency, decimal)

  function __construct($item_id, $item_name, $quantity, $price) {
    $this->item_id = $item_id;
    $this->item_name = $item_name;
    $this->quantity = $quantity;
    $this->price = $price;
  }

}

?>
