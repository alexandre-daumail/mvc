<?php
	class BDD
	{
		private $_bdd;
        private static $_instance;

        private static function getInstance($datasource)
        {
            if(empty(self::$_instance))
            {
				self::$_instance = new BDD($datasource);
			}
            return self::$_instance->_bdd;
        }
		
		public function __construct($datasource)
		{
			$this->_bdd = new PDO('mysql:dbname=' . $datasource->database->dbname . ';host=' . $datasource->database->host,
								  $datasource->database->user,
								  $datasource->database->password);
		}
		
		public function getBdd()
		{
			return $this->_bdd;
		}
	}