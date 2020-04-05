<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';

?>

<!DOCTYPE html>
<html>
	<body>
		<img src="images/sis.png">
		<h1>Statistics</h1>
        <?php
            # == Part C (Compute Statistics): ENTER CODE HERE == 
            
            // init
            $responseDAO = new ResponseDAO();
            $responseList = $responseDAO->retrieveAll();

            $responseCount = count($responseList);
            $numberOfTwoHour = 0;
            $numberOf15Hour = 0;

            // calculate
            foreach ($responseList as $response) {
                if ($response->getPreferredClassLength() == 2) {
                    $numberOfTwoHour ++;
                }

                if ($response->getPreferredSemLength() == 15) {
                    $numberOf15Hour ++;
                }
            }

            $percent15 = number_format(($numberOf15Hour / $responseCount) * 100, 2);

            // table
            echo("
                <table border='1'>
                    <tr>
                        <td># Responses</td>
                        <td>$responseCount</td>
                    </tr>

                    <tr>
                        <td># 2 hours</td>
                        <td>$numberOfTwoHour</td>
                    </tr>

                    <tr>
                        <td>% 15 weeks</td>
                        <td>$percent15%</td>
                    </tr>
                </table>
            ");

            # ====
		?>
	</body>
</html>