<?php
namespace Practica\Personajes\Tecnicos;
use Practica\Personajes\Personaje;

class DirectorTecnico extends Personaje{
	const MAX_ESTADISTICAS = 100;
	private $estadisticas;

	public function __construc($nombre, $apellido, $fechaNacimiento ,$nacionalidad, $altura, $peso){
		parent::__construc($nombre, $apellido, $fechaNacimiento ,$nacionalidad, $altura, $peso);
		$this->estadisticas = array(
			"tactica" => 0,
			"motivacion" => 0,
			"juvenil" => 0
		);
	}

	public function getEstadisticas(){
		return $this->estadisticas;
	}

	public function setEstadisticas($tactica, $motivacion, $juvenil){
		$this->estadisticas['tactica'] = $tactica;
		$this->estadisticas['motivacion'] = $motivacion;
		$this->estadisticas['juvenil'] = $juvenil;
		return $this;
	}
	//Fin de getters y setter
	

}
