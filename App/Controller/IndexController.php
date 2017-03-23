<?php

namespace App\Controller;

use ALFAMIDIA\Controller\Controller;

class IndexController extends Controller {

    public function index() {
        $this->view->section = ['header', 'nav', 'footer', 'container', 'aside'];

        $this->render('index');
    }

    public function Home() {

        $this->view->people = ['joão', 'maria', 'josé'];

        $this->render('home');
    }

}
