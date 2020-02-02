<?php
  // Returns true if $f is a factor of $n
  function is_factor($n, $f) {
    if ($n % $f === 0) {return true;}

    return false;
  }

 // add your code here
  if (isset($_GET['n']) && isset($_GET['f'])) {
    $num =  (int) $_GET['n'];
    $factor = (int) $_GET['f'];

    $is_factor = is_factor($num, $factor);

    if ($is_factor)
      echo("$factor is a factor of $num<br><br>");
    
    else
      echo("$factor is not a factor of $num<br><br>");
  }

?>


<form>

Enter an integer n: <input name="n" type="text">
<br/>
Enter another integer f: <input name="f" type="text">
<br/>

<input type="submit">

</form>