<?php 
namespace app\models;

class Message extends \app\core\Model {

    // Insert Message
	public function insert(){
		$SQL = "INSERT INTO message(fName, lName, email, phone, subject, content, dateSent) VALUES (:fName, :lName,:email,:phone, :subject, :content,:dateSent)";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['fName'=>$this->fName,
                        'lName'=>$this->lName,
                        'email'=>$this->email,
                        'phone'=>$this->phone,
                        'subject'=>$this->subject,
                        'content'=>$this->content,
                        'dateSent'=>date("y-m-d")]);
	}

    // Get Message by Message ID
    public function getByID($message_id) {
        $SQL = "SELECT * FROM message WHERE message_id=:message_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['message_id' => $message_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Message');
        return $STMT->fetch();
    }

    // Get All Messages
    public function getAll(){
        $SQL = "SELECT * FROM message";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Message');
        return $STMT->fetchAll();
    }

    // Delete Message
    public function delete()
    {
        $SQL = "DELETE FROM message where message_id=:message_id ";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['message_id'=>$this->message_id]);
    }

}
