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

    public function insertType()
    {
        $SQL = "INSERT INTO type
         VALUES(:country,:city)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute([
        'name' => $this->name]);

    }  

    public function insertDestination()
    {
        $SQL = "INSERT INTO destination
         VALUES(:country,:city)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute([
        'country' => $this->country,'city'=>$this->city]);

    }


    public function getDestinationID($city){
		$SQL = "SELECT * FROM destination WHERE city=:city";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['city'=>$city]);
		$STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Booking');
		return $STMT->fetch();
	}


  public function getTypeID($name){
		$SQL = "SELECT * FROM type WHERE name=:name";
		$STMT = self::$_connection->prepare($SQL);
		$STMT->execute(['name'=>$name]);
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
