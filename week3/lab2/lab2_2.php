<?php
$num1 = rand(1,10);
$num2 = rand(1,10);
$num3 = rand(1,10);
  
echo "*****************<br/>";
echo "** $num1 ** $num2 ** $num3 **<br/>";
echo "*****************</br>";
 
# Write code here
$count = 0;

if ($num1 == $num2) $count++;

if ($num1 == $num3) $count++;
elseif ($num2 == $num3) $count++;

if ($count == 2) {
  echo("** Jackpot!! **<br>");
} elseif ($count == 1) {
  echo("** 2 of a kind **<br>");
} else {
  echo("** Try again! **<br>");
}

# End of code
?>
