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
        $routes['pessoa_editar'] = ['route' => '/pessoa_editar', 'controller' => 'HomeController', 'action' => 'editar'];


        $this->setRoutes($routes);
    }

}
