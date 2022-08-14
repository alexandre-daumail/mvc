<?php
	class BaseManager
	{
		private $_table;
		private $_object;
		
		public function __construct($table,$object,$datasource)
		{
			$this->_table = $table;
			$this->_object = $object;
			$this->_bdd = BDD::getInstance($datasource);
		}
		
		public function getById($id)
		{
			
		}
		
		public function getAll()
		{
			
		}
		
		public function create($obj)
		{
			
		}
		
		public function update($obj)
		{
			
		}
		
		public function delete($obj)
		{
			
		}
	}