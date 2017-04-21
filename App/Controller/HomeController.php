<?php

namespace App\Controller;

use ALFAMIDIA\Controller\Controller;
use App\Model\Home\Home;

class HomeController extends Controller {

    private $model;

    public function __construct() {
        parent::__construct();
        $this->model = new Home();
    }

    public function Home() {
        $listar = new Home();

        $this->view->people = $listar->listar();

        $this->render('home');
    }

    public function salvar($nome, $email) {

        $pessoa = new Home();

        $pessoa->nome = $nome;
        $pessoa->email = $email;


        $pessoa->salvar();
    }

    public function editar() {

        $this->model->id_pessoa = filter_input(INPUT_POST, 'id');
        $this->model->nome = filter_input(INPUT_POST, 'nome');
        $this->model->email = filter_input(INPUT_POST, 'email');

        echo '<pre>';
        print_r($this->model);
        echo '</pre>';
    }

}
