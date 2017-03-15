<?php

namespace App;

class Route {

    private $routes;

    public function __construct() {
        $this->initRoutes();
        $this->rum($this->getUrl());
    }

    protected function setRoutes(array $routes) {
        $this->routes = $routes;
    }

    public function initRoutes() {

        $routes['home'] = array('route' => '/', 'controller' => 'indexController', 'action' => 'index');

        $this->setRoutes($routes);
    }

    protected function rum($url) {

        walk_array($this->routes, function($route) use($url) {

            if ($url === $route['route']) {

                $class = "App\\Controller\\" . ucfirst($route['controller']);

                $controller = new $class;

                $action = $route['action'];
                $controller->$action();
            }
        });
    }

    protected function getUrl() {

        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

}
