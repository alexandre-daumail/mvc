<?php
	class BaseManager
	{
		private $_table;
		private $_object;
        protected $_bdd;
		
		public function __construct($table,$object,$datasource)
		{
			$this->_table = $table;
			$this->_object = $object;
			$this->_bdd = BDD::getInstance($datasource);
		}
		
		public function getById($id)
		{
			$req = $_bdd->prepare("SELECT * FROM " . $this->_table . " WHERE id=?");
			$req->execute(array($id));
			$req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,$this->_obj);
			return $req->fetch();
		}
		
		public function getAll()
		{
			$req = $_bdd->prepare("SELECT * FROM " . $this->_table);
			$req->execute();
			$req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,$this->_obj);
			return $req->fetchAll();
		}
		
		public function create($obj)
		{
			
		}
		
		public function update($obj)
		{
			
		}
		
		public function delete($obj)
		{
			if(property_exists($obj,"id"))
			{
				$req = $_bdd->prepare("DELETE FROM " . $this->_table . " WHERE id=?");
				return $req->execute(array($obj->id));
			}
			else
			{
				throw new PropertyNotFoundException();	
			}
		}
	}