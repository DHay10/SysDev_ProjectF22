<?php
namespace app\controllers;
class User extends \app\core\Controller {

    // ------- General Control -------

    // User Login
    public function login() {
        if (isset($_POST['action'])) {
            $user = new \app\models\User();
            $user = $user->getByUsername($_POST['username']);

            if (password_verify($_POST['password'], $user->password_hash)) {
                $_SESSION['client_id'] = $user->client_id;
                $_SESSION['fName'] = $user->fName;
                $_SESSION['lName'] = $user->lName;
                $_SESSION['email'] = $user->email;
                $_SESSION['phone'] = $user->phone;
                $_SESSION['username'] = $user->username;
                header('location:/User/profile');
            } else {
                header('location:/User/login?error=Invalid Credentials');
            }

        } else {
            $this->view('User/login');
        }
    }

    // User Logout
    #[\app\filters\User]
    public function logout() {
        session_destroy();
        header('location:/User/login');
    }

    // User Register
    public function register() {
        if (isset($_POST['action'])) {
            if ($_POST['password'] == $_POST['passwordConf']) {
                $user = new \app\models\User();
                $nameUsed = $user->getByUsername($_POST['username']);
                if (!$nameUsed) {
                    $user->username = $_POST['username'];
                    $user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $user->fName = $_POST['fName'];
                    $user->lName = $_POST['lName'];
                    $user->email = $_POST['email'];
                    $user->phone = $_POST['phone'];
                    $user->insert();
                    header('location:/User/login?message=Registered successfully');
                } else {
                    header('location:/User/register?error=Username is already taken');
                }

            }
        } else {
            $this->view('User/register');
        }
    }

    // User Profile
    #[\app\filters\User]
    public function profile() {
        $user = new \app\models\User();
		$user = $user->getByID($_SESSION['client_id']);
        // Edit Info
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

    // ------- Booking Control -------

    // Booking
    #[\app\filters\User]
    public function booking() {
        $destination = new \app\models\Destination();
        $type = new \app\models\Type();
        $destinations = $destination->getAll();
        $types = $type->getAll();
        
        $newBooking = new \app\models\Booking();
        $user = new \app\models\User();

        if (isset($_POST['action'])) {
            // var_dump($_POST['destination']);
            $user->username = $_SESSION['username'];
            $user = $user->getByUsername($_SESSION['username']);
            $newBooking->client_id = $user->client_id;

            $newBooking->destination_id = $_POST['destination'];
            $newBooking->flight_date = $_POST['departure_date'];
            $newBooking->return_date = $_POST['return_date'];
            $newBooking->nbAdults = $_POST['nb_adults'];
            $newBooking->nbChildren = $_POST['nb_children'];
            $newBooking->nbInfants = $_POST['nb_infants'];
            $newBooking->type_id = $_POST['type'];
            $status = "Pending";
            $newBooking->status = $status;

            $newBooking->insert();
            header('location:/User/booking?message=Booking sent sucessfully. You should receive a reply soon');
        }
        $this->view('User/booking', ["destinations"=>$destinations, "types"=>$types]);
    }

    
    #[\app\filters\User]
    public function viewQuote(){
        $booking = new \app\models\Booking();
        $client = new \app\models\User();
        $destination = new \app\models\Destination();

        $bookings = $booking->getBookingsByClientID($_SESSION['client_id']);
        $client = $client->getByID($_SESSION['client_id']);

        $type = new \app\models\Type();
        $types = $type->getAll();
        $destinations = $destination->getAll();

        $this->view('User/viewQuote', ['bookings'=>$bookings, 'types'=>$types, 'destinations'=>$destinations, 'client'=>$client]);
 
    }

}
