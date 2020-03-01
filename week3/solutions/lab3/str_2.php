<?php

// add your code here
if (isset($_GET['submit'])) {
    $message = $_GET['input'];
    $message_split = explode(" ", $message);
    $email_string = "";

    foreach ($message_split as $word) {
        $pos = strpos($word, '@');

        // if word contains an '@' symbol 
        if ($pos !== false) {
            $email_string .= $word . " ";
        }
    }

    echo("$email_string<br>");
}
 
?>


<form>

    Enter a line of text with email address : <input name="input" type="text" size="100">
    <br/>
   
    <input type="submit" name="submit">
    
</form>