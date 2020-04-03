<?php
require_once 'Warehouse.php';
require_once 'Product.php';

// init
$products = [];
$warehouse = new Warehouse();
?>

<html>
<head>
	<title>Product Search by Price Range</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Product Search by Price Range</h1>
	
	<!-- form here -->
	<form>
		Min price
		<input type="text" value="0" name="minPrice"><br/>

		Max price
		<input type="text" value="100" name="maxPrice"><br/>

		<!-- submit button -->	
		<input type="submit" value="search"/>
	</form>

	<?php
	if (isset($_GET['minPrice'], $_GET['maxPrice'])) {
		$min_price = $_GET['minPrice'];
		$max_price = $_GET['maxPrice'];

		$products = $warehouse->searchByPriceRange($min_price, $max_price);
		$index = 1;

		echo("<table>");
		echo("
			<tr>
				<th> S/N </th>
				<th> Product </th>
				<th> Quantity </th>
				<th> Price </th>
			</tr>
		");

		foreach ($products as $product) {
			$qty = $product->getQuantity();
			
			if ($qty < 10) {
				$color = 'red;';
			}
			elseif ($qty < 20) {
				$color = 'orange;';
			}
			else {
				$color = 'black;';
			}

			echo("
				<tr>
					<td>$index</td>
					<td>{$product->getProductName()}</td>
					<td style='color:$color'>{$product->getQuantity()}</td>
					<td>{$product->getPrice()}</td>
				</tr>
			");

			$index ++;
		}
		echo("</table>");
	}
	
	?>
