<?php

// add your code here
if (isset($_GET['submit'])) {
  $chars = $_GET['str1'];
  $string = $_GET['str2'];
  $char_inside = true;

  foreach (str_split($chars) as $compare_char) {
    
    // check if char is inside string
    $pos = strpos($string, $compare_char);

    // if char not inside break loop
    if ($pos === false) {
      $char_inside = false;
      break;
    }
  }

  if ($char_inside) {
    echo("Bingo!<br><br>");
  } else {
    echo("Nope :(<br><br>");
  }

}

?>


<form>

Enter characters: <input name="str1" type="text">
<br/>
In string? : <input name="str2" type="text">
<br/>

<input type="submit" name="submit">

</form>