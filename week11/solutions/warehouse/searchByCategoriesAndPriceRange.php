<?php
require_once 'Warehouse.php';
require_once 'Product.php';

// init
$warehouse = new Warehouse();
$category = [];

// At first load, use this values
if (empty($_GET['minPrice']) && empty($_GET['maxPrice'])){
	$minPrice = 0;
	$maxPrice = 100;
} else {
	$minPrice = $_GET['minPrice'];
	$maxPrice = $_GET['maxPrice'];
}

if(!empty($_GET['category'])) {
	$category = $_GET['category'];
}

?>

<html>
<head>
	<title>Product Search by Category</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Product Search by Category</h1>
	
	<!-- form here -->
	<form>
		<table>
			<tr>
				<th>
					Categories: 
				</th>
				<td>
					<!-- check boxes -->
					<?php
						$categories = $warehouse->getCategories();
						foreach($categories as $cat) {
							// If the category is selected, 
							if (in_array($cat, $category)) {
								echo("
									<input type='checkbox' name='category[]' value='$cat' checked>
										$cat
									</input>
								");
							} else {
								echo("
									<input type='checkbox' name='category[]' value='$cat'>
										$cat
									</input>
								");
							}
						}
					?>
				</td>
			</tr>
			<tr>
				<th>
					Min price
				</th>
				<td>
					<!-- text field -->
					<?php
						echo("
							<input type='textbox' name='minPrice' value='$minPrice'>
						")
					?>
				</td>
			</tr>
			<tr>
				<th>
					Max price
				</th>
				<td>
				<?php
					echo("
						<input type='textbox' name='maxPrice' value='$maxPrice'>
					")
					?>		
				</td>
			</tr>
		</table>
		<!-- submit button -->
		<input type="submit" value="Search">
	</form>


	<?php
		if (isset($_GET['category'], $_GET['minPrice'], $_GET['maxPrice']))	{			
			$index = 1;

			$categories = $_GET['category'];
			$minPrice = $_GET['minPrice'];
			$maxPrice = $_GET['maxPrice'];

			$selected = $warehouse->searchByCategoriesPriceRange($categories, $minPrice, $maxPrice);

			echo("
			<table>
			<tr>
				<th> S/N </th>
				<th> Category </th>
				<th> Product </th>
				<th> Quantity </th>
				<th> Price </th>
			</tr>
			");

			foreach ($selected as $cat => $items) {
				$size = count($items);
				echo("
					<tr>
						<td>$index</td>
						<td rowspan='$size'>$cat</td>
				");

				for ($i = 0; $i < count($items); $i++) {
					$item = $items[$i];

					if ($i != 0) {
						echo("<tr><td>$index</td>");
					}

					$qty = $item->getQuantity();
			
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
							<td>{$item->getProductName()}</td>
							<td style='color:$color'>{$item->getQuantity()}</td>
							<td>{$item->getPrice()}</td>
						</tr>
					");

					$index ++;
				}
			}

			echo("</table>");
		}
	?>
	
</body>
</html>
