<?php

function clean_cart() {
	unset($_SESSION["cart_item"]);
}
