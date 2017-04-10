<?php

namespace App\Model\Home;

use ALFAMIDIA\config\Database;

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

        try {
            $pdo = Database::getDataBase();

            $sql = 'INSERT INTO ' . $this->table . ' (nome, email) VALUES("' . $this->nome . '","' . $this->email . '")';
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
        } catch (Exception $exc) {
            $error = 'Error->' . $exc->getMessage();
            echo "<pre>$error</pre>";
        }
    }

    public function listar() {

        try {
            $pdo = Database::getDataBase();

            $sql = "SELECT * FROM {$this->table}";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
