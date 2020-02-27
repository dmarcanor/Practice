<?php
namespace Practica;

class EquipoFutbol{
	private $nombre;
	private $competiciones;
	private $jugadores;
	private $directorTecnico;
	private $estadio;
	
	public function __construct($nombre, $estadio, $competiciones=NULL, $jugadores=NULL, $directorTecnico=NULL){
		$this->nombre = $nombre;
		$this->estadio = $estadio;
		$this->jugadores = array();
		$this->competiciones = array();
		$this->directorTecnico = NULL;
		
		$this->competiciones = $competiciones;
		$this->jugadores = $jugadores;
		$this->directorTecnico = $directorTecnico;
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

	public function setCompeticiones($competiciones){
		$this->competiciones[] = $competiciones;
		return $this;
	}

	public function getDirectorTecnico(){
		return $this->directorTecnico;
	}

	public function setDirectorTecnico(DirectorTecnico $directorTecnico){
		$this->directorTecnico = $directorTecnico;
		return $this;
	}

	public function getJugadores(){
		return $this->jugadores;
	}

	public function setJugador(Jugador $jugador){
		$this->jugadores[] = $jugador;
		
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

	public function isJugadoresEmpty(){
		if(count($this->jugadores) > 0) return false;
		
		return true;
	}

	public function atacar(EquipoFutbol $oponente){
		$atacante = $this->getJugadores()[rand(1,4)];
		$defensor = $oponente->getJugadores()[rand(1,4)];
		$arquero = $oponente->getJugadores()[0];

		if($atacante->regatear($defensor)){
			if($atacante->patear($arquero)){
				return true;		
			}
		}else{
			return false;
		}
	}
}
