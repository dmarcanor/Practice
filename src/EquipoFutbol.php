<?php
namespace Practica;

class EquipoFutbol{
	private $nombre;
	private $competiciones;
	private $jugadores;
	private $estadio;
	
	public function __construct($nombre, $estadio){
		$this->nombre = $nombre;
		$this->estadio = $estadio;
		$this->jugadores = array();
		$this->competiciones = array();
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
		return $this;
	}

	public function getCompeticiones(){
		return $this->competiciones;
	}

	public function setCompeticiones(Competicion $competiciones){
		$this->competiciones[] = $competiciones;
		return $this;
	}

	public function getJugadores(){
		return $this->jugadores;
	}

	public function setJugador(Jugador $jugadores){
		$this->jugadores[] = $jugadores;
		return $this;
	}

	public function getEstadio(){
		return $this->estadio;
	}

	public function setEstadio($estadio){
		$this->estadio = $estadio;
		return $this;
	}
	//Fin de getters y setter
}
