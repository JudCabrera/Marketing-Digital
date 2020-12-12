<?php

namespace Classes\controllers;

require_once 'Classes/libs/controller.php';

use Classes\libs\Controller;

class ErrorController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function Error404()
    {
        $this->current_view->RenderView('404');
    }
}


?>