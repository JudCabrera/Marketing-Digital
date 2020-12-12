<?php

namespace Classes\Model;

require_once 'Classes/libs/model.php';
require_once 'Classes/libs/token.php';

use Classes\libs\Model;
use Classes\libs\GenerateToken;

class Index extends Model
{
    private $tokenClass;
    function __construct()
    {
        parent::__construct();
        $this->tokenClass = new GenerateToken();
    }

    public function DoLogin($data)
    {
        $respuesta     = array('status' => 'error', 'mensaje' => 'error', 'redirigir' => '');
        $usuario       = $this->LimpiarString($data['usuario']);
        $clave         = $this->LimpiarString($data['clave']);
        $token         = $this->LimpiarString($data['form_token']);
        $session_token = $this->LimpiarString($_SESSION['usr_form_tokn']);
        if ($token == $session_token) {
            # Token de formulario OK, procesar...
            $estadoOn = 'activo';
            $ComprobarLogin = "SELECT id,nombre,clave FROM usuario WHERE usuario = ? AND estado = ?";
            try {
                $queryComprobarLogin = $this->conexion->prepare($ComprobarLogin);
                $queryComprobarLogin->bind_param('ss', $usuario, $estadoOn);
                $queryComprobarLogin->execute();
                $queryComprobarLogin->bind_result($id_result,$nombre_result,$clave_result);
                $queryComprobarLogin->store_result();
                $contarResultados = $queryComprobarLogin->num_rows();
                if ($contarResultados > 0) {
                    $queryComprobarLogin->fetch();
                    # Comprobar claves
                    if (password_verify($clave, $clave_result)) {
                        $remembered_token = $this->tokenClass->generate(50);
                        $actualizar_token = $this->UpdateRememberToken($remembered_token, $id_result);
                        if ($actualizar_token['status'] == 'ok') {
                            # Todo OK crear variables de sesion y redireccionar
                            $_SESSION['tokenized_user'] = $remembered_token;
                            $respuesta['status']  = 'ok';
                            $respuesta['mensaje'] = 'ok';
                            $respuesta['redirigir'] = 'inicio';
                        } else {
                            # Error al actualizar el token de acceso
                            $respuesta['mensaje'] = $actualizar_token['mensaje'];
                        }
                    } else {
                        $respuesta['mensaje'] = "Datos erróneos, por favor validar.";
                    }
                } else {
                    $respuesta['mensaje'] = "Este usuario no fue encontrado.";
                }
            } catch (Exception $e) {
                $respuesta['mensaje'] = 'Ocurrió un error al procesar el request, por favor contactar a JCV Systemas. '.$e;
            }
        } else {
            # Token de session incorrecto, destruir sesion y redirigir
            $respuesta['mensaje'] = 'Se detectó un problema con tu token, por favor vuelve a iniciar sesión.';
            $respuesta['redirigir'] = 'index';
        }
        return $respuesta;
    }

    public function DoLogout()
    {
        # Destruir variables
        unset($_SESSION['tokenized_user']);
        unset($_SESSION['usr_form_tokn']);
        session_destroy();
        # $_SESSION['usr_form_tokn'] = $this->tokenClass->generate(40);
    }

    public function UpdateRememberToken($token, $id_usuario)
    {
        $respuesta = array('status' => 'error', 'mensaje' => 'error');
        try {
            $UpdateToken = "UPDATE usuario SET remember_token = ? WHERE id = ?";
            $queryUpdateToken = $this->conexion->prepare($UpdateToken);
            $queryUpdateToken->bind_param('ss', $token, $id_usuario);
            if($queryUpdateToken->execute()) {
                $respuesta['status']  = 'ok';
                $respuesta['mensaje'] = 'ok';
            } else {
                $respuesta['mensaje'] = 'No fue posible actualizar el token de acceso, por favor reintentar.';
            }
            $queryUpdateToken->close();
        } catch (Exception $e) {
            $respuesta['mensaje'] = 'Ocurrió un error al procesar el request, por favor contactar a JCV Systemas. '.$e;
        }

        return $respuesta;
    }

}
?>