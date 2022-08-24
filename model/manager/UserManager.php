<?php
	class userManager extends BaseManager
	{
		public function __construct($datasource)
		{
			parent::__construct("user","User",$datasource);	
		}
	}