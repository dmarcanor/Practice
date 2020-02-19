<?php
	namespace Practica\Log;

	class FileLogger implements Logger{
		public function info($mensaje){
			file_put_contents( 
				__DIR__.'/../storage/log.txt', 
				'('.date('Y-m-d H:i:s').') '.$mensaje."\n",
				FILE_APPEND 
			);
		}
	}