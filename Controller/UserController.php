<?php
	class UserController extends BaseController
	{
		public function Login()
		{
			$this->view("login");
		}
		
		public function Authenticate($login,$password)
		{
			var_dump($login,$password);
		}
	}