<?php
namespace Practica\Personajes\Jugadores;
use Practica\Personajes\Personaje;

class Jugador extends Personaje{
	protected $numero;
	protected $posicion;

	public function __construct($nombre, $apellido, $fechaNacimiento ,$nacionalidad, $altura, $peso){
		parent::__construct($nombre, $apellido, $fechaNacimiento ,$nacionalidad, $altura, $peso);
		$this->posicion = array();
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
		$this->posicion[] = $posicion;
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
	//Fin de getters y setter
}
