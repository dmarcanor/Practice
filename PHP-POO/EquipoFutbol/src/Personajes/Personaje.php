<?php
namespace Practica\Personajes;
use Carbon\Carbon;

abstract class Personaje{
	protected $nombre;
	protected $apellido;
	protected $fechaNacimiento;
	protected $nacionalidad;
	protected $altura;
	protected $peso;

	public function __construct($nombre, $apellido, $fechaNacimiento ,$nacionalidad, $altura, $peso){
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->fechaNacimiento = $fechaNacimiento;
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

	public function getFechaNacimiento(){
		return $this->fechaNacimiento;
	}

	public function setFechaNacimiento($fechaNacimiento){
		$this->fechaNacimiento = $fechaNacimiento;
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
	//Fin de getters y setters

	public function getEdad(){
		return Carbon::createFromFormat("d/m/Y", $this->fechaNacimiento)->age;
	}

	public function verificarEstadistica($estadistica){
		if($estadistica > 100) $estadistica = MAX_ESTADISTICAS;
		
		return $estadistica;
	}

}
