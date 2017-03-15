<?php

namespace App;

class Route {
   
    private $routes;
    
    public function __construct() {
        
    }
    
    public function initRoutes(){
       
        $routes['home'] =  array('route' => '/' , 'controller' => 'indexController', 'action' => 'index');
    }
}
