<?php

namespace Classes\libs;

require_once 'Classes/libs/auth.php';

use Classes\libs\Auth;

class Controller
{
    protected $current_view;
    protected $current_model;
    protected $current_auth;
    protected $current_api;
    private $models_folder = 'Classes/Model/';

    function __construct() 
    {
        $this->current_view = new View();
        $this->current_auth = new Auth();
        # Generar Token para formulario
        $this->current_auth->GenerateTokenForm();
        $this->current_view->form_tokenizer = $_SESSION['usr_form_tokn'];
    }

    function LoadModel($model_name)
    {
        $model_name = (trim($model_name));
        $model = $this->models_folder.$model_name.'.php';

        if (file_exists($model)) {
            require_once $model;
            $full_model_name = 'Classes\Model\\'.$model_name;
            $this->current_model = new $full_model_name();
        }
    }
}

?>
