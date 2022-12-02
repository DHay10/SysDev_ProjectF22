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
            if (isset($_POST['action'])) {
                $message = new \app\models\Message();
                $message->fName = $_POST['fName'];
                $message->lName = $_POST['lName'];
                $message->email = $_POST['email'];
                $message->phone = $_POST['phone'];
                $message->subject = $_POST['subject'];
                $message->content = $_POST['content'];
                $message->insertMessage();
            header('location:/Main/contactUs?message=Message has been sent!');
            } else {
                $this->view('Main/contactUs');
            }
        }
    }
