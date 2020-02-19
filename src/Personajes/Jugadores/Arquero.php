<?php
namespace Practica\Personajes\Jugadores;
use Practica\Personas\Jugadores\Jugador;
use Practica\Log;

class Arquero extends Jugador{
	const MAX_REFLEJOS = 100;
	private $reflejos;
	
	public function __construct($nombre, $apellido, $nacionalidad){
		parent::__construct($nombre, $apellido, $nacionalidad);
	}

	public function atacar(){
		Log::info("{$this->getNombre()} busca un cabezaso en corner o tiro libre");
	}

	public function defender($atancate){
		Log::info("{$this->getNombre()} usa la tecnica del cristo");
		if($this->reflejos - $atacante->getRemate() > 0 && rand(0,1)){
			$this->atajar();	
		}else{
			LOG::info("No lo logro");
		}
	}

	public function atajar($atancate){
		LOG::info("Y atajo");
	}
}
