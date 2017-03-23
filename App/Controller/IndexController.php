<?php

namespace App\Controller;

class IndexController {

    public function index() {

        include '../App/View/www/index.php';
    }

    public function Home() {

         include '../App/View/www/home.php';
    }

}
