<?php
namespace app\models;

class Booking extends \app\core\Model {



    public function insert() {
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

    public function getAll($params){
        $SQL = "SELECT * FROM booking_info";

        // Date Filter
        if (isset($params['date']) && $params['date']) {
            $SQL .= " where flight_date='$params[date]'";
        }

        // Search Filter
        if(isset($params['search']) && $params['search']){
            $SQL .= "inner join client on client.client_id=booking_info.client_id where fName like '%$params[search]%'";
        }

        // Status Filter
        if(isset($params['status']) && $params['status']){
            $SQL .= " where status = '$params[status]'";
        }

        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute();
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Booking');
        return $STMT->fetchAll();
    }

    public function getByID($book_id){
        $SQL = "SELECT * FROM booking_info WHERE book_id=:book_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['book_id'=>$book_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Booking');
        return $STMT->fetch();
    }  

    public function getBookingsByClientID($client_id){ 
        $SQL = "SELECT * FROM booking_info WHERE client_id=:client_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['client_id'=>$client_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS, 'app\models\Booking');
        return $STMT->fetchAll();
    }

    public function updateStatus() {
        $SQL = "UPDATE booking_info SET status=:status WHERE book_id=:book_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['book_id'=>$this->book_id,
                        'status'=>$this->status]);
    }
   

}
