<?php
namespace Magic;
use Log\Logger;

require "../vendor/autoload.php";
require "../src/Log/Logger.php";

$product = new Product("Laptop", 7);

$data = serialize($product);

echo $data;

Logger::save($data);
