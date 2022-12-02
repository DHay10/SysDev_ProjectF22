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


        $booking2 = new \app\models\Booking();
        $user = new \app\models\User();

        if (isset($_POST['action'])) {
            $username2 = $_SESSION['username'];
            $user->username = $username2;
            $user = $user->getUser($username2);
            $user_id = $user->client_id;
            $booking2->client_id = $user_id;

            $destination = $_POST['destination'];
            $type = $_POST['type'];
            $booking2->destination_id = $destination;
            $booking2->flight_date = $_POST['departure_date'];
            $booking2->return_date = $_POST['return_date'];
            $booking2->nbAdults = $_POST['nb_adults'];
            $booking2->nbChildren = $_POST['nb_children'];
            $booking2->nbInfants = $_POST['nb_infants'];
            $booking2->type_id = $type;

            $booking2->insertBooking();
        }
        $this->view('User/booking', $destinations, $types);
    }
}
