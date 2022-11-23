<?php
    namespace app\controllers;
    class User extends \app\core\Controller {
        
        public function login(){
            if(isset($_POST['action'])){
                $user = new \app\models\User();
                $user = $user->getUser($_POST['username']);
                if(password_verify($_POST['password'],$user->password_hash)){
                    $_SESSION['user_id'] = $user->user_id;
                    $_SESSION['username'] = $user->username;
                    // header('location:/User/home');
                }else{
                    header('location:/User/login?error=Invalid credentials');
                }
            }else{
                $this->view('User/login');
            }
        }

        public function register(){
            if(isset($_POST['action'])){
                if($_POST['password'] == $_POST['password_conf']){
                    $user = new \app\models\User();
                    $nameUsed = $user->getUser($_POST['username']);
                    if(!$nameUsed){
                        $user->username = $_POST['username'];
                        $user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                        $user->fname = $_POST['fname'];
                        $user->lname = $_POST['lname'];
                        $user->phone_num = $_POST['phone_num'];
                        $user->email = $_POST['email'];
                        $user->insertUser();
                        header('location:/User/login?message=Registered successfully');
                    }else{
                        header('location:/User/register?error=Username is already taken');  
                    }
                }else{
                    header('location:/User/register?error=Passwords do not match');
                }
            }else{
                $this->view('User/register');
            }
        }
        public function logout() {

        }

        public function booking(){
            if(isset($_POST['action'])){
                
            } else {
                $this->view('User/booking');
            }
        }

    }
