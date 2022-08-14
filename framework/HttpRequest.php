<?php

/**
 * Contains useful information from an http request.
 */
class HttpRequest
{
    private $_url;
    private $_method;
    private $_params;
    private $_route;

    public function __construct()
    {
        $this->_url = $_SERVER['REQUEST_URI'];
        $this->_method = $_SERVER['REQUEST_METHOD'];
    }

    public function getUrl()
    {
        return $this->_url;
    }

    public function getMethod()
    {
        return $this->_method;
    }

    public function getParams()
    {
        return $this->_param;
    }
    
    public function setRoute($route) 
    {
        $this->_route = $route;
    }
}
