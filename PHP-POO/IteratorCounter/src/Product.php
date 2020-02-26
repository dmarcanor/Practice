<?php

namespace IteratorCounter;

class Product{
	private $attribute;

	public function __construct($name){
		$this->attribute = array("name" => $name);
	}

	public function getList(){
		return $this->attribute;
	}

	public function getName(){
		return $this->attribute['name'];
	}
	//End of getters and setters
	
	public function isEmpty($array){
		if(empty($array)) return true;
		
		return false;
	}


	public function attributeString(){
		$string="";
		foreach ($this->attribute as $key => $value){
			$string = $string . "{$key} => {$value} - ";
		}
		return $string;
	}
	//End others methods

	public static function __callStatic($method, $args=[]){
		return new Product($method);
	}

	public function __call($method, $args=[]){
		if($this->isEmpty($args))	throw new \Exception("This function must have at least 1 argument");

		$this->attribute[$method] = $args[0];
		return $this;
	}

	public function __get($index){
		return $this->attribute[$index];
	}

	public function __toString(){
		return $this->attributeString();
	}
	
}
