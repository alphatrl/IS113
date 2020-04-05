<?php

/*
    Name:

    Email:
*/

require_once 'include/common.php';

class CustomerDAO {

  // This method returns all customers.
  // Returns an array of Customer objects.
  function getAll() {

    $conn_manager = new ConnectionManager();
    $conn = $conn_manager->getConnection();

    $sql = "SELECT * FROM customer";

    $stmt = $conn->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    $customers = [];
    while( $row = $stmt->fetch() ) {
      $customers[] = new Customer(
        $row['id'],
        $row['gender'],
        $row['age'],
        [
          'music' => $row['music'],
          'fashion' => $row['fashion'],
          'sports' => $row['sports'],
          'electronics' => $row['electronics']
        ]
      );
    }

    $stmt->closeCursor();
    $conn = null;

    return $customers; // Return an array of Customer objects (if found any)
  }

  // This method returns customers that meet certain criteria.
  // Criteria are specified in method parameters by the caller.
  // Returns an array of Customer objects.
  function getCustomers($gender, $min_age, $max_age, $interests) {

    $conn_manager = new ConnectionManager();
    $conn = $conn_manager->getConnection();
    $customers = [];

    $interest_str = '(';
    foreach($interests as $interest) {
      if($interest_str != '(') {
        $interest_str .= " OR ";
      }
      $interest_str .= $interest . " = 1";
    }
    $interest_str .= ')';

    $sql = "SELECT * FROM customer WHERE
            gender = :gender
            AND
            age BETWEEN :minimum_age AND :maximum_age
            AND
            $interest_str";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
    $stmt->bindParam(':minimum_age', $min_age, PDO::PARAM_INT);
    $stmt->bindParam(':maximum_age', $max_age, PDO::PARAM_INT);
    
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    while( $row = $stmt->fetch() ) {
      $customers[] = new Customer(
        $row['id'],
        $row['gender'],
        $row['age'],
        [
          'music' => $row['music'],
          'fashion' => $row['fashion'],
          'sports' => $row['sports'],
          'electronics' => $row['electronics']
        ]
      );
    }

    $stmt->closeCursor();
    $conn = null;

    return $customers;
  }

}

?>
