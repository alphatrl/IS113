<?php

// YOUR CODE GOES HERE

// If no one is selected
if(empty($_POST['stars'])) {
  echo("OMG nobody selected");
} else {
  $stars = $_POST['stars'];

  foreach($stars as $idol) {
    echo("<image src='./images/$idol.jpg'>");
  }
}

?>