<?php

namespace Classes\controllers;

require_once 'config/config.php';
require_once 'Classes/libs/controller.php';

use Classes\libs\Controller;

class Index extends Controller
{
    private $form_tokenizer = "";

    function __construct()
    {
        parent::__construct();
    }

    public function Render()
    {
        # Asi se valida que existe una sesion activa
        # $this->current_view->prueba = $this->ValidateCurrentSession();
        $this->current_view->RenderView('index');
    }

}


?>