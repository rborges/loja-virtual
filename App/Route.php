<?php

namespace App;

use ALFAMIDIA\Init\Bootstrap;

class Route extends Bootstrap {

    /**
     * O método initRoutes é responsável por gerenciar as rotas possíveis dentro
     * do sistema
     */
    protected function initRoutes() {
        $routes['index'] = array('route' => '/', 'controller' => 'IndexController', 'action' => 'index');
        $routes['home'] = ['route' => '/home', 'controller' => 'homeController', 'action' => 'home'];


        $this->setRoutes($routes);
    }

}
