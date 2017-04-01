<?php

namespace App\Model\Home;

use ALFAMIDIA\config\database;

class Home {

    protected $table = 'pessoa';
    private $id_pessoa;
    private $nome;
    private $email;

    public function __construct($id_pessoa = null, $nome = null, $email = null) {
        $this->id_pessoa = $id_pessoa;
        $this->nome = $nome;
        $this->email = $email;
    }

    public function __get($propriedade) {

        return $this->$propriedade;
    }

    //intercepta atribuições
    public function __set($propriedade, $valor) {

        $this->$propriedade = $valor;
    }

    public function salvar() {

        $db = database::getDataBase();

        try {

            $sql = "INSERT INTO $this->table (nome, email) VALUES(:none, :email)";

            $stmt = $db->prepare($sql);

            $stmt->bindValue(':nome', $this->nome);
            $stmt->bindValue(':email', $this->email);

            $stmt->execute();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function listar() {
        return [1 => 'joão', 2 => 'maria', 3 => 'josé', 4 => 'Pedro'];
    }

}
