<?php 
namespace app\models;

class Type extends \app\core\Model {

    // Insert Type
    public function insert() {
        $SQL = "INSERT INTO type(name) VALUES(:name)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['name'=>$this->name]);
    }

    // Get Type by ID
    public function getByID($type_id) {
        $SQL = "SELECT * FROM type WHERE type_id=:type_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['type_id'=>$type_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Type');
        return $STMT->fetch();
    }

     // Get Type by Name
     public function getByName($type_name) {
        $SQL = "SELECT * FROM type WHERE name=:name";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['name'=>$type_name]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Type');
        return $STMT->fetch();
    }

    // Get All Types
    public function getAll() {
        $SQL = "SELECT * FROM type";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Type');
        return $STMT->fetchAll();
    }

    // Delete Type by ID
    public function delete($type_id) {
        $SQL = "DELETE FROM type WHERE type_id=:type_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['type_id' => $type_id]);
    }
}