<?php
//*************************************************************************
//* main controller
//*************************************************************************
namespace app\core;


use app\core\View;

abstract class Controller{
    
    public $route;
    public $views;

    public function __construct($route) {
        $this->route = $route;
        $this->views = new View($route);
        $this->loadModel($route['controller']);

        
    }

    public function loadModel($name) {
        $path = 'app/admin/models/'.ucfirst($name).'.php';
        debug($path);
    }

}
