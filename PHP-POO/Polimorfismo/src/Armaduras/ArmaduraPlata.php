<?php
	namespace Practice\Armaduras;
	
	class ArmaduraPlata implements Armadura{
		public function absorberDanio($danio){
			return $danio/3;
		}
	}