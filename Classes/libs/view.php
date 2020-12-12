<?php

namespace Classes\libs;

class View
{
    private $views_folder = 'Classes/Views/';

    function __construct() 
    {}

    function RenderView($view)
    {
        require_once $this->views_folder.$view.'.php';
    }
}

?>