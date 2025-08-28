<?php

class Route
{
    public string $method;
    public string $uri;
    public $callback;

    public function __construct(string $method, string $uri, callable $callback)
    {
        $this->method = strtoupper($method);
        $this->uri = $uri;
        $this->callback = $callback;
    }

    public function execute(...$params) {
        return call_user_func_array($this->callback, $params);
    }
}
