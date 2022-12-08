<?php
namespace app\models;

class Booking extends \app\core\Model {
    public $client_id;
    public $destination_id;
    public $flight_date;
    public $return_date;
    public $nbAdults;
    public $nbChildren;
    public $nbInfants;
    public $type_id;


    public function insertBooking() {
        $SQL = "INSERT INTO booking_info (client_id,destination_id,flight_date,return_date,nbAdults, nbChildren,nbInfants,type_id,status)
         VALUES
        (:client_id,:destination_id,:flight_date,:return_date,:nbAdults,:nbChildren,:nbInfants,:type_id,:status)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute([
        'client_id' => $this->client_id,
        'destination_id' => $this->destination_id,
        'flight_date' => $this->flight_date,
        'return_date' => $this->return_date,
        'nbAdults' => $this->nbAdults,
        'nbChildren' => $this->nbChildren,
        'nbInfants' => $this->nbInfants,
        'type_id' => $this->type_id,
        'status' => $this->status
        ]);
    }    
  

    public function getAll(){
        $SQL = "SELECT * FROM booking_info";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Booking');
        return $STMT->fetchAll();
    }

    public function getByID(){
        $SQL = "SELECT * FROM booking_info WHERE book_id=:book_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Booking');
        return $STMT->fetch();
    }  
   

}
