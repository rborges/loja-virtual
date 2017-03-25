<?php

namespace ALFAMIDIA\Controller;


abstract class Controller {
    
    protected $view;
    private $action;

    public function __construct() {
        $this->view = new \stdClass;
    }
    public function render($action) {
        
        $this->action = $action;
        
        include '../App/View/www/' . $this->action . '.php';
    }
}
