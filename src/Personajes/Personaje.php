<?php
namespace Practica\Personajes;

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

	public function explodeFechaNacimiento(){
		return explode("/", $this->fechaNacimiento);
	}

	public function compararMes(){
		if($this->explodeFechaNacimiento()[1] > getdate()['mon']){
			return "mayor";
		}elseif($this->explodeFechaNacimiento()[1] == getdate()['mon']){
			return "igual";
		}else{
			return "menor";
		}
	}

	public function isDiaMenor(){
		if($this->explodeFechaNacimiento()[0] < getdate()['mday']){
			return true;
		}else{
			return false;
		}
	}

	public function getEdad(){
		$anio = getdate()['year'] - $this->explodeFechaNacimiento()[2];
		
		switch($this->compararMes()){
			case "mayor":
				return  $anio - 1;
				break;
			case "menor":
				return $anio;
				break;
			case "igual":
				if($this->isDiaMenor()){
					return $anio;
					break;
				}else{
					return $anio - 1;
					break;
				}
			default: 
				throw new Exception("Este personaje no tiene fecha de nacimiento establecida", 1);
				break;
		}
	}

}
