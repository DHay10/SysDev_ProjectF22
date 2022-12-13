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
        header('location:/Admin/login?message=Successfully Logged Out');
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
	public function updateStatus($book_id){
		$booking = new \app\models\Booking();
		$booking = $booking->getByID($book_id);
		switch($booking->status) {
			case 'Pending':
				$booking->status = 'Processing';
				break;
			case 'Processing':
				$booking->status = 'Paid';
				break;

				case 'Paid':
					$booking->status = 'Completed';
					break;
			

			
			case 'Completed':
				header('location:/Admin/viewBookings?message=Booking has been Updated Successfully');
		}
		$booking->updateStatus();
		header('location:/Admin/viewBookings?message=Booking has been Updated Successfully');
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
		$message = $message->getByID($message_id);
		$message->delete();
		header('location:/Admin/viewMessages?message=Message had been Deleted Successfully');
	}

	#[\app\filters\Admin]
	public function deleteBooking($book_id){
		$booking = new \app\models\Booking();
		$booking->delete($book_id);
		header('location:/Admin/viewBookings?message=Booking had been Deleted Successfully');
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
			$newDestination = new \app\models\Destination();
			$destinations = $newDestination->getByCity($_POST['city']);

			if ($destinations->city == $_POST['city']) {
				header('location:/Admin/addDestination?error=Destination Already exists.');
			} else {            
			$newDestination->country = $_POST['country'];
			$newDestination->city = $_POST['city'];
			$newDestination->insert();
			header('location:/Admin/addDestination?message=Added Destination successfully.');

			}
		} else {
			$this->view('Admin/addDestination');
		}
	}

}
