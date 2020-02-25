<?php
	namespace Practice\Armas\Espadas;

	class EspadaBasica extends Espada{
		public function __construct(){
			parent::__construct();
			$this->setRango(10);
			$this->setDanio(30);
		}
	}