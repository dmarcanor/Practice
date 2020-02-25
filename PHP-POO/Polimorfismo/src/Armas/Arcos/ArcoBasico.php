<?php
	namespace Practice\Armas\Arcos;

	class ArcoBasico extends Arco{
		public function __construct(){
			parent::__construct();
			$this->setRango(50);
			$this->setDanio(15);
		}
	}