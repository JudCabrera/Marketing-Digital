<?php

namespace Classes\libs;

require_once 'Classes/libs/database.php';
require_once 'Classes/libs/token.php';

use Classes\libs\Database;
use Classes\libs\GenerateToken;

class Auth
{
    public $respuesta = array('status' => '', 'mensaje' => '');
    protected $conexion;
    private $tokenClass;
    private $token_usuario;
    private $id_usuario;
    private $usuario_usuario;
    private $nombre_usuario;
    private $imagen_usuario;
    private $cargo_usuario;
    private $area_usuario;


    function __construct() 
    {
        # Inicializar sesion
        session_start();
        $initilize_database = new Database();
        $this->conexion = $initilize_database->Conectar();
        $this->tokenClass = new GenerateToken();
    }

    public function ValidateCurrentSession()
    {
        if (isset($_SESSION['tokenized_user']) && !empty(trim($_SESSION['tokenized_user']))) {
            # Existe una sesion, retomar los datos (NO OLVIDAR SANITIZAR TOKEN)
            $current_user_token = trim($_SESSION['tokenized_user']);
            $respuesta = $this->GetSessionData($current_user_token);
            if ($respuesta['status'] == 'ok') return true;
        }

        return false;
    }

    public function GetSessionData($token)
    {
        $search_token = "SELECT id,usuario,nombre,cargo,area FROM usuario WHERE remember_token = ?";
        try {
            $query_token = $this->conexion->prepare($search_token);
            $query_token->bind_param('s', $token);
            $query_token->execute();
            $query_token->bind_result($id_result, $usuario_result, $nombre_result, $cargo_result, $area_result);
            $query_token->store_result();
            $count_result = $query_token->num_rows();
            if ($count_result > 0 && $count_result == 1) {
                $query_token->fetch();
                # NO OLVIDAR VALIDAR EL TIEMPO DE EXPIRACION DEL TOKEN
                $this->setId_usuario($id_result);
                $this->setNombre_usuario($nombre_result);
                $this->setUsuario_usuario($usuario_result);
                // $this->setImagen_usuario($imagen);
                $this->setCargo_usuario($cargo_result);
                $this->setArea_usuario($area_result);
                $this->respuesta['status'] = 'ok';
                $this->respuesta['mensaje'] = 'ok';
            }
            $query_token->close();
        } catch (Exception $e) {
            $this->respuesta['status'] = 'error';
            $this->respuesta['mensaje'] = $e;
        }

        return $this->respuesta;

    }

    public function GenerateTokenForm()
    {
        if (!isset($_SESSION['usr_form_tokn']) || empty(trim($_SESSION['usr_form_tokn']))) {
            $tokenLength = 40;
            $token = $this->tokenClass->generate($tokenLength);
            $_SESSION['usr_form_tokn'] = $token;
        }
    }

    /**
     * Get the value of conexion
     */ 
    public function getConexion()
    {
        return $this->conexion;
    }

    /**
     * Set the value of con_auth
     *
     * @return  self
     */ 
    public function setConexion($conexion)
    {
        $this->con_auth = $conexion;

        return $this;
    }

    /**
     * Get the value of token_usuario
     */ 
    public function getToken_usuario()
    {
        return $this->token_usuario;
    }

    /**
     * Set the value of token_usuario
     *
     * @return  self
     */ 
    public function setToken_usuario($token_usuario)
    {
        $this->token_usuario = $token_usuario;

        return $this;
    }

    /**
     * Get the value of id_usuario
     */ 
    public function getId_usuario()
    {
        return $this->id_usuario;
    }

    /**
     * Set the value of id_usuario
     *
     * @return  self
     */ 
    public function setId_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }

    /**
     * Get the value of nombre_usuario
     */ 
    public function getNombre_usuario()
    {
        return $this->nombre_usuario;
    }

    /**
     * Set the value of nombre_usuario
     *
     * @return  self
     */ 
    public function setNombre_usuario($nombre_usuario)
    {
        $this->nombre_usuario = $nombre_usuario;

        return $this;
    }

    /**
     * Get the value of imagen_usuario
     */ 
    public function getImagen_usuario()
    {
        return $this->imagen_usuario;
    }

    /**
     * Set the value of imagen_usuario
     *
     * @return  self
     */ 
    public function setImagen_usuario($imagen_usuario)
    {
        $this->imagen_usuario = $imagen_usuario;

        return $this;
    }

    /**
     * Get the value of cargo_usuario
     */ 
    public function getCargo_usuario()
    {
        return $this->cargo_usuario;
    }

    /**
     * Set the value of cargo_usuario
     *
     * @return  self
     */ 
    public function setCargo_usuario($cargo_usuario)
    {
        $this->cargo_usuario = $cargo_usuario;

        return $this;
    }

    /**
     * Get the value of area_usuario
     */ 
    public function getArea_usuario()
    {
        return $this->area_usuario;
    }

    /**
     * Set the value of area_usuario
     *
     * @return  self
     */ 
    public function setArea_usuario($area_usuario)
    {
        $this->area_usuario = $area_usuario;

        return $this;
    }

    /**
     * Get the value of usuario_usuario
     */ 
    public function getUsuario_usuario()
    {
        return $this->usuario_usuario;
    }

    /**
     * Set the value of usuario_usuario
     *
     * @return  self
     */ 
    public function setUsuario_usuario($usuario_usuario)
    {
        $this->usuario_usuario = $usuario_usuario;

        return $this;
    }
}

?>
