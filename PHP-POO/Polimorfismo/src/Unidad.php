<?php
	namespace Practice;
	use Practice\Armaduras\Armadura;
	use Practice\Armas\Arma;

	abstract class Unidad{
		protected $nombre;
		protected $hp;
		protected $caballo;
		protected $armadura;
		protected $arma;

		//Getters y Setters
		public function __construct($nombre){
			$this->nombre = $nombre;
			$this->hp = 40;
			$this->caballo = true;
			$this->armadura = NULL;
			$this->arma = NULL;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getHp(){
			return $this->hp;
		}

		public function setHp($hp){
			$this->hp = $hp;
		}

		public function getArmadura(){
			return $this->armadura;
		}

		public function setArmadura(Armadura $armadura){
			$this->armadura = $armadura;
		}

		public function getArma(){
			return $this->arma;
		}

		public function setArma(Arma $arma){
			$this->arma = $arma;
		}

		public function hasCaballo(){
			return $this->caballo ? true : false;
		}

		public function hasArma(){
			return $this->arma ? true : false;
		}

		//Otras funciones
		public function show($mensaje){
			echo "<p>$mensaje</p>";
		}

		public function mover($direccion){
			if($this->hasCaballo()){
				$this->show("{$this->nombre} cabalga hacia el $direccion");
			}else{
				$this->show("{$this->nombre} camina hacia el $direccion");
			}
		}


		public function recibirDanio($danio){
			if($this->armadura != NULL){
				return $this->getArmadura()->absorberDanio($danio);
			}else{
				return $danio;
			}
		}

		public function morir(){
			$this->show("{$this->nombre} murio");
		}

		public function atacar(){
			if($this->arma != NULL){
				return $this->arma->getDanio();
			}else{
				return 0;
			}
		}
	}
