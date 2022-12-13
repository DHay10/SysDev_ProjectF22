<?php
namespace app\controllers;
class Main extends \app\core\Controller{

    // Home Page
    public function index(){
        $this->view('Main/index');
    }

    // About Us Page
    public function aboutUs() {
        $this->view('Main/aboutUs');
    }

    // FAQ Page
    public function faq() {
        $this->view('Main/faq');
    }

    // Contact Us Form Page
    public function contactUs() {
        if (isset($_POST['action'])) {
            $message = new \app\models\Message();
            $message->fName = $_POST['fName'];
            $message->lName = $_POST['lName'];
            $message->email = $_POST['email'];
            $message->phone = $_POST['phone'];
            $message->subject = $_POST['subject'];
            $message->content = $_POST['content'];

            $message->insert();
            header('location:/Main/contactUs?message=Message has been sent! We will reach out to you via Email');
        } else {
            $this->view('Main/contactUs');
        }
    }
}
