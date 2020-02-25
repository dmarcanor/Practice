<?php
namespace Magic;

require "../vendor/autoload.php";

$product = Product::leche()
	->price(40000)
	->caducateDate(array(
						15, 02, 2021
						))
	->content("300ml");

var_dump($product);