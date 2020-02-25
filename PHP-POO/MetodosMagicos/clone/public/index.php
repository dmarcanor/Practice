<?php
namespace Magic;

require "../vendor/autoload.php";

$a20 = Product::smartphone()
	->brand("Samsung")
	->series("A")
	->version("20")
	->price(120)
	->ram("2gb")
	->screen("6'");

$j7 = clone($a20);

$j7->brand("Samsung")
	->series("J")
	->version("7")
	->price(150)
	->ram("2gb")
	->screen("6.1'");

?>

<pre>
	<?php var_dump($a20, $j7); ?>
</pre>