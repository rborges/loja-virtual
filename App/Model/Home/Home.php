<?php

namespace App\Model\Home;

class Home {

    private $pessoas;

    public function __construct() {
        
    }

    public function __get($propriedade) {


        switch ($this->$propriedade) {
            case 'pessoas':
                return 'Pessoa: ' . $this->$propriedade;
                break;
            default:
                return $this->$propriedade;
                break;
        }
    }

    //intercepta atribuições
    public function __set($propriedade, $valor) {

        $this->$propriedade = $valor;
    }

    public function listar() {
        return [1 => 'joão', 2 => 'maria', 3 => 'josé', 4 => 'Pedro'];
    }

}
