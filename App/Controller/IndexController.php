<?php

namespace App\Controller;

class IndexController {

    private $view;

    public function __construct() {
        $this->view = new \stdClass;
    }

    public function index() {
        $this->view->section = ['header', 'nav', 'footer', 'container', 'aside'];

        $this->render('index');
    }

    public function Home() {

        $this->view->people = ['joão', 'maria', 'josé'];

        $this->render('home');
    }

    public function render($action) {
        include '../App/View/www/' . $action . '.php';
    }

}
