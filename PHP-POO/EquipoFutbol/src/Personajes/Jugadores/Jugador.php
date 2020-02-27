<?php
namespace Practica\Personajes\Jugadores;
use Practica\Personajes\Personaje;
use Practica\Log\Log;

class Jugador extends Personaje{
	const MAX_ESTADISTICAS = 100;
	private $numero;
	private $posiciones;
	private $estadisticas;

	public function __construct($nombre, $apellido, $fechaNacimiento ,$nacionalidad, $altura, $peso){
		parent::__construct($nombre, $apellido, $fechaNacimiento ,$nacionalidad, $altura, $peso);
		$this->numero = 0;
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

	public function getPosiciones(){
		return $this->posiciones;
	}

	public function setPosiciones($posiciones){
		$this->posiciones[] = $posiciones;
		return $this;
	}

	public function getEstadisticas(){
		return $this->estadisticas;
	}

	public function setEstadisticas($reflejos, $regate, $remate, $defensa, $pase){
		$this->estadisticas['reflejos'] = $this->verificarEstadistica($reflejos);
		$this->estadisticas['regate'] = $this->verificarEstadistica($regate);
		$this->estadisticas['remate'] = $this->verificarEstadistica($remate);
		$this->estadisticas['defensa'] = $this->verificarEstadistica($defensa);
		$this->estadisticas['pase'] = $this->verificarEstadistica($pase);
		return $this;
	}
	//Fin de getters y setter

	public function hasLuck(){
		if(rand(0,1)) return true;
		else return false;
	}

	public function pasar($receptor){
		LOG::info("{$this->getNombre()} {$this->getApellido()} pasa el balon a {$receptor->getNombre()}");
	}

	public function atajar($oponente){
		if($this->getEstadisticas()['reflejos'] >= 
			$oponente->getEstadisticas()['remate'] && $this->hasLuck()){
			LOG::info("{$this->getNombre()} atajo!!");
			return true;
		}else{
			LOG::info("{$oponente->getNombre()} anota!!");
			return false;
		}
	}

	public function patear($oponente){
		LOG::info("{$this->getNombre()} patea y...");
		if(! $oponente->atajar($this)){
			return true;
		}else{
			return false;
		}
	}

	public function regatear($oponente){
		LOG::info("{$this->getNombre()} regatea a {$oponente->getNombre()}");
		if(! $oponente->defender($this)){
			return true;
		}else{
			return false;
		}
	}

	public function defender($oponente){
		if($this->getEstadisticas()['defensa'] >= 
			$oponente->getEstadisticas()['regate'] && $this->hasLuck()){
			LOG::info("{$this->getNombre()} roba a {$oponente->getNombre()}");
			return true;
		}else{
			LOG::info("{$oponente->getNombre()} pasa a {$this->getNombre()}");
			return false;
		}
	}
}
