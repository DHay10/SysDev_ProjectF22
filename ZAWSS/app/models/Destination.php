<?php 
namespace app\models;

class Destination extends \app\core\Model {

    // Insert Destination
    public function insert() {
        $SQL = "INSERT INTO destination(country, city) VALUES(:country, :city)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['country'=>$this->country,
                        'city'=>$this->city]);
    }

    // Get Destination by ID
    public function getByID($destination_id) {
        $SQL = "SELECT * FROM destination WHERE destination_id=:destination_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['destination_id'=>$destination_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Destination');
        return $STMT->fetch();
    }

     // Get Destination by City
     public function getByCity($city) {
        $SQL = "SELECT * FROM destination WHERE city=:city";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['city'=>$city]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Destination');
        return $STMT->fetch();
    }

    // Get All Destinations
    public function getAll() {
        $SQL = "SELECT * FROM destination";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Destination');
        return $STMT->fetchAll();
    }

    // Delete Type by ID
    public function delete($type_id) {
        $SQL = "DELETE FROM type WHERE type_id=:type_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['type_id' => $type_id]);
    }
}