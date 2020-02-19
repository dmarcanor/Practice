<?php
namespace Practica\Personas\Jugadores;
use Practica\Personas\Persona;

abstract class Jugador extends Persona{
	protected $numero;
	protected $posicion;

	public function __construct($nombre, $apellido, $nacionalidad){
		parent::__construct($nombre, $apellido, $nacionalidad);
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

	public function setPosicion(Posicion $posicion){
		$this->posicion = $posicion;
		return $this;
	}

	public function isArquero(){
		if(strtoupper($this->getPosicion()) == "ARQUERO") return true;
		else return false;
	}

	public function isDefensa(){
		if(strtoupper($this->getPosicion()) == "DEFENSA") return true;
		else return false;
	}

	public function isAtacante(){
		if(strtoupper($this->getPosicion()) == "ATACANTE") return true;
		else return false;
	}

	public function isMedioCampista(){
		if(strtoupper($this->getPosicion()) == "MEDIOCAMPO") return true;
		else return false;
	}
	//End Getters y Setters

	abstract public function atacar($defensa);
	abstract public function defender($atacante);
}
