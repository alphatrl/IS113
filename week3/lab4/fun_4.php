<?php

    /*
    A sandwich typically consists of cheese, meat or/and vegetables placed in between two slices of bread. 
    Consider a string “remember”, the sub-string “memb” is sandwiched between “re” and its mirror “er” on the other side.  In fun_4.php, write a function named get_sandwich that takes in a string and returns the sandwiched string, if any, or None. 

    */

    if(isset($_GET["string"])) {

        $string = $_GET["string"];
        
        echo "Sandwich substring for " . $string . ": " 
                    . get_sandwich($string) . " <br><br>";
    
    }

    function get_sandwich($string) {

        // add your code here
        $sandwich = "None";
        $str_halfway_index = ceil(strlen($string) / 2);
        $rev_string = strrev($string);
        $strlen = strlen($string);

        /** 
         * halfway index is to save time
         * Example: $string = foolproof
         * with halfway index, we can compare the substring "fool" and "roof"
         * and look for similarites
         * 
         * 
         * Once similarities is found, ["foo" and "oof" (when reverse, "oof" becomes "foo")]
         * we will save the string inbetween the "foo" and "oof"
         * the sandwich substring will start from index $i, 
         * and the length of substring = length of original string - (length of foo x 2)
         * using substr(), we can split the string and get the sandwiched word
        */

        for ($i = $str_halfway_index; $i > 0; $i --) {
            $substr = substr($string, 0, $i);
            $rev_substr = substr($rev_string, 0, $i);

            if ($substr == $rev_substr) {
                $sandwich = substr($string, $i, $strlen - (strlen($substr) * 2));
                break;
            }
        }

        return $sandwich;

    }

?>


<form>

Enter a sandwich string: <input name="string" type="text">
<br/>

<input type="submit">

</form>