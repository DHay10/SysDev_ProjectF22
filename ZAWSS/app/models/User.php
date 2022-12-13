<?php 
namespace app\models;

class User extends \app\core\Model {

	// Insert User
	public function insert(){
		$SQL = "INSERT INTO client(username, password_hash, fName, lName, email, phone) VALUES (:username, :password_hash, :fName, :lName, :email, :phone)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$this->username,
						'password_hash'=>$this->password_hash,
						'fName'=>$this->fName,
						'lName'=>$this->lName,
						'email'=>$this->email,
						'phone'=>$this->phone
						]);
	}

	// Get User by User ID
	public function getByID($client_id){
		$SQL = "SELECT * FROM client WHERE client_id=:client_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['client_id'=>$client_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\User');
		return $STMT->fetch();
	}

	// Get User by Username
	public function getByUsername($username){
		$SQL = "SELECT * FROM client WHERE username=:username";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['username'=>$username]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\User');
		return $STMT->fetch();
	}

	// Get All Users
	public function getAll(){
        $SQL = "SELECT * FROM client";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Booking');
        return $STMT->fetchAll();
    }

	// Update User Profile
	public function updateProfile() {
		$SQL = "UPDATE client SET email=:email, phone=:phone WHERE client_id=:client_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['email'=>$this->email,
						'phone'=>$this->phone,
						'client_id'=>$this->client_id]);
	}

}
