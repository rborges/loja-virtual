<?php

namespace ALFAMIDIA\config;

ini_set('display_errors', 1);

define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'lojavirtual');
define('DB_HOST', 'localhost');

class database {

    public static function getDataBase() {

        $pdo = new \PDO("mysql:host=" . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        //$pdo->setAttribute(PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }

}
