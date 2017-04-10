<?php

namespace App\Controller;

use ALFAMIDIA\Controller\Controller;
use App\Model\Home\Home;

class HomeController extends Controller {

    public function Home() {
        $listar = new Home();

        $this->view->people = $listar->listar();

        $this->render('home', false);
    }

    public function salvar($nome, $email) {

        $pessoa = new Home;

        $pessoa->nome = $nome;
        $pessoa->email = $email;
        
        
        $pessoa->salvar();
    }

}
