<?php

namespace App;

use ALFAMIDIA\Init\Bootstrap;

class Route extends Bootstrap {

    public function initRoutes() {

        $routes['index'] = array('route' => '/', 'controller' => 'IndexController', 'action' => 'index');
        $routes['home'] = array('route' => '/home', 'controller' => 'IndexController', 'action' => 'index');

        $this->setRoutes($routes);
    }

}
