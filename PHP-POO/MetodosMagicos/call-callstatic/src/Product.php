<?php

namespace Magic;

class Product{
	private $list;

	public function __construct($name){
		$this->list = array("name" => $name);
	}

	public static function __callStatic($method, $args=[]){
		return new Product($method);
	}

	public function __call($method, $args=[]){
		if($this->isEmpty($args))	throw new Exception("This function must have at least 1 argument");

		$this->list[$method] = $args[0];
		return $this;
	}
	
	public function isEmpty($array){
		if(count($array) > 0) return false;
		else return true;
	}

	public function __get($index){
		return $this->list[$index];
	}
}
