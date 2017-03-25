<?php

namespace App\Controller;

use ALFAMIDIA\Controller\Controller;

class ContactController extends Controller {

    public function contato() {

        $contact = ['nome' => 'Rodrigo', 'email' => 'rodrigo.oborges@gmail.com', 'telefone' => '51 99292672'];

        $this->view->contato = $contact;

        $this->render('contact');
    }

}
