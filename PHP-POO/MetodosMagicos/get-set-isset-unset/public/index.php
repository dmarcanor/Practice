<?php

namespace Magic;

require "../vendor/autoload.php";

$person = new Person();

//MALA PRACTICA, se deben determinar los attributos de la clase explicitamente
$person->setAttribute("name", "Daniel");
$person->lastName = "Marcano";	//$person->setAttribute("lastName", "Marcano")
$person->edad = 21;

echo "Nombre: {$person->name} <br>";	//Imprime lastName por el metodo __get()
echo "Apellido: {$person->lastName} <br>";

if(isset($person->edad)){
	echo "Edad: " . $person->edad;
}

unset($person->edad);

if(isset($person->edad)){
	echo "Edad: " . $person->edad;
}
