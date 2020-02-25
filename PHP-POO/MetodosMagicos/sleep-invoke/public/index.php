<?php
namespace Magic;

require "../vendor/autoload.php";

$person = new Person("Daniel", 21, 27483191);

echo $person;

echo "<p>{$person("hello world!")}</p>";