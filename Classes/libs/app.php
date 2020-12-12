<?php

namespace Classes\libs;

require_once 'Classes/controllers/ErrorController.php';

use Classes\controllers\ErrorController;

class App extends ErrorController
{
    private $controllers_folder = 'Classes/controllers/';

    function __construct()
    {
        # Validar existe algo a llamar en la URL
        if (isset($_GET) && isset($_GET['url']) && !empty(trim($_GET['url']))) {
            # Quitar espacios en blanco y slashes sobrantes
            $url = trim(rtrim($_GET['url'], '/'));
            # Obtener una lista con los parametros en la URL
            $url_params = explode('/', $url);
            # Load View
            $this->LoadView($url_params);
        } else {
            # Devolver vista inicial (INDEX)
            $this->LoadIndexPage();
        }
    }

    function LoadView($url_params)
    {
        # Comprobar existe controlador
        # Comprobar tiene _
        $comprobar_nombre_controlador = strpos($url_params[0], '_');
        $temp_controller_name = $url_params[0];
        if ($comprobar_nombre_controlador !== false) {
            $temp_controller_name = str_replace('_', ' ', $temp_controller_name);
            $temp_controller_name = ucwords($temp_controller_name);
            $temp_controller_name = str_replace(' ', '', $temp_controller_name);
        }
        $current_controller_name = ucfirst(trim($temp_controller_name));
        $current_controller = $this->controllers_folder.$current_controller_name.'.php';
        if (file_exists($current_controller) && $current_controller_name != 'ErrorController') {
            # Validar existe el metodo
            require_once $current_controller;
            # Instanciar clase de controlador
            $full_class_name = '\Classes\controllers\\'.$current_controller_name;
            $controller_instance = new $full_class_name;
            # Cargar modelo
            $controller_instance->LoadModel($current_controller_name);
            # Validar si se envio metodo por parametro
            if (isset($url_params[1]) && !empty(trim($url_params[1]))) {
                $current_method_name = $url_params[1];
                if (method_exists($controller_instance, $current_method_name)) {
                    $controller_instance->{$current_method_name}();
                } else {
                    $this->Load404Page();
                }
            } else {
                # Render view
                $controller_instance->render();
            }

        } else {
            # Error, el controlador solicitado no existe.
            # Redirigir a 404
            $this->Load404Page();
        }
    }

    function LoadIndexPage()
    {
        require_once $this->controllers_folder.'Index.php';
        # Instanciar clase de controlador
        $full_class_name = '\Classes\controllers\Index';
        $controller_instance = new $full_class_name;
        # Cargar modelo
        $controller_instance->LoadModel('index');
        # Render view
        $controller_instance->render();
    }

    function Load404Page()
    {
        require_once $this->controllers_folder.'ErrorController.php';
        # Instanciar clase de controlador
        $full_class_name = '\Classes\controllers\ErrorController';
        $controller_instance = new ErrorController();
        # Render View
        $controller_instance->Error404();
    }

}
?>