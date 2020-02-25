<?php
	namespace Practice\Armas\Espadas;
	use Practice\Armas\Arma;

	abstract class Espada implements Arma{
		protected $danio;
		protected $rango;
		protected $resistencia;

		public function __construct(){
			$this->resistencia = 100;
		}

		public function getDanio(){
			return $this->danio;
		}

		public function setDanio($danio){
			$this->danio = $danio;
		}

		public function getRango(){
			return $this->rango;
		}

		public function setRango($rango){
			$this->rango = $rango;
		}

		public function getResistencia(){
			return $this->resistencia;
		}

		public function setResistencia($resistencia){
			$this->resistencia = $resistencia;
		}
	}
