<?php

class Router {

    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;
        require $file;
        
        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        return $this->callAction(
            ...explode("@", $this->routes[$requestType][$uri])
        );
    }


    protected function callAction($controller, $action)
    {
        $controller = new $controller;

        if(!method_exists($controller, $action))
        {
            throw new Exception("{$action}: method not found on {$controller}.");
        }

        return $controller->$action();
    }
}