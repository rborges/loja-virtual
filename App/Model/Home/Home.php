<?php

namespace App\Model\Home;

class Home {

    private $pessoas;

    public function __construct() {
        
    }

    function __get($propriedade) {
        return $this->$propriedade;
    }

    //intercepta atribuições
    function __set($propriedade, $valor) {

        $this->$propriedade = $valor;
    }

    public function listar() {
        return [];
        //$this->pessoas = [1 => 'joão', 2 => 'maria', 3 => 'josé'];
    }

}
