<?php

class Request {
    public string $method;
    public string $uri;
    public array $query = [];
    public array $body = [];

    public function __construct() {
        $this->method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $this->uri = $_SERVER['REQUEST_URI'] ?? '/';
        $this->query = $_GET;
        $this->body = $_POST;
    }
}
?>
