<?php

// YOUR CODE GOES HERE
// If nothing is selected and submitted
if(empty($_GET['fruit'])) {
  echo("Please select fruit");
} else {
  $fruit = $_GET['fruit'];
  $count = (int) $_GET['quantity'];
  
  for ($i = 0; $i < $count; $i++) {
    echo("<image src='./images/$fruit.jpg'>");
  }
}

?>