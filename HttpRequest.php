<?php

/**
 * Contains useful information from an http request.
 */
class HttpRequest
{
    private $url;
    private $method;
    private $param;

    public function __construct()
    {
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getParam()
    {
        return $this->param;
    }
}
