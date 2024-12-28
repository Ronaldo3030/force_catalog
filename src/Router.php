<?php

namespace App;

class Router
{
    protected $routes = [];

    private function addRoute($route, $controller, $action, $method)
    {
        $routeRegex = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '([a-zA-Z0-9_-]+)', $route);
        $routeRegex = '#^' . $routeRegex . '$#';

        $this->routes[$method][$routeRegex] = ['controller' => $controller, 'action' => $action];
    }

    public function get($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "GET");
    }

    public function post($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "POST");
    }

    public function dispatch()
    {
        $uri = strtok($_SERVER['REQUEST_URI'], '?');
        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes[$method] as $routeRegex => $action) {
            if (preg_match($routeRegex, $uri, $matches)) {
                array_shift($matches);

                $controller = $action['controller'];
                $method = $action['action'];

                $controller = new $controller();

                return call_user_func_array([$controller, $method], $matches);
            }
        }

        throw new \Exception("No route found for URI: $uri");
    }
}
