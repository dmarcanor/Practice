<?php
	namespace Practica\Log;

	class Log{
		private static $logger;

		public static function setLogger(Logger $logger){
			static::$logger = $logger;
		}

		public static function info($mensaje){
			static::$logger->info($mensaje);
		}
	}