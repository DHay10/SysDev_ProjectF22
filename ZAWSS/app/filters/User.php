<?php
namespace app\filters;

#[\Attribute]
class User extends \app\core\AccessFilter {
	public function execute(){
		if(!isset($_SESSION['client_id'])) {
			header('location:/User/login?error=You must be logged in to access this location.');
			return true;
		} else {
			return false;
		}
	}
}