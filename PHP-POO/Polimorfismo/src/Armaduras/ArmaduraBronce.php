<?php
	namespace Practice\Armaduras;

	class ArmaduraBronce implements Armadura{
		public function absorberDanio($danio){
			return $danio/2;
		}
	}