<?php
require_once 'Warehouse.php';
require_once 'Product.php';

// init
$category_name = '';
$products = [];
$warehouse = new Warehouse();
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
	Category
	<!-- drop down list -->
	<!-- submit button -->
		<select name="category">
			<?php
				$categories = $warehouse->getCategories();
				
				foreach ($categories as $cat) {

					// If category is set and is equal to $cat, select it
					if (isset($_GET['category']) && ($_GET['category'] == $cat)) {
						echo(" <option value='$cat' selected>$cat</option>");
					} else {
						echo(" <option value='$cat'>$cat</option>");
					}
				}
			?>
		</select>

		<input type="submit" value="Search"/>
	
	
	</form>
	
	
	<?php
	// If category is selected, show table
	if (isset($_GET['category'])) {
		$category = $_GET['category'];

		$products = $warehouse->searchByCategory($category);
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

</body>
</html>
