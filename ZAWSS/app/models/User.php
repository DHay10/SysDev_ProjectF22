<?php 
namespace app\models;

class User extends \app\core\Model{

	public function getUser($username){
		$SQL = "SELECT * FROM client WHERE username=:username";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$username]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\User');
		return $STMT->fetch();
	}

	public function insertUser(){
		$SQL = "INSERT INTO client(username, password_hash,fName,lName,email,phone) VALUES (:username, :password_hash,:fname,:lname,:email,:phone)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$this->username,'password_hash'=>$this->password_hash,'fname'=>$this->fname,'lname'=>$this->lname,'email'=>$this->email,'phone'=>$this->phone]);
	}

}