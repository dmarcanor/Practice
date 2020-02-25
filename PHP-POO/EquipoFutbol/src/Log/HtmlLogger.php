<?php
	namespace Practica\Log;
	
	class HtmlLogger implements Logger{
		public function info($mensaje){
			echo "<p>{$mensaje}</p>";
		}
	}