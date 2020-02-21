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
		$this->estadisticas['tactica'] = $this->verificarEstadistica($tactica);
		$this->estadisticas['motivacion'] = $this->verificarEstadistica($motivacion);
		$this->estadisticas['juvenil'] = $this->verificarEstadistica($juvenil);
		return $this;
	}
	//Fin de getters y setter
	public function verificarEstadistica($estadistica){
		if($estadistica > 100) $estadistica = MAX_ESTADISTICAS;
		return $estadistica;
	}


}
