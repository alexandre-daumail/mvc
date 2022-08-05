<?php

class MultipleRouteFoundException extends Exception
{
    public function __construct($message = "More than one route found")
    {
        parent::__construct($message, "0001");
    }
}
