<?php

namespace Practica\ControladorJuego;
use Practica\EquipoFutbol;
use Practica\Log\Log;

class ControladorJuego{
	public $marcador;

	public function __construct(){
		$this->marcador = array(
			"local" => 0,
			"visitante" => 0
		);
	}

	public function jugar(EquipoFutbol $equipoA, EquipoFutbol $equipoB){
		while($this->marcador["local"] < 5 && $this->marcador["visitante"] < 5){

			if($equipoA->atacar($equipoB)){
				$this->gol("local");
				$this->imprimirMarcador($equipoA, $equipoB);
			}
			
			if($equipoB->atacar($equipoA)){
				$this->gol("visitante");
				$this->imprimirMarcador($equipoA, $equipoB);
			}
		}
	}

	public function gol($index){
		return $this->marcador[$index]++;
	}

	public function imprimirMarcador($equipoA, $equipoB){
		return Log::info("{$equipoB->getNombre()} {$this->marcador["local"]} - {$equipoB->getNombre()} {$this->marcador["visitante"]}");
	}

}
