<?php

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => [],
        'DELETE' => [],
        'PATCH' => [],
    ];

    public function get($path, $controller)
    {
        $this->routes['GET'][$path] = $controller;
    }

    public function post($path, $controller)
    {
        $this->routes['POST'][$path] = $controller;
    }

    public function delete($path, $controller)
    {
        $this->routes['DELETE'][$path] = $controller;
    }

    public function patch($path, $controller)
    {
        $this->routes['PATCH'][$path] = $controller;
    }

    public function direct($path, $method)
    {
        try {
            $controller = $this->routes[$method][$path];
            $method = strtolower($method);
            return (new $controller())->$method();
        } catch (Exception $e) {
            var_dump($path);
            var_dump($method);
            die($e->getMessage());
        }
    }
}
