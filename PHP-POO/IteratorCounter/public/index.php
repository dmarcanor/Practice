<?php

namespace IteratorCounter;

require "../vendor/autoload.php";

$a20 = Product::smartphone()
	->brand("Samsung")
	->series("A")
	->version("20")
	->price(120)
	->ram("2gb")
	->screen("6'");


$j7 = Product::smartphone()
	->brand("Samsung")
	->series("J")
	->version("7")
	->price(150)
	->ram("2gb")
	->screen("6.1'");


$redmi7 = Product::smartphone()
	->brand("Xiaomi")
	->series("Redmi")
	->version("note 7")
	->price(100)
	->ram("2gb")
	->screen("5.9'");

$corsa = Product::car()
	->brand("Chevrolet")
	->model("Corsa")
	->price(1600)
	->color("Red")
	->year(2006);

$laptop = Product::laptop()
	->brand("Acer")
	->model("Aspire One")
	->series("z20")
	->price(80)
	->color("Blue")
	->ram("1gb")
	->hdd("8gb")
	->cpu("Atom 1.2 ghz");

$store = new Store("My Store", [$a20, $j7, $redmi7, $laptop]);

$store->setProduct($corsa);

echo "La tienda {$store->getName()} tiene {$store->count()} productos";

foreach ($store->getProducts() as $product) {
	echo "<p>{$product}</p>";
}

?>

<!-- <pre>
	<?php var_dump($store); ?>
</pre> -->