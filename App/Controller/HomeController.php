<?php

namespace App\Controller;

use ALFAMIDIA\Controller\Controller;

class HomeController extends Controller {

    public function Home() {

        $this->view->people = ['joão', 'maria', 'josé'];

        $this->render('home');
    }

}
