<?php
/* 
 * INSTRUCTIONS
 * 
 * The form below submits back to this same file.
 * After user keys in a number (degrees in F or C), selects unit (F or C) in drop-down menu,
 * and clicks 'equals' button,
 * 1) perform temperature conversion;
 * 2) display converted temperature
 * 
 * Temperature Conversion:
 * 1) Celsius to Fahrenheit
 *    (C * 9/5) + 32 = F
 * 2) Fahrenheit to Celsius
 *    (F - 32) * 5/9 = C
 * 
 * Example:
 * 1.  User keys in 72 degrees and selects F (Fahrenheit) and clicks 'equals' button
 *     - Display:
 *                22.22222 degrees Celsius
 * 2.  User keys in 30 degrees and selects C (Celsius) and clicks 'equals' button
 *     - Display:
 *                86 degrees Fahrenheit
 * 
 * NOTE: Display the converted temperature to FIVE (5) decimal places.
 * 
 */

// YOUR CODE GOES HERE

// YOUR CODE MAY GO ANYWHERE IN THIS FILE, YOU DECIDE.

if (isset($_POST["temp"])){
    
    $temp = (float) $_POST["temp"];
    $type = $_POST["conversion"];
    $temp_new = 0.0;
    $print_string = "";
    $selected_c = "";
    $selected_f = "";

    // If temp_og is not empty, do something [$temp_og => ""]
    // selected is use to retain the dropdown list selection when any option is selected
    if ($temp != "") {
        // Convert from celsius to fahrenheit
        if ($type == 'c') {
            $temp_new = round(($temp * (9/5) ) + 32, 5);
            $print_string = "$temp_new degrees Fahrenheit";
            $selected_c = "selected";
        } else {
            $temp_new = round(($temp - 32) * (5/9), 5);
            $print_string = "$temp_new degrees Celsius";
            $selected_f= "selected";
        }
    }
}

?>

<html>
<head>
    <title>Celsius <-> Fahrenheit Temperature Conversion</title>
<body>

<form action="temp.php" method='POST'>

    <input type="number" name="temp" value="<?= $temp ?>"> degrees

    <select name="conversion">
        <option value="f" <?= $selected_f ?>> Fahrenheit </option> 
        <option value="c" <?= $selected_c ?>> Celsius </option>
    </select> 

    <input type="submit" value="equals">

    <?php
        // YOUR CODE GOES HERE
        if (isset($_POST["temp"])) {
         echo($print_string);
        }

        // YOUR CODE MAY GO ANYWHERE IN THIS FILE, YOU DECIDE.
        
    ?>

</form>

</body>
</html>