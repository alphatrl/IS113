<!DOCTYPE html>
<html>
<head>
    <style>
        table,th,td{
            border: 1px solid black; 
            border-collapse: collapse;
        }
    </style>
</head>
<body>

<?php

// YOUR CODE GOES HERE
// check if:
//  - message is filled
//  - num is filled
//  - num is an integer
if (!empty($_GET['msg']) && !empty($_GET['num']) && ctype_digit($_GET['num'])) {

  $message = $_GET['msg'];
  $num =  (int) $_GET['num'];
  
  echo("<table>");
  echo("<tr>
          <th>S/N</th>
          <th>Message</th>
        </tr>");
  
  
  // $i start from 1 and $i <= $num
  // because i'm lazy to add 1 later
  for ($i = 1; $i <= $num; $i++) {
    echo("<tr>
            <td>$i</td>
            <td>$message</td>
          </tr>");
  }
  echo("</table>");

} 
else {
  $error_count = 1;

  // empty message
  if (empty($_GET['msg'])) {
    echo("$error_count. Why no Message?<br>");
    $error_count ++;
  }

  // empty number or invalid number
  if (empty($_GET['num'])) {
    echo("$error_count. Why no Number?<br>");
    $error_count ++;
  } elseif(!ctype_digit($_GET['num'])) {
    echo("$error_count. Num is not an Integer");
    $error_count ++;  }
}

?>

</body>
</html>