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

		if(isset($competiciones)){
			$this->competiciones = $competiciones;
		}
		if(isset($jugadores)){
			$this->jugadores = $jugadores;
		}
		if(isset($directorTecnico)){
			$this->directorTecnico = $directorTecnico;
		}
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

	public function setJugador(Jugador $jugadores=NULL, $listJugadores=0){
		if($jugadores){
			$this->jugadores[] = $jugadores;
		}else{
			if(! $this->isJugadoresEmpty()){
				foreach($listJugadores as $row){
					$this->jugadores[] = $listJugadores;
				}
			}else{
				$this->jugadores = $listJugadores;
			}
		}
		
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
		else return true;
	}
}
