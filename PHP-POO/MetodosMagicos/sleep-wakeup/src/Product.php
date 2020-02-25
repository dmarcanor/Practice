<?php
namespace Magic;

class Product{
	private $name;
	private $id;

	public function __construct($name, $id){
		$this->name = $name;
		$this->id = $id;
	}

	public function __sleep(){
		return ['id'];
	}

	public function __wakeup(){
		//
	}

}
