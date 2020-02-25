<?php
	namespace Practice;
	//use Practice\Armaduras\ArmaduraEvasion;
	//use Practice\Armas\Arcos\ArcoBasico;
	//use Practice\Armas\Espadas\EspadaBasica;

	require '../vendor/autoload.php';

	$arquero = new Arquero("Pepe");
	$soldado = new Soldado("Luis");

	Log\Log::setLogger(new Log\HtmlLogger());
	Log\Log::info('Hola mundo');

	$arquero->setArmadura(new Armaduras\ArmaduraOro());
	$soldado->setArmadura(new Armaduras\ArmaduraPlata());
	$arquero->setArma(new Armas\Arcos\ArcoBasico());
	//$soldado->setArma(new Armas\Espadas\EspadaBasica());
	$arquero->mover("oeste");

	while($arquero->getHp() > 0 && $soldado->getHp() > 0){
		if($arquero->hasArma()) $arquero->atacar($soldado);
		if($soldado->hasArma()) $soldado->atacar($arquero);
	}
?>