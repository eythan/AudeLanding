<?php

namespace App\Core;

class Router
{
    private array $routes = [];

    public function get(string $path, array $handler): void
    {
        $this->add('GET', $path, $handler);
    }

    public function post(string $path, array $handler): void
    {
        $this->add('POST', $path, $handler);
    }

    private function add(string $method, string $path, array $handler): void
    {
        $this->routes[$method][$path] = $handler;
    }

    public function dispatch(string $uri, string $method): void
    {
        $path = parse_url($uri, PHP_URL_PATH);

        if (!isset($this->routes[$method][$path])) {
            $errorController = new \App\Controller\ErrorController();
            $errorController->notFound();
            return;
        }

        [$controllerClass, $action, $middlewares] = array_pad($this->routes[$method][$path], 3, []);

        foreach ($middlewares as $middleware) {
            $middlewareInstance = new $middleware();
            if (!$middlewareInstance->handle()) {
                exit();
            }
        }

        $controller = new $controllerClass();
        $controller->$action();
    }
}