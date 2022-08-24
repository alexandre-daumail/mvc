<?php
	class BaseController
	{
		private $_httpRequest;
		private $_param;
		private $_config;
		
		public function __construct($httpRequest,$config)
		{
			$this->_httpRequest = $httpRequest;
			$this->_config = $httpRequest;
			$this->_param = array();
			$this->addParam("httprequest",$this->_httpRequest);
			$this->addParam("config",$this->_config);
			$this->bindManager();
		}
		
		protected function view($filename)
		{
			if(file_exists('View/' . $filename . '.php'))
			{
				ob_start();
				extract($this->_param);
				include("View/" . $filename . ".php");
				$content = ob_get_clean();
				include("View/layout.php");
			}
			else
			{
				throw new ViewNotFoundException();	
			}
		}
		
		public function bindManager()
		{
			foreach($this->_httpRequest->getRoute()->manager as $manager)
			{
				$this->$manager = new $manager($this->_config->database);
			}
		}
		
		public function addParam($name,$value)
		{
			$this->_param[$name] = $value;
		}
	}