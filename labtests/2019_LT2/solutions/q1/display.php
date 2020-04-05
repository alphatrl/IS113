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
		<h1>Stored Responses</h1>
		<table border='1'>
        <?php
			# == Part A (Display Stored Responses): ENTER CODE HERE == 
			
			// Retrieve Data
			$responseDAO = new ResponseDAO();
			$responseList = $responseDAO->retrieveAll();

			// Display Table
			echo("
				<table border='1'>
					<tr>
						<th>Name</th>
						<th>Preferred Class Length (in hours)</th>
						<th>Preferred Sem Length (in weeks)</th>
					</tr>
			");

			foreach ($responseList as $response) {
				echo("
					<tr>
						<td>{$response->getName()}</td>
						<td>{$response->getPreferredClassLength()}</td>
						<td>{$response->getPreferredSemLength()}</td>
					</tr>
				");
			}

			echo("</table>");
        
            # ====
		?>
		</table>
	</body>
</html>