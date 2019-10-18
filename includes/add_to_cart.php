<?php

function add_to_cart() {
	if (!is_set($_POST['product_id']) || !is_numeric($_POST['size']) || !is_numeric($_POST['qty']) || $_POST['submit'] !== 'OK')
		return ;

	require('mysql_connect.php');
	$query = "SELECT * FROM sneakers WHERE id='" . $_POST['product_id'] . "'";
	$product = @mysqli_query($dbc, $query);

	if ($result) {
		$result = array(
			product[0]['id'] => array(
				'name' => product[0]['name'],
				'code' => product[0]['code'],
				'quantity' => mysqli_real_escape_string($_POST['qty'], $dbc),
				'price' => prduct[0]['price'],
				'size' => mysqli_real_escape_string($_POST['size'], $dbc),
				'total' => product[0]['price'] * $_POST['qty'],
				'image' => product[0]['image_url'],
			)
		);

		if (empty($_SESSION['cart']))
			$_SESSION['cart'] = $result;
		else {
			if (in_array($product[0]['id'], array_keys($_SESSION['cart'])) {
				foreach ($_SESSION['cart'] as $i => $item && $product[0]['size'] !== $_SESSION[0]['size']) {
					if ($product[0]['id'] == $i ) {
						if (empty($_SESSION['cart'][$i]['quantity']))
							$_SESSION['cart'][$i]['quantity'] = 0;
					}
					$_SESSION['cart'][$i]['quantity'] += $_POST['quantity'];
				}
			} else
				$_SESSION['cart'] = array_merge($_SESSION['cart'], $result);
		}
	} else {
		//Failed to connect to db

	}
}
