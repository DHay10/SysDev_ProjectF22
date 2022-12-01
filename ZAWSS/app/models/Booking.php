<?php

namespace app\models;

 class Booking extends \app\core\Model
{

  public $client_id;
	public $destination_id;
	public $flight_date;
  public $return_date;
  public $nbAdults;
  public $nbChildren;
  public $nbInfants;
  public $type_id;


  public function insertBooking()
    {
        $SQL = "INSERT INTO booking_info (client_id,destination_id,flight_date,return_date,nbAdults, nbChildren,nbInfants,type_id)
         VALUES
        (:client_id,:destination_id,:flight_date,:return_date,:nbAdults,:nbChildren,:nbInfants,:type_id)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute([
        'client_id' => $this->client_id,
        'destination_id' => $this->destination_id,
        'flight_date' => $this->flight_date,
        'return_date' => $this->return_date,
        'nbAdults' => $this->nbAdults,
        'nbChildren' => $this->nbChildren,
        'nbInfants' => $this->nbInfants,
        'type_id' => $this->type_id
        ]);

    }    
  

    public function getAllDestinations(){
        $sql = "SELECT * FROM destination";
		$STMT = self::$_connection->prepare($sql);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Booking');
		return $STMT->fetchAll();
    }

    public function getAllTypes(){
        $sql = "SELECT * FROM type";
		$STMT = self::$_connection->prepare($sql);
		$STMT->execute();
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Booking');
		return $STMT->fetchAll();
    }


    public function getDestinationID($destination_id){
		$SQL = "SELECT * FROM destination WHERE destination_id=:destination_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['destination_id'=>$destination_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Booking');
		return $STMT->fetch();
	}


  public function getTypeID($type_id){
		$SQL = "SELECT * FROM type WHERE type_id=:type_id";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['type_id'=>$type_id]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Booking');
		return $STMT->fetch();
	}

    public function getAll(){
        $SQL = "SELECT * FROM booking_info";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Booking');
        return $STMT->fetchAll();
    }



   
   

}
