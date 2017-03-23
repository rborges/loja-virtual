<?php

namespace App\Controller;

class IndexController {
    
    private $view;
    
    public function __construct() {
        $this->view = new \stdClass;
    }

    public function index() {
        $this->view->section = ['header', 'nav', 'footer','container', 'aside'];

        include '../App/View/www/index.php';
    }

    public function Home() {
        
        $this->view->people = ['joão', 'maria', 'josé'];

         include '../App/View/www/home.php';
    }

}
