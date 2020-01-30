<?php

// add your code here
if (isset($_GET['submit'])) {
  $text = $_GET['text'];
  $start_char = $_GET['start'];
  $end_char = $_GET['end'];
  $print_string = "No such substring";

  $start_pos = strpos($text, $start_char);
  $end_pos = strpos($text, $end_char);

  // If characters are found
  if ($start_pos !== false && $end_pos !== false) {

    /** Example
     * $string = abcde, $start = d, $end = e,
     * substring to look for is length of 2, $start_pos = 3, $end_pos = 4
     * (index starts from 0)
     * length = 2 (4 - 3 + 1)
     */

    $length_substring = $end_pos - $start_pos + 1;
    $substring = substr($text, $start_pos, $length_substring);
    $print_string = "Substring [$substring] is found";
  }

  echo("$print_string<br><br>");
}

?>


<form>

Enter the string : <input name="text" type="text">
<br/>
Enter the start char : <input name="start" type="text">
<br/>
Enter the end char : <input name="end" type="text">
<br/>

<input type="submit" name="submit">

</form>