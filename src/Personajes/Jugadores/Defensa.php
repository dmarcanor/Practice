<?php
namespace Practica\Personajes\Jugadores;
use Practica\Personas\Jugadores\Jugador;
use Practica\Log;

class Defensa extends Jugador{
	const MAX_DEFENSA = 100;
	private $defensa;
	
	public function __construct($nombre, $apellido, $nacionalidad){
		parent::__construct($nombre, $apellido, $nacionalidad);
	}

	public function atacar(){
		Log::info("{$this->getNombre()} busca un cabezaso en corner o tiro libre");
	}

	public function defender($atacante){
		Log::info("{$this->getNombre()} entra a {$atacante->getNombre}");
		if($this->defensa - $atacante->getRegate() > 0 && rand(0,1)){
			LOG::info("Le quito la pelota a {$atacante->getNombre()}");	
		}else{
			LOG::info("No lo logro");
		}
	}

	public function atajar($atacante){
		//
	}
}