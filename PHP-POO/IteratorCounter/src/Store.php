<?php
namespace IteratorCounter;

class Store implements \IteratorAggregate, \Countable{
	private $name;
	private $products;

	public function __construct($name, $products = []){
		$this->name = $name;
		$this->products = $products;
	}

	public function getName(){
		return $this->name;
	}

	public function getProducts(){
		return $this->products;
	}

	public function setProduct(Product $product){
		$this->products[] = $product;
		return $this;
	}

	public function getIterator(){
		return new \ArrayIterator($this->products);
	}

	public function count(){
		return count($this->products);
	}

}
