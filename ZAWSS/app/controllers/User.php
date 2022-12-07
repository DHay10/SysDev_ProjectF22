<?php

namespace app\controllers;

class User extends \app\core\Controller {

    public function login() {
        if (isset($_POST['action'])) {
            $user = new \app\models\User();
            $user = $user->getUser($_POST['username']);

            if (password_verify($_POST['password'], $user->password_hash)) {
                $_SESSION['client_id'] = $user->client_id;
                $_SESSION['fName'] = $user->fName;
                $_SESSION['lName'] = $user->lName;
                $_SESSION['email'] = $user->email;
                $_SESSION['phone'] = $user->phone;
                $_SESSION['username'] = $user->username;
                header('location:/Main/index');
            } else {
                header('location:/User/login?error=Invalid credentials');
            }

        } else {
            $this->view('User/login');
        }
    }

    public function logout() {
        session_destroy();
        header('location:/User/login');
    }

    public function register() {
        if (isset($_POST['action'])) {
            if ($_POST['password'] == $_POST['passwordConf']) {
                $user = new \app\models\User();
                $nameUsed = $user->getUser($_POST['username']);
                if (!$nameUsed) {
                    $user->username = $_POST['username'];
                    $user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $user->fName = $_POST['fName'];
                    $user->lName = $_POST['lName'];
                    $user->email = $_POST['email'];
                    $user->phone = $_POST['phone'];
                    $user->insertUser();
                    header('location:/User/login?message=Registered successfully');
                } else {
                    header('location:/User/register?error=Username is already taken');
                }
            }
        } else {
            $this->view('User/register');
        }
    }

    public function profile() {
        $user = new \app\models\User();
		$user = $user->getByID($_SESSION['client_id']);
        if (isset($_POST['action'])) {
            $user->email = $_POST['email'];
			$user->phone = $_POST['phone'];
			$user->updateProfile();
			$_SESSION['email'] = $user->email;
			$_SESSION['phone'] = $user->phone;
			header('location:/User/profile?message=Profile has been Updated!');
        } else {
            $this->view('User/profile');
        }
    }

    public function booking() {
        $booking = new \app\models\Booking();
        //Gets all the destinations country&city and pass them to the view
        $destinations = $booking->getAllDestinations();
        //Gets all the types such as type name and pass them to the view
        $types = $booking->getAllTypes();
        $newBooking = new \app\models\Booking();
        $user = new \app\models\User();

        if (isset($_POST['action'])) {
            if(empty($_SESSION['username'])){
                
                header('location:/User/booking?error=Please login before trying to book a ticket.');

            }
            else{

            
            $username = $_SESSION['username'];
            $user->username = $username;
            $user = $user->getUser($username);
            $user_id = $user->client_id;
            $newBooking->client_id = $user_id;

            $destination = $_POST['destination'];
            $type = $_POST['type'];
            $newBooking->destination_id = $destination;
            $newBooking->flight_date = $_POST['departure_date'];
            $newBooking->return_date = $_POST['return_date'];
            $newBooking->nbAdults = $_POST['nb_adults'];
            $newBooking->nbChildren = $_POST['nb_children'];
            $newBooking->nbInfants = $_POST['nb_infants'];
            $newBooking->type_id = $type;
            $status = "Pending";
            $newBooking->status = $status;
            $newBooking->insertBooking();
            header('location:/User/booking?message=Booking sent sucessfully. You should receive a reply soon');

        }
    }
    $this->view('User/booking', ["destinations"=>$destinations, "types"=>$types]);

    }
    public function viewQuote(){
       $booking = new \app\models\Booking();
        $cleint = new \app\models\User();
        $bookings = $booking->getAll();
        $clients = $cleint->getAll();
        $type = new \app\models\Booking();
        $types = $type->getAllTypes();
        $destinations = $booking->getAllDestinations();
        $this->view('User/viewQuote', ['bookings'=>$bookings, 'types'=>$types, 'destinations'=>$destinations, 'clients'=>$clients]);
 
    }
}
