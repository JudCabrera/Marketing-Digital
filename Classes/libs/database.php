<?php

namespace Classes\libs;

class Database
{

    private $host;
    private $bd;
    private $usuario;
    private $password;
    private $charset;

    public function __construct()
    {
        $this->host     = constant('DB_HOST');
        $this->bd       = constant('DB_NAME');
        $this->usuario  = constant('DB_USER');
        $this->password = constant('DB_PASS');
        $this->charset  = constant('DB_CHAR');
    }

    public function Conectar(){
        try {
            return new \mysqli($this->host, $this->usuario, $this->password, $this->bd);
        } catch (Exception $e) {
            return $e;
        }
    }
    
}


?>