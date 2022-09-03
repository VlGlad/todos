<?php

class Router{
    
    private $get = [];
    private $post = [];

    public static function create($file)
    {   
        $router = new static;
        require $file;
        return $router;
    }

    public function get($alias, $uri)
    {
        $this->get[$alias] = $uri;
    }

    public function post($alias, $uri)
    {
        $this->post[$alias] = $uri;
    }

    public function direct()
    {
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        dd($_SERVER);
        $method = 'get';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') $method = 'post';
        if (array_key_exists($uri, $this->$method)){
            $this->callController(...explode('@', $this->$method[$uri]));
        }
    }

    public function callController($controller, $action)
    {
        $controller = new $controller;
        $controller->$action();
    }
}