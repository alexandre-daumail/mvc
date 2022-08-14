<?php
class BaseController
{
    private $_httpRequest;
    private $_param;

    public  function __construct($httpRequest)
    {
        $this->_httpRequest = $httpRequest;
    }

    protected function view($filename)
    {
        if (file_exists('View/' . $filename . '.php')) {
            ob_start();
            extract($this->_param);
            include("View/" . $filename . ".php");
            $content = ob_get_clean();
            include("View/layout.php");
        } else {
            throw new ViewNotFoundException();
        }
    }

    public function bindManager()
    {
        # code...
    }

    public function addParam($name,$value)
		{
			$this->_param[$name] = $value;
		}
}
