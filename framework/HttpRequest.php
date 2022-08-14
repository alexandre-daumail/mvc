<?php

/**
 * Contains useful information from an http request.
 */
class HttpRequest
{
    private $_url;
    private $_method;
    private $_param;
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

    public function getParam()
    {
        return $this->_param;
    }
    
    public function setRoute($route) 
    {
        $this->_route = $route;
    }

    public function bindParam()
    {
        switch ($this->_method) {

            case 'GET':
                # code...
                break;

            case 'DELETE':
                $this->_param[] = preg_match("#" . $this->_route . "#", $this->_url);
                break;

            case 'POST':
                # code...
                break;
            case 'PUT':
                
                foreach ($this->route->getParam() as $param) {
                    $this->_param[] = $param;
                }
                break;
        }
    }
}
