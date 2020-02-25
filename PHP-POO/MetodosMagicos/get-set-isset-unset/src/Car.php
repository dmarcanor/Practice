<?php
namespace Magic;

class Car extends Model{
	private $brand;
	private $model;
	private $year;
	private $kilometer;
	private $extraProperties;

	public function __construct($brand, $model, $year, $kilometer){
		$this->brand = $brand;
		$this->model = $model;
		$this->year = $year;
		$this->kilometer = $kilometer;
		$this->extraProperties = array();
	}

	public function issetProperty($prop){
		return isset($this->extraProperties[$prop]);
	}

	public function getExtraPropertie($prop){
		return $this->issetProperty($prop) ?
			$this->extraProperties[$prop] : null;
	}

	public function setExtraPropertie($prop, $value){
		$this->extraProperties[$prop] = $value;
	}

	public function __set($prop, $value){
		$this->setExtraPropertie($prop, $value);
		return $this;
	}

	public function __get($prop){
		return $this->getExtraPropertie($prop);
	}

	public function __isset($prop){
		return $this->issetProperty($prop);
	}

	public function __unset($prop){
		unset($this->extraProperties[$prop]);
	}

}