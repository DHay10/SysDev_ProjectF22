<?php 
namespace app\models;

class Admin extends \app\core\Model{

	// Get By Username
	public function getByUsername($username) {
		$SQL = "SELECT * FROM admin WHERE username=:username";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$username]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Admin');
		return $STMT->fetch();
	}

	// public function insertAdmin() {
	// 	$SQL = "INSERT INTO admin(username, password_hash) VALUES (:username, :password_hash)";
	// 	$STMT = self::$_connection->prepare($SQL);
	// 	$STMT->execute(['username'=>$this->username,'password_hash'=>$this->password_hash]);
	// }

	public function updateStatus(){
		$SQL = "UPDATE booking_info SET status=:status WHERE book_id=:book_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['status'=>$this->status]);
	}

}
