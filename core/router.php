<?php

include_once __DIR__ . '/request.php';
include_once __DIR__ . '/route.php';
include_once __DIR__ . '/response.php';

class Router {
    private array $routes = [];

    public function addRoute(Route $route) {
        $this->routes[] = $route;
    }

    public function dispatch(Request $request) {
        foreach($this->routes as $route) {
            if($route->method === $request->method && $route->uri === $request->uri) {
                return $route->execute($request);
            }
        }
        http_response_code(404);
        echo "Not Found";
    }
}
