<?php
require_once 'Warehouse.php';
require_once 'Product.php';

// init
$categories = [];
$warehouse = new Warehouse();
?>

<html>
<head>
	<title>Product Category List</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Product Category List</h1>

	<?php
		$categories = $warehouse->getCategories();

		echo("<ol>");
		foreach($categories as $cat) {
			echo("
				<li>
					<a href='./searchByCategory.php?category=$cat'>$cat</a>
				</li>
			");
		}
		echo("</ol>");

	?>
	
	
</body>
</html>
