<?php

require_once 'PersonDAO.php';
// By importing this file, we can create a DAO object.
// DAO object's $people is an Array of Person objects.
$dao = new PersonDAO();


// YOUR CODE GOES HERE
// Match List
$matchList = [];

if (isset($_POST['match_button'])) {

    // Set POST attributes
    $gender = $_POST['gender'];
    $category = $_POST['category'];
    $operator = $_POST['operator'];
    $value = $_POST['category_value'];

    $peopleList = $dao->getPeopleByGender($gender);

    // remove people who do not fit citeria
    foreach ($peopleList as $people) {
        if ($operator === '>') {
            if ($people->getAttributeValue($category) > $value) {
                $matchList[] = $people;
            }
        } elseif ($operator === '<') {
            if ($people->getAttributeValue($category) < $value) {
                $matchList[] = $people;
            }
        }
    }

    // DEBUG
    // print_r(count($matchList) . "<br>");
    // print_r($matchList);

}
?>
<html>
<head>
    <title>Dating - Find Me Matches</title>
</head>
<body>
    <h3>Find Me Matches</h3>

    <form action='match.php' method='POST'>

        Gender: 
        <input type='radio' name='gender' value='M' checked> Male
        <input type='radio' name='gender' value='F'> Female
        <br>

        <select name='category'>
            <option value='age'> Age </option>
            <option value='height'> Height </option>
            <option value='weight'> Weight </option>
        </select>

        <select name='operator'>
            <option value='>'>Greater Than</option>
            <option value='<'>Less Than</option>
        </select>
        <input type='number' name='category_value' required>

        <br>
        <input type='submit' name='match_button' value='Find Matching Profiles'>
    </form>

    <!-- Display Matches if found -->
    <?php
        // YOUR CODE GOES HERE
        if (count($matchList) > 0 ) {
            // Person attributes be shown in this order, making it easier to use a loop
            $showAttributesOrder = ['fullname', 'gender', 'age', 'height', 'weight'];

            echo("<table border='1'>");

            // create header for male table
            echo("<tr><th colspan='" . count($matchList) . "'>Matches (" . count($matchList) . ")</th></tr>");
            
            echo("<tr>");
            foreach($matchList as $person){
                echo("<td><table border='1'>");

                // imageURL
                echo("<tr><td colspan='2'><img src='./images/" . $person->getImage() ."'/></td></tr>");

                // Other Attributes of $person
                foreach($showAttributesOrder as $attribute){
                    echo("<tr>");
                    echo("<td>$attribute</td>");
                    echo("<td>" . $person->getAttributeValue($attribute) . "</td>");
                    echo("</tr>");
                }

                echo("</table></td>");
            }
            echo("</tr>");

            echo("</table>");
        }
    ?>
</body>
</html>