<?php
	namespace Practice\Armaduras;
	
	class ArmaduraOro implements Armadura{
		public function absorberDanio($danio){
			return $danio/4;
		}
	}