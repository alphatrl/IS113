<?php

class Account {

  public $id;            // integer
  public $fullname;      // string
  public $username;      // string
  public $password_hash; // string

  function __construct($id, $fullname, $username, $password_hash) {
    $this->id = $id;
    $this->fullname = $fullname;
    $this->username = $username;
    $this->password_hash = $password_hash;
  }
  
}

?>
