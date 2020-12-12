<?php

namespace Classes\Model;

class Conexion {
	// error_reporting(0);
	public $usuario  = "root";
	public $clave    = "";
	public $servidor = "localhost";
	public $bd       = "programa_arriendo";
	public $conexion = "";

	public function Conectar(){
		try {
			$this->conexion = new mysqli($this->servidor, $this->usuario, $this->clave, $this->bd);
			return $this->conexion;
		} catch (Exception $e) {
			return $this->e;
		}
	}
}
    
?>