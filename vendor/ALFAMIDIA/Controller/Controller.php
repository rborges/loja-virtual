<?php

namespace ALFAMIDIA\Controller;

abstract class Controller {

    protected $controller;
    protected $view;
    private $action;

    public function __construct() {
        $this->view = new \stdClass;
    }

    public function render($action, $template = true) {

        $this->action = $action;

        if ($template == true && file_exists('../App/View/template.php')) {
            require_once "../App/View/template.php";
        } else {
            $this->content();
        }
    }

    protected function content() {
        
        include "../App/View/www/$this->action.php";
    }

    protected function setAction($action) {

        $this->action = new $action;
    }

    public function getAction() {
        return $this->action;
    }

}
