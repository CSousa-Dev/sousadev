<?php

class Exemplo 
{
    private $method;
    private $body;
    private $client;

    public function __construct()
    {
        $this->method = "";
    }

    public function get()
    {
        $this->method = 'GET';
        return $this;
    }

    public function post()
    {
        $this->method = 'POST';
        return $this;
    }

    public function put()
    {
        $this->method = 'PUT';
        return $this;
    }

    public function delete()
    {
        $this->method = 'DELETE';
        return $this;
    }

    public function body(array $body)
    {
        $this->body = $body;
    }

    public function exec()
    {

    }
}