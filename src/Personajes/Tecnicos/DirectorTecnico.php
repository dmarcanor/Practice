<?php
namespace Practica\Personajes\Tecnicos;
use Practica\Personas\Persona;

class DirectorTecnico extends Persona{
	private $reputacion;
	private $nivelTecnico;

	public function __construc($nombre, $apellido, $nacionalidad){
		parent::__construc($nombre, $apellido, $nacionalidad);
		$this->reputacion = 0;
		$this->nivel_tecnico = 0;
	}

	public function getReputacion(){
		return $this->reputacion;
	}

	public function setReputacion($reputacion){
		$this->reputacion = $reputacion;
	}

	public function getNivelTecnico(){
		return $this->nivelTecnico;
	}

	public function setNivelTecnico($nivelTecnico){
		$this->nivelTecnico = $nivelTecnico;
	}
}