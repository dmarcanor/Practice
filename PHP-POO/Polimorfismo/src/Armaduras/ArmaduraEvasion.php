<?php
	namespace Practice\Armaduras;
	
	class ArmaduraEvasion implements Armadura{
		public function absorberDanio($danio){
			if(rand(0,1)) return 0;
			else return $danio;
		}
	}