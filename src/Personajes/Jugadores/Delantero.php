<?php
namespace Practica\Personajes\Jugadores;
use Practica\Personas\Jugadores\Jugador;
use Practica\Log;

class Delantero extends Jugador{
	const MAX_REMATE = 100;
	const MAX_REGATE = 100;
	private $reflejos;
	
	public function __construct($nombre, $apellido, $nacionalidad){
		parent::__construct($nombre, $apellido, $nacionalidad);
	}

	public function atacar($defensa){
		Log::info("{$this->getNombre()} busca un cabezaso en corner o tiro libre");
	}

	public function defender($atancate){
		//
	}

	public function atajar($atancate){
		//
	}
}