<?php
namespace app\controllers;

class Admin extends \app\core\Controller{

	public function index(){
		$booking = new \app\models\Booking();
		$bookings = $booking->getAll();
		$type = new \app\models\Booking();
		$types = $type->getAllTypes();
		$this->view('Admin/index', ['bookings'=>$bookings, 'types'=>$types]);

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
}