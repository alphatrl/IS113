<?php
    
    // Only show if form is submitted
    if (isset($_GET['submit'])) {
        $full_name = $_GET['name'];
        $gender = $_GET['gender'];
        
        $print_string = "Hello ";
        $first_name = "";
        
        /*;
        if ($gender == 'male') $salutations = 'Mr.';
        else $salutations = 'Ms.';
        */
        // or 
        $salutations = ($gender == "male") ? 'Mr. ' : 'Ms. ';
        
        $print_string .= $salutations;
        $name_split = explode(' ', $full_name);

        for ($i = 0; $i < count($name_split); $i++) {
            
            $word = ucfirst($name_split[$i]) . " ";

            // Find surname, convert to uppercase and add to $print_string
            // 2 words name input
            if ((count($name_split) == 2) && ($i + 1 == 2)){
                $print_string .= strtoupper($word);
            }
            // 3 or more word name input
            elseif ((count($name_split) >= 3) && ($i + 1 == 1)) {
                $print_string .= strtoupper($word);
            } 
            // else add to string $first_name
            else {
                $first_name .= $word;
            }
        }

        // add $first_name to $print_string
        $print_string .= $first_name;

        echo("$print_string<br>");
    }


?>

<p>Please enter your name and gender.</p>

<form>

    Name: <input name="name" type="text"><br/>
    Gender
    <label for="male">Male</label> <input type="radio" name="gender" value="male" id="male">
    <label for="female">Female</label> <input type="radio" name="gender" value="female" id="female">
    <br/>
    <input type="submit" name='submit'>
    
</form>
