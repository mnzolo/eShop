<?php

if (!empty($_SESSION["cart"])) {
	foreach($_SESSION["cart"] as $i => $item) {
		if ($_GET["id"] === $i)
			unset($_SESSION["cart"][$i]);
		if (empty($_SESSION["cart"]))
			unset($_SESSION["cart"]);
	}
}
