<?php
	function	products()
	{
		foreach($_SESSION['cart'] as $cart_item) {
			$table = array();
			foreach($cart_item as $i => $item) {
				switch($i) {
					case 'image':
						$table[0] = '<td><img src="images/' . $item . '" alt="' . $cart_item['name'] . '"></td>';
						break;
					case 'name':
						$table[1] = '<td class="name">' . $item . '</td>';
						break;
					case 'size':
						$table[2] = '<td class="size">' . $item . '</td>';
						break;
					case 'quantity':
						$table[3] = '<td class="Quantity">'. $item . '</td>';
					case 'price':
						$table[4] = '<td class="price">'. $item . '</td>';
			}
		}
	}

	function	user()
	{
		foreach($_SESSION['user'] as $cart_item) {
			$table = array();
			foreach($cart_item as $i => $item) {
				switch($i) {
					case 'name':
						$table[0] = '<td class="username">' . $item . '</td>';
						break;
					case 'email':
						$table[1] = '<td class="useremail">' . $item . '</td>';
						break;
					case 'password':
						$table[2] = '<td class="userpassword">' . $item . '</td>';
						break;
					case 'password':
						$table[3] = '<td class="userpassword">'. $item . '</td>';
			}
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title>Awesome Title</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- Use inline css -->
	    <!-- <style></style> -->
	    <!-- Or link external file -->
        <!-- <link rel="stylesheet" href="css/style.css" media="all" /> -->
	</head>
	<body>
		<div class="users_table">
			<?php
				users();
			?>
		</div>

		<div class="products">
			<?php
				product();
			?>
		</div>
	</body>
</html>
