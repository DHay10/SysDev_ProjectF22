<?php 
namespace app\models;

class Message extends \app\core\Model{

	public function insertMessage(){
		$SQL = "INSERT INTO message(fName, lName, email, phone, subject, content, dateSent) VALUES (:fName, :lName,:email,:phone, :subject, :content,:dateSent)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute([
        'fName'=>$this->fName,
        'lName'=>$this->lName,
        'email'=>$this->email,
        'phone'=>$this->phone,
        'subject'=>$this->subject,
        'content'=>$this->content,
        'dateSent'=>date("y-m-d")
    
    
    ]);
	}

}