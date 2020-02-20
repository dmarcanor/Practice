<?php
namespace Practica\Personajes\Jugadores;
use Practica\Personajes\Personaje;

class Jugador extends Personaje{
	const MAX_ESTADISTICAS = 100;
	private $numero;
	private $posicion;
	private $estadisticas;

	public function __construct($nombre, $apellido, $fechaNacimiento ,$nacionalidad, $altura, $peso){
		parent::__construct($nombre, $apellido, $fechaNacimiento ,$nacionalidad, $altura, $peso);
		$this->posicion = array();
		$this->estadisticas = array(
			"reflejos" => 0,
			"regate" => 0,
			"remate" => 0,
			"defensa" => 0,
			"pase" => 0
		);
	}

	public static function createJugador($nombre, $apellido, $fechaNacimiento, $nacionalidad, $altura, $peso){
		return new Jugador($nombre, $apellido, $fechaNacimiento, $nacionalidad, $altura, $peso);
	}

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$this->numero = $numero;
		return $this;
	}

	public function getPosicion(){
		return $this->posicion;
	}

	public function setPosicion($posicion){
		$this->posicion[] = $posicion;
		return $this;
	}

	public function getEstadisticas(){
		return $this->estadisticas;
	}

	public function setEstadisticas($estadisticas){
		foreach($this->estadisticas as $estadistica){
			if($estadistica > MAX_ESTADISTICAS){
				$estadistica = MAX_ESTADISTICAS;
			}
		}
		return $this;
	}
	//Fin de getters y setter

	public function hasLuck(){
		if(rand(0,1)) return true;
		else return false;
	}

	public function pasar($receptor){
		LOG::info("{$this->getNombre()} pasa el balon a {$receptor->getNombre()}");
	}

	public function atajar($oponente){
		if($this->getEstadisticas()['reflejos'] >= 
			$oponente->getEstadisticas()['remate'] && $this->hasLuck()){
			LOG::info("{$this->getNombre()} atajo!!");
		}else{
			LOG::info("{$oponente->getNombre()} anota");
		}
	}

	public function patear(){
		LOG::info("{$this->getNombre()} patea y...");
	}

	public function regatear($oponente){
		LOG::info("{$this->getNombre()} regatea a {$oponente->getNombre()}");
	}

	public function defender($oponente){
		if($this->getEstadisticas()['defensa'] >= 
			$oponente->getEstadisticas()['regate'] && $this->hasLuck()){
			LOG::info("{$this->getNombre()} roba a {$oponente->getNombre()}");
		}else{
			LOG::info("{$oponente->getNombre()} pasa a {$this->getNombre()}");
		}
	}
}
