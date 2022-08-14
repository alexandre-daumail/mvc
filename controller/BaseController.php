<?php
class BaseController
{
    private $_httpRequest;
    private $_param;

    public  function __construct($httpRequest)
    {
        $this->_httpRequest = $httpRequest;
    }

    public function view($filename)
    {
        # code...
    }

    public function bindManager()
    {
        # code...
    }

}
