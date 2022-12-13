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
				header('location:/Admin/viewBookings');	
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
		$type = new \app\models\Type();
		$destination = new \app\models\Destination();

		$bookings = $booking->getAll($_GET);
		$clients = $client->getAll();
		$types = $type->getAll();
		$destinations = $destination->getAll();

		$this->view('Admin/viewBookings', ['bookings'=>$bookings, 'types'=>$types, 'destinations'=>$destinations, 'clients'=>$clients]);


	}

	// Update Status
	#[\app\filters\Admin]
	public function updateStatus($book_id, $status){
		$booking = new \app\models\Booking();
		$booking->book_id = $book_id;
		$booking->status = $status;
		$booking->updateStatus();
		header('location:/Admin/viewBookings?message=Booking has been Updated Successfully');
	}

	// ------- Message Control -------

	// View Messages
	#[\app\filters\Admin]
	public function viewMessages(){
		$message = new \app\models\Message();
		$messages = $message->getAll();

		if(isset($_POST['action'])){
			$booking = new \app\models\Booking();
		// $booking->getByID($book_id);
		$booking->book_id = $book_id;
		$booking->status = $_POST['status'];
		echo $_POST['status'];
		}


		$this->view('Admin/viewMessages', $messages);
	}

	// Delete Message
	#[\app\filters\Admin]
	public function deleteMessage($message_id){
		$message = new \app\models\Message();
		$message = $message->getByID($message_id);
		$message->delete();
		header('location:/Admin/viewMessages?message=Message had been Deleted Successfully');
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
				header('location:/Admin/addType?message=Type was added successfully.');
			}
		} else {
			$this->view('Admin/addType');
		}
	}

	// ------- Destination Control -------

	// Add Destinations
	#[\app\filters\Admin]
	public function addDestination(){
		if (isset($_POST['action'])) {
			$newDestination = new \app\models\Booking();
			$destinations = $newDestination->getByID($_POST['city']);

			if ($destinations->city == $_POST['city']) {
				header('location:/Admin/addDestination?error=Destination Already exists.');
			} else {            
			$newDestination->country = $_POST['country'];
			$newDestination->city = $_POST['city'];
			$newDestination->insertDestination();
			header('location:/Admin/addDestination?message=Added Destination successfully.');

			}
		}

		$this->view('Admin/addDestination');
	}

}
