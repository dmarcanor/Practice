<?php
namespace Magic;

class Person extends Model{

	public $attributes;

	public function __construc(){
		$this->attributes = array();
	}

	public function getAttributes(){
		return $this->attributes;
	}

	public function setAttributes(array $attributes){
		$this->attributes = $attributes;
		return $this;
	}

	public function getAttribute($attribute){
		return $this->attributes[$attribute];
	}

	public function setAttribute($attribute, $value){
		$this->attributes[$attribute] = $value;
		return $this;
	}
	//End of getters and setters

	public function __set($attribute, $value){
		$this->setAttribute($attribute, $value);
		return $this;
	}

	public function __get($attribute){
		return $this->hasAttribute($attribute);
	}

	public function __isset($attribute){
		return $this->isSetAttribute($attribute);
	}

	public function __unset($attribute){
		unset($this->attributes[$attribute]);
	}
	//End of magic methods

	public function hasAttribute($attribute){
		if(array_key_exists($attribute, $this->attributes)){
			return $this->attributes[$attribute];
		}
	}

	public function isSetAttribute($attribute){
		return isset($this->attributes[$attribute]);
	}
}
