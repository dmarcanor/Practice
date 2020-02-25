<?php
	namespace Practice;
	
	class Soldado extends Unidad{

		public function __construct($nombre){
			parent::__construct($nombre);

		}

		public function recibirDanio($danio){
			$this->hp -= parent::recibirDanio($danio);

			if($this->hp <= 0){
				$this->morir();
			}else{
				$this->show("{$this->nombre} tiene {$this->hp} de vida");
			}
		}

		public function atacar(Unidad $oponente){
			$this->show("{$this->nombre} ataca con espada a {$oponente->getNombre()}");
			$oponente->recibirDanio(parent::atacar());
		}
	}
