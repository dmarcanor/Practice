<?php
namespace Magic;

abstract class Model{

	public function __set($attribute, $value){
		return $attribute = $value;
	}

	public function __get($attribute){
		return $attribute;
	}

	public function __isset($attribute){
		return isset($attribute);
	}

	public function __unset($attribute){
		unset($attribute);
	}

}
