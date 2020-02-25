<?php
namespace Magic;

class Person{
	private $name;
	private $age;
	private $id;

	public function __construct($name, $age, $id){
		$this->name = $name;
		$this->age = $age;
		$this->id = $id;
	}

	public function __toString(){
		return "{$this->name} own the id: {$this->id} and is {$this->age} years old";
	}

	public function __invoke($arg){
		return gettype($arg) == "string" ? strtoupper($arg) : $arg;
	}
}