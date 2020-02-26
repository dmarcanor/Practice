<?php

namespace IteratorCounter;

class Product{
	private $list;

	public function __construct($name){
		$this->list = array("name" => $name);
	}

	public function getList(){
		return $this->list;
	}

	public function getName(){
		return $this->list['name'];
	}
	//End of getters and setters
	
	public function isEmpty($array){
		if(empty($array)) return true;
		
		return false;
	}


	public function listString(){
		$string="";
		foreach ($this->list as $key => $value){
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

		$this->list[$method] = $args[0];
		return $this;
	}

	public function __get($index){
		return $this->list[$index];
	}

	public function __toString(){
		return $this->listString();
	}
	
}
