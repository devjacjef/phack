<?php

class Response {
    public function json($data, int $status = 200) {
        http_response_code($status);
        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public function html(string $content, int $status = 200) {
        http_response_code($status);
        header('Content-Type: text/html');
        echo $content;
    }
}
