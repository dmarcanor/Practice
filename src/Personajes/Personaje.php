<?php
namespace Practica\Personajes;

abstract class Persona{
	protected $nombre;
	protected $apellido;
	protected $nacionalidad;
	protected $altura;
	protected $peso;

	public function __construct($nombre, $apellido, $nacionalidad, $altura, $peso){
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->nacionalidad = $nacionalidad;
		$this->altura = $altura;
		$this->peso = $peso;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
		return $this;
	}

	public function getApellido(){
		return $this->apellido;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
		return $this;
	}

	public function getNacionalidad(){
		return $this->nacionalidad;
	}

	public function setNacionalidad($nacionalidad){
		$this->nacionalidad = $nacionalidad;
		return $this;
	}

	public function getAltura(){
		return $this->altura;
	}

	public function setAltura($altura){
		$this->altura = $altura;
		return $this;
	}

	public function getPeso(){
		return $this->peso;
	}

	public function setPeso($peso){
		$this->peso = $peso;
		return $this;
	}
}
