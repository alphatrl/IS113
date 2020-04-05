<?php

spl_autoload_register(function ($class){
    require_once $class . ".php";
});

require_once '../database/ConnectionManager.php';

function printErrors() {
  if(isset($_SESSION['my-errors'])){
    print_r($_SESSION);
    print "<ul style='color:red;'>";

    foreach ($_SESSION['my-errors'] as $value) {
        print "<li>" . $value . "</li>";
    }

    print "</ul>";
    unset($_SESSION['my-errors']);
  }
}

?>
