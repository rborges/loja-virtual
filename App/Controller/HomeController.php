<?php

namespace App\Controller;

use ALFAMIDIA\Controller\Controller;

class HomeController extends Controller {

    public function Home() {

        $this->view->people = [1 => 'joão', 2 => 'maria', 3 => 'josé'];

        $this->render('home');
    }

}
