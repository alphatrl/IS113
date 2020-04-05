<?php

class Customer {

  public $id;         // integer
  public $gender;     // string/character
  public $age;        // integer
  public $interests;  // associative array

  function __construct($id, $gender, $age, $interests) {
    $this->id = $id;
    $this->gender = $gender;
    $this->age = $age;

    if( is_array($interests) ) {
      foreach($interests as $key=>$value) {
        $this->interests[$key] = $value;
      }
    }
  }

}

?>
