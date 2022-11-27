<?php
    namespace app\controllers;
    class Main extends \app\core\Controller{
        
        public function index(){
            $this->view('Main/index');
        }

        public function aboutUs() {
            $this->view('Main/aboutUs');
        }

        public function faq() {
            $this->view('Main/faq');
        }

        public function contactUs() {

            $message = new \app\models\Message();

            

            if (isset($_POST['action'])) {
                
                $message->fName = $_POST['fName'];
                $message->lName = $_POST['lName'];
                $message->email = $_POST['email'];
                $message->phone = $_POST['phone'];
                $message->content = $_POST['content'];
    
               $message->insertMessage();


            }
            
            $this->view('Main/contactUs');
        }

    }