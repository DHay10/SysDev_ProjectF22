<?php
namespace app\controllers;

class Admin extends \app\core\Controller{

	public function index(){
		$booking = new \app\models\Booking();
		$cleint = new \app\models\User();
		$bookings = $booking->getAll();
		$clients = $cleint->getAll();
		$type = new \app\models\Booking();
		$types = $type->getAllTypes();
		$destinations = $booking->getAllDestinations();
		$this->view('Admin/index', ['bookings'=>$bookings, 'types'=>$types, 'destinations'=>$destinations, 'clients'=>$clients]);

	}

	public function login(){
		if(isset($_POST['action'])){
			$admin = new \app\models\Admin();
			$admin = $admin->getAdmin($_POST['username']);
			if(password_verify($_POST['password'], $admin->password_hash)){
				$_SESSION['admin_id'] = $admin->admin_id;
				$_SESSION['username'] = $admin->username;
				header('location:/Admin/index');	
			}else{
				header('location:/Admin/login?error=Invalid credentials');
			}
		}else{
			$this->view('Admin/login');
		}

	}

	public function register(){
		if(isset($_POST['action'])){
			if($_POST['password'] == $_POST['password_conf']){
				$admin = new \app\models\Admin();
				$admin->username = $_POST['username'];
				$admin->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
				$admin->insertAdmin();
				header('location:/Admin/login?message=Registered successfully');
			} else {
				header('location:/User/register?error=Passwords do not match');
			}
		}else{
			$this->view('Admin/register');
		}
	}

	public function viewMessages(){
		$message = new \app\models\Message();
		$messages = $message->getAll();
		$this->view('Admin/viewMessages', $messages);
	}

	public function addTypes(){
		if (isset($_POST['action'])) {
			$newBooking = new \app\models\Booking();
			$type_name = $_POST['type_name'];
			$types = $newBooking->getTypeID($type_name);
			if($types->name == $type_name){
				header('location:/Admin/addTypes?error=Type Already exists.');
			}
			else{
			$newBooking->name = $_POST['type_name'];
			$newBooking->insertType();
			header('location:/Admin/addTypes?message=Added Type successfully.');

			}
		}

		$this->view('Admin/addTypes');
	}

	public function addDestinations(){
		if (isset($_POST['action'])) {
			$newDestination = new \app\models\Booking();
			$country = $_POST['country'];
			$city = $_POST['city'];
			$destinations = $newDestination->getDestinationID($city);
			if($destinations->city == $city){
				header('location:/Admin/addDestinations?error=Destination Already exists.');
			}
			else{            
			$newDestination->country = $_POST['country'];
			$newDestination->city = $_POST['city'];
			$newDestination->insertDestination();
			header('location:/Admin/addDestinations?message=Added Destination successfully.');

			}
		}

		$this->view('Admin/addDestinations');
	}
}