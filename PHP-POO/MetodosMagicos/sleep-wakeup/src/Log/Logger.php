<?php
namespace Log;

class Logger{
	public static function save($data){
		file_put_contents("../storage/storage.txt", $data);
	}

	public static function get(){
		return file_get_contents("../storage/storage.txt");
	}

}