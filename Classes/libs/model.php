<?php

namespace Classes\libs;

class Model
{
    protected $conexion = "";
    function __construct() 
    {
        $this->db = new Database();
        $this->conexion = $this->db->Conectar();
    }

    public function LimpiarString($cadena)
    {
        $no_permitidos = array('<','>');
        $cadena = str_replace($no_permitidos, '', $cadena);
        $cadena = filter_var($cadena, FILTER_SANITIZE_STRING);
	    $cadena = str_replace(chr(0), '', $cadena);
	    return $cadena;
    }

    public function SanitizarTexto($texto)
    {
        $texto = stripslashes($texto);
        $texto = htmlEntities($texto, ENT_QUOTES);
        $texto = str_replace('\\', $texto);
        $texto = str_replace(chr(0), '', $texto);
	    return $texto;
    }
}

?>