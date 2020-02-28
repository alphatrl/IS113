<?php

require_once 'PersonDAO.php';
// By importing this file, we can create a DAO object.
// DAO object allows us to obtain:
//    - $people (Array of Person objects)
//    - a subset of $people where gender is either 'M' or 'F'
$dao = new PersonDAO();
// You can now call all public methods of PersonDAO class.


?>
<html>
<head>
    <title>Dating - Show All Profiles</title>
</head>
<body>
    <h3>Show All Profiles</h3>
     
        <?php
            // YOUR CODE GOES HERE
            // There are multiple Tables within a Table
            
            //===================================================================
            // Display a Table containing "Men" only
            // There are multiple Tables within a Table
            // YOUR CODE GOES HERE

            // Person attributes be shown in this order, making it easier to use a loop
            $showAttributesOrder = ['fullname', 'gender', 'age', 'height', 'weight'];
           
            $gender = 'M';
            $male_list = $dao->getPeopleByGender($gender);
            
            echo("<table border='1'>");

            // create header for male table
            echo("<tr><th colspan='" . count($male_list) . "'>Men (" . count($male_list) . ")</th></tr>");
            
            echo("<tr>");
            foreach($male_list as $person){
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

            

            echo '<hr>';
            //===================================================================
            // Display a Table containing "Women" only
            // There are multiple Tables within a Table
            // YOUR CODE GOES HERE

            $gender = 'F';
            $female_list = $dao->getPeopleByGender($gender);
            
            echo("<table border='1'>");

            // create header for male table
            echo("<tr><th colspan='" . count($female_list) . "'>Women (" . count($male_list) . ")</th></tr>");
            
            echo("<tr>");
            foreach($female_list as $person){
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
            
        ?>
    </table>

</body>
</html>