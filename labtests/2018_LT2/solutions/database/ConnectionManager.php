<?php

class ConnectionManager {

  public function getConnection() {
    $servername = 'localhost';
    $dbname = 'lt2';
    $username = 'root';
    $password = 'root';
    $port = 3306;
    $url  = "mysql:host=$servername;dbname=$dbname;port=$port";

    return new PDO($url, $username, $password);
  }

}

?>
