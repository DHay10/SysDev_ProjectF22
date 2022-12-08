<?php
namespace app\controllers;

class Admin extends \app\core\Controller{

	// ------- General Control -------

	// Dashboard
	#[\app\filters\Admin]
	public function index() {
		$this->view('Admin/index');
	}

	// Admin Login
	public function login() {
		if (isset($_POST['action'])) {
			$admin = new \app\models\Admin();
			$admin = $admin->getByUsername($_POST['username']);

			if (password_verify($_POST['password'], $admin->password_hash)) {
				$_SESSION['admin_id'] = $admin->admin_id;
				$_SESSION['username'] = $admin->username;
				header('location:/Admin/index');	
			} else {
				header('location:/Admin/login?error=Invalid Credentials');
			}
			
		}else{
			$this->view('Admin/login');
		}
	}

	// Admin Logout
	public function logout() {
		session_destroy();
        header('location:/Admin/login');
	}

	// ------- Booking Control -------

	// View Bookings
	#[\app\filters\Admin]
	public function viewBookings() {
		$booking = new \app\models\Booking();
		$client = new \app\models\User();
		$type = new \app\models\Booking();

		$bookings = $booking->getAll();
		$clients = $client->getAll();
		$types = $type->getAll();

		$destinations = $booking->getAllDestinations();
		$this->view('Admin/index', ['bookings'=>$bookings, 'types'=>$types, 'destinations'=>$destinations, 'clients'=>$clients]);
	}

	// Update Status
	#[\app\filters\Admin]
	public function updateStatus(){
		// $admin = new \app\models\Admin();
		// $admin->status = $_POST['status'];
		// $booking = new \app\models\Booking();
		// $booking->getByID();
		// $admin->updateStatus();
	}

	// ------- Message Control -------

	// View Messages
	#[\app\filters\Admin]
	public function viewMessages(){
		$message = new \app\models\Message();
		$messages = $message->getAll();
		$this->view('Admin/viewMessages', $messages);
	}

	// Delete Message
	#[\app\filters\Admin]
	public function deleteMessage($message_id){
		$message = new \app\models\Message();
		$messages = $message->delete($message_id);
		$admin = new Admin();
		header('location:/Admin/viewMessages?message=Deleted message sucessfully');
		$admin ->viewMessages();
	}

	// ------- Type Control -------

	// Add Type of Trip
	#[\app\filters\Admin]
	public function addType(){
		if (isset($_POST['action'])) {
			$newType = new \app\models\Type();
			$type_name = $_POST['type_name'];
			if ($newType->getByName($type_name)) {
				header('location:/Admin/addType?error=Type Already exists.');
			} else {
				$newType->name = $_POST['type_name'];
				$newType->insert();
				header('location:/Admin/addTypes?message=Type was added successfully.');
			}
		} else {
			$this->view('Admin/addTypes');
		}
	}

	// ------- Destination Control -------

	// Add Destinations
	#[\app\filters\Admin]
	public function addDestination(){
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
