<?php

namespace Magic;

require "../vendor/autoload.php";

$car = new Car("Chevrolet", "Corsa", 2006, 0);

$car->doors = 4;
$car->wheels = 4;

?>

<pre>
	
	<?php var_dump($car); ?>

</pre>

<?php
	if(isset($car->doors)){
		echo "<p>Doors: {$car->doors}</p>";
		unset($car->doors);
	}

	if(isset($car->doors)) echo "<p>Doors: {$car->doors}</p>";
?>